<style>
    .bg-image {
        background-image: url('{{ asset('assets/images/meme.png') }}');
        background-size: 100vh;
        background-position:center center;
        background-repeat: no-repeat;
        height: 75vh;
    }
</style>
@extends('master-layout.index')
@section('title')
    Meme | Index
@endsection
@section('content')
	<h1>Hello</h1>
	<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
	
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			@csrf
			<form method="POST" action="{{ route('index.store') }}">
			  <div class="mb-3">
				<label for="recipient-name" class="col-form-label"><strong>Nama</strong></label>
				<input type="text" class="form-control" id="nama" name="nama">
			  </div>
			  <div class="mb-3">
				<label for="recipient-name" class="col-form-label"><strong>Email</strong></label>
				<input type="text" class="form-control" id="email" name="email">
			  </div>
			  <div class="mb-3">
				<div class="form-group">
					<strong>Role:</strong>
					<select name="role" class="form-control" id="role" name="role">
						<option value="">-- Select Role --</option>
						<option value="admin">Admin</option>
						<option value="guest">Guest</option>
					</select>
				</div>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary">Buat Data</button>
		  </div>
		</div>
	  </div>
	</div>
	<table class="table table-striped">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>role</th>
		<th>action</th>
		<th></th>
	</tr>
</thead>
<tbody>
    @foreach ($data as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->role }}</td>
            <td>
                <a href="{{ route('nama.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('nama.destroy', $row->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

	  </table>

	  
@endsection
