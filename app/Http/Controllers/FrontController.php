<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class FrontController extends Controller
{
    //home page dateails
    public function countcandidate(){

        $countcandidate = User::count('id');
        $latestcandidate = User::get();
        
        return view('/home',compact('countcandidate','latestcandidate'));
    }
   
    //show the seach candidate
    public function searchcandidate(Request $requset){
        
        $candidatedetails = User::where('Location',$requset->location)
                                  ->where('catagory',$requset->catagory)
                                  ->get();
         return view('/showsearchcandidate',compact('candidatedetails'));
    }

    //show all candidate
    public function allcandidate(){
          $candidatedetails = User::get();
         return view('/candidate',compact('candidatedetails'));
    }

    //show profile
    public function showprofile(){
        $userId =   \Auth::user()->id;
        $profiledata = User::where('id','=',$userId)
                      -> get();
                     
        return view('profile',compact('profiledata'));

    }

    //edit profile data
    public function editprofileshow(){
        $userId =   \Auth::user()->id;
        $editprodata = User::where('id','=',$userId)
                      -> get();
                     
        return view('editprofile',compact('editprodata'));
    }

    //update profile
    public function updateprofile(Request $requset){
        $userId =   \Auth::user()->id;
         $editprodata = User::find( $userId);
         $editprodata->name     = $requset->name;
         $editprodata->email      = $requset->email;
         $editprodata->NIC      = $requset->nic;
         $editprodata->Location = $requset->location;
         $editprodata->Description   = $requset->Description;
         $editprodata->catagory      = $requset->catagory;
         $editprodata->Mobile_Number = $requset->mobile_number;
         $editprodata->salary_per_hour = $requset->salary_per_hour; 
         $editprodata->update();  
         return redirect('profile');        
    }
    
}
