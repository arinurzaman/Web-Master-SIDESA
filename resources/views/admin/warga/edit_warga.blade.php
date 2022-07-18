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
                <h3><i class="fas-fa-edit"></i> EDIT DATA WARGA </h3>
            
            
                <form action="/warga/{{$warga->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1">NIK</label>
                        <input name="nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIK" value="{{$warga->nik}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="exampleInputEmail1">NAMA</label>
                          <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{$warga->nama}}">
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleInputEmail1">TEMPAT LAHIR</label>
                          <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tempat Lahir" value="{{$warga->tempat_lahir}}">
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleInputEmail1">TANGGAL LAHIR</label>
                          <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Lahir" value="{{$warga->tanggal_lahir}}">
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleInputEmail1">KATEGORI</label>
                          <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kategori" value="{{$warga->kategori}}">
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                          <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="L" @if($warga->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                            <option value="P" @if($warga->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleInputEmail1">USIA</label>
                          <input name="usia" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Usia" value="{{$warga->usia}}">
                        </div>
                        <div class="form-group mb-2">
                          <label for="exampleFormControlTextarea1">ALAMAT</label>
                          <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$warga->alamat}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
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