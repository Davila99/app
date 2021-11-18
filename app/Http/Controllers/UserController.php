<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {

    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('turno/')->with('mensaje', 'Turno eliminada con exito');
    }
}
