@extends("master-layout.index")
@section('title') Meme | Users @endsection
@section('post')
<div class="col-xxl-5 col-xl-6 col-lg-8 d-flex flex-column gap-7 mt-0 mt-lg-12 mt-xl-0">
<div class="">
  <table class="table">
  <thead>
    <tr class="text-center">
      <th>No</th>
      <th>Name</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
    <tr>
      <td scope="row">{{ $loop->iteration }}</td>
      <td>{{ $user->name }}</td>
      <td>
      	<div class="btn-group">
      		<form action="{{ route('users.destroy') }}" method="post">
      			@csrf
      			<input type="text" value="{{ $user->id }}" name="id" hidden>
      			<button type="submit" class="d-flex gap-4">
					<i class="material-symbols-outlined mat-icon"> delete </i>
 				</button>
      		</form>
      	</div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection