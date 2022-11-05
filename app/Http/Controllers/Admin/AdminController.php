<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Payment\PaymentModel;
use App\Models\Integrations\PaymentIntegrationModel;
use App\Repositories\UserRepository;
use App\Helpers\Common;
use Exception;
use Validator;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function dashboard()
    {
        if (Auth::user()->role === 'admin' || Auth::user()->role === 'support') {
            $users = User::all()->count();

            $integrations = PaymentIntegrationModel::where('user_id', Auth::id())->get()->count();

            $payments = PaymentModel::all();
            $name = Common::splitfullName(Auth::user()->name);

             $data = [
                 'page' => 'admin-dasboard',
                 'users' => $users,
                 'payments' => $payments,
                 "name" => $name,
                 'integrations' => $integrations
             ];
             return view('App.Admin.admin', $data);

         } else {
             return redirect()->back();
         }
    }


    public function userManagement(){
        try {

            if (Auth::user()->role === 'admin' || Auth::user()->role === 'support') {
               $users = User::all();

                $data = [
                    'page' => 'usermanagement',
                    'users' => $users

                ];
                return view('App.Admin.usermanagement', $data);

            } else {
                return redirect()->back();
            }

        }catch (Exception $error) {
            Log::info("Admin\AdminController@userManagement error message:" . $error->getMessage());
            $message = "You dont have permission view this resource";
            return response()->json(["message" => $message], 500);
         }
    }


    public function createUser(Request $request)
    {
        try {
            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }

            }
            $user = new User;
            $user->name = $request->name;
            $user->role= $request->role;
            $user->email = $request->email;
            $user->phone = ($request->phone)? $request->phone: null;
            $user->password = $user->password = bcrypt($request->password);
            $user->uuid = bin2hex(random_bytes(20));
            $user->is_active = true;
            $user->save();
            $message = "Member Added!";
            return response()->json(["message" => $message, "user" => $user], 200);

        } catch (Exception $error) {
            Log::info("Admin\AdminController@createUser error message:" . $error->getMessage());
            $message = "Unable to create User. Try Again";
            return response()->json(["message" => $message, "user" => $user], 500);
        }
    }


    public function updateUser(Request $request)
    {
        try {

            $user = User::where('id', $request->id)->first();
            if(!$user){
                $message = "Unknown User!";
                return response()->json(["message" => $message, "user" => $user], 400);
            }

            $user->name = $request->name;
            $user->role= $request->role;
            $user->email = $request->email;
            $user->phone = ($request->phone)? $request->phone: null;
            $user->password = $user->password = bcrypt($request->password);
            $message = "Record updated successfully!";
            return response()->json(["message" => $message, "user" => $user], 200);
        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteUser error message:" . $error->getMessage());
            $message = "Unable to delete User. Try Again";
            return response()->json(["message" => $message, "user" => $user], 500);
        }
    }

    public function deleteUser(Request $request)
    {
        try {

            $user = User::where('id', $request->id)->first();
            if(!$user){
                $message = "Unknown User!";
                return response()->json(["message" => $message, "user" => $user], 400);
            }

            $user->delete();
            $message = "Deleted Successfully!";
            return response()->json(["message" => $message, "user" => $user], 200);
        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteUser error message:" . $error->getMessage());
            $message = "Unable to delete User. Try Again";
            return response()->json(["message" => $message, "user" => $user], 500);
        }
    }



    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
            'password' => 'required|between:6,255',
            'confirm_password' => 'required|same:password',
            'role' => 'required|string'
        ]);
	}

}
