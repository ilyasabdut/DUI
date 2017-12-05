@include('inc.header1');

<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="POST" action="{{url('/admin/vPartnership/edit',array($data->ID))}}">

                     {{csrf_field()}}

                      <fieldset>
                        <legend>UPDATE PARTNERSHIP</legend>

                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)

                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>

                            @endforeach
                        @endif



                        <div class="form-group">
                          <label for="inputPartner" class="col-lg-2 control-label">Partner</label>
                          <div class="col-lg-10">
                            <input type="text" name="Partner" class="form-control" id="inputPartner" value="<?php echo $data->Partner; ?>" placeholder="Partner">
                          </div>
                        </div>

                        <div class="form-group">
                              <label for="inputProgram" class="col-lg-2 control-label">Program</label>
                            <div class="col-lg-10">
                              <input type="text" name="Program" class="form-control" id="inputProgram" value="<?php echo $data->Program; ?>" placeholder="Program">
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputJenis" class="col-lg-2 control-label">Jenis</label>
                            <div class="col-lg-10">
                                <input type="text" name="Jenis" class="form-control" id="inputJenis" value="<?php echo $data->Jenis; ?>" placeholder="Jenis">
                            </div>
                        </div>


                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{url('/admin/vPartnership/table')}}" class="btn btn-default">Back</a>
                          </div>
                        </div>
                      </fieldset>
                </form>

            </div>
        </div>
</div>



@include('inc.footer1');
