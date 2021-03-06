<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getRole($id){
      $user = $this->show($id);
      if (!empty($user)){
          return $user->role;
      }
      return [];
  	}

    public function getUserByUserName($name){
        return User::where('userName', $name)->get();
    }

    public function getUserByUserEmail($email){
        return User::where('email', $email)->get();
    }

    public function getUserByIsActive($isActive){
        if ($isActive == 1 || $isActive == 0)
            return User::where('isActive', $isActive)->get();

        return response()->json(['error' => 'Argument value not valid']);
   }
   
   public function getActiveUsers(){
   		return User::where('isActive', 1)->get(); 
   }
   
   public function getNonActiveUsers(){
   		return User::where('isActive', 0)->get();  
   }
   
   
}
