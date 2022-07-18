@extends('admin.layouts.head')
@extends('admin.layouts.header')
@extends('admin.layouts.footer')

<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<div id="app" class="app app-header-fixed app-sidebar-fixed app-with-wide-sidebar app-with-light-sidebar">
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			  
			<div class="panel panel-inverse mt-2" data-sortable-id="ui-widget-11">
				<div class="panel-heading bg-blue-700">
					<h4 class="panel-title">Sistem Informasi Desa Karang Anyar</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<p>Aplikasi ini berguna untuk Pelayanan Publik Desa Karang Anyar</p>
					<p>Dalam Pengajuan Surat Menyurat bagi Warga Desa Karang Anyar</p>
				</div>
				
			</div>
			
			<!-- BEGIN row -->
			<div class="row">

				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				@if(auth()->user()->role=='Administrator')
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>DATA WARGA</h4>
							<p>{{ $jml_warga }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{ ('/warga') }}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				@endif
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-envelope"></i></div>
						<div class="stats-info">
							<h4>PENGAJUAN SURAT DOMISILI</h4>
							<p>{{ $jml_domisili }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{('/domisili')}}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-envelope"></i></div>
						<div class="stats-info">
							<h4>PENGAJUAN SURAT KEMATIAN</h4>
							<p>{{ $jml_kematian }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{('/kematian')}}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-envelope"></i></div>
						<div class="stats-info">
							<h4>PENGAJUAN SKU</h4>
							<p>{{ $jml_sku }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{('/kematian')}}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-envelope"></i></div>
						<div class="stats-info">
							<h4>PENGAJUAN SURAT KELAHIRAN</h4>
							<p>{{ $jml_kelahiran }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{('/kelahiran')}}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-envelope"></i></div>
						<div class="stats-info">
							<h4>PENGAJUAN SURAT BLM MENIKAH</h4>
							<p>{{ $jml_blmnikah }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{('/blmnikah')}}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-envelope"></i></div>
						<div class="stats-info">
							<h4>PENGAJUAN SURAT KERAMAIAN</h4>
							<p>{{ $jml_keramaian }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{('/keramaian')}}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				@if(auth()->user()->role=='Administrator')
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>PENGGUNA</h4>
							<p>{{ $jml_user }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{ ('/user') }}">Lihat Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				@endif
				<!-- END col-3 -->
			</div>
			<!-- END row -->
			
		
		</div>
		<!-- END #content -->
	
	
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	
</body>
</html>