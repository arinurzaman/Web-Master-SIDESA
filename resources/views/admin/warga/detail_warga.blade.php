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
                    <h5 class="card-header bg-blue-700 text-white">Informasi Detail Warga</h5>
                    
                    <div class="card-body">
                        
                        <a href="/warga/{{$warga->id}}/edit" class="btn btn-white btn-icon-split mb-3">
                           
                            <span class="text">Edit Data Warga</span>
                          </a>
                        
                    <div class="row">
                        {{-- <div class="col-md-4">
                            <img src="{{asset('assets/img/gates.jpg')}}" class="card-img-top">
                        </div> --}}
                            <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <td>NIK</td>
                                        <td><strong>{{$warga->nik}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NAMA</td>
                                        <td><strong>{{$warga->nama}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TEMPAT LAHIR</td>
                                        <td><strong>{{$warga->tempat_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>TANGGAL LAHIR</td>
                                        <td><strong>{{$warga->tanggal_lahir}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL</td>
                                        <td><strong>{{$warga->email}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>JENIS KELAMIN</td>
                                        <td><strong>{{$warga->jenis_kelamin}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>USIA</td>
                                        <td><strong>{{$warga->usia}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT</td>
                                        <td><strong>{{$warga->alamat}}</strong></td>
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