<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function dashboard()
    {
        $data = ["page" => "dashboard"];

        return view('App.dashboard', $data);
    }
}
