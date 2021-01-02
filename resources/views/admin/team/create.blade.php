@extends('template_backend.home')
@section('sub-judul','Tambah Team')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  	
  @endif

  <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label>Nama Team</label>
      <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
  </div>

  <div class="form-group">
      <label>Tipe Team</label>
      <select class="form-control" name="tipe">
      	<option value="" holder>Pilih Tipe Team</option>
      	<option value="Founder" holder>Founder</option>
      	<option value="Co Founder" holder>Co Founder</option>
      	<option value="Marketing" holder>Marketing</option>
      	<option value="Community Manager" holder>Community Manager</option>
      	<option value="Moderator" holder>Moderator</option>
      	<option value="Developer" holder>Developer</option>
      	
      </select>
  </div>

   <div class="form-group">
      <label>Twitter Account</label>
      <input type="text" class="form-control" name="twitter">
  </div>

  <div class="form-group">
      <label>Telegram Account</label>
      <input type="text" class="form-control" name="telegram">
  </div>
  
  <div class="form-group">
      <label>Thumbnail</label>
      <input class="form-control" type="file" name="gambar">
  </div>
  
  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Team</button>
  </div>

  </form>


@endsection