<?php

namespace App\Http\Controllers;

use App\Models\Adminprofile;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ContactAdmin;
use App\Models\PImage;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class SampleController extends Controller
{

    function FnViewLogin(){
        if (Auth::check()) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }
    function FnAddUser(Request $request ){
        $finame=$request->fname;
        $laname=$request->lname;
        $email=$request->email;
        $password=$request->password;
        $client=Client::where('email',$email)->first();
        if ($client) {
            return view('usersignup',['message'=>'Email already registered']);
        }
        $clientobj=new Client([
            'fname'=>$finame,
            'lname'=>$laname,
            'email'=>$email,
            'password'=>Hash::make($password),
            'user_id'=>false
        ]);
        $client=$clientobj->save();
        if($client){
            return view('usersignup',['message'=>'customer registered']);
        }
        else{
            return view('usersignup',['message'=>'error']);

        }
    }
    function FnLogin(Request $request){
        $email=$request->username;
        $password=$request->password;
        $client=Client::where('email',$email)->first();
        if ($client && Hash::check($password, $client->password)) {
            $request->session()->put('loginid',$client->id);
            return redirect('home'); 
        }
        else { 
            return view('login', ['message'=>'Invalid username or password']); 
        }

    }
    function FnAddAgent(Request $request){
        $name=$request->name;
        $fname=$request->fullname;
        $email=$request->email;
        $password=$request->password;
        $phone=$request->phone;
        $description=$request->description;
        $img="newlaravel".time().".".$request->image->getClientOriginalExtension();
        $request->image->storeAs('public/profile1',$img);
        $details=$request->details;
        $skype=$request->skype;
        $agentobj=new Agent([
            'name'=>$name,
            'fname'=>$fname,
            'email'=>$email,
            'password'=>$password,
            'phone'=>$phone,
            'description'=>$description,
            'image'=>$img,
            'details'=>$details,
            'skype'=>$skype
        ]);
        $agent=$agentobj->save();
        if($agent){
            return view('agentsignup',['message'=>'agent registered']);
        }
        else{
            return view('agentsignup',['message'=>'error']);
        }
    }

    function FnGetAgent(){
        $agents =Agent::all();
        return view('admin/submitnewagent',['agents'=>$agents]);
    }
    function FnApprove($agentid){
        $agent=Agent::where('id',$agentid)->first();
        if($agent){
            $agent->status=1;
            $agent->save();
            return redirect('admin/newagent');
        }
    }
    function FnDeleteAgent($agentid){
        $agent=Agent::where('id',$agentid)->delete();
        return redirect('admin/newagent');

    }
    function FnAgentLogin(Request $request){
        $email=$request->email1;
        $password=$request->password1;
        $agent=Agent::where('email',$email)->where('password',$password)->where('status',1)->first();
        if(is_null($agent)){
            return view('agentsignup',['message'=>'not exist']);   
        }
        elseif($agent){
        $request->session()->put('loginid',$agent->id);
        return redirect('agent');
        } 
    }





    function FnAdminLogin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $admin=Client::where('email',$email)->where('password',$password)->where('user_id',1)->first();
        if(is_null($admin)){

            return view('adminlogin',['message'=>'incorrect email or password']);
            
        }
        elseif($admin){
            $request->session()->put('loginid',$admin->id);
            $propertys = Property::join('agents', 'properties.agent_id', '=', 'agents.id')->OrderBy('properties.created_at','DESC')->
            select('properties.*','agents.fname','agents.phone')->get();
            $messages=ContactAdmin::OrderBy('created_at','DESC')->get();
            return view('admin/dashboard',['propertys'=>$propertys,'messages'=>$messages]);
        }
    }
    function FnRetrieveAgentsDetails(Request $request){
        if(session()->has('loginid')){
            $sessionid=$request->session()->get('loginid');
            $agents=Agent::where('status',1)->paginate(4);
            return view('admin/myagents',['agents'=>$agents]);
        }
        else{
            echo "please login";
        }
    }
     function FnAdminDashboard(Request $request){
        if(session()->has('loginid')){
            $sessionid=$request->session()->get('loginid');
            $propertys = Property::join('agents', 'properties.agent_id', '=', 'agents.id')->OrderBy('properties.created_at','DESC')->
             select('properties.*','agents.fname','agents.phone')->get();
             $messages=ContactAdmin::OrderBy('created_at','DESC')->get();
            return view('admin/dashboard',['propertys'=>$propertys,'messages'=>$messages]);
        }
        else{
            echo "please login";
        }
     }
    function FnGetAgentData($agentid){
        $agent=Agent::where('id',$agentid)->first();
        return view('admin/editagent',['agent'=>$agent]);
    }
    function FnUpdateAgentDataByAdmin(Request $request,$agentid){
        $name=$request->name;
        $fullname=$request->fullname;
        $email=$request->email;
        $name=$request->name;
        $phone=$request->phone;
        $description=$request->description;
        $details=$request->details;
        $skype=$request->skype;
      Agent::where('id',$agentid)->update([
        'name'=>$name,
        'fname'=>$fullname,
        'email'=>$email,
        'phone'=>$phone,
        'description'=>$description,
        'details'=>$details,
        'skype'=>$skype
      ]);  
      return redirect('admin/myagents');
    }
     function FnDeleteAgentByAdmin($agentid){
        Agent::where('id',$agentid)->delete();
        return redirect('admin/myagents');
     }
     function FnAdminProfile(){
         $profile=Adminprofile::where('id',1)->first();
         return view('admin/profile',['profile'=>$profile]);
     }
     function FnUpdateAdminProfile(Request $request){
        $profile=Adminprofile::where('id',1)->first();
        $new=Adminprofile::where('id',1)->update([
            'name'=>$request->fname,
            'phone'=>$request->phone,
            'message'=>$request->message,   
            'country'=>$request->country,
            'address'=>$request->address
        ]);
        return view('admin/profile',['profile'=>$profile]);
     }
     function FnGetPassword(Request $request){
        if(session()->has('loginid')){
            $sessionid=$request->session()->get('loginid');
            return view('admin/changepassword');
        }
        else{
            echo "please login";
        }
    }
    function FnChangeAdminPassword(Request $request){
        $adminid=session()->get('loginid');
        $current=$request->current_password;
        $new=$request->new_password;
        $confirm=$request->confirm_new;
        $change=Client::where('id',$adminid)->update([
            'password'=>$confirm
        ]);
        return redirect('admin/dashboard');
    }
    function FnAdminLogout(){
        session()->forget('loginid');
        session()->flush();
        return redirect('adminlogin');
    }

    

    //
}
