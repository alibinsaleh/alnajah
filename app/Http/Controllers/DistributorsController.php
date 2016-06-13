<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DistributorsController extends Controller
{
    public function index(){
      $dists = array(
      '1' => array(
        'name' =>'محمد النفيعي', 
        'salary' => 5000,
        'picture' => 'profile_pic.jpg'
      ),
      '2' => array(
        'name' =>'جابر الأنصاري', 
        'salary' => 2000,
        'picture' => 'profile_pic.jpg'
      ),
      '3' => array(
        'name' =>'عدي بن حاتم', 
        'salary' => 3000,
        'picture' => 'profile_pic.jpg'
      ),
      '4' => array(
        'name' =>'ماجد ابن حلسة', 
        'salary' => 1500,
        'picture' => 'profile_pic.jpg'
      ),
      '5' => array(
        'name' =>'حيدر الشريط', 
        'salary' => 2500,
        'picture' => 'profile_pic.jpg'
      ),
    );
    return view('admin.distributors', ['dists' => $dists]);
    }
}
