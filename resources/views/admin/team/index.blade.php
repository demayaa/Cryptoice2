@extends('template_backend.home')
@section('sub-judul','Team')
@section('content')

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
	@endif

	<a href="{{ route('team.create') }}" class="btn btn-info btn-sm">Tambah Team</a>
	<br><br>

	<table class="table table-responsive table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Team</th>
				<th>Email Team</th>
				<th>Tipe Team</th>
				<th>Twitter Account</th>
				<th>Telegram Account</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($team as $result => $hasil)
			<tr>
				<td>{{ $result + $team->firstitem() }}</td>
				<td>{{ $hasil->name }}</td>
				<td>{{ $hasil->email }}</td>
				<td>{{ $hasil->tipe }}</td>
				<td>{{ $hasil->twitter }}</td>
				<td>{{ $hasil->telegram }}</td>
				<td>
					<form action="{{ route('team.destroy', $hasil->id )}}" method="POST">
						@csrf
						@method('delete')
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $team->links() }}

@endsection