<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment\PaymentModel;
use App\Models\Integrations\PaymentIntegrationModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function dashboard()
    {
        $integrations = PaymentIntegrationModel::where('user_id', Auth::id())->get()->count();

        $payments = PaymentModel::where('user_id', Auth::id())->get()->count();
        $data = [
            "page" => "dashboard",
            "integrations" => $integrations,
            "payments" => $payments
        ];

        return view('App.dashboard', $data);
    }
}
