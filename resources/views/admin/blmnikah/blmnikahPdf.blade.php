<link rel="stylesheet" type="text/css" href="print.css" />
<link rel="stylesheet" type="text/css" href="printstyle.css" />


<!DOCTYPE html>
<html>
<head>
	<title>Surat Belum Menikah {{$blmnikah->nama_lengkap}}</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
	<center>
		<table width="600">
			<tr>
				<td><img src="{{ asset('/assets/img/user/user-16.png') }}" width="90" height="90"></td>
				<td>
				<center>
					<font size="4">PEMERINTAH KABUPATEN KARAWANG</font><br>
					<font size="5"><b>DESA KARANG ANYAR</b></font><br>
                    <font size="4">KECAMATAN KLARI</font><br>
					<font size="2"><i>Kp. Pasirwaru, Telp 081574448493, Kode Pos 41371</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
	
		</table>
	
		<br>
        <table width="600">
			<tr>
		       <td>
                <center>
					<font size="3"> <u> <b>SURAT KETERANGAN BELUM MENIKAH</b> </u> </font><br>
                    <font size="2"> <b>Nomor: {{$blmnikah->no_surat}}</b> </font><br>
				</center>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="600">
			<tr>
		       <td>
			       <font size="2">Yang bertanda tangan dibawah ini, Kepala Desa Karang Anyar Kecamatan Klari
                     Kabupaten
                     Karawang, menerangkan dengan sebenarnya bahwa:.</font>
		       </td>
		    </tr>
		</table>
		<br>
		</table>
        
		<table width="450">
			<tr class="text2">
				<td>Nama</td>
				<td width="550">: {{$blmnikah->nama_lengkap}}</td>
			</tr>
			<tr>
				<td>NIK</td>
				<td width="525">: {{$blmnikah->nik}}</td>
			</tr>
			<tr>
				<td width="100">Jenis Kelamin</td>
				<td width="525">: {{$blmnikah->jenis_kelamin}}</td>
			</tr>
            <tr>
				<td>Tempat Lahir</td>
				<td width="525">: {{$blmnikah->tempat_lahir}}</td>
			</tr>
            <tr>
				<td>Tanggal Lahir</td>
				<td width="525">: {{$blmnikah->tanggal_lahir}}</td>
			</tr>
            <tr>
				<td>Agama</td>
				<td width="525">: {{$blmnikah->agama}}</td>
			</tr>
            <tr>
				<td>Pekerjaan</td>
				<td width="525">: {{$blmnikah->pekerjaan}}</td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td width="525">: {{$blmnikah->alamat}}</td>
			</tr>
		</table>
		<br>
		<table width="600">
			<tr>
		       <td>
			       <font size="2">Adalah benar penduduk Desa Karang Anyar Kecamatan Klari Kabupaten Karawang dengan status <b>Belum Menikah</b></font>
		       </td>
		    </tr>
		</table>
        <table width="600">
			<tr>
		       <td>
			       <font size="2">Demikian surat keterangan ini kami buat dengan sebenarnya agar dapat digunakan seperlunya.
</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">Karawang, {{$blmnikah->updated_at}}<br>Kepala Desa Karang Anyar<br> <img src="{{ asset('/assets/img/user/paraf.jpg') }}" width="80px"> <br> <b><u>HENRY IRAWAN</u></b></td>
			</tr>
	     </table>
	</center>
</body>
</html>