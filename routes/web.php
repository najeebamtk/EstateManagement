<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', function () {
    return view ('login');
});
Route::get('/',[SampleController::class,'FnViewLogin']);
Route::get('usersignup', function () {
    return view ('usersignup');
});
Route::post('usersignup',[SampleController::class,'FnAddUser']);
Route::post('login',[SampleController::class,'FnLogin']);

Route::view('agentsignup','agentsignup');
Route::post('agentsignup',[SampleController::class,'FnAddAgent']);
Route::get('admin/newagent',[SampleController::class,'FnGetAgent']);
Route::get('admin/newagent/approve/{id}', [SampleController::class,'FnApprove']);
Route::get('admin/newagent/delete/{id}', [SampleController::class,'FnDeleteAgent']);
Route::post('agentlogin',[SampleController::class,'FnAgentLogin']);


Route::get('agent',[AgentController::class,'FnRetrieveAgentDetails']);
Route::get('agent/profile',[AgentController::class,'FnGetAgentData']);
Route::post('updateagentdata',[AgentController::class,'FnUpdateAgent']);

Route::get('ag/new',[AgentController::class,'FnDisplayNew']);
Route::post('ag/new',[AgentController::class,'FnAddProperty']);

Route::get('agent/myproperty',[AgentController::class,'FnRetrievePropertyDetails']);
Route::get('agent/editproperty/{id}',[AgentController::class,'FnGetPropertyData']);
Route::post('agent/updateproperty/{id}',[AgentController::class,'FnUpdatePropertyData']);
Route::get('agent/deleteproperty/{id}',[AgentController::class,'FnDeleteProperty']);
Route::get('agent/deletecomment/{id}',[AgentController::class,'FnDeleteComment']);

Route::get('agent/submitimages',[AgentController::class,'FnDisplayImageForm']);
Route::post('agent/submitimage',[AgentController::class,'FnAddImage']);
Route::get('agent/changepassword',[AgentController::class,'FnDisplayPassword']);
Route::post('ag/changepassword',[AgentController::class,'FnChangePassword']);
Route::get('agent/logout',[AgentController::class,'FnLogout']);

Route::get('adminlogin', function () {
    return view('adminlogin');
});
Route::get('admin/dashboard',[SampleController::class,'FnAdminDashboard']);
Route::post('adminlogin',[SampleController::class,'FnAdminLogin']);
Route::get('admin/myagents',[SampleController::class,'FnRetrieveAgentsDetails']);
Route::get('admin/editagent/{id}',[SampleController::class,'FnGetAgentData']);
Route::post('admin/updateagent/{id}',[SampleController::class,'FnUpdateAgentDataByAdmin']);
Route::get('admin/deleteagent/{id}',[SampleController::class,'FnDeleteAgentByAdmin']);
Route::get('admin/profile',[SampleController::class,'FnAdminProfile']);
Route::post('admin/updateprofile',[SampleController::class,'FnUpdateAdminProfile']);
Route::get('admin/changepassword',[SampleController::class,'FnGetPassword']);
Route::post('admin/changecurrentpassword',[SampleController::class,'FnChangeAdminPassword']);
Route::get('admin/logout',[SampleController::class,'FnAdminLogout']);

Route::get('home', [UserController::class,'FnDisplayHome']);
Route::get('about', [UserController::class,'FnDisplayAbout']);
Route::get('property', [UserController::class,'FnDisplayProperty']);
Route::get('agents', [UserController::class,'FnDisplayAgents']);
Route::get('gallery', [UserController::class,'FnDisplayGallery']);
Route::get('contact', [UserController::class,'FnDisplayContact']);
Route::post('contact/postmessage',[UserController::class,'FnContactAdmin']);
Route::get('propertysingle/{id}',[UserController::class,'FnGetSingleProperty']);
Route::post('propertysingle/postmessage/{id}',[UserController::class,'FnContactAgent']);

Route::get('agentsingle/{id}',[UserController::class,'FnGetSingleAgent']);
Route::get('user/logout',[UserController::class,'FnUserLogout']);
Route::get('userprofile',[UserController::class,'FnUserProfile']);
Route::get('edituserprofile',[UserController::class,'FnEditUserProfile']);
Route::post('updateuserprofile',[UserController::class,'FnUpdateUserProfile']);
Route::get('edituserpassword',[UserController::class,'FnGetUserPassword']);
Route::post('updateuserpassword',[UserController::class,'FnUpdateUserPassword']);
























// Route::get('java', function () {
//     return view('java');
// });











