
@include('inc.header1');

	<div class="container">
			<div class="row">
			 <legend>READ RESEARCH STUDENT</legend>
				   		<P>{{$data->ID}}</P>
						<P>{{$data->NPM}}</P>
						<P>{{$data->Nama}}</P>
						<P>{{$data->Judul}}</P>
						<P>{{$data->Tanggal}}</P>
						<P>{{$data->Jenis}}</P>
			</div>
		</div>

@include('inc.footer1');
