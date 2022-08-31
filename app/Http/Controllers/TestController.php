<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    


	public function problem2(){

			$number = array('0'=>'z1',
			'1'=>'z10',
			'2'=>'z12',
			'3'=>'z2',
			'4'=>'z3');

			natsort($number);

			echo "<pre>";
        echo "Output is : ";
            echo "<pre>";
			print_r($number);
			echo "</pre>";

	}


	 public function index()
    {
        return view('problem3');
    }
   

//     public function store(Request $request)
//     {
//        $res =  $request->validate([
//           'ip_address' => 'required|ip'
//         ]);

//       if($res){

//         print "TRUE";
//       }

// }


    }
