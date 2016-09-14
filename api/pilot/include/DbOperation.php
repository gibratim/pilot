<?php

class DbOperation
{
    private $con;

    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    //Method will create a new report
    public function createReport($survivor_gender,$survivor_date_of_birth,$incident_type,$incident_location, $incident_date_and_time,$status,$incident_description,$incident_reported_by){
 
        
      
            //Generating an unique Key
            $apikey = $this->generateKey();
 
            //Crating an statement
            $stmt = $this->con->prepare("INSERT INTO incident_report_details (survivor_gender, survivor_date_of_birth, unique_case_number, incident_type, incident_location, incident_date_and_time, status, incident_description, incident_reported_by) VALUES (?,?,?,?,?,?,?,?,?)");
 
            //Binding the parameters
            $stmt->bind_param("sssssssss", $survivor_gender,$survivor_date_of_birth,$apiKey,$incident_type,$incident_location, $incident_date_and_time,$status,$incident_description,$incident_reported_by);
 
            //Executing the statment
            $result = $stmt->execute();
 
            //Closing the statment
            $stmt->close();
 
            //If statment executed successfully
            if ($result) {
                //Returning 0 means student created successfully
                return 0;
            } else {
                //Returning 1 means failed to create student
                return 1;
            }
        
    }
    
    //Method to submit a report by survivor
    public function selfReport($survivor_gender,$survivor_date_of_birth,$incident_type,$incident_location, $incident_date_and_time,$status,$incident_description,$incident_reported_by){
        $apikey = $this->generateKey();
        $stmt = $this->con->prepare("INSERT INTO incident_report_details (survivor_gender, survivor_date_of_birth, unique_case_number, incident_type, incident_location, incident_date_and_time, status, incident_description, incident_reported_by) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss",$survivor_gender,$survivor_date_of_birth,$unique_case_number,$incident_type,$incident_location, $incident_date_and_time,$status,$incident_description,$incident_reported_by);
        $result = $stmt->execute();
        $stmt->close();
        if($result){
            return true;
        }
        return false;
    }

  
    //Method to generate a unique  key every time
    private function generateKey(){
        return uniqid(rand(), true);
    }
}