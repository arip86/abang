	@extends('layouts.master')



	@section ('content')

<div class="main">
	<div class="main-content">
		<div class="content-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Inputs</h3>
						</div>
						<div class="panel-body">
								<form action="/siswa/{{$siswa->id}}/update" method="POST">
					{{csrf_field()}}
							<div class="form-group">
				    <label for="exampleInputEmail1">Nama Depan</label>
					  <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
													</div>
						<div class="form-group">
			  <label for="exampleInputEmail1">Nama Belakang</label>
			<input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
													  </div>
	  	  <div class="form-group">
		<label for="exampleFormControlSelect1">Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
	 <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
	<option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
				</select>
														  </div>

		<div class="form-group">
	<label for="exampleInputEmail1">Agama</label>
		   <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
													  </div>

			<div class="form-group">
		   <label for="exampleFormControlTextarea1">Alamat</label>													    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
										</div>
			<button type="submit" class="btn btn-primary">Update</button>
						</form>
						</div>
</div>
</div>
</div>
</div>
</div>
</div>
	@endsection

	<h1>Edit data Siswa</h1>
@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		
	</div>

	@endif
				<div class="row">
				<div class="col-lg-12">						
			<form action="/siswa/{{$siswa->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="form-group">
			    <label for="exampleInputEmail1">Nama Depan</label>
				  <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
												</div>
		<div class="form-group">
	  <label for="exampleInputEmail1">Nama Belakang</label>
	<input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
												  </div>
  	  <div class="form-group">
	<label for="exampleFormControlSelect1">Jenis Kelamin</label>
	<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
 <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
<option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
			</select>
													  </div>

	<div class="form-group">
<label for="exampleInputEmail1">Agama</label>
	   <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
												  </div>

		<div class="form-group">
	   <label for="exampleFormControlTextarea1">Alamat</label>													    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
									</div>
		<button type="submit" class="btn btn-primary">Update</button>
										      </form>

											</div>
										</div>
									