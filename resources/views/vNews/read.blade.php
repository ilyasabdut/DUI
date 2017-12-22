
@include('inc.header1')
<script src="{{URL::to('/')}}/Asset/ckeditor/ckeditor.js"></script>

<div class="table-heading">
					<h2>Berita</h2>
				</div>
            @if(session('info'))
                  <div class="alert alert-success">
              {{session('info')}}
                  </div>
            @endif
            <div class="panel panel-default">
              <div class="panel-heading">
			      	                <a href='{{url("/admin/vNews/update/{$data->ID}")}}' class="label label-primary">EDIT </a>
                        </div>
												<font size="20"><p style="text-align:center"><strong>{{$data->Judul}}</strong></p></font>
												<P><?php echo $data->Isi; ?></P>
												<script type="text/javascript">
				                if ( typeof CKEDITOR == 'undefined' )
				                {
				                  document.write(
				                    'CKEditor not found');
				                }
				                else
				                {
				                var editor = CKEDITOR.replace( 'editor1' );
				                CKFinder.setupCKEditor( editor, '' ) ;
				                }
				                </script>

												<P>{{$data->Tag}}</P>
                    </div>
                </div>
            </div>
        </div>
@include('inc.footer1')
