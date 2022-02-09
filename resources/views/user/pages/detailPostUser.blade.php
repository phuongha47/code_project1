@extends('user.layouts.head')
@section('title','home')
@section('content')

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 single-content">
        @foreach($imgsPost as $img)
        @if ($img->imageable_id == $post->id)
        <a href="{{ route('userPost.show', $post->id) }}"><img style="width:50%" src="{{ $img->link }}" alt=""></a>
        @endif
        @endforeach

        <h1 class="mb-4">
          {{ $post->title }}
        </h1>
        <div class="post-meta d-flex mb-5">
          <div class="bio-pic mr-3">
            <p class="mb-5">
              @foreach($imgsPost as $img)
              @if ($img->imageable_id == $post->id)
              <a href="{{ route('userPost.show', $post->id) }}"><img style="width:80%" src="{{ $img->link }}" alt=""></a>
              @endif
              @endforeach
            </p>
          </div>

          <div class="vcard">
            <span class="d-block"><a href="#">{{ $post->user['name'] }}</a><a href="#"></a></span>
            <span class="date-read">{{ $post->created_at }} </span>
          </div>
        </div>

        <p>{!! $post->body !!}</p>

      </div>
      <div class="col-lg-4 ml-auto">
        <div class="section-title">
          <a>
            <h2>Popular Posts</h2>
          </a>
        </div>
        @foreach($latestPosts->slice(0, 4) as $k => $post)
        @if ($k > 0)
        <div class="post-entry-2 d-flex bg-light">
          @foreach($imgsPost as $img)
          @if ($img->imageable_id == $post->id)
          <a href="{{ route('userPost.show', $post->id) }}" class="mt-3 ml-3"><img style="width:100px; height:100px" src="{{ $img->link }}" alt=""></a>
          @endif
          @endforeach
          <div class="contents">
            <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
            <div class="post-meta">
              <span class="d-block">{{ \Illuminate\Support\Str::limit($post->body, 100, $end='...') }}in </span>
            </div>

          </div>
        </div>
        @endif
        @endforeach
      </div>

    </div>
  </div>
</div>
</div>


<div class="footer">
  <div class="container">


    <div class="row">
      <div class="col-12">
        <div class="copyright">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Sun asterisk <i class="icon-heart text-danger" aria-hidden="true"></i> </a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" />
  </svg></div>

@endsection
