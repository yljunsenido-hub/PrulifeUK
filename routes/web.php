<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentLoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
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

Route::get('/ciq'  , function () {
    return view('Reports_Tab/ciq');
});

Route::get('/qualifiers'  , function () {
    return view('Reports_Tab/qualifiers');
});

Route::get('/agm'  , function () {
    return view('Reports_Tab/agm');
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
Route::get('/uploadNap'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_nap');
});

