
@include('inc.header1');

	<div class="container">
			<div class="row">
			 <legend>READ ALUMNI</legend>
				   		<p>{{$data->ID}}</p>
						<p>{{$data->NPM}}</p>
						<p>{{$data->Nama}}</p>
						<p>{{$data->Pembimbing}}</p>
						<p>{{$data->Tanggal}}</p>
						<p>{{$data->Penguji}}</p>
						<p>{{$data->Judul}}</p>
			</div>
		</div>

@include('inc.footer1');
