
// login form password

function myFunction() {
var x = document.getElementById("pass-input");
var y = document.getElementById("hide1");
var z = document.getElementById("hide2");

if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
} 
else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
}
}

// END


// register form password

function myFunc() {
  var x = document.getElementById("pa-input");
  var y = document.getElementById("hide");
  var z = document.getElementById("hidee");

  if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}



function myFun() {
var x = document.getElementById("pas-input");
var y = document.getElementById("hide3");
var z = document.getElementById("hide4");

if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
}
else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
}
}

// END

var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");
function register() {
  window.location='register.php';
// x.style.left = "-400px";
// y.style.left = "50px";
// z.style.left = "110px";
}
function login() {
  window.location='login.php'
// x.style.left = "50px";
// y.style.left = "450px";
// z.style.left = "0px";
}
