<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>

@if(session('success'))
<div class="alert alert-success text-center">
{{ session('success') }}
</div>
@endif




<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">

<div class="container">

<a class="navbar-brand fw-bold" href="/">Poornima</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="navbarNav">

<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link px-lg-4" href="/">Home</a>
</li>

<li class="nav-item">
<a class="nav-link px-lg-4" href="/admin/dashboard">Users</a>
</li>

<li class="nav-item">
<a class="nav-link px-lg-4" href="/admin/categories">Categories</a>
</li>

<li class="nav-item">
<a class="nav-link px-lg-4" href="/admin/products">Products</a>
</li>

<li class="nav-item">
<a class="nav-link px-lg-4 text-danger" href="/logout">Logout</a>
</li>

</ul>
</div>
</div>
</nav>


<br><br><br>




<div class="container text-center my-4 d-flex justify-content-between align-items-center">

<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
Add User
</button>

<div class="input-group w-auto">
<input type="text" id="searchInput" class="form-control" placeholder="Search">
<button class="btn btn-dark" id="searchBtn">Search</button>
</div>

</div>




<div class="container mt-4">

<table class="table table-bordered text-center">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Role</th>
<th>Photo</th>
<th>Actions</th>
</tr>

</thead>

<tbody id="userTable">

@foreach($users as $user)

@if($user->role != 'admin')

<tr>

<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->role }}</td>

<td>

@if($user->photo)

<img src="{{ asset('uploads/'.$user->photo) }}"
width="60"
height="60"
style="border-radius:50%; object-fit:cover;">

@else

<img src="{{ asset('images/default-user.png') }}"
width="60"
height="60"
style="border-radius:50%;">

@endif

</td>

<td>

<button class="btn btn-warning btn-sm editBtn"
data-id="{{ $user->id }}">
Edit
</button>

<a href="/admin/delete/{{ $user->id }}"
class="btn btn-danger btn-sm">
Delete
</a>

</td>

</tr>

@endif

@endforeach

</tbody>

</table>

</div>





<div class="modal fade" id="addModal">

<div class="modal-dialog">

<div class="modal-content">

<form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="modal-header">

<h5 class="modal-title">Add User</h5>

<button type="button" class="btn-close" data-bs-dismiss="modal"></button>

</div>


<div class="modal-body">

<input type="text" name="name" class="form-control mb-3" placeholder="Name" required>

<input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

<input type="text" name="phone" class="form-control mb-3" placeholder="Phone" required>

<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

<select name="role" class="form-control mb-3" required>
<option value="">Select Role</option>
<option value="user">User</option>
</select>

<label>Profile Photo</label>

<input type="file" name="photo" class="form-control mb-3">

</div>

<div class="modal-footer">
<button type="submit" class="btn btn-primary">Add</button>
</div>

</form>

</div>
</div>
</div>





<div class="modal fade" id="editModal">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="{{ route('admin.user.update') }}" enctype="multipart/form-data">

@csrf

<input type="hidden" name="id" id="edit_id">

<div class="modal-header">

<h5 class="modal-title">Edit User</h5>

<button type="button" class="btn-close" data-bs-dismiss="modal"></button>

</div>


<div class="modal-body">

<input type="text" name="name" id="edit_name" class="form-control mb-3">

<input type="email" name="email" id="edit_email" class="form-control mb-3">

<input type="text" name="phone" id="edit_phone" class="form-control mb-3">

<select name="role" id="edit_role" class="form-control mb-3">

<option value="user">User</option>

</select>

<label>Update Photo</label>

<input type="file" name="photo" class="form-control">

</div>

<div class="modal-footer">

<button type="submit" class="btn btn-primary">Update</button>

</div>

</form>

</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>



<script>

$(document).ready(function(){

$("#searchBtn").click(function(){

let value = $("#searchInput").val().toLowerCase();

$("#userTable tr").filter(function(){

$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

});

});


$(".editBtn").click(function(){

let row = $(this).closest("tr");

let id = $(this).data("id");

let name = row.find("td:eq(1)").text();
let email = row.find("td:eq(2)").text();
let phone = row.find("td:eq(3)").text();
let role = row.find("td:eq(4)").text();

$("#edit_id").val(id);
$("#edit_name").val(name);
$("#edit_email").val(email);
$("#edit_phone").val(phone);
$("#edit_role").val(role);

let modal = new bootstrap.Modal(document.getElementById('editModal'));

modal.show();

});

});

</script>

</body>
</html>