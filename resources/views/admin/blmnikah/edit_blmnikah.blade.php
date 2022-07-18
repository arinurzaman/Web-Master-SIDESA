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

			      <div class="container-fluid mt-2">
                <form action="/blmnikah/{{$blmnikah->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="card mt-4">
                      <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Belum Menikah</h5>
                      
                      <div class="card-body">
                          
                        @if(auth()->user()->role=='Administrator')
                          <a href="/blmnikah/{{$blmnikah->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                              <span class="text">Selesai</span>
                          </a>
  
                          <a href="/blmnikah/{{$blmnikah->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                              <span class="text">Sedang diproses</span>
                          </a>
  
                          <a href="/blmnikah/{{$blmnikah->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
                              <span class="text">Tolak</span>
                          </a>
                          @endif
                          
                      <div class="row">
                              <div class="col-md-12">
                                @if(auth()->user()->role=='Administrator')
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">MASUKKAN NO SURAT</label>
                                  <input name="no_surat" type="text" class="form-control">
                                </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">STATUS</label>
                                    <input name="status" type="text" class="form-control" readonly value="{{$blmnikah->status}}">
                                  </div>
                                  @endif
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">NIK</label>
                                  <input name="nik" type="text" class="form-control" readonly value="{{$blmnikah->nik}}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">NAMA</label>
                                    <input name="nama_lengkap" type="text" class="form-control" readonly value="{{$blmnikah->nama_lengkap}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">TEMPAT LAHIR</label>
                                      <input name="tempat_lahir" type="text" class="form-control" readonly value="{{$blmnikah->tempat_lahir}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">TANGGAL LAHIR</label>
                                      <input name="tanggal_lahir" type="text" class="form-control" readonly value="{{$blmnikah->tanggal_lahir}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">JENIS KELAMIN</label>
                                      <input name="jenis_kelamin" type="text" class="form-control" readonly value="{{$blmnikah->jenis_kelamin}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">AGAMA</label>
                                    <input name="agama" type="text" class="form-control" readonly value="{{$blmnikah->agama}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">PEKERJAAN</label>
                                      <input name="pekerjaan" type="text" class="form-control" readonly value="{{$blmnikah->pekerjaan}}">
                                    </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlTextarea1">ALAMAT</label>
                                    <textarea name="alamat" class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{$blmnikah->alamat}}</textarea>
                                  </div>
                                  @if(auth()->user()->role=='Kepala Desa')
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">KONFIRMASI</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                      <option value="Ditolak" @if($blmnikah->status == 'Ditolak') selected @endif>Tolak</option>
                                      <option value="Disetujui" @if($blmnikah->status == 'Disetujui') selected @endif>Setujui</option>
                                    </select>
                                  </div>
                                  @endif
                                  <button type="submit" class="btn btn-lg btn-success mt-2">Update</button>
                              </div>
                            
                          </div>
                       
                      </div>
                  
      
                      </div>
                  </div>
                        
                        
                    </form>
            </div>
                
              </div>
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
</body>
</html>