<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Clients::all();
        return view('cliente.index', compact('cliente'));
    }
    public function detalle($id){
        
        $cliente = Clients::find($id);

        return view('cliente.detalle', compact('cliente'));
    }
}
