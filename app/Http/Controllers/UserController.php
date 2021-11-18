<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $datos['users'] = User::paginate(5);
        return view('user/index', $datos);
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user/')->with('mensaje', 'Usuario eliminada con exito');
    }
}
