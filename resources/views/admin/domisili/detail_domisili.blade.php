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
                    <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Domisili</h5>
                    
                    <div class="card-body">

                        
                        <a href="/domisili/{{$domisili->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                            <span class="text">Selesai</span>
                        </a>

                        <a href="/domisili/{{$domisili->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                            <span class="text">Sedang diproses</span>
                        </a>

                        <a href="/domisili/{{$domisili->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
                            <span class="text">Tolak</span>
                        </a>
                        
                    <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <td>STATUS</td>
                                        <td><strong>{{$domisili->status}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td><strong>{{$domisili->nik}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA</td>
                                        <td><strong>{{$domisili->nama}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>JENIS KELAMIN</td>
                                        <td><strong>{{$domisili->jenis_kelamin}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TEMPAT LAHIR</td>
                                        <td><strong>{{$domisili->tempat_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TANGGAL LAHIR</td>
                                        <td><strong>{{$domisili->tanggal_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>KEWARGANEGARAAN</td>
                                        <td><strong>{{$domisili->kewarganegaraan}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>AGAMA</td>
                                        <td><strong>{{$domisili->agama}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>PEKERJAAN</td>
                                        <td><strong>{{$domisili->pekerjaan}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT</td>
                                        <td><strong>{{$domisili->alamat}}</strong></td>
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