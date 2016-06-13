<?php

namespace App\Http\Controllers;
use App\Log;
use Request;
use Carbon\Carbon;

use App\Http\Requests;

class LogsController extends Controller
{
    public function index() 
    {
      $logs = Log::order_by('added_on', 'desc')->get();

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


    public function store() 
    {
      $input = Request::all();

      Log::create($input);

      return redirect('logs');
    }

}
