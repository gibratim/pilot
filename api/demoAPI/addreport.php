<?php

//load and connect to MySQL database stuff
require("config.inc.php");

if (!empty($_POST)) {
	//initial query
	$query = "INSERT INTO incident_report_details (survivor_gender, survivor_date_of_birth, unique_case_number, incident_type, incident_location, incident_date_and_time, status, incident_description, incident_reported_by) VALUES (:survivor_gender, :survivor_date_of_birth, :unique_case_number, :incident_type, :incident_location, :incident_date_and_time, :status, :incident_description, :incident_reported_by ) ";

   
//set the random id length 
//$random_id_length = 12; 

//generate a random id with prefix SP and store it in $rnd_id 
//$rnd_id = uniqid(SP,true); 

//finally I take the first 10 characters from the $rnd_id 
//$rnd_id = Substr($rnd_id,0,$random_id_length); 

    //Update query
    $query_params = array(
        ':survivor_gender' => $_POST['survivor_gender'],
        ':survivor_date_of_birth' => $_POST['survivor_date_of_birth'],
        ':unique_case_number' => $_POST['unique_case_number'],
        ':incident_type' => $_POST['incident_type'],
        ':incident_location' => $_POST['incident_location'],
        ':incident_date_and_time' => $_POST['incident_date_and_time'],
        ':status' => $_POST['status'],
        ':incident_description' => $_POST['incident_description'],
        ':incident_reported_by' => $_POST['incident_reported_by']
    );
  
	//execute query
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one:
        $response["success"] = 0;
        $response["message"] = "Database Error. Couldn't add post!";
        die(json_encode($response));
    }

    $response["success"] = 1;
    $response["message"] = "Post Successfully Added!";
    echo json_encode($response);
   
} else {
?>
		<h1>Add Comment</h1> 
		<form action="addreport.php" method="post"> 
		    Gender:<br /> 
		    <input type="text" name="survivor_gender" placeholder="survivor gender" /> 
		    <br /><br /> 
		     DOB:<br /> 
		    <input type="text" name="survivor_date_of_birth" placeholder="survivor DOB" /> 
		    <br /><br /> 
		     unique number:<br /> 
		    <input type="text" name="unique_case_number" placeholder="unique number" /> 
		    <br /><br /> 
		    incident type:<br /> 
		    <input type="text" name="incident_type" placeholder="type of incident" /> 
		    <br /><br />
			incident location:<br /> 
		    <input type="text" name="incident_location" placeholder="location of incident" /> 
		    <br /><br />
		     incident date:<br /> 
		    <input type="text" name="incident_date_and_time" placeholder="time of incident" /> 
		    <br /><br /> 
		     status:<br /> 
		    <input type="text" name="status" placeholder="status of report" /> 
		    <br /><br /> 
		     incident description:<br /> 
		    <input type="text" name="incident_description" placeholder="incident description" /> 
		    <br /><br /> 
		     reported by:<br /> 
		    <input type="text" name="incident_reported_by" placeholder="reported by" /> 
		    <br /><br /> 
		    <input type="submit" value="Add report" /> 
		</form> 
	<?php
}

?> 