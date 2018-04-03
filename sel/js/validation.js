function mob_num()
{
    var phn = document.getElementById("mob_number").value;

    if ((phn.length != 10)) {
        alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
        phn.value = "";
        phn.focus();
        return false;
        die();
    } 
    else if (isNaN(true)) {
        alert("The phone number contains illegal characters.");
        
    }


}
function checkEmail() {

    var email = document.getElementById('email').value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
    die();
 }

}
	function fname(){
	
	 var val_fname= /^[A-Za-z]+$/;
	 $staff_name= document.getElementById('staff_name').value;
	
	 if(!val_fname.test($staff_name)){
     
      alert("First Name Must be Alphabets Only");
	   document.getElementById('staff_name').value='';
	   $("#staff_name").focus();
      return false;
    }
	
}
function phone(){
	
	  var val_phone= /^[0-9]{9,12}$/;
	 $mobile= document.getElementById('mobile').value;
	
	 if(!val_phone.test($mobile)){
     
      alert("enter valid phone number");
	   document.getElementById('mobile').value='';
	   $("#mobile").focus();
      return false;
    }
	
}