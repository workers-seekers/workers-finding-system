<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use DB;
use Auth;
use Image;

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
    
    //update profile photo
    function profileimageupload(Request $request){

        $this->validate($request, [
            'select_file'  => 'required|image|mimes:jpg,png,gif|max:102400'
        ]);
    
        $image = $request->file('select_file');
    
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        
        Image::make($image)->resize(300,300)->save(public_path('/profileimg/'.  $new_name));
    
        $user=Auth::user();
        $user->profile_pic  =$new_name;
        $user->save();

        return back()->with('path', $new_name);
    }

    //show all user admin
    public function allusershowadmin(){

        $showalldata = User::get();
       
        return view('/adminpenal',compact('showalldata'));
    }

    //make admin
     public function makeadmin($id){
    
      $data = User::find( $id);
      $data->position = 'Admin'; 
      $data->update(); 
      return redirect()->back();

    }

    //make user
     public function makeuser($id){
    
      $data = User::find( $id);
      $data->position = 'user'; 
      $data->update(); 
      return redirect()->back();

    }

    //make block
     public function blockuser($id){
    
      $data = User::find( $id);
      $data->block = 1; 
      $data->update(); 
      return redirect()->back();

    }

    //make unblock
     public function unblockuser($id){
    
      $data = User::find( $id);
      $data->block = 0; 
      $data->update(); 
      return redirect()->back();

    }


}
