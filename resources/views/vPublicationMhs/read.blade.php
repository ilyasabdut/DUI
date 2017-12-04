
@include('inc.header1');

	<div class="container">
			<div class="row">
			 <legend>READ STUDENT PUBLICATION</legend>
				   		<p>{{$data->ID}}</p>
						<p>{{$data->NPM}}</p>
						<p>{{$data->Nama}}</p>
						<p>{{$data->Judul}}</p>
						<p>{{$data->Tanggal}}</p>
						<p>{{$data->Keterangan}}</p>
			</div>
		</div>

@include('inc.footer1');
