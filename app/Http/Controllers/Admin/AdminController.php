<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Repositories\UserRepository;
use App\Helpers\Common;
use Exception;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->middleware('auth');
    }




    public function dashboard()
    {
        if (Auth::user()->role === 'admin' || Auth::user()->role === 'support') {
            $name = Common::splitfullName(Auth::user()->name);

            $data = [
                'page' => 'admin-dasboard',
                'users' => $this->userRepository->users(),
                'payments' => $this->userRepository->payments(),
                "name" => $name,
                'integrations' => $this->userRepository->paymentIntegrations()
            ];
            return view('App.Admin.admin', $data);
        } else {
            return redirect()->back();
        }
    }


    public function userManagement()
    {
        try {

            if (Auth::user()->role === 'admin' || Auth::user()->role === 'support') {
                $data = [
                    'page' => 'usermanagement',
                    'users' => $this->userRepository->users()

                ];
                return view('App.Admin.usermanagement', $data);
            } else {
                return redirect()->back();
            }
        } catch (Exception $error) {
            Log::info("Admin\AdminController@userManagement error message:" . $error->getMessage());
            $message = "You dont have permission view this resource";
            return response()->json(["message" => $message], 500);
        }
    }


    public function createUser(Request $request)
    {
        try {
            $validator = $this->validateUser($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
            }
            $response = $this->userRepository->addUser($request->all());
            return response()->json(["message" => $response, "user" => $this->userRepository], 200);
        } catch (Exception $error) {
            Log::info("Admin\AdminController@createUser error message:" . $error->getMessage());
            $message = "Unable to create User. Try Again";
            return response()->json(["message" => $message], 500);
        }
    }


    public function updateUser(Request $request)
    {
        try {
            $user = $this->userRepository->updateUser($request->id);
            if (!$user) {
                $message = "User not found!";
                return response()->json(["message" => $message], 404);
            }
            return response()->json(["message" => $user, "user" => $this->userRepository], 200);
        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteUser error message:" . $error->getMessage());
            $message = "Unable to delete User. Try Again";
            return response()->json(["message" => $message, "user" => $user], 500);
        }
    }

    public function deleteUser(Request $request)
    {
        try {


            $user = $this->userRepository->removeUser($request->id);
            if (!$user) {
                $message = "User not found!";
                return response()->json(["message" => $message], 404);
            }
            return response()->json(["message" => $user, "user" => $user = $this->userRepository], 200);
        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteUser error message:" . $error->getMessage());
            $message = "Unable to delete User. Try Again";
            return response()->json(["message" => $message, "user" => $user], 500);
        }
    }



    protected function validateUser(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
            'password' => 'required|between:6,255',
            'confirm_password' => 'required|same:password',
            'role' => 'required|string'
        ]);
    }
}
