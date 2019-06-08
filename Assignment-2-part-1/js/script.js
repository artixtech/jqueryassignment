$(document).ready(function(){

    $("#submitBtn").click(function(){ 
        if($('#name').val() == ''){
            alert("Name was empty"); //name empty validation
        }  
    	if($('#email').val() == ''){
    		alert("Email was empty"); //email empty validation
    	}   
        else if($('#pwd').val() != $('#rptPwd').val()){
        	alert("Both password didn't match!"); // password matchig validation
        }
        else if($('#tc').prop("checked") == false){
        	alert("Please Agree To Terms and Conditions"); // tc agreement validation
        }
        else{
        $("#myForm").submit(); // Submit the form
    	}
    });
});