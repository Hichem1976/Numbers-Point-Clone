import * as mon  from captcha.js;

function validateLogin(){
    
    var numMobile=document.getElementById("inputMobile");
    var passWord=document.getElementById("inputPassword");

    var phoneno = /^\d{10}$/;
  if((numMobile.value.match(phoneno))&&(passWord.value.length>0))
        {
      return true;
        } else{
            var spError=document.getElementById("error");
            spError.innerText="Invalid mobile number or password";
            return false;
        }

}

function validateSignUp(){
  var name=document.getElementById("inputname");
  var numMobile=document.getElementById("inputMobile");
  var passWord=document.getElementById("inputPassword");
  var cpassword=document.getElementById("inputCPassword");



  var phoneno = /^\d{10}$/;
if(validateCaptcha()&&(name.value.length>0)&&(numMobile.value.match(phoneno))&&(passWord.value.length>0)&&(passWord.value===cpassword.value))
//if((name.value.length>0)&&(numMobile.value.match(phoneno))&&(passWord.value.length>0)&&(passWord.value===cpassword.value))
      {
    return true;
      } else{
        if(validateCaptcha()){
          var spError=document.getElementById("error");
          spError.innerText="Invalid mobile number or password";
          return false;
        }
      }





}


function validateDelete(){
  if (window.confirm("Are you sure to delete phone number?")){
    return true;

  }else{
    return false;
  }
}















