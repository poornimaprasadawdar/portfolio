@extends('admin.layout')

@section('content')

<div class="container mt-4">

<h3>Product Management</h3>

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProduct">
Add Product
</button>

<table class="table table-bordered text-center">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Category ID</th>
<th>Description</th>
<th>Created</th>
<th>Updated</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($products as $product)

<tr>

<td>{{ $product->id }}</td>

<td>{{ $product->name }}</td>

<td>{{ $product->price }}</td>

<td>{{ $product->category_id }}</td>

<td>{{ $product->description }}</td>

<td>{{ $product->created_at }}</td>

<td>{{ $product->updated_at }}</td>

<td>

<button
class="btn btn-warning btn-sm editBtn"
data-id="{{ $product->id }}"
data-name="{{ $product->name }}"
data-price="{{ $product->price }}"
data-category="{{ $product->category_id }}"
data-description="{{ $product->description }}"

>

Edit </button>

<a href="/admin/products/delete/{{ $product->id }}" class="btn btn-danger btn-sm">
Delete
</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>



<div class="modal fade" id="addProduct">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="/admin/products/store">

@csrf

<div class="modal-header">

<h5>Add Product</h5>

<button class="btn-close" data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<input type="text" name="name" class="form-control mb-3" placeholder="Product Name" required>

<input type="number" name="price" class="form-control mb-3" placeholder="Price" required>

<select name="category_id" class="form-control mb-3">

<option value="">Select Category</option>

@foreach($categories as $category)

<option value="{{ $category->id }}">
{{ $category->id }}
</option>

@endforeach

</select>

<textarea name="description" class="form-control" placeholder="Description"></textarea>

</div>

<div class="modal-footer">

<button class="btn btn-success">Save</button>

</div>

</form>

</div>

</div>

</div>



<div class="modal fade" id="editProduct">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="/admin/products/update">

@csrf

<input type="hidden" name="id" id="edit_id">

<div class="modal-header">

<h5>Edit Product</h5>

<button class="btn-close" data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<input type="text" name="name" id="edit_name" class="form-control mb-3">

<input type="number" name="price" id="edit_price" class="form-control mb-3">

<select name="category_id" id="edit_category" class="form-control mb-3">

@foreach($categories as $category)

<option value="{{ $category->id }}">
{{ $category->id }}
</option>

@endforeach

</select>

<textarea name="description" id="edit_description" class="form-control"></textarea>

</div>

<div class="modal-footer">

<button class="btn btn-primary">Update</button>

</div>

</form>

</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

$(document).ready(function(){

$('.editBtn').click(function(){

let id = $(this).data('id');
let name = $(this).data('name');
let price = $(this).data('price');
let category = $(this).data('category');
let description = $(this).data('description');

$('#edit_id').val(id);
$('#edit_name').val(name);
$('#edit_price').val(price);
$('#edit_category').val(category);
$('#edit_description').val(description);

let modal = new bootstrap.Modal(document.getElementById('editProduct'));
modal.show();

});

});

</script>

@endsection
