@extends('../layouts.pendaftaran-layout')
@section('title', 'Home')
@include('sweetalert::alert')

@section('content')
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div style="text-align: center;">
							<h4>Pendaftaran Praktikum</h4>
						</div>
						<form method="post" action="#">
							@csrf
							<div class="col-md-3">
								<div class="form-group">
                                    <input type="text" class="form-control" name="first_name" disabled value="{{ $row->first_name }}" placeholder="Username">
									<span class="form-label">Nama Depan</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
                                    <input type="text" class="form-control" name="last_name" disabled value="{{ $row->last_name }}">
									<span class="form-label">Nama Belakang</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
                                    <input type="text" class="form-control" name="surename" disabled value="{{ $row->surename }}">
									<span class="form-label">Nama Panggilan</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="nama" disabled value="{{ $row->first_name }} {{ $row->last_name }}">
									<span class="form-label">Nama Lengkap</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
                                    <input type="text" class="form-control" name="npm" disabled value="{{ $row->nim }}">
									<span class="form-label">NPM</span>
								</div>
							</div>
                            <div class="col-md-3">
								<div class="form-group">
                                    <input type="text" class="form-control" name="alamat" value="{{ $row->alamat }}" disabled>
									<span class="form-label">Alamat</span>
								</div>
							</div>
                            <div class="col-md-3">
								<div class="form-group">
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $row->tgl_lahir }}" disabled>
									<span class="form-label">Tanggal Lahir</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
                                    <input type="text" name="tmpt_lahir" class="form-control" value="{{ $row->tmpt_lahir }}" disabled>
									<span class="form-label">Tempat Lahir</span>
								</div>
							</div>
                            <div class="col-md-3">
								<div class="form-group">
                                    <input type="text" name="no_hp" class="form-control" value="{{ $row->no_hp }}" disabled>
									<span class="form-label">Nomor Handphone</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<select class="form-control" name="prak" onchange="functionHarga(event)">
										<option value="">-- Pilih Praktikum --</option>
										<option value="Rp. 10000">Bahan</option>
										<option value="Rp. 100000">Ilmu Ukur Tanah</option>
										<option value="Rp. 200000">Perpetaan</option>
										<option value="Rp. 121010">Hidrolika</option>
										<option value="Rp. 10201">Mekanika Tanah</option>
										<option value="Rp. 100110">Perkerasan Jalan Raya</option>
										<option value="Rp. 1000100">Beton</option>
									</select>
									<span class="form-label">Praktikum</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="harga" id="harga" disabled>
									<span class="form-label">Harga</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<select class="form-control" name="prak">
										<option>-- Pilih Kelas --</option>
										<option value="Kelas A">Kelas A</option>
										<option value="Kelas B">Kelas B</option>
									</select>
									<span class="form-label">Kelas</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Memenuhi persyaratan lain sesuai dengan peraturan yang berlaku</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Terdaftar sebagai mahasiswa dalam tahun akademik berjalan dengan melakukan KRS</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Akan menempuh atau lulus mata kuliah yang berkaitan dengan pelaksanaan praktikum</label>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-btn">
                                    <a type="submit" href="{{ route('/') }}" class="btn btn-danger">Back</a>
									<input type="button" onclick="deleteConfirmation(1)" class="btn btn-primary" value="Daftar">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>