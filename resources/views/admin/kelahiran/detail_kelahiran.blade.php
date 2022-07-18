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
                    <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Kelahiran</h5>
                    
                    <div class="card-body">

                        <a href="/kelahiran/{{$kelahiran->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                            <span class="text">Selesai</span>
                        </a>

                        <a href="/kelahiran/{{$kelahiran->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                            <span class="text">Sedang diproses</span>
                        </a>

                        <a href="/kelahiran/{{$kelahiran->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
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
                                        <td><strong>{{$kelahiran->status}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA IBU</td>
                                        <td><strong>{{$kelahiran->nama_ibu}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>UMUR IBU</td>
                                        <td><strong>{{$kelahiran->umur_ibu}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>PEKERJAAN IBU</td>
                                        <td><strong>{{$kelahiran->pekerjaan_ibu}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA SUAMI</td>
                                        <td><strong>{{$kelahiran->nama_suami}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>UMUR SUAMI</td>
                                        <td><strong>{{$kelahiran->umur_suami}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>PEKERJAAN SUAMI</td>
                                        <td><strong>{{$kelahiran->pekerjaan_suami}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT SUAMI</td>
                                        <td><strong>{{$kelahiran->alamat_suami}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TANGGAL LAHIR ANAK</td>
                                        <td><strong>{{$kelahiran->tgl_lahir_anak}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>JAM LAHIR</td>
                                        <td><strong>{{$kelahiran->jam_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA ANAK</td>
                                        <td><strong>{{$kelahiran->nama_anak}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>JENIS KELAMIN ANAK</td>
                                        <td><strong>{{$kelahiran->jk_anak}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>BERAT BADAN</td>
                                        <td><strong>{{$kelahiran->bb_anak}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>PANJANG BADAN</td>
                                        <td><strong>{{$kelahiran->pb_anak}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TEMPAT LAHIR</td>
                                        <td><strong>{{$kelahiran->tempat_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ANAK KE</td>
                                        <td><strong>{{$kelahiran->anak_ke}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>AGAMA</td>
                                        <td><strong>{{$kelahiran->agama}}</strong></td>
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