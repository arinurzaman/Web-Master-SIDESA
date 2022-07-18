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
                <form action="/kematian/{{$kematian->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="card mt-4">
                      <h5 class="card-header bg-blue-700 text-white">Informasi Detail Pengajuan Surat Kematian</h5>
                      
                      <div class="card-body">
                          
                        @if(auth()->user()->role=='Administrator')
                          <a href="/kematian/{{$kematian->id}}/selesai" class="btn btn-success btn-icon-split mb-3">
                              <span class="text">Selesai</span>
                          </a>
  
                          <a href="/kematian/{{$kematian->id}}/confirm" class="btn btn-warning btn-icon-split mb-3">
                              <span class="text">Sedang diproses</span>
                          </a>
  
                          <a href="/kematian/{{$kematian->id}}/tolak" class="btn btn-danger btn-icon-split mb-3">   
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
                                    <input name="status" type="text" class="form-control" readonly value="{{$kematian->status}}">
                                  </div>
                                  @endif
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">NAMA PELAPOR</label>
                                    <input name="nama_pelapor" type="text" class="form-control" readonly value="{{$kematian->nama_pelapor}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">UMUR</label>
                                    <input name="umur_pelapor" type="text" class="form-control" readonly value="{{$kematian->umur_pelapor}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">PEKERJAAN</label>
                                      <input name="pekerjaan_pelapor" type="text" class="form-control" readonly value="{{$kematian->pekerjaan_pelapor}}">
                                    </div>
                                    <div class="form-group mb-2">
                                      <label for="exampleFormControlTextarea1">ALAMAT</label>
                                      <textarea name="alamat_pelapor" class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{$kematian->alamat_pelapor}}</textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">AGAMA</label>
                                      <input name="agama_pelapor" type="text" class="form-control" readonly value="{{$kematian->agama_pelapor}}">
                                    </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">NIK</label>
                                      <input name="nik_pelapor" type="text" class="form-control" readonly value="{{$kematian->nik_pelapor}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">NAMA JENAZAH</label>
                                      <input name="nama_jenazah" type="text" class="form-control" readonly value="{{$kematian->nama_jenazah}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">JENIS KELAMIN</label>
                                    <input name="jk_jenazah" type="text" class="form-control" readonly value="{{$kematian->jk_jenazah}}">
                                </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">TEMPAT LAHIR</label>
                                    <input name="tempat_lahir_jenazah" type="text" class="form-control" readonly value="{{$kematian->tempat_lahir_jenazah}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">TANGGAL LAHIR</label>
                                    <input name="tanggal_lahir_jenazah" type="text" class="form-control" readonly value="{{$kematian->tanggal_lahir_jenazah}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">AGAMA</label>
                                    <input name="agama_jenazah" type="text" class="form-control" readonly value="{{$kematian->agama_jenazah}}">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="exampleInputEmail1">NAMA BAPAK</label>
                                      <input name="ibu_jenazah" type="text" class="form-control" readonly value="{{$kematian->ayah_jenazah}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">NAMA IBU</label>
                                    <input name="ibu_jenazah" type="text" class="form-control" readonly value="{{$kematian->ibu_jenazah}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">ALAMAT</label>
                                    <input name="alamat_jenazah" type="text" class="form-control" readonly value="{{$kematian->ibu_jenazah}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">HARI MENINGGAL</label>
                                    <input name="hari_meninggal" type="text" class="form-control" readonly value="{{$kematian->hari_meninggal}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">TANGGAL MENINGGAL</label>
                                    <input name="tanggal_meninggal" type="text" class="form-control" readonly value="{{$kematian->tanggal_meninggal}}">
                                  </div>
                                  <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">TEMPAT MENINGGAL</label>
                                    <input name="tempat_meninggal" type="text" class="form-control" readonly value="{{$kematian->tempat_meninggal}}">
                                  </div>
                                  
                                  @if(auth()->user()->role=='Kepala Desa')
                                  <div class="form-group mb-2">
                                    <label for="exampleFormControlSelect1">KONFIRMASI</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                      <option value="Ditolak" @if($kematian->status == 'Ditolak') selected @endif>Tolak</option>
                                      <option value="Disetujui" @if($kematian->status == 'Disetujui') selected @endif>Setujui</option>
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