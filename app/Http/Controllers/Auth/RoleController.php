<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoleController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
	 

    public function index()
    {  	
      foreach (Auth::guard()->user()->role as $role ) {  	
       if($role->name == 'admin'){
            return redirect('Admin');
           
       }elseif($role->name == 'client'){
            return redirect('Client');
           
       }elseif($role->name == 'membre'){
            return redirect('Membre');
           
       }elseif($role->name == 'personnel'){
            return redirect('Personnel');         
       }
      }
    }
}
