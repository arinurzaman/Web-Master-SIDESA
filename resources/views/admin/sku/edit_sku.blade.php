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
                <form action="/sku/{{$sku->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="card mt-4">
                      <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Keterangan Usaha</h5>
                      
                      <div class="card-body">
                          
                        @if(auth()->user()->role=='Administrator')
                          <a href="/sku/{{$sku->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                              <span class="text">Selesai</span>
                          </a>
  
                          <a href="/sku/{{$sku->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                              <span class="text">Sedang diproses</span>
                          </a>
  
                          <a href="/sku/{{$sku->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
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
                                  @endif
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">STATUS</label>
                                    <input name="status" type="text" class="form-control" readonly value="{{$sku->status}}">
                                  </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">NIK</label>
                                  <input name="nik" type="text" class="form-control" readonly value="{{$sku->nik}}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">NAMA</label>
                                    <input name="nama" type="text" class="form-control" readonly value="{{$sku->nama}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">UMUR</label>
                                    <input name="umur" type="text" class="form-control" readonly value="{{$sku->umur}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlTextarea1">ALAMAT</label>
                                    <textarea name="alamat" class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{$sku->alamat}}</textarea>
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">NO TELEPON</label>
                                      <input name="no_hp" type="text" class="form-control" readonly value="{{$sku->no_hp}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">NAMA USAHA</label>
                                      <input name="nama_usaha" type="text" class="form-control" readonly value="{{$sku->nama_usaha}}">
                                  </div>
                                  @if(auth()->user()->role=='Kepala Desa')
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">KONFIRMASI</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                      <option value="Ditolak" @if($sku->status == 'Ditolak') selected @endif>Tolak</option>
                                      <option value="Disetujui" @if($sku->status == 'Disetujui') selected @endif>Setujui</option>
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