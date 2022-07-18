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
                <h4><i class="fas-fa-edit"></i> DATA PENGAJU SURAT DOMISILI </h4>
                <form action="/domisili/{{$domisili->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1">NIK</label>
                        <input name="nik" type="text" class="form-control" readonly value="{{$domisili->nik}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="exampleInputEmail1">NAMA</label>
                          <input name="nama" type="text" class="form-control" readonly value="{{$domisili->nama}}">
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                          <input name="jenis_kelamin" type="text" class="form-control" readonly value="{{$domisili->jenis_kelamin}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">TEMPAT LAHIR</label>
                            <input name="tempat_lahir" type="text" class="form-control" readonly value="{{$domisili->tempat_lahir}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">TANGGAL LAHIR</label>
                            <input name="tanggal_lahir" type="text" class="form-control" readonly value="{{$domisili->tanggal_lahir}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">KEWARGANEGARAAN</label>
                            <input name="kewarganegaraan" type="text" class="form-control" readonly value="{{$domisili->kewarganegaraan}}">
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleInputEmail1">AGAMA</label>
                          <input name="agama" type="text" class="form-control" readonly value="{{$domisili->agama}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">PEKERJAAN</label>
                            <input name="pekerjaan" type="text" class="form-control" readonly value="{{$domisili->pekerjaan}}">
                          </div>
                        <div class="form-group mb-2">
                          <label for="exampleFormControlTextarea1">ALAMAT</label>
                          <textarea name="alamat" class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{$domisili->alamat}}</textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleFormControlSelect1">KONFIRMASI</label>
                            <select name="status" class="form-control" id="exampleFormControlSelect1">
                              <option value="Ditolak" @if($domisili->status == 'Ditolak') selected @endif>Tolak</option>
                              <option value="Disetujui" @if($domisili->status == 'Disetujui') selected @endif>Setujui</option>
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary mt-3">Konfirmasi</button>
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