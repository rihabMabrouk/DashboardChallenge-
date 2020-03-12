<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challenge;
use App\User;
use DB;

class ChallengeController extends Controller
{
  public function ShowChallengeslist(){

        $challenges = Challenge::all();

        return view('user-dashboard', compact('challenges'));

    }



    /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
       public function create()
       {
           //Return view to create employee
           return view('admin-new-challenge');
}


/**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {


       //Persist the employee in the database
       //form data is available in the request object
       $challenge = new Challenge();
       //input method is used to get the value of input with its
       //name specified
       $challenge->title = $request->input('title');
       $challenge->description = $request->input('description');
       $challenge->status = $request->input('status');
       $challenge->deadline = $request->input('deadline');


       $challenge->save(); //persist the data
       return redirect()->route('admin-dashboard')->with('info','Challenge Added Successfully');
   }



   public function destroy($id)
    {
        $challenge = Challenge::find($id);
        $challenge->delete();

        return redirect()->route('admin-dashboard')->with('info','Challenge deleted Successfully');
    }



    /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //Find the challenge
            $challenge = Challenge::find($id);
            $users = DB::table("users")->where('role', 'user')->get();

            //$users = User :: All();
            return view('admin-edit-challenge',['challenge'=> $challenge],compact('users'));
        }
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
          $challenge = Challenge::find($id);

          $challenge->title = $request->input('title');
          $challenge->description = $request->input('description');
          $challenge->status = $request->input('status');
          $challenge->deadline = $request->input('deadline');

          $challenge->save(); //persist the data
          return redirect()->route('admin-dashboard')->with('info','Challenge updated Successfully');
            //Retrieve the employee and update


        }



        public function details($id)
        {
            //Find the challenge
            $challenge = Challenge::find($id);

            return view('user-challenge-detail',['challenge'=> $challenge]);
        }



}
