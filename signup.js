function visibility()
   {
    var x=document.getElementById("password");
    var icon1=document.getElementById("closed-eye");
    var icon2=document.getElementById("open-eye");

    if(x.type==="password")
     {
        x.type="text";
        icon1.style.display="none";
        icon2.style.display="block";
        icon2.style.display = "inline";
      }
    else{
        x.type="password";
        icon1.style.display="block";
        icon1.style.display = "inline";
        icon2.style.display="none";
      }
    }
    
var username=document.getElementById('username');
var email=document.getElementById('email');
var password=document.getElementById('password');

var error=document.getElementById('error');

function validate(){
    if(username.value==='' || email.value==='' || password.value===''){
        error.innerHTML="All fields are required*";
        error.style.display="flex";
        return false;
    }
    else{
        if(username.value!=''){
            const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            if(specialChars.test(username.value)){
                error.innerHTML="Username cannot have special characters*";
                error.style.display="flex";
                return false;
            }
        }
        if(email.value!=''){
            const regex_pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!regex_pattern.test(email.value)){
                error.innerHTML="Invalid E-Mail*";
                error.style.display="flex";
                return false;
            }
        }
        if(password.value!=''){
            if(password.value.length<8){
                error.innerHTML="Password should be atleast 8 characters*";
                error.style.display="flex";
                return false;
            }
        }
    }
}