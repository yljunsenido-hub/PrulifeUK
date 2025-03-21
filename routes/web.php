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

Route::get('/branchHonorRollsYTD'  , function () {
    return view('Reports_Tab/branchHonorRollsYTD');
})->name('branchHonorRollsYTD');

Route::get('/unitHonorRolls'  , function () {
    return view('Reports_Tab/unitHonorRolls');
})->name('unitHonorRolls');

Route::get('/unitHonorRollsYTD'  , function () {
    return view('Reports_Tab/unitHonorRollsYTD');
})->name('unitHonorRollsYTD');

Route::get('/unitSummary'  , function () {
    return view('Reports_Tab/unitSummary');
})->name('unitSummary');

Route::get('/unitSummaryYTD'  , function () {
    return view('Reports_Tab/unitSummaryYTD');
})->name('unitSummaryYTD');

Route::get('/subUnitSummary'  , function () {
    return view('Reports_Tab/subUnitSummary');
})->name('subUnitSummary');

Route::get('/subUnitSummaryYTD'  , function () {
    return view('Reports_Tab/subUnitSummaryYTD');
})->name('subUnitSummaryYTD');

Route::get('/branchSummary'  , function () {
    return view('Reports_Tab/branchSummary');
})->name('branchSummary');

Route::get('/MDRT'  , function () {
    return view('Reports_Tab/MDRT');
})->name('MDRT');

Route::get('/MDRTpersonal'  , function () {
    return view('Reports_Tab/MDRT_personal');
})->name('MDRT_personal');

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

Route::get('/createRecruitment'  , function () {
    return view('Recruitment_Tab/create_recruitment_rec');
})->name('createRecruitment');




// Markting Tab

Route::get('/posterTemplates'  , function () {
    return view('Marketing_Tab/poster_templates');
})->name('poster_templates');

Route::get('/posterTemplates/featuredPosters'  , function () {
    return view('Marketing_Tab/marketing_featured_poster');
})->name('marketing_featured_poster');

Route::get('/posterTemplates/adminPosters'  , function () {
    return view('Marketing_Tab/marketing_admin_poster');
})->name('marketing_admin_poster');




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

Route::get('/scheduledTasks'  , function () {
    return view('BCMS_Maintenance_Tab/scheduled_tasks');
})->name('scheduled_tasks');

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

Route::get('/topPosterMaintenance'  , function () {
    return view('BCMS_Maintenance_Tab/top_poster_maintenance');
})->name('top_poster_maintenance');

Route::get('/topPosterMaintenanceCreate'  , function () {
    return view('BCMS_Maintenance_Tab/top_poster_maintenace_create');
})->name('top_poster_maintenance_create');


// Branch Operations Utility Tab

Route::get('/updateSubmissionPolicyRecord'  , function () {
    return view('Branch_Operations_Utility_Tab/update_submission_policy_record');
})->name('update_submission_policy_record');

Route::get('/uploadBatchPhoto'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_batch_photo');
})->name('upload_batch_photo');

Route::get('/uploadDueList'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_due_list');
})->name('upload_due_list');

Route::get('/uploadIssued'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_issued');
})->name('upload_issued');

Route::get('/uploadNap'  , function () {
    return view('Branch_Operations_Utility_Tab/upload_nap');
})->name('upload_nap');




// Database Migrations

Route::get('customer/import'  , [App\Http\Controllers\CustomerController::class, 'index']);
Route::post('customer/import'  , [App\Http\Controllers\CustomerController::class, 'importExcelData']);