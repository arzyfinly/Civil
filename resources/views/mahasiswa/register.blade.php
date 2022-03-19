@extends('../layout.layout-register')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form method="post" action="{{ route('register.custom') }}" class="login100-form validate-form"> 
					@csrf
					<span class="login100-form-title p-b-33">
						Account Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="first_name" placeholder="Nama Depan">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="last_name" placeholder="Nama Belakang">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="surename" placeholder="Nama Panggilan">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="alamat" placeholder="Alamat">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="date" name="tgl_lahir" placeholder="Tanggal Lahir">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="tmpt_lahir" placeholder="Tempat Lahir">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" max="13" name="no_hp" placeholder="No.hp 08XXXXXXXXXXXX">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<select name="gender" class="input100 form-control" style="height: 70px;">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="nim" placeholder="Nim">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="container-login100-form-btn m-t-20">
						<input type="submit" class="login100-form-btn" name="login" value="Sign Up">
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Have an account?
						</span>

						<a href="{{ route('login') }}" class="txt2 hov1">
							Sign in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    @endsection