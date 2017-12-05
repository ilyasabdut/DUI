@include('inc.header1');

       <div class="container">
        <div class="row">
            <div class="col-md-6">


                <form class="form-horizontal" method="POST" action="{{url('/admin/vPublicationMhs/edit',array($data->ID))}}">


                     {{csrf_field()}}

                      <fieldset>
                        <legend>UPDATE STUDENT PUBLICATION</legend>

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
                            <input type="text" name="NPM" class="form-control" id="inputNPM" value="<?php echo $data->NPM; ?>" placeholder="NPM">
                          </div>
                        </div>

                        <div class="form-group">
                              <label for="inputNama" class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-10">
                              <input type="text" name="Nama" class="form-control" id="inputNama" value="<?php echo $data->Nama; ?>" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputJudul" class="col-lg-2 control-label">Judul</label>
                            <div class="col-lg-10">
                                <input type="text" name="Judul" class="form-control" id="inputJudul" value="<?php echo $data->Judul; ?>" placeholder="Judul">
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputTahun" class="col-lg-2 control-label">Tahun</label>
                            <div class="col-lg-10">
                                <input type="date" name="Tahun" class="form-control" id="inputTahun" value="<?php echo $data->Tahun; ?>" placeholder="Tahun">
                            </div>
                        </div>


                        <div class="form-group">
                              <label for="inputKeterangan" class="col-lg-2 control-label">Keterangan</label>
                            <div class="col-lg-10">
                                <input type="text" name="Keterangan" class="form-control" id="inputKeterangan" value="<?php echo $data->Keterangan; ?>" placeholder="Keterangan">
                            </div>
                        </div>



                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button tupe="submit" class="btn btn-primary">Update</button>
                            <a href="{{url('/admin/vPublicationMhs/table')}}" class="btn btn-primary">Back</a>

                          </div>
                        </div>
                      </fieldset>
                </form>

            </div>
        </div>
</div>



@include('inc.footer1');
