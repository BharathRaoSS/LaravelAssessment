<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materials;
use App\owner;

class MaterialController extends Controller
{
    public function index(){
    	return view('Enter_Material');
    }
    public function post_material(Request $post_data){
    	$errors=$this->validate($post_data,['major_metal'=>'required','due_date'=>'required','description'=>'required','image'=>'required','combinations'=>'required']);
    	if($errors)
			return back();
		else{ 
	    	$baseUrl="http://localhost/LaravelAssessment/public/images/";
	    	$imageName = time().'.'.$post_data->image->getClientOriginalExtension();//Getting the Image Name.
	        $post_data->image->move(public_path('images'), $imageName);//Moving the Image file from /tmp/phpd...to images directory
	        $imageUrl=$baseUrl.$imageName;
	    	$materials=new materials;
	    	$materials->major_metal=$post_data->major_metal;
	    	$materials->due_date=$post_data->due_date;
	    	$materials->description=$post_data->description;
	    	$materials->image_url=$imageUrl;
	    	$combinations=$post_data->combinations;
	    	foreach ($combinations as $combination) {
	    		$materials->combinations.=$combination;
	    	}
	    	$materials->save();
	    	return redirect('display_materials');
    	}
    }
    public function display_materials(){
    	$materials=new materials;
    	$materials_data=$materials::all();
	  	return view('View_Material_List')->with('materials_list',$materials_data);
    }
    public function edit_material($id){
    	$Material_data=materials::find($id);
	   	return view('Edit_Material')->with('Material_data',$Material_data);
    }
    public function edit_material_post(Request $post_data,$id){
    	$errors=$this->validate($post_data,['major_metal'=>'required','due_date'=>'required','description'=>'required','image'=>'required','combinations'=>'required']);

    	if($errors)
			return back();

		else{ 
	    	$baseUrl="http://localhost/LaravelAssessment/public/images/";
	    	$imageName = time().'.'.$post_data->image->getClientOriginalExtension();//Getting the Image Name.
	        $post_data->image->move(public_path('images'), $imageName);//Moving the Image file from /tmp/phpd...to images directory
	        $imageUrl=$baseUrl.$imageName;
	    	$Material_data=materials::find($id);
	    	$Material_data->major_metal=$post_data->major_metal;
	    	$Material_data->due_date=$post_data->due_date;
	    	$Material_data->description=$post_data->description;
	    	$Material_data->image_url=$imageUrl;
	    	$Material_data->combinations="";
	    	$combinations=$post_data->combinations;
	    	foreach ($combinations as $combination) {
	    		$Material_data->combinations.=$combination;
	    	}
	    	$Material_data->save();
	    	return redirect('display_materials');
    	}
    }
    public function delete_material($id){
   	   	$delete=materials::find($id);
    	$delete->delete();
    	return redirect('/display_materials');
    }
    public function owner_signup(){
    	return view('Owner_Signup');
    }
    public function post_owner_signup(Request $post_data){
    	$errors=$this->validate($post_data,['name'=>'required','email'=>'required','password'=>'required','confirm_password'=>'required|same:password','address'=>'required','phone'=>'required','image'=>'required']);
    	
    	if($errors)
    	 return back();

    	else{
			$baseUrl="http://localhost/LaravelAssessment/public/images/";
			$imageName = time().'.'.$post_data->image->getClientOriginalExtension();//Getting the Image Name.
			$post_data->image->move(public_path('images'), $imageName);//Moving the Image file from /tmp/phpd...to imdirectory
			$imageUrl=$baseUrl.$imageName; 
			$owner=new owner;
			$owner->name=$post_data->name;
			$owner->email=$post_data->email;
			$owner->password=$post_data->password;
			$owner->address=$post_data->address;
			$owner->phone_no=$post_data->phone;
			$owner->image_url=$imageUrl;
			$owner->save();
			return redirect('/status');
		}

    }
    public function status(){
    	echo "<h4> You Successfully Created Your Profile </h4><br>";
		echo "<a href='/owner_login'>Click Here to Login";
    }
    public function owner_login(){
    	return view('Owner_Login');
    }
    public function post_owner_login(Request $post_data){
    	$errors=$this->validate($post_data,['email'=>'required','password'=>'required']);

    	if($errors)
    	 return back();

    	else{
    		$owner_data=owner::where('email',$post_data->email)->first();
    		$invalid_password="";
    		if($owner_data)
    		{
	    		if($owner_data->password==$post_data->password) {
	    			return redirect('/enter_material');
	    		}
	    		else
	    			return back()->with('invalid_password','Invalid Password');
	    	}
	    	else
	    		return back()->with('invalid_password',"Invalid Email");
		}
    	
    }
}
