<?php

//including the required files
require_once '../include/DbOperation.php';
require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


/* *
 * URL: http://localhost/safepilot/api/pilot/v1/createreport
 * Parameters: survivor_gender, survivor_date_of_birth, incident_type, incident_location, incident_date_and_time, status,                    incident_description, incident_reported_by
 * Method: POST
 * */

$app->post('/createreport', function () use ($app) {
     verifyRequiredParams(array('survivor_gender','survivor_date_of_birth','incident_type','incident_location', 'incident_date_and_time','status','incident_description','incident_reported_by'));
    $response = array();
    $survivor_gender = $app->request->post('survivor_gender'); 
    $survivor_date_of_birth = $app->request->post('survivor_date_of_birth'); 
    $incident_type = $app->request->post('incident_type'); 
    $incident_location = $app->request->post('incident_location'); 
    $incident_date_and_time = $app->request->post('incident_date_and_time'); 
    $status = $app->request->post('status'); 
    $incident_description = $app->request->post('incident_description'); 
    $incident_reported_by = $app->request->post('incident_reported_by');
    
    $db = new DbOperation();
    $res = $db->selfReport($survivor_gender,$survivor_date_of_birth,$incident_type,$incident_location, $incident_date_and_time,$status,$incident_description,$incident_reported_by);
    if ($res == 0) {
        $response["error"] = false;
        $response["message"] = "You are successfully registered";
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = true;
        $response["message"] = "Oops! An error occurred while registereing";
        echoResponse(200, $response);
    } else if ($res == 2) {
        $response["error"] = true;
        $response["message"] = "Sorry, this student  already existed";
        echoResponse(200, $response);
    }
});
 
/* *
 * URL: http://localhost/safepilot/api/pilot/v1/selfreport
 * Parameters: survivor_gender, survivor_date_of_birth, incident_type, incident_location, incident_date_and_time, status,                    incident_description, incident_reported_by
 * Method: POST
 * */

$app->post('/selfreport',function() use ($app){
    verifyRequiredParams(array('survivor_gender','survivor_date_of_birth','incident_type','incident_location', 'incident_date_and_time','status','incident_description','incident_reported_by'));

    
    $survivor_gender = $app->request->post('survivor_gender'); 
    $survivor_date_of_birth = $app->request->post('survivor_date_of_birth'); 
    $incident_type = $app->request->post('incident_type'); 
    $incident_location = $app->request->post('incident_location'); 
    $incident_date_and_time = $app->request->post('incident_date_and_time'); 
    $status = $app->request->post('status'); 
    $incident_description = $app->request->post('incident_description'); 
    $incident_reported_by = $app->request->post('incident_reported_by');
    
    $db = new DbOperation();

    $response = array();
    
    if($db->selfReport($survivor_gender,$survivor_date_of_birth,$incident_type,$incident_location, $incident_date_and_time,$status,$incident_description,$incident_reported_by)){
        $response['error'] = false;
        $response['message'] = "Report submitted successfully";
    }else{
        $response['error'] = true;
        $response['message'] = "Could not submit report";
    }

    echoResponse(200,$response);

});



function echoResponse($status_code, $response)
{
    $app = \Slim\Slim::getInstance();
    $app->status($status_code);
    $app->contentType('application/json');
    echo json_encode($response);
}


function verifyRequiredParams($required_fields)
{
    $error = false;
    $error_fields = "";
    $request_params = $_REQUEST;

    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        $app = \Slim\Slim::getInstance();
        parse_str($app->request()->getBody(), $request_params);
    }

    foreach ($required_fields as $field) {
        if (!isset($request_params[$field]) || strlen(trim($request_params[$field])) <= 0) {
            $error = true;
            $error_fields .= $field . ', ';
        }
    }

    if ($error) {
        $response = array();
        $app = \Slim\Slim::getInstance();
        $response["error"] = true;
        $response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
        echoResponse(400, $response);
        $app->stop();
    }
}


$app->run();