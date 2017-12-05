
@include('inc.header1');

	<div class="container">
			<div class="row">
			 <legend>READ LECTURER</legend>
				   		<p>{{$data->ID}}</p>
						<p>{{$data->NIDN}}</p>
						<p>{{$data->Nama}}</p>
						<p>{{$data->Email}}</p>
			</div>
		</div>

@include('inc.footer1');
