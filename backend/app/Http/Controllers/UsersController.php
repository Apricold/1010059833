<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index(Request $request)
    {
        $users=User::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =bcrypt($request->password);
        $user->save();

        
        return response()->json(["message"=>"El Usuario ha sido creado exitosamente","status"=>200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::find($id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        $user->save();
        return response()->json("El Usuario se ha actualizado exitosamente",201);

    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        $user->delete();
        return response()->json("El Usuario se ha eliminado exitosamente",201);
    }

}
