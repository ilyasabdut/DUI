@include('inc.new_header')
  <div class="container">
<hr>
<hr>
<hr>
<hr>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">News</li>
  </ol>
  @if(count($data)>0)
  @foreach  ($data as $dat)
  <div class="col-lg-6 col-md-6 col-sm-6">
    <div class="single_blog_archive wow fadeInUp">
      <div class="blogimg_container">
        <a class="blog_img" href='{{url("/vUser/showNews/{$dat->ID}")}}'>
          <img src="{{ asset('image/berita/'.$dat->gambar)  }}" alt="img">
        </a>
      </div>
      <h2 class="blog_title"><a href='{{url("/vUser/showNews/{$dat->ID}")}}'>{{$dat->Judul}}</a></h2>
      <p class="blog_summary">
        <?php
        $artikel = $dat->Isi;
        $tag_artikel = strip_tags($artikel);
        $sub_artikel = substr($tag_artikel,0,100)." . . .";
        echo $sub_artikel;
        ?>
      </p>
      <a href='{{url("/vUser/showNews/{$dat->ID}")}}' class="blog_readmore">Read More</a>
    </div>
  </div>
  @endforeach
  @endif
</div>
{!! $data->links(); !!}
<hr>
</div>
</div>
    <!-- /.container -->
@include('inc.new_footer')
