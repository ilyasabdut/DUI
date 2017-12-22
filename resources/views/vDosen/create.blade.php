@include('inc.header1');

<div class="container">
		<div class="row">
			<div class="col-md-6">


				<form class="form-horizontal" method="POST" action="{{('/admin/vDosen/insert')}}" enctype="multipart/form-data">


					 {{csrf_field()}}

					  <fieldset>
					    <legend>Dosen</legend>
					    @if(count($errors) > 0)
					    	@foreach($errors->all() as $error)

					    		<div class="alert alert-danger">
					    			{{$error}}
					    		</div>

					    	@endforeach
					    @endif





					    <div class="form-group">
					      <label for="inputNIDN" class="col-lg-2 control-label">NIDN</label>
					      <div class="col-lg-10">
					        <input type="text" name="NIDN" class="form-control" id="inputNIDN" placeholder="NIDN">
					      </div>
					    </div>

					    <div class="form-group">
						      <label for="inputNama" class="col-lg-2 control-label">Nama</label>
						    <div class="col-lg-10">
						      <input type="text" name="Nama" class="form-control" id="inputNama" placeholder="Nama">
						    </div>
						</div>

						<div class="form-group">
						      <label for="inputPembimbing" class="col-lg-2 control-label">Email</label>
						    <div class="col-lg-10">
						        <input type="text" name="Email" class="form-control" id="inputEmail" placeholder="Email">
						    </div>
						</div>
						<div class="form-group">
						      <label for="image" class="col-lg-2 control-label">Foto</label>
						    <div class="col-lg-10">
						        <input type="file" name="image" class="form-control" id="image">
						    </div>
						</div>





					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					        <button type="reset" class="btn btn-default">Reset</button>
					        <button type="submit" class="btn btn-primary">Submit</button>
  					        <a href="{{url('/admin/vDosen/table')}}" class="btn btn-default">Back</a>
					      </div>
					    </div>
					  </fieldset>
				</form>

			</div>
		</div>
</div>


@include('inc.footer1');
