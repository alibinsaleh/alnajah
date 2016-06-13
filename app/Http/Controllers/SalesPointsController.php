<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SalesPointsController extends Controller
{
    public function index(){
      $points = array(
      '1' => array(
        'name' =>'النجوم المشرقية', 
        'sales' => 1000
      ),
      '2' => array(
        'name' =>'النجوم المشرقية', 
        'sales' => 2000
      ),
      '3' => array(
        'name' =>'النجوم المشرقية', 
        'sales' => 1000
      ),
      '4' => array(
        'name' =>'النجوم المشرقية', 
        'sales' => 1000
      ),
      '5' => array(
        'name' =>'النجوم المشرقية', 
        'sales' => 500
      ),
    );
    return view('admin.salespoints', ['points' => $points]);
    }
}
