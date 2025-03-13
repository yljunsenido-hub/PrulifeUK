<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentLoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/samplewave', function () {
    return view('login');
});


// Home Tab

Route::get('/home', function () {
    return view('Home_Tab/home');
})->name('home');




// Leads Cases Tab

Route::get('/submittedCases', function (){
    return view('Leads_Cases_Tab/submitted_cases');
})->name('submitted_cases');

Route::get('/issuedCasesNew', function (){
    return view('Leads_Cases_Tab/issued_casesNew');
})->name('issued_casesNew');

Route::get('/outreqCases', function (){
    return view('Leads_Cases_Tab/outreq_cases');
})->name('outreq_cases');

Route::get('/declinedCases', function (){
    return view('Leads_Cases_Tab/declined_cases');
})->name('declined_cases');




// New Business Tab

Route::get('/submissionApproval', function (){
    return view('New_Business_Tab/submission_Approval');
})->name('submission_Approval');

Route::get('/newBusinessMaintenance', function (){
    return view('New_Business_Tab/new_Business_Maintenance');
})->name('new_Business_Maintenance');

Route::get('/businessIssuedCases', function (){
    return view('New_Business_Tab/business_issued_Cases');
})->name('business_issued_Cases');




// Reports Tab

Route::get('/agentMTD', function () {
    return view('Reports_Tab/agentMTD');
})->name('agentMTD');

Route::get('/agentYTD', function () {
    return view('Reports_Tab/agentYTD');
})->name('agentYTD');

Route::get('/branchHonorRollsMTD'  , function () {
    return view('Reports_Tab/branchHonorRollsMTD');
})->name('branchHonorRollsMTD');

Route::get('/unitHonorRolls'  , function () {
    return view('Reports_Tab/unitHonorRolls');
})->name('unitHonorRolls');

Route::get('/unitSummary'  , function () {
    return view('Reports_Tab/unitSummary');
})->name('unitSummary');

Route::get('/subUnitSummary'  , function () {
    return view('Reports_Tab/subUnitSummary');
})->name('subUnitSummary');

Route::get('/branchSummary'  , function () {
    return view('Reports_Tab/branchSummary');
})->name('branchSummary');

Route::get('/MDRT'  , function () {
    return view('Reports_Tab/MDRT');
})->name('MDRT');

Route::get('/easyReports'  , function () {
    return view('Reports_Tab/easyReports');
})->name('easyReports');

Route::get('/agm'  , function () {
    return view('Reports_Tab/agm');
})->name('agm');

Route::get('/personaltogo'  , function () {
    return view('Reports_Tab/personaltogo');
})->name('personaltogo');

Route::get('/qualifier'  , function () {
    return view('Reports_Tab/Qualifier');
})->name('Qualifier');




// Recruitment Tab

Route::get('/recmaintenance'  , function () {
    return view('Recruitment_Tab/recmaintenance');
})->name('recmaintenance');

Route::get('/recprocess'  , function () {
    return view('Recruitment_Tab/recprocess');
})->name('recprocess');




// Markting Tab

Route::get('/posterTemplates'  , function () {
    return view('Marketing_Tab/poster_templates');
})->name('poster_templates');




// Proposal Bank Tab

Route::get('/proposalSearch'  , function () {
    return view('Proposal_Bank_Tab/proposal_search');
})->name('proposal_search');

Route::get('/proposalList'  , function () {
    return view('Proposal_Bank_Tab/proposal_list');
})->name('proposal_list');



// Appointment Tab

Route::get('/appointments'  , function () {
    return view('Appointment_Tab/appointments');
})->name('appointments');




// BCMS Tab

Route::get('/agentMaintenanceCreate'  , function () {
    return view('BCMS_Maintenance_Tab/agent_maintenance_create');
})->name('agent_maintenance_create');

Route::get('/agentMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/agent_maintenance');
})->name('agent_maintenance');

Route::get('/digitalCardMaintenanceCreate'  , function () {
    return view('BCMS_Maintenance_Tab/digital_card_maintenance_create');
})->name('digital_card_maintenance_create');

Route::get('/digitalCardMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/digital_card_maintenance');
})->name('digital_card_maintenance');

Route::get('/posterTemplateCreate'  , function () {
    return view('BCMS_Maintenance_Tab/poster_template_create');
})->name('poster_template_create');

Route::get('/posterTemplateMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/poster_template_maintenance');
})->name('poster_template_maintenance');

Route::get('/subUnitMaintenanceCreate'  , function () {
    return view('BCMS_Maintenance_Tab/sub_unit_maintenance_create');
})->name('sub_unit_maintenance_create');

Route::get('/subUnitMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/sub_unit_maintenance');
})->name('sub_unit_maintenance');

Route::get('/unitMaintenanceCreate'  , function () {
    return view('BCMS_Maintenance_Tab/unit_maintenance_create');
})->name('unit_maintenance_create');

Route::get('/unitMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/unit_maintenance');
})->name('unit_maintenance');
