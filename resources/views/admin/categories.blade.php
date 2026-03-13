@extends('admin.layout')

@section('content')

<div class="container mt-4">

<h3>Category Management</h3>

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCategory">
Add Category
</button>

<table class="table table-bordered text-center">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Name</th>
<th>Status</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($categories as $category)

<tr>

<td>{{ $category->id }}</td>
<td>{{ $category->name }}</td>

<td>

<div class="form-check form-switch d-flex justify-content-center">

<input
class="form-check-input statusToggle"
type="checkbox"
data-id="{{ $category->id }}"
{{ $category->status == 'active' ? 'checked' : '' }}
>

</div>

</td>

<td>

<button
class="btn btn-warning btn-sm editBtn"
data-id="{{ $category->id }}"
data-name="{{ $category->name }}"
data-status="{{ $category->status }}"
>
Edit </button>

<a href="/admin/categories/delete/{{ $category->id }}"
class="btn btn-danger btn-sm">
Delete </a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>


<div class="modal fade" id="addCategory">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="/admin/categories/store">

@csrf

<div class="modal-header">
<h5>Add Category</h5>
<button class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<input type="text" name="name" class="form-control mb-3" placeholder="Category Name" required>

<select name="status" class="form-control">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>

</div>

<div class="modal-footer">
<button class="btn btn-success">Save</button>
</div>

</form>

</div>

</div>

</div>


<div class="modal fade" id="editCategory">

<div class="modal-dialog">

<div class="modal-content">

<form method="POST" action="/admin/categories/update">

@csrf

<input type="hidden" name="id" id="edit_id">

<div class="modal-header">
<h5>Edit Category</h5>
<button class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<input type="text" name="name" id="edit_name" class="form-control mb-3">

<select name="status" id="edit_status" class="form-control">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>

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

let id=$(this).data('id');
let name=$(this).data('name');
let status=$(this).data('status');

$('#edit_id').val(id);
$('#edit_name').val(name);
$('#edit_status').val(status);

let modal = new bootstrap.Modal(document.getElementById('editCategory'));
modal.show();

});


$('.statusToggle').change(function(){

let id=$(this).data('id');

$.ajax({
url:'/admin/categories/toggle-status/'+id,
type:'GET',
success:function(response){
console.log("Status Updated");
}
});

});

});

</script>

@endsection
