
@include('inc.header1');

	<div class="container">
			<div class="row">
			 <legend>Publikasi Dosen</legend>
				   		<p>{{$data->ID}}</p>
						<p>{{$data->NIDN}}</p>
						<p>{{$data->Nama}}</p>
						<p>{{$data->Judul}}</p>
						<p>{{$data->Tanggal}}</p>
						<p>{{$data->Keterangan}}</p>
			</div>
		</div>

@include('inc.footer1');
