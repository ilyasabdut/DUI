@include('inc.header1');

<div class="container">
		<div class="row">
			<div class="col-md-6">


				<form class="form-horizontal" method="POST" action="{{url('/admin/vDosen/edit',array($data->ID))}}" enctype="multipart/form-data">



					 {{csrf_field()}}

					  <fieldset>
					    <legend>UPDATE LECTURER</legend>
					    @if(count($errors) > 0)
					    	@foreach($errors->all() as $error)

					    		<div class="alert alert-danger">
					    			{{$error}}
					    		</div>

					    	@endforeach
					    @endif
					    
					    <div class="form-group">
					      <label for="inputNPM" class="col-lg-2 control-label">NIDN</label>
					      <div class="col-lg-10">
					        <input type="text" name="NIDN" class="form-control" value="<?php echo $data->NIDN;  ?>" id="inputNIDN" placeholder="NIDN">
					      </div>
					    </div>

					    <div class="form-group">
						      <label for="inputNamaDosen" class="col-lg-2 control-label">Nama</label>
						    <div class="col-lg-10">
						      <input type="text" name="Nama" class="form-control" value="<?php echo $data->Nama; ?>" id="inputNamaDosen" placeholder="Nama">
						    </div>
						</div>

						<div class="form-group">
						      <label for="inputPembimbing" class="col-lg-2 control-label">Email</label>
						    <div class="col-lg-10">
						        <input type="text" name="Email" class="form-control" 
						        value="<?php echo $data->Email; ?>" id="inputEmail" placeholder="Email">
						    </div>
						</div>
						
						

					       
					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					        <button type="reset" class="btn btn-default">Reset</button>
					        <button type="submit" class="btn btn-primary">Update</button>

  					        <a href="{{url('/admin//vDosen/table')}}" class="btn btn-default">Back</a>

  					        <a href="{{url('/admin/vDosen/table')}}" class="btn btn-default">Back</a>

					      </div>
					    </div>
					  </fieldset>
				</form>

			</div>
		</div>
</div>


@include('inc.footer1');
