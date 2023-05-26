function validate(){
    brName = document.forms["frmInsData"]["branch_name"].value;
    brLoc = document.forms["frmInsData"]["branch_location"].value;
    numEmps = document.forms["frmInsData"]["branch_emps"].value;
    message += "";
    if(brName.length < 3){
        message += "\nBranch name not long enough";
        document.forms["fmrinsData"]["branch_name"].focus();
    }
    if(brLoc.length < 10){
        message += "\nAddress not long enough";
        document.forms["fmrinsData"]["branch_location"].focus();
    }
    if(message.length ==0)
        return true;
    else
    {
        alert(message); 
        return false; 
    }
    
}