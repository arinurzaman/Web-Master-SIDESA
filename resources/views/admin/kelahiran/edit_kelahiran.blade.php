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
                <form action="/kelahiran/{{$kelahiran->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="card mt-4">
                      <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Kelahiran</h5>
                      
                      <div class="card-body">
                          
                        @if(auth()->user()->role=='Administrator')
                          <a href="/kelahiran/{{$kelahiran->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                              <span class="text">Selesai</span>
                          </a>
  
                          <a href="/kelahiran/{{$kelahiran->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                              <span class="text">Sedang diproses</span>
                          </a>
  
                          <a href="/kelahiran/{{$kelahiran->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
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
                                    <input name="status" type="text" class="form-control" readonly value="{{$kelahiran->status}}">
                                  </div>
                                  @endif
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">NAMA IBU</label>
                                  <input name="nama_ibu" type="text" class="form-control" readonly value="{{$kelahiran->nama_ibu}}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">UMUR IBU</label>
                                    <input name="umur_ibu" type="text" class="form-control" readonly value="{{$kelahiran->umur_ibu}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">PEKERJAAN IBU</label>
                                    <input name="pekerjaan_ibu" type="text" class="form-control" readonly value="{{$kelahiran->pekerjaan_ibu}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">NAMA SUAMI</label>
                                      <input name="nama_suami" type="text" class="form-control" readonly value="{{$kelahiran->nama_suami}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">UMUR SUAMI</label>
                                      <input name="umur_suami" type="text" class="form-control" readonly value="{{$kelahiran->umur_suami}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">PEKERJAAN SUAMI</label>
                                      <input name="pekerjaan_suami" type="text" class="form-control" readonly value="{{$kelahiran->pekerjaan_suami}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlTextarea1">ALAMAT</label>
                                    <textarea name="alamat_suami" class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{$kelahiran->alamat_suami}}</textarea>
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">TANGGAL LAHIR ANAK</label>
                                    <input name="tgl_lahir_anak" type="text" class="form-control" readonly value="{{$kelahiran->tgl_lahir_anak}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">JAM LAHIR</label>
                                  <input name="jam_lahir" type="text" class="form-control" readonly value="{{$kelahiran->jam_lahir}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">NAMA ANAK</label>
                                  <input name="nama_anak" type="text" class="form-control" readonly value="{{$kelahiran->nama_anak}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">JENIS KELAMIN</label>
                                  <input name="jk_anak" type="text" class="form-control" readonly value="{{$kelahiran->jk_anak}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">BERAT BADAN</label>
                                  <input name="bb_anak" type="text" class="form-control" readonly value="{{$kelahiran->bb_anak}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">PANJANG BADAN</label>
                                  <input name="pb_anak" type="text" class="form-control" readonly value="{{$kelahiran->pb_anak}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">TEMPAT LAHIR</label>
                                  <input name="tempat_lahir" type="text" class="form-control" readonly value="{{$kelahiran->tempat_lahir}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">ANAK KE</label>
                                  <input name="anak_ke" type="text" class="form-control" readonly value="{{$kelahiran->anak_ke}}">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="exampleInputEmail1">AGAMA</label>
                                  <input name="agama" type="text" class="form-control" readonly value="{{$kelahiran->agama}}">
                                </div>
                                  @if(auth()->user()->role=='Kepala Desa')
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">KONFIRMASI</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                      <option value="Ditolak" @if($kelahiran->status == 'Ditolak') selected @endif>Tolak</option>
                                      <option value="Disetujui" @if($kelahiran->status == 'Disetujui') selected @endif>Setujui</option>
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