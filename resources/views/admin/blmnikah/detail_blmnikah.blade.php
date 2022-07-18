@extends('admin.layouts.head')
@extends('admin.layouts.header')
@extends('admin.layouts.footer')



<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed app-with-wide-sidebar app-with-light-sidebar">
		<!-- BEGIN #header -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			
			@if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>
          @endif
		
			<!-- BEGIN page-header -->

                <div class="card mt-4">
                    <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Belum Menikah</h5>
                    
                    <div class="card-body">
                        
                        <a href="/blmnikah/{{$blmnikah->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                            <span class="text">Selesai</span>
                        </a>

                        <a href="/blmnikah/{{$blmnikah->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                            <span class="text">Sedang diproses</span>
                        </a>

                        <a href="/blmnikah/{{$blmnikah->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
                            <span class="text">Tolak</span>
                        </a>
                        
                    <div class="row">
                        {{-- <div class="col-md-4">
                            <img src="{{asset('assets/img/gates.jpg')}}" class="card-img-top">
                        </div> --}}
                            <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <td>STATUS</td>
                                        <td><strong>{{$blmnikah->status}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td><strong>{{$blmnikah->nik}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA LENGKAP</td>
                                        <td><strong>{{$blmnikah->nama_lengkap}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TEMPAT LAHIR</td>
                                        <td><strong>{{$blmnikah->tempat_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TANGGAL LAHIR</td>
                                        <td><strong>{{$blmnikah->tanggal_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>JENIS KELAMIN</td>
                                        <td><strong>{{$blmnikah->jenis_kelamin}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>AGAMA</td>
                                        <td><strong>{{$blmnikah->agama}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>PEKERJAAN</td>
                                        <td><strong>{{$blmnikah->pekerjaan}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT</td>
                                        <td><strong>{{$blmnikah->alamat}}</strong></td>
                                    </tr>
                                </table>
                            </div>
                          
                        </div>
                     
                    </div>
                
    
                    </div>
                </div>
              </div>
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
</body>
</html>