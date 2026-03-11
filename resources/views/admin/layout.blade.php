<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="/admin/dashboard">Admin Panel</a>

<div>

<a href="/admin/dashboard" class="btn btn-light btn-sm">Users</a>

<a href="/admin/products" class="btn btn-light btn-sm">Products</a>
<a href="/admin/categories" class="btn btn-light btn-sm">Categories</a>

<a href="/logout" class="btn btn-danger btn-sm">Logout</a>

</div>

</div>

</nav>


<div class="container mt-4">

@yield('content')

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>