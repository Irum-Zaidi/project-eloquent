<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // $users = User::all();
        // return $users;

        // return view('users.index', compact('users'));

        // $users = User::all();
        // foreach($users as $user){
        //     echo $user->name . "<br>"; // Assuming 'name' is a field in the User model
        // }

        // $users = User::all();
        // return view("welcome", compact("users"));

        // $users = User::find(2);
        // return $users;


        // $users = User::find(2, ['name','email']);
        // return $users;


        // $users = User::find([2,4], ['name','email']);
        // return $users;



        // $users = User::min('age');
        // return $users;


        // $users = User::max('age');
        // return $users;


        // $users = User::sum('age');
        // return $users;



        // $users = User::where('city', 'Sydney')
        //     ->get();
        // return view("welcome", compact("users"));



        // $users = User::where('city', 'Sydney')
        // ->where('age', '<', 30)
        //     ->get();
        // return view("welcome", compact("users"));


        // $users = User::where(
        //     [

        //         ['city', 'Sydney'],
        //         ['age', '<', 30]
        //     ]
        // )
        //     ->get();
        // return view("welcome", compact("users"));


        // $users = User::where('city', 'Sydney')
        // ->orWhere('age', '<', 30)
        //     ->get();
        // return view("welcome", compact("users"));


        // $users = User::where('city', 'Sydney')
        //     ->orWhere('age', '<', 30)
        //     ->count();
        // return $users;

        // $users = User::whereCity('Sydney')
        //     ->get();
        // return view("welcome", compact("users"));


        // $users = User::whereCity('Sydney')
        //     ->whereAge(28)
        //     ->get();
        // return view("welcome", compact("users"));



        // $users = User::whereCity('Sydney')
        //     ->whereAge(28)
        //     ->select('name', 'email') // Selecting specific columns
        //     ->get();
        // return view("welcome", compact("users"));



        // $users = User::whereCity('Sydney')
        //     ->whereAge(28)
        //     ->select('name', 'email as User Email') // Selecting specific columns
        //     ->get();

        // return $users;

        // $users = User::whereCity('Sydney')
        //     ->whereAge(28)
        //     ->select('name', 'email as User Email') // Selecting specific columns
        //     ->toSql();

        // return $users;

        //         $users = User::whereCity('Sydney')
        //     ->whereAge(28)
        //     ->select('name', 'email as User Email') // Selecting specific columns
        //     ->toRawSql();

        // return $users;

        // $users = User::whereCity('Sydney')
        //     ->whereAge(28)
        //     ->select('name', 'email as User Email') // Selecting specific columns
        //     ->dd();

        // return $users;


        // $users = User::whereCity('Sydney')
        //     ->whereAge(28)
        //     ->select('name', 'email as User Email') // Selecting specific columns
        //     ->ddRawSql();

        // return $users;


        // $users = User::whereCity('Sydney')
        //     ->first();

        // return $users;


        // $users = User::where('city','<>','Sydney')
        //     ->get();

        // return $users;



        // $users = User::whereBetween('age',[20, 22])
        //     ->get();

        // return view("welcome", compact("users"));

        // $users = User::whereNotBetween('age',[20, 22])
        //     ->get();

        // return view("welcome", compact("users"));


        // $users = User::whereIn('city', ['Sydney', 'Melbourne'])
        //     ->get();

        // return view("welcome", compact("users"));


        $users = User::whereNotIn('city', ['Sydney', 'Melbourne'])
            ->get();

        return view("welcome", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
