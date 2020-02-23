<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{

        public function master(){
             
              return view('master');

        }   

        public function home(){

            return view('home');

        }

        public function post(){
            
            return view('post');
        }

        
        public function contact(){
            
            return view('contact');
        }
        


        public function contactr(){
            
            return \App\mymodel::all();
        }

        
        public function contactPost(Request $request){
                  $rules=['username'=>'required|min:4', 
                          'email'=> 'required|email'
                ];

                $this->validate($request,$rules) ;

               return redirect()->back()->with('success','registration successfully');
        }





}
 