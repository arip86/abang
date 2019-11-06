@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
	<div class="row d-flex align-items-center justify-content-center">
	<div class="about-content col-lg-12">
	<h1 class="text-white">Registrasi Siswa</h1>
				</div>	
		</div>
	</div>
</section>

<section class="search-course-area relative">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
								Get reduced fee <br>
								during this Summer!
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
			</div>	
			<div class="col-lg-49 col-md-6 search-course-right section-gap">
							{!! Form::open(['url' => '/postregister', 'class' => 'form-wrap'])!!}

				<h4 class="pb-20 text-center mb-30">Formulir pendaftaran siswa</h4>
				{!!Form::text('nama_depan','',['class' => 'form-control', 'placeholder' => 'Nama Lengkap'])!!}
				{!!Form::text('nama_belakang','',['class' => 'form-control', 'placeholder' => 'Nama Belakang'])!!}
				{!!Form::text('agama','',['class' => 'form-control', 'placeholder' => 'Agama'])!!}

				<div class="form-select" id="service-select">
				{!!Form::select('jenis_kelamin',['' => 'Pilih jenis kelamin', 'L' => 'Laki-laki', 'P' => 'Perempuan'],['style' => 'display: none;']);!!}
				</div>
				{!!Form::textarea('alamat','',['class' => 'form-control', 'placeholder' => 'Alamat'])!!}

				{!!Form::text('email', '',['class'=> 'form-control', 'placeholder' => 'Email'])!!}
				{!!Form::text('password', '',['class'=> 'form-control', 'placeholder' => 'Password'])!!}

				<input type="submit" class="primary-btn text-uppercase" value="Kirim" style="text-align: center;">
				{!!Form::close()!!}

						</div>
					</div>
				</div>	
			</section>


@endsection