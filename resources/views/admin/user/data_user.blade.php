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
                    <h4 class="panel-title">Pengguna Aplikasi</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-primary" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
				</div>
                <div class="card-body">
                    <td width="1%"><a href="#modal-tambah" class="btn btn-sm btn-primary w-100px" data-bs-toggle="modal">Tambah Data</a></td>
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
								<th class="text-nowrap">Role</th>
								<th class="text-nowrap">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data_user as $user)
          						<tr>
									<td>{{$user->nik}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->role}}</td>
								<td class="text-center">
									<a href="/user/{{$user->id}}/detail" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a>
									<a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-circle" onclick="return confirm('Yakin menghapus data?')" ><i class="fas fa-trash"></i></a>
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
						<h4 class="modal-title">Input Data User</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
					</div>
					<div class="modal-body">
						<form action="/user/create" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
							  <label for="exampleInputEmail1">NIK</label>
							  <input name="nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIK">
							</div>
							<div class="form-group mt-2">
								<label for="exampleFormControlSelect1">Role</label>
								<select name="role" class="form-control" id="exampleFormControlSelect1">
								  <option value="Administrator">Administrator</option>
								  <option value="Kepala Desa">Kepala Desa</option>
								</select>
							  </div>
							<div class="form-group mt-2">
								<label for="exampleInputEmail1">NAMA</label>
								<input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
							  </div>
							  <div class="form-group mt-2">
								<label for="exampleInputEmail1">EMAIL</label>
								<input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
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