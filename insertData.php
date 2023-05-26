<?php
function doInsertData(){
    /*
    this will invoke the code in connectToDB.php file that way we do not need to do all the connection statements repeatedly
    */
    include_once("connectToDB.php");

    $brName = $_POST["branch_name"]; 
    $brLoc = $_POST["branch_location"];
    $numEmps = $_POST["branch_emps"]; 

    //sample command to execute 
    //insert into branch(BRANCH_NAME, BRANCH_LOCATION, NUM_EMPLOYEES)
    //VALUES ('Bankstown', '100 Hume Hwy. Bankstown', 100);

    $sqlStmt = "insert into branch(BRANCH_NAME, BRANCH_LOCATION, NUM_EMPLOYEES) "; 
    $sqlStmt += "VALUES('". $brName . "', " . $brLoc . "', " . $numEmps . ");"; 
    
    if ($conn->query($sqlStmt) === TRUE) {
        echo "New record created sucessfully"; 
    }
    else{
        echo "Record creation ERROR!"; 
    }
    $conn->close();
}
?>