<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Sidesa Admin | Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="{{ asset('/assets/css/vendor.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/assets/css/google/app.min.css') }}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->


	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN login -->
		<div class="login login-v1">
			<!-- BEGIN login-container -->
			<div class="login-container">
				<!-- BEGIN login-header -->
				<div class="login-header">
					<div class="brand">
						<div >
							<span class="logo">
								<span class="text-blue">K</span>
                                <span class="text-red">a</span>
                                <span class="text-orange">r</span>
                                <span class="text-blue">a</span>
                                <span class="text-green">n</span>
                                <span class="text-red">g</span>
                                <span class="text-blue">A</span>
                                <span class="text-red">n</span>
                                <span class="text-orange">y</span>
                                <span class="text-blue">a</span>
                                <span class="text-green">r</span>
							</span> <b>Sidesa</b> Admin
						</div>
						<small>Sistem Informasi Publik Desa Karanganyar</small>
					</div>
					<div class="icon">
						<i class="fa fa-lock"></i>
					</div>
				</div>
				<!-- END login-header -->
				
				<!-- BEGIN login-body -->
				<div class="login-body">
					<!-- BEGIN login-content -->
					<div class="login-content fs-13px">
                            <form action="{{ asset('login/cek') }}" method="POST">
                                {{ csrf_field() }}
							<div class="form-floating mb-20px">
								<input name="nik" type="text" class="form-control fs-13px h-45px" id="emailAddress" placeholder="Email Address" />
								<label for="emailAddress" class="d-flex align-items-center py-0">NIK</label>
							</div>
							<div class="form-floating mb-20px">
								<input name="password" type="password" class="form-control fs-13px h-45px" id="password" placeholder="Password" />
								<label for="password" class="d-flex align-items-center py-0">Password</label>
							</div>
							<div class="login-buttons">
								<button type="submit" class="btn h-45px btn-primary d-block w-100 btn-lg">Login</button>
							</div>
						</form>
					</div>
					<!-- END login-content -->
				</div>
				<!-- END login-body -->
			</div>
			<!-- END login-container -->
		</div>
		<!-- END login -->
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('/assets/js/vendor.min.js') }}"></script>
	<script src="{{ asset('/assets/js/app.min.js') }}"></script>
	<script src="{{ asset('/assets/js/theme/google.min.js') }}"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>