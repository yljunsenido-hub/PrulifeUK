<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgentLogin;

class AgentLoginController extends Controller
{
    public function index()
    {
        $agents = AgentLogin::all();

        return view('sampleDB', compact('agents'));
    }

    
}
