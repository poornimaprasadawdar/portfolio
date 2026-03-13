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
<th>Images</th>
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

<td>

@foreach($product->images as $img)

<img src="{{ asset('product_images/'.$img->name) }}"
width="50" height="50" class="me-1 mb-1">

@endforeach

</td>

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
Edit
</button>

<a href="{{ route('admin.products.delete',$product->id) }}"
class="btn btn-danger btn-sm">
Delete
</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>



<!-- Add Product Modal -->

<div class="modal fade" id="addProduct">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">

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

<textarea name="description" class="form-control mb-3" placeholder="Description"></textarea>


<!-- Multiple Images Upload -->

<label class="fw-bold">Product Images</label>

<table class="table table-bordered" id="imageTable">

<tr>
<th>Image</th>
<th width="100">Action</th>
</tr>

<tr>

<td>
<input type="file" name="images[]" class="form-control">
</td>

<td>
<button type="button" class="btn btn-success addRow">+</button>
</td>

</tr>

</table>

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



<!-- Edit Product Modal -->

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


$(document).on('click','.addRow',function(){

var row = `
<tr>
<td>
<input type="file" name="images[]" class="form-control">
</td>
<td>
<button type="button" class="btn btn-danger removeRow">-</button>
</td>
</tr>
`;

$('#imageTable').append(row);

});


$(document).on('click','.removeRow',function(){

$(this).closest('tr').remove();

});

</script>

@endsection