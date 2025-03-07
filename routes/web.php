<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentLoginController;

Route::get('/', function () {
    return view('login');
});


Route::get('/home', function () {
    return view('Home_Tab/home');
});

Route::get('/sampleDB', [AgentLoginController::class, 'index']);




// Leads Cases Tab

Route::get('/submittedCases', function (){
    return view('Leads_Cases_Tab/submitted_cases');
});

Route::get('/issuedCases', function (){
    return view('Leads_Cases_Tab/issued_cases');
});

Route::get('/outreqCases', function (){
    return view('Leads_Cases_Tab/outreq_cases');
});

Route::get('/declinedCases', function (){
    return view('Leads_Cases_Tab/declined_cases');
});




// New Business Tab

Route::get('/submissionApproval', function (){
    return view('New_Business_Tab/submission_Approval');
});

Route::get('/newBusinessMaintenance', function (){
    return view('New_Business_Tab/new_Business_Maintenance');
});

Route::get('/issuedCases', function (){
    return view('New_Business_Tab/issued_Cases');
});




// Reports Tab

Route::get('/agentMTD', function () {
    return view('Reports_Tab/agentMTD');
});

Route::get('/agentYTD', function () {
    return view('Reports_Tab/agentYTD');
});

Route::get('/branchHonorRollsMTD'  , function () {
    return view('Reports_Tab/branchHonorRollsMTD');
});

Route::get('/unitHonorRolls'  , function () {
    return view('Reports_Tab/unitHonorRolls');
});

Route::get('/unitSummary'  , function () {
    return view('Reports_Tab/unitSummary');
});

Route::get('/subUnitSummary'  , function () {
    return view('Reports_Tab/subUnitSummary');
});

Route::get('/branchSummary'  , function () {
    return view('Reports_Tab/branchSummary');
});

Route::get('/MDRT'  , function () {
    return view('Reports_Tab/MDRT');
});

Route::get('/easyReports'  , function () {
    return view('Reports_Tab/easyReports');
});

Route::get('/agm'  , function () {
    return view('Reports_Tab/agm');
});

Route::get('/personaltogo'  , function () {
    return view('Reports_Tab/personaltogo');
});

Route::get('/qualifier'  , function () {
    return view('Reports_Tab/Qualifier');
});




// Recruitment Tab

Route::get('/recmaintenance'  , function () {
    return view('Recruitment_Tab/recmaintenance');
});

Route::get('/recprocess'  , function () {
    return view('Recruitment_Tab/recprocess');
});




// Markting Tab

Route::get('/posterTemplates'  , function () {
    return view('Marketing_Tab/poster_templates');
});



// Proposal Bank Tab

Route::get('/proposalSearch'  , function () {
    return view('Proposal_Bank_Tab/proposal_search');
});

Route::get('/proposalList'  , function () {
    return view('Proposal_Bank_Tab/proposal_list');
});



//Branch Operation Utility Tab
Route::get('/updateSubmitPolicyRecord'  , function () {
    return view('Branch_Operations_Utility_Tab/update_submission_policy_record');
});


Route::get('/uploadBatchPhoto'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_batch_photo');
});


Route::get('/uploadIssued'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_issued');
});


Route::get('/uploadNap'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_nap');
});


// BCMS Maintenance Tab
Route::get('/agentMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/Agent_Maintenance_Tab/agent_maintenance');
});


Route::get('/agentCreate'  , function () {
    return view('BCMS_Maintenance_Tab/Agent_Maintenance_Tab/agent_maintenance_create');
});


Route::get('/digitalCardMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/Digital_Card_Maintenance_Tab/digital_card_maintenance');
});


Route::get('/digitalCardAdd'  , function () {
    return view('BCMS_Maintenance_Tab/Digital_Card_Maintenance_Tab/digital_card_maintenance_create');
});


Route::get('/posterTemplateMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/Poster_Template_Maintenance_Tab/poster_template_maintenance');
});


Route::get('/posterTemplateCreate'  , function () {
    return view('BCMS_Maintenance_Tab/Poster_Template_Maintenance_Tab/poster_template_create');
});


Route::get('/subunitMain'  , function () {
    return view('BCMS_Maintenance_Tab/Sub_Unit_Maintenance_Tab/sub_unit_maintenance');
});


Route::get('/subunitCreate'  , function () {
    return view('BCMS_Maintenance_Tab/Sub_Unit_Maintenance_Tab/sub_unit_maintenance_create');
});


Route::get('/unitMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/Unit_Maintenance_Tab/unit_maintenance');
});


Route::get('/unitCreate'  , function () {
    return view('BCMS_Maintenance_Tab/Unit_Maintenance_Tab/unit_maintenance_create');
});