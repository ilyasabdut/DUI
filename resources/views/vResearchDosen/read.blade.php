
@include('inc.header1');

	<div class="container">
			<div class="row">
			 <legend>READ RESEARCH LECTURER</legend>
				   		<P>{{$data->ID}}</P>
						<P>{{$data->NIDN}}</P>
						<P>{{$data->Nama}}</P>
						<P>{{$data->Judul}}</P>
						<P>{{$data->Tahun}}</P>
						<P>{{$data->Jenis}}</P>
			</div>
		</div>

@include('inc.footer1');
