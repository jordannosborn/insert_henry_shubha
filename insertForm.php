<?php require("insertData.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Using PHP</title>
    <script src="assets/myJs.js"></script>
</head>
<body>
    <h1>Insert data into henry_shubha</h1>
    <form name="frmInsData" acction="#" method="post"
        onsubmit="return validate();">
    <label for="branch_name">Branch name</label>
    <input type="text" name="branch_name" id="branch_name"
           placeholder="Enter branch name"><br>
    <label for="branch_location">Branch location</label>
    <input type="text" name="branch_location" id="branch_location"
           placeholder="Enter branch address"><br>
    <label for="branch_emps">Number of employees</label>
    <input type="number" name="branch_emps" id="branch_emps"
           min="1" max="99" value="3"><br>
    <input type="submit" value="Insert data" name="btnSubmit" id="btnSubmit">
</form>

<?php
if(isset($_POST["btnSubmit"]))
    doInsertData();
?>
</body>
</html>