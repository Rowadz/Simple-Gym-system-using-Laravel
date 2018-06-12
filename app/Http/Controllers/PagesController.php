<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;
use App\customer;
use App\coach;
use App\Reciption;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller{

   public function  index() {

    return View('welcome');
  }
  public function manager_home(){
    $manager_data = manager::find(Auth::user()->id);
    return view('manager_home')->with('manager_data', $manager_data);
  }
  public function customer_home(){
    $cus_data = customer::find(Auth::user()->id);
    return view('customer_home')->with('cus_data', $cus_data);
  }
  public function coach_home(){
    $coach_data = coach::find(Auth::user()->id);
    return view('coach_home')->with('coach_data', $coach_data);
  }
  public function Reciption_home(){
    $Reciption_data = Reciption::find(Auth::user()->id);
    return view('Reciption_home')->with('coach_data', $Reciption_data);
  }
}
