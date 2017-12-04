@include('inc.header1')
<script src="{{URL::to('/')}}/Asset/ckeditor/ckeditor.js"></script>
<div class="table-heading">
	<h2>News Tables</h2>
</div>

@if(session('info'))
<div class="alert alert-success">
  {{session('info')}}
</div>
@endif
<div class="panel panel-default">
  <div class="panel-heading">
			      	  <a href='{{url("admin/vNews/create")}}' class="label label-primary"><i class="glyphicon glyphicon-pencil"></i> Create </a>
                </div>
                <div class="panel-body">
                <table id="datatable-responsive" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th width="">ID</th>
                        <th width="">Judul</th>
                        <th width="">Isi</th>
                        <th width="">Gambar</th>
                        <th width="230px">Action</th>
                        </tr>
                      </thead>


                      @if(count($data)>0)
                      @foreach ($data as $dat)
                          <tr>
                             <td>{{$dat->ID}}</td>
                            <td>{{$dat->Judul}}</td>

                            <td>
                              <?php
                              $artikel = $dat->Isi;
                              $tag_artikel = strip_tags($artikel);
                              $sub_artikel = substr($tag_artikel,0,70)." . . .";
                              echo $sub_artikel;
                              ?>
                            </td>
                            <td><img src="{{ asset('image/berita/'.$dat->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                            <td>
                              <a href='{{url("/admin/vNews/read/{$dat->ID}")}}' class="label label-primary"><i class="glyphicon glyphicon-list-alt"></i> Read </a>  &nbsp;
                              <a href='{{url("/admin/vNews/update/{$dat->ID}")}}' class="label label-success"><i class="glyphicon glyphicon-edit"></i> Update </a>  &nbsp;
                              <a href='{{url("/admin/vNews/delete/{$dat->ID}")}}'  class="label label-danger"><i class="glyphicon glyphicon-trash"></i> Delete </a>
                            </td>
                          </tr>
                      @endforeach
                      @endif
                      </tbody>

 
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('inc.footer1')
