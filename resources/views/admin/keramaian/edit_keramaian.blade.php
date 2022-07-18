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
                <form action="/keramaian/{{$keramaian->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="card mt-4">
                      <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Izin Keramaian</h5>
                      
                      <div class="card-body">
                          
                        @if(auth()->user()->role=='Administrator')
                          <a href="/keramaian/{{$keramaian->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                              <span class="text">Selesai</span>
                          </a>
  
                          <a href="/keramaian/{{$keramaian->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                              <span class="text">Sedang diproses</span>
                          </a>
  
                          <a href="/keramaian/{{$keramaian->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
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
                                    <input name="status" type="text" class="form-control" readonly value="{{$keramaian->status}}">
                                  </div>
                                  @endif
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">NIK</label>
                                  <input name="nik" type="text" class="form-control" readonly value="{{$keramaian->nik}}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">NAMA</label>
                                    <input name="nama_lengkap" type="text" class="form-control" readonly value="{{$keramaian->nama_lengkap}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">UMUR</label>
                                    <input name="umur" type="text" class="form-control" readonly value="{{$keramaian->umur}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">PEKERJAAN</label>
                                      <input name="pekerjaan" type="text" class="form-control" readonly value="{{$keramaian->pekerjaan}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlTextarea1">ALAMAT</label>
                                    <textarea name="alamat" class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{$keramaian->alamat}}</textarea>
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">TANGGAL</label>
                                      <input name="tgl_keramaian" type="text" class="form-control" readonly value="{{$keramaian->tgl_keramaian}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">TEMPAT</label>
                                      <input name="tempat_keramaian" type="text" class="form-control" readonly value="{{$keramaian->tempat_keramaian}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">KEGIATAN</label>
                                      <input name="kegiatan" type="text" class="form-control" readonly value="{{$keramaian->kegiatan}}">
                                  </div>
                                  @if(auth()->user()->role=='Kepala Desa')
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">KONFIRMASI</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                      <option value="Ditolak" @if($keramaian->status == 'Ditolak') selected @endif>Tolak</option>
                                      <option value="Disetujui" @if($keramaian->status == 'Disetujui') selected @endif>Setujui</option>
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