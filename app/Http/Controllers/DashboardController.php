<?php

namespace App\Http\Controllers;

use App\Models\Datachallenge;
use App\Models\Listdaftar;
use App\Models\Quotes;
use App\Models\Input;
use App\Models\GrupChallenges;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dsbusr(){
        return view('user');
    }
    public function dashgrub(){
        $data = listdaftar::all();
        return view('dashgrub', compact('data'));

    }
    public function ldrboard(){
        return view('leaderboard');
    }
}
