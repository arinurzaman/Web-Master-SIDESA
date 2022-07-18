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
                    <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Izin Keramaian</h5>
                    
                    <div class="card-body">

                        <a href="/keramaian/{{$keramaian->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                            <span class="text">Selesai</span>
                        </a>

                        <a href="/keramaian/{{$keramaian->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                            <span class="text">Sedang diproses</span>
                        </a>

                        <a href="/keramaian/{{$keramaian->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
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
                                        <td><strong>{{$keramaian->status}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td><strong>{{$keramaian->nik}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA LENGKAP</td>
                                        <td><strong>{{$keramaian->nama_lengkap}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>UMUR</td>
                                        <td><strong>{{$keramaian->umur}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>PEKERJAAN</td>
                                        <td><strong>{{$keramaian->pekerjaan}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT</td>
                                        <td><strong>{{$keramaian->alamat}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TANGGAL KEGIATAN</td>
                                        <td><strong>{{$keramaian->tgl_keramaian}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TEMPAT</td>
                                        <td><strong>{{$keramaian->tempat_keramaian}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA KEGIATAN</td>
                                        <td><strong>{{$keramaian->kegiatan}}</strong></td>
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