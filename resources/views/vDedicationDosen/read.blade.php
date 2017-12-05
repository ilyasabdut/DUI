
@include('inc.header1');

	<div class="container">
			<div class="row">
			 <legend>READ LECTURER SOCIAL ENGAGEMENT</legend>
				   		<P>{{$data->ID}}</P>
						<P>{{$data->NIDN}}</P>
						<P>{{$data->Nama}}</P>
						<P>{{$data->Tempat}}</P>
						<P>{{$data->Jenis}}</P>
						<P>{{$data->Tanggal}}</P>
			</div>
		</div>

@include('inc.footer1');
