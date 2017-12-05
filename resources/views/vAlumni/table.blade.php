@include('inc.header1')
<script src="{{URL::to('/')}}/Asset/ckeditor/ckeditor.js"></script>
<div class="table-heading">
<h2>Alumni Tables</h2>
</div>
@if(session('info'))
<div class="alert alert-success">
{{session('info')}}
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">
			      	             <a href='{{url("admin/vAlumni/create")}}' class="label label-primary"><i class="glyphicon glyphicon-pencil"></i> Create </a>  &nbsp;

                                 <a href='{{url("admin/vAlumni/upload")}}' class="label label-success"><i class="glyphicon glyphicon-sort"></i> Import/Export </a>


                        </div>
                        <div class="panel-body">
                            <table id="datatable-responsive" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th>No</th>
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Pembimbing</th>
                                        <th>Tanggal</th>
                                        <th>Penguji</th>
                                        <th>Judul</th>
                                        <th width="230">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($data)>0)
				  						          @foreach ($data as $dat)
                                    <tr>
									   	                <td>{{$dat->ID}}</td>
											                <td>{{$dat->NPM}}</td>
                                      <td>{{$dat->Nama}}</td>
                                      <td>{{$dat->Pembimbing}}</td>
                                      <td>{{$dat->Tanggal}}</td>
                                      <td>{{$dat->Penguji}}</td>
                                      <td>{{$dat->Judul}}</td>
                                      <td>
									      	              <a href='{{url("/admin/vAlumni/read/{$dat->ID}")}}' class="label label-primary"><i class="glyphicon glyphicon-list-alt"></i> Read </a>  &nbsp;
									      	              <a href='{{url("/admin/vAlumni/update/{$dat->ID}")}}' class="label label-success"><i class="glyphicon glyphicon-edit"></i> Update </a>  &nbsp;
									      	              <a href='{{url("/admin/vAlumni/delete/{$dat->ID}")}}'  class="label label-danger"><i class="glyphicon glyphicon-trash"></i> Delete </a>
									                    </td>
									                  </tr>
									              @endforeach
									              @endif
                                </tbody>
                            </table>
                            <div class="text-center">
                              {!! $data->links(); !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('inc.footer1')
