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
var password=document.getElementById('password');
var error=document.getElementById('error');

function validate(){
    if(username.value==='' || password.value===''){
        error.innerHTML="All fields are required*";
        error.style.display="flex";
        return false;
    }
}