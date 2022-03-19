@extends('../layouts.daftar-hadir-layout')

@section('content')
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div style="text-align: center; border-radius:50px;">
							<h3>Daftar Hadir Praktikum </h3>
						</div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">NPM</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Kelompok</th>
                                <th scope="col" colspan="16">Hari Ke</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="1"></td>
                                    <td rowspan="1"></td>
                                    <td rowspan="4"></td>
                                    <td colspan="1">1</td>
                                    <td colspan="1">2</td>
                                    <td colspan="1">3</td>
                                    <td colspan="1">4</td>
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-3">
								<div class="form-btn">
                                    <a type="submit" href="{{ route('/') }}" class="btn btn-danger">Back</a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>