<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class AgentController extends Controller
{
    //
    public function AgentDashboard()
    {

        return view('agent.agent_dashboard');
    }
    public function AgentLogin(){

        return view('agent.agent_login');

    }
}
