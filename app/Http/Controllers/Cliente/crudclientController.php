<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class crudclientController extends Controller
{
    public function index()
    {
      return view('templates.home');
    }
}
