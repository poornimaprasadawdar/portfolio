<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#000000,#434343);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
font-family:Arial, Helvetica, sans-serif;
}

.login-card{
width:400px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

.brand-title{
font-weight:bold;
letter-spacing:2px;
}

.error{
color:red;
font-size:13px;
}

</style>

</head>

<body>

<div class="card login-card">

<div class="card-body p-4">

<h3 class="text-center mb-4 brand-title">
Mercedes Login
</h3>

<div id="loginError" class="alert alert-danger text-center d-none"></div>

<form id="loginForm" method="POST" action="/login">

@csrf

<div class="mb-3">

<label class="form-label">Email</label>

<input type="email" id="email" name="email" class="form-control" placeholder="Enter email">

<span class="error" id="emailError"></span>

</div>

<div class="mb-3">

<label class="form-label">Password</label>

<input type="password" id="password" name="password" class="form-control" placeholder="Enter password">

<span class="error" id="passwordError"></span>

</div>

<div class="d-grid">

<button type="submit" class="btn btn-dark" id="loginBtn">
Login
</button>

</div>

</form>

<div class="text-center mt-3">

<a href="/register" class="text-decoration-none">
Create new account
</a>

</div>

</div>

</div>


<script>

document.getElementById("loginForm").addEventListener("submit", function(e){

e.preventDefault();

let valid = true;

document.getElementById("emailError").innerText="";
document.getElementById("passwordError").innerText="";
document.getElementById("loginError").classList.add("d-none");

let email = document.getElementById("email").value.trim();
let password = document.getElementById("password").value.trim();

let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,}$/;

if(email === ""){
document.getElementById("emailError").innerText="Email is required";
valid=false;
}
else if(!email.match(emailPattern)){
document.getElementById("emailError").innerText="Enter a valid email";
valid=false;
}

if(password === ""){
document.getElementById("passwordError").innerText="Password is required";
valid=false;
}

if(!valid){
return;
}

let loginBtn = document.getElementById("loginBtn");
loginBtn.disabled = true;
loginBtn.innerText = "Logging in...";


fetch("/login",{

method:"POST",

headers:{
"Content-Type":"application/json",
"X-CSRF-TOKEN":"{{ csrf_token() }}"
},

body:JSON.stringify({
email:email,
password:password
})

})

.then(res => res.json())

.then(data => {

loginBtn.disabled = false;
loginBtn.innerText = "Login";

if(data.success){

window.location.href = data.redirect;

}else{

let errorBox = document.getElementById("loginError");

errorBox.innerText = data.message;
errorBox.classList.remove("d-none");

}

})

.catch(error => {

loginBtn.disabled = false;
loginBtn.innerText = "Login";

let errorBox = document.getElementById("loginError");

errorBox.innerText = "Something went wrong. Please try again.";
errorBox.classList.remove("d-none");

});

});

</script>

</body>
</html>