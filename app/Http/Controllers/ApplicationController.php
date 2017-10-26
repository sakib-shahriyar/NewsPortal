<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\application;

class ApplicationController extends Controller{
		public function applyForUser(Request $request){

            $this->validate($request,[
                'email'=>'required|email|unique:applications',
                'fullname'=>'required',
                'contact'=>'required',
                'address'=>'required',
                'nationality'=>'required'
            ]);


            $email = $request['email'];
			$fullname = $request['fullname'];
			$contact = $request['contact'];
			$address = $request['address'];
			$nationality = $request['nationality'];
			$application = new application();
			$application->email = $email;
			$application->fullname = $fullname;
			$application->contact = $contact;
			$application->address = $address;
			$application->nationality = $nationality;

			$application->save();
			return redirect()->route('success');
		}	
		
}