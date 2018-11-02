<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajeros;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasajerosCreateRequest;
use App\Http\Requests\PasajerosUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use Auth;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index'); 
    }

}
