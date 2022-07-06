<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use UnitEnum;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        // return $data;
        return view('users.showuser', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('users.adduser');
    // return  "addd";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email=$request->email;
        $password=$request->password;

        $user = new User();
        $user->name = $name;
        $user->email= $email;
        $user->password = $password;
        $user->save();
        return redirect()->back()->with('success', 'User add sucessfully');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        return view('users.userdetails', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', '=', $id)->first();
        return view('users.edituser', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            $request ->validate([
                'name' => 'required',
                'email'=> 'required|email',
                'password'=>'required',
            ]);
            $id = $request->id;
            $name = $request -> name;
            $email = $request -> email;
            $password = $request -> password;
            User::where('id', '=', $id)->update([
                'name'=>$name,
                'email'=>$email,
                'password'=>$password
            ]);


            return redirect()->back()->with('success', 'User edit sucessfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id','=',$id )->delete();
        return redirect()->back()->with('success', 'User delete sucessfully');
    }
    public function redirectRoute(){
        return redirect()->to('/listuser');
    }
}
