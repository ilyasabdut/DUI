@include('inc.header1');

<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="POST" action="{{url('/admin/vAlumni/edit',array($data->ID))}}">

					 {{csrf_field()}}

					  <fieldset>
					    <legend>Rubah Data Alumni</legend>
					    @if(count($errors) > 0)
					    	@foreach($errors->all() as $error)

					    		<div class="alert alert-danger">
					    			{{$error}}
					    		</div>

					    	@endforeach
					    @endif

					    <div class="form-group">
					      <label for="inputNPM" class="col-lg-2 control-label">NPM</label>
					      <div class="col-lg-10">
					        <input type="text" name="NPM" class="form-control" value="<?php echo $data->NPM;  ?>" id="inputNPM" placeholder="NPM">
					      </div>
					    </div>

					    <div class="form-group">
						      <label for="inputNama" class="col-lg-2 control-label">Nama</label>
						    <div class="col-lg-10">
						      <input type="text" name="Nama" class="form-control" value="<?php echo $data->Nama; ?>" id="inputNama" placeholder="Nama">
						    </div>
						</div>

						<div class="form-group">
						      <label for="inputPembimbing" class="col-lg-2 control-label">Pembimbing</label>
						    <div class="col-lg-10">
						        <input type="text" name="Pembimbing" class="form-control"
						        value="<?php echo $data->Pembimbing; ?>" id="inputPembimbing" placeholder="Pembimbing">
						    </div>
						</div>

						<div class="form-group">
						      <label for="inputTanggal" class="col-lg-2 control-label">Tanggal</label>
						    <div class="col-lg-10">
						        <input type="date" name="Tanggal" class="form-control" value="<?php echo $data->Tanggal; ?>" id="inputTanggal" placeholder="Tanggal">
						    </div>
						</div>


						<div class="form-group">
						      <label for="inputPenguji" class="col-lg-2 control-label">Penguji</label>
						    <div class="col-lg-10">
						        <input type="text" name="Penguji" class="form-control" value="<?php echo $data->Penguji; ?>" id="inputPenguji" placeholder="Penguji">


						<div class="form-group">
					      <label for="inputJudul" class="col-lg-2 control-label">Judul</label>
						    <div class="col-lg-10">
						        <input type="text" name="Judul" class="form-control" value="<?php echo $data->Judul; ?>" id="inputJudul" placeholder="Judul">

						    </div>
						</div>

						<div class="form-group">
					      <label for="inputJudul" class="col-lg-2 control-label">Judul</label>
						    <div class="col-lg-10">
						        <input type="text" name="Judul" class="form-control" value="<?php echo $data->Judul; ?>" id="inputJudul" placeholder="Judul">

						      <label for="inputAngkatan" class="col-lg-2 control-label">Angkatan</label>
						    <div class="col-lg-10">
						        <input type="text" name="Angkatan" class="form-control" value="<?php echo $data->Angkatan; ?>" id="inputAngkatan" placeholder="Angkatan">

						      <label for="inputTanggalMasuk" class="col-lg-2 control-label">Tanggal Masuk</label>
						    <div class="col-lg-10">
						        <input type="date" name="TanggalMasuk" class="form-control" value="<?php echo $data->TanggalMasuk; ?>" id="inputTanggalMasuk" placeholder="TanggalMasuk">
						    </div>
						</div>


					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					        <button type="reset" class="btn btn-primary">Reset</button>
					        <button type="submit" class="btn btn-primary">Update</button>
  					        <a href="{{url('/admin/vAlumni/table')}}" class="btn btn-primaryt">Back</a>
					      </div>
					    </div>
					  </fieldset>
				</form>

			</div>
		</div>
</div>


@include('inc.footer1');
