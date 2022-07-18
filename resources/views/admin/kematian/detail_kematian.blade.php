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
                    <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Kematian</h5>
                    
                    <div class="card-body">
                        
                        <a href="/kematian/{{$kematian->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                            <span class="text">Selesai</span>
                        </a>

                        <a href="/kematian/{{$kematian->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                            <span class="text">Sedang diproses</span>
                        </a>

                        <a href="/kematian/{{$kematian->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
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
                                        <td><strong>{{$kematian->status}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA PELAPOR</td>
                                        <td><strong>{{$kematian->nama_pelapor}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>UMUR PELAPOR</td>
                                        <td><strong>{{$kematian->umur_pelapor}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>PEKERJAAN PELAPOR</td>
                                        <td><strong>{{$kematian->pekerjaan_pelapor}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT PELAPOR</td>
                                        <td><strong>{{$kematian->alamat_pelapor}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>AGAMA PELAPOR</td>
                                        <td><strong>{{$kematian->agama_pelapor}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NIK PELAPOR</td>
                                        <td><strong>{{$kematian->nik_pelapor}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA JENAZAH</td>
                                        <td><strong>{{$kematian->nama_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>JENIS KELAMIN</td>
                                        <td><strong>{{$kematian->jk_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TEMPAT LAHIR</td>
                                        <td><strong>{{$kematian->tempat_lahir_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TANGGAL LAHIR</td>
                                        <td><strong>{{$kematian->tanggal_lahir_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>AGAMA</td>
                                        <td><strong>{{$kematian->agama_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA BAPAK</td>
                                        <td><strong>{{$kematian->ayah_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA IBU</td>
                                        <td><strong>{{$kematian->ibu_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT JENAZAH</td>
                                        <td><strong>{{$kematian->alamat_jenazah}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>HARI MENINGGAL</td>
                                        <td><strong>{{$kematian->hari_meninggal}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TANGGAL MENINGGAL</td>
                                        <td><strong>{{$kematian->tanggal_meninggal}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TEMPAT MENINGGAL</td>
                                        <td><strong>{{$kematian->tempat_meninggal}}</strong></td>
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