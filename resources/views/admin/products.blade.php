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
<th>Category</th>
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

<td>₹ {{ number_format($product->price) }}</td>

<td>
@foreach($categories as $category)
@if($category->id == $product->category_id)
{{ $category->name }}
@endif
@endforeach
</td>

<td>{{ $product->description }}</td>

<td>{{ $product->created_at }}</td>

<td>{{ $product->updated_at }}</td>

<td>

<button class="btn btn-warning btn-sm editBtn"
data-id="{{ $product->id }}">
Edit </button>

<a href="{{ route('admin.products.delete',$product->id) }}"
class="btn btn-danger btn-sm">
Delete </a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

<!-- ADD PRODUCT MODAL -->

<div class="modal fade" id="addProduct">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="{{ route('admin.products.store') }}">

@csrf

<div class="modal-header">

<h5>Add Product</h5>

<button class="btn-close" data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<input type="text" name="name" class="form-control mb-3" placeholder="Product Name" required>

<input type="number" name="price" class="form-control mb-3" placeholder="Price" required>

<select name="category_id" class="form-control mb-3" required>

<option value="">Select Category</option>

@foreach($categories as $category)

<option value="{{ $category->id }}">
{{ $category->name }}
</option>

@endforeach

</select>

<textarea name="description" class="form-control" placeholder="Description"></textarea>

</div>

<div class="modal-footer">

<button class="btn btn-success">
Save
</button>

</div>

</form>

</div>

</div>

</div>

<!-- EDIT PRODUCT MODAL -->

<div class="modal fade" id="editProduct">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="{{ route('admin.products.update') }}">

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
{{ $category->name }}
</option>

@endforeach

</select>

<textarea name="description" id="edit_description" class="form-control"></textarea>

</div>

<div class="modal-footer">

<button class="btn btn-primary">
Update
</button>

</div>

</form>

</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

$(document).ready(function(){

$('.editBtn').click(function(){

var id = $(this).data('id');

$.ajax({

url:'/admin/products/edit/'+id,

type:'GET',

success:function(response){

$('#edit_id').val(response.data.id);
$('#edit_name').val(response.data.name);
$('#edit_price').val(response.data.price);
$('#edit_category').val(response.data.category_id);
$('#edit_description').val(response.data.description);

var modal = new bootstrap.Modal(document.getElementById('editProduct'));
modal.show();

}

});

});

});

</script>

@endsection
