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

			<!-- BEGIN panel -->
			<div class="panel panel-inverse mt-4">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading bg-blue-700 text-white">
                    <h4 class="panel-title">Data Warga Desa Karanganyar</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-primary" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
				</div>
                <div class="card-body">
                    <td width="1%"><a href="#modal-tambah" class="btn btn-sm btn-primary w-100px" data-bs-toggle="modal">Tambah Data</a></td>
                    <td width="1%"><a href="#modal-import" class="btn btn-sm btn-warning w-100px" data-bs-toggle="modal">Import Data</a></td>
                </div>
                
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<table id="data-table-default" class="table table-striped table-bordered align-middle">
						<thead>
							<tr>
								{{-- <th width="1%"></th>
								<th width="1%" data-orderable="false"></th> --}}
								<th class="text-nowrap">NIK</th>
								<th class="text-nowrap">Nama</th>
								<th class="text-nowrap">Jenis Kelamin</th>
								<th class="text-nowrap">Usia</th>
								<th class="text-nowrap">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data_warga as $warga)
          						<tr>
									<td>{{$warga->nik}}</td>
									<td>{{$warga->nama}}</td>
									<td>{{$warga->jenis_kelamin}}</td>
									<td>{{$warga->usia}}</td>
								<td class="text-center">
									<a href="/warga/{{$warga->id}}/detail" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a>
									<a href="/warga/{{$warga->id}}/delete" class="btn btn-danger btn-circle" onclick="return confirm('Yakin menghapus data?')" ><i class="fas fa-trash"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- END panel-body -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END #content -->

		<div class="modal fade" id="modal-tambah">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Input Data Warga</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
					</div>
					<div class="modal-body">
						<form action="/warga/create" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
							  <label for="exampleInputEmail1">NIK</label>
							  <input name="nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIK">
							</div>
							<div class="form-group mt-2">
								<label for="exampleInputEmail1">NAMA</label>
								<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
							  </div>
							  <div class="form-group mt-2">
								<label for="exampleInputEmail1">TEMPAT LAHIR</label>
								<input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tempat Lahir">
							  </div>
							  <div class="form-group mt-2">
								<label for="exampleInputEmail1">TANGGAL LAHIR</label>
								<input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Lahir">
							  </div>
							  <div class="form-group mt-2">
								<label for="exampleInputEmail1">EMAIL</label>
								<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
							  </div>
							  <div class="form-group mt-2">
								<label for="exampleFormControlSelect1">Jenis Kelamin</label>
								<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
								  <option value="Laki-laki">Laki-laki</option>
								  <option value="Perempuan">Perempuan</option>
								</select>
							  </div>
							  <div class="form-group mt-2">
								<label for="exampleInputEmail1">USIA</label>
								<input name="usia" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Usia">
							  </div>
							  <div class="form-group mt-2">
								<label for="exampleFormControlTextarea1">ALAMAT</label>
								<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      							<button type="submit" class="btn btn-teal">Submit</button>
								</div>  
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modal-import">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Pilih Data Import</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
					</div>
					<div class="modal-body">
						<form action="/warga/import" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group mb-3">
								<a href="/warga/download" class="btn btn-success"><i class="fas fa-download"></i> Format file</a>
							  </div>
							  <div class="form-group mb-3">
								<input type="file" name="file" required="required">
							  </div>

							  <div class="modal-footer">

								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      							<button type="submit" class="btn btn-teal">Submit</button>
							</div>  
						</div>
						</form>
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