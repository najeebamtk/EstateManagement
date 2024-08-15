<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\ContactAgent;
use App\Models\Property;
use App\Models\PImage;


class AgentController extends Controller
{
    private $data = [];
    
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(session()->has('loginid')){
                $sessionid=session()->get('loginid');
                $this->data['agentdata']=Agent::where('id',$sessionid)->first();
            }
            else{
                echo "please login";die();
            }
            return $next($request);
        });
        
    }
    function FnRetrieveAgentDetails(){
        $agentid=session()->get('loginid');
        $this->data['propertys']=Property::where('agent_id',$agentid)->orderBy('created_at','DESC')->get();
        $this->data['contacts']=ContactAgent::where('agentid',$agentid)->orderBy('created_at','DESC')->get();
        $this->data['countl']=Property::where('agent_id',$agentid)->count();
        $this->data['countm']=ContactAgent::where('agentid',$agentid)->count();
            return view('ag/dashboard',$this->data);
    }
    function FnGetAgentData(){
            return view('ag/profile',$this->data);
    }
    function FnUpdateAgent(Request $request){
        $agentid=session()->get('loginid');
        $a_name=$request->name;
        $a_fname=$request->fname;
        $a_email=$request->email;
        $a_phone=$request->phone;
        $a_description=$request->description;
        $a_skype=$request->skype;
        $a_details=$request->details;
        $updateagent=Agent::where('id',$agentid)->update([
            'name'=>$a_name,
            'fname'=>$a_fname,
            'email'=>$a_email,
            'phone'=>$a_phone,
            'description'=>$a_description,
            'skype'=>$a_skype,
            'details'=>$a_details

        ]);
        return redirect('agent');
    }
    function FnDisplayNew(){
        $this->data['editproperty']=new Property();
        return view('ag/new',$this->data);
    }
    function FnAddProperty(Request $request){
        $agentid=session()->get('loginid');
        $name=$request->name;
        $location=$request->location;
        $price=$request->price;
        $address=$request->address;
        $img="newlaravel".time().".".$request->image1->getClientOriginalExtension();
        $request->image1->storeAs('public/profile',$img);
        $img2="newlaravel2".time().".".$request->image2->getClientOriginalExtension();
        $request->image2->storeAs('public/profile',$img2);
        $type=$request->type;
        $description=$request->description;
        $status=$request->status;
        $area=$request->area;
        $beds=$request->beds;
        $baths=$request->baths;
        $garages=$request->garages;
        $amenities=$request->amenities;
        $propertyobj=new Property([
            'name'=>$name,
            'location'=>$location,
            'price'=>$price,
            'address'=>$address,
            'image1'=>$img,
            'image2'=>$img2,
            'type'=>$type,
            'description'=>$description,
            'status'=>$status,
            'area'=>$area,
            'beds'=>$beds,
            'baths'=>$baths,
            'garages'=>$garages,
            'amenities'=>$amenities,
            'agent_id'=>$agentid
        ]);
        $property=$propertyobj->save();
        $this->data['editproperty']=new Property();
        if($property){
            $this->data['message']='property added';
            return view('ag/new',$this->data);
        }
        else{
            $this->data['message']='error';
            return view('ag/new',$this->data);
        }
    }
    function FnRetrievePropertyDetails(){
        $agentid=session()->get('loginid');
        $this->data['getproperty']=Property::where('agent_id',$agentid)->orderBy('created_at','DESC')->paginate(4);
        return view('ag/myproperty',$this->data);
    }
    function FnGetPropertyData($propertyid){
        $this->data['editproperty']=Property::where('id',$propertyid)->first();
        return view('ag/new',$this->data);
    }
    function FnUpdatePropertyData(Request $request,$propertyid){
        $p_name=$request->name;
        $p_location=$request->location;
        $p_price=$request->price;
        $p_address=$request->address;
        $p_img="newlaravel".time().".".$request->image1->getClientOriginalExtension();
        $request->image1->storeAs('public/profile',$p_img);
        $p_img2="newlaravel".time().".".$request->image2->getClientOriginalExtension();
        $request->image2->storeAs('public/profile',$p_img2);
        $p_type=$request->type;
        $p_description=$request->description;
        $p_status=$request->status;
        $p_area=$request->area;
        $p_beds=$request->beds;
        $p_baths=$request->baths;
        $p_garages=$request->garages;
        $p_amenities=$request->amenities;
        $updateproperty=Property::where('id',$propertyid)->update([
            'name'=>$p_name,
            'location'=>$p_location,
            'price'=>$p_price,
            'address'=>$p_address,
            'image1'=>$p_img,
            'image2'=>$p_img2,
            'type'=>$p_type,
            'description'=>$p_description,
            'status'=>$p_status,
            'area'=>$p_area,
            'beds'=>$p_beds,
            'baths'=>$p_baths,
            'garages'=>$p_garages,
            'amenities'=>$p_amenities
        ]);
        return redirect('agent');
    }
    function FnDeleteProperty($propertyid){
        Property::where('id',$propertyid)->delete();
        return redirect('agent/myproperty');
    }
    function FnDeleteComment($commentid){
        ContactAgent::where('id',$commentid)->delete();
        return redirect('agent');
    }
    function FnDisplayImageForm(){
        $agentid=session()->get('loginid');
        $this->data['property']=Property::orderBy('created_at','DESC')->where('agent_id',$agentid)->get();
        return view('ag/submitimage',$this->data);
    }
    function FnAddImage(Request $request){
        $agentid=session()->get('loginid');
        $name=$request->name;
        $img="newlaravel".time().".".$request->image1->getClientOriginalExtension();
        $request->image1->storeAs('public/profile',$img);
        $type=$request->type;
        $property=$request->property;
        $imageobj=new PImage([
            'name'=>$name,
            'type'=>$type,
            'property_id'=>$property,
            'image'=>$img
        ]);
        $obj=$imageobj->save();
        if($obj){
            $this->data['property']=Property::orderBy('created_at','DESC')->where('agent_id',$agentid)->get();
            $this->data['message']='image added';
            return view('ag/submitimage',$this->data);
        }
        else{
            $this->data['property']=Property::orderBy('created_at','DESC')->where('agent_id',$agentid)->get();
            $this->data['message']='error';
            return view('ag/submitimage',$this->data);
        }
        
    }
    function FnDisplayPassword(){
        return view('ag/changepass',$this->data);
    }
    function FnChangePassword(Request $request){
        $agentid=session()->get('loginid');
        $current=$request->current_password;
        $new=$request->new_password;
        $confirm=$request->confirm_newpassword;
        $change=Agent::where('id',$agentid)->update([
            'password'=>$confirm
        ]);
        return redirect('agent');
    }
    function FnLogout(){
        session()->forget('loginid');
        session()->flush();
        return redirect('agentsignup');
    }
}