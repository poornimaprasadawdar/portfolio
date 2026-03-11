<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register</title>

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

.register-card{
    width:420px;
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

<div class="card register-card">

<div class="card-body p-4">

<h3 class="text-center mb-4 brand-title">
Mercedes Register
</h3>

@if ($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form id="registerForm" method="POST" action="/register" enctype="multipart/form-data">

@csrf

<div class="mb-3">

<label class="form-label">Name</label>

<input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">

<span class="error" id="nameError"></span>

</div>


<div class="mb-3">

<label class="form-label">Email</label>

<input type="text" id="email" name="email" class="form-control" placeholder="Enter email">

<span class="error" id="emailError"></span>

</div>


<div class="mb-3">

<label class="form-label">Phone</label>

<input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number">

<span class="error" id="phoneError"></span>

</div>


<div class="mb-3">

<label class="form-label">Password</label>

<input type="password" id="password" name="password" class="form-control" placeholder="Minimum 8 characters">

<span class="error" id="passwordError"></span>

</div>


<div class="mb-3">

<label class="form-label">Profile Photo</label>

<input type="file" id="photo" name="photo" class="form-control">

<span class="error" id="photoError"></span>

</div>


<div class="mb-3">

<label class="form-label">Role</label>

<select id="role" name="role" class="form-control">

<option value="">Select Role</option>
<option value="user">User</option>
<option value="admin">Admin</option>

</select>

<span class="error" id="roleError"></span>

</div>


<div class="d-grid">

<button class="btn btn-dark">
Register
</button>

</div>

</form>


<div class="text-center mt-3">

<a href="/login" class="text-decoration-none">
Already have an account? Login
</a>

</div>

</div>

</div>


<script>

document.getElementById("registerForm").addEventListener("submit", function(e){

e.preventDefault(); 

let valid = true;


document.querySelectorAll(".error").forEach(el => el.innerText="");

let name = document.getElementById("name").value.trim();
let email = document.getElementById("email").value.trim();
let phone = document.getElementById("phone").value.trim();
let password = document.getElementById("password").value.trim();
let photo = document.getElementById("photo").files[0];
let role = document.getElementById("role").value;

let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;


if(name === ""){
document.getElementById("nameError").innerText="Name required";
valid=false;
}

if(email === ""){
document.getElementById("emailError").innerText="Email required";
valid=false;
}
else if(!email.match(emailPattern)){
document.getElementById("emailError").innerText="Invalid email";
valid=false;
}


if(phone.length != 10 || isNaN(phone)){
document.getElementById("phoneError").innerText="Phone must be 10 digits";
valid=false;
}


if(password.length < 8){
document.getElementById("passwordError").innerText="Password must be 8 characters";
valid=false;
}


if(!photo){
document.getElementById("photoError").innerText="Photo required";
valid=false;
}


if(role === ""){
document.getElementById("roleError").innerText="Select role";
valid=false;
}

if(!valid){
return;
}


let formData = new FormData();

formData.append("name",name);
formData.append("email",email);
formData.append("phone",phone);
formData.append("password",password);
formData.append("photo",photo);
formData.append("role",role);

formData.append("_token","{{ csrf_token() }}");

fetch("/register",{

method:"POST",
body:formData

})

.then(response => response.json())

.then(data => {

if(data.success){

alert("Registration Successful");

window.location.href="/login";

}

else{

alert(data.message);

}

})

.catch(error => {

console.log(error);

});

});

</script>
</body>
</html>