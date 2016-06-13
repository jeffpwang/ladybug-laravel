<?php

namespace App\Http\Controllers;
use App\Log;
use Illuminate\Http\Request;

use App\Http\Requests;

class LogsController extends Controller
{
    public function index() 
    {
      $logs = Log::all();

      return view('logs.index', compact('logs'));
    }



    public function show($id) 
    {
      $log = Log::findOrFail($id);

      return view('logs.show', compact('log'));
    }



    public function create() 
    {
      return view('logs.create');
    }



}
