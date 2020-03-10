<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challenge;

class ChallengeController extends Controller
{
  public function ShowChallengeslist(){

        $challenges = Challenge::all();

        return view('dashboard', compact('challenges'));

    }


}
