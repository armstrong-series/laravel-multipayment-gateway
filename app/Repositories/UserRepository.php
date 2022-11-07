<?php
namespace App\Repositories;
use App\Models\User;
use App\Models\Integrations\PaymentIntegrationModel;
use App\Models\Payment\PaymentModel;
use Illuminate\Support\Facades\Auth;

class UserRepository
{

    public function users()
    {
        return User::all()->count();
    }

    public function paymentIntegrations()
    {
        return PaymentIntegrationModel::where('user_id', Auth::id())->get()->count();
    }

    public function payments()
    {
        return PaymentModel::all();
    }

    public function addUser(array $user)
    {
        $user = new User;
        $user->name = $user['name'];
        $user->role= $user['role'];
        $user->email = $user['email'];
        $user->phone = ($user['phone'])? $user['phone']: null;
        $user->password = bcrypt($user['password']);
        $user->uuid = bin2hex(random_bytes(20));
        $user->is_active = true;
        $user->save();
        return "Member added!";
    }

    public function updateUser(int $user)
    {
        $user = User::where('id', $user)->first();
        $user->name = $user['name'];
        $user->role= $user['role'];
        $user->email = $user['email'];
        $user->phone = ($user['phone'])? $user['phone']: null;
        $user->password = bcrypt($user['password']);
        $user->save();
        return "Record updated!";
    }



    public function removeUser(int $user)
    {
        $user = User::where('id', $user)->first();
        $user->delete();
        return "User Deleted Successfully!";
    }
}
