<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        return view('factura.index');
    }
    public function detalle(){
        return view('factura.detalle');
    }
}
