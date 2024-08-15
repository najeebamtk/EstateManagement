<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Agent;
use App\Models\Property;
use App\Models\ContactAdmin;
use App\Models\ContactAgent;
use App\Models\PImage;

class UserController extends Controller
{
    //
    private  $array=[];
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(session()->has('loginid')){
                $sessionid=session()->get('loginid');
                $this->array['user']=Client::where('id',$sessionid)->first();
            }
            else{
                echo "please login";die();
            }
            return $next($request);
        });
        
    }
    function FnDisplayAbout(){
        return view('about',$this->array);
    }
    function FnDisplayHome(){
        $this->array['images']=PImage::orderBy('created_at','DESC')->get();
        $this->array['propertys']=Property::orderBy('created_at','DESC')->get();

        return view('welcome',$this->array);
    }
    function FnDisplayProperty(){
        $this->array['propertys']=Property::orderBy('created_at','DESC')->get();
        return view('property',$this->array);
    }
    function FnDisplayAgents(){
        $this->array['agents']=Agent::where('status',1)->orderBy('created_at','DESC')->get();
        return view('agents',$this->array);
    }
    function FnDisplayGallery(){
        $this->array['images']=PImage::orderBy('created_at','DESC')->get();
        return view('gallery',$this->array);

    }
   
    function FnGetSingleProperty($propertyid){ 
        $this->array['property'] = Property::join('agents', 'properties.agent_id', '=', 'agents.id')->where('properties.id',$propertyid)
             ->select('properties.*','agents.fname','agents.created_at as date','agents.email','agents.phone','agents.skype','agents.description','agents.image','agents.id as agentid')->first();
        return view('propertysingle',$this->array);
    }
    function FnGetSingleAgent($agentid){
        $this->array['agent']=Agent::where('id',$agentid)->where('status',1)->first();
        $this->array['properties']=Property::where('agent_id',$agentid)->orderBy('created_at','DESC')->get();
        return view('agentsingle',$this->array);
    }
    function FnDisplayContact(){
        return view('contact',$this->array);
    }
    function FnContactAdmin(Request $request){
        $userid=session()->get('loginid');
        $name=$request->name;
        $email=$request->email;
        $subject=$request->subject;
        $message=$request->message;
        $contactobj=new ContactAdmin([
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            'message'=>$message,
            'user_id'=>$userid
        ]);
        $contact=$contactobj->save();
        if($contact){
            $this->array['message']='message sent';
            return view('contact',$this->array);
        }
        else{
            $this->array['message']='error';
            return view('contact',$this->array);
        }
    }
    function FnContactAgent(Request $request,$propertyid){
        $userid=session()->get('loginid');
        $name=$request->name;
        $email=$request->email;
        $comment=$request->comment;
        
        $messageobj=new ContactAgent([
            'name'=>$name,
            'email'=>$email,
            'comment'=>$comment,
            'user_id'=>$userid,
            'agentid'=>$request->agentid
        ]);
        $message=$messageobj->save();
        if($message){
            $this->array['property'] = Property::join('agents', 'properties.agent_id', '=', 'agents.id')->where('properties.id',$propertyid)
            ->select('properties.*','agents.fname','agents.created_at as date','agents.email','agents.phone','agents.skype','agents.description','agents.image','agents.id as agentid')->first();
            $this->array['message']='message sent';
            return view('propertysingle',$this->array);
        }
        else{
            $this->array['property'] = Property::join('agents', 'properties.agent_id', '=', 'agents.id')->where('properties.id',$propertyid)
            ->select('properties.*','agents.fname','agents.created_at as date','agents.email','agents.phone','agents.skype','agents.description','agents.image','agents.id as agentid')->first();
            $this->array['message']='error';
            return view('propertysingle',$this->array);
        }
    }
    function FnUserLogout(){
        session()->forget('loginid');
        session()->flush();
        return redirect('usersignup');
    }
    function FnUserProfile(){
        $userid=session()->get('loginid');
        $this->array['user']=Client::where('id',$userid)->where('user_id',false)->first();
        return view('userprofile',$this->array);

    }
    function FnEditUserProfile(){
         $userid=session()->get('loginid');
        $this->array['user']=Client::where('id',$userid)->first();
        return view('edituserprofile',$this->array);
    }
    function FnUpdateUserProfile(Request $request){
        $userid=session()->get('loginid');
        $new=Client::where('id',$userid)->update([
                'fname'=>$request->firstname,
                'lname'=>$request->lastname,
                'email'=>$request->email,
        ]);
        return view('userprofile',$this->array);
    }
    function FnGetUserPassword(){
        return view('edituserpassword',$this->array);
    }
    function FnUpdateUserPassword(Request $request){
        $userid=session()->get('loginid');
        $current=$request->current_password;
        $new=$request->new_password;
        $confirm=$request->confirm_new;
        $change=Client::where('id',$userid)->update([
            'password'=>$confirm
        ]);
        return redirect('login');
    }

}
