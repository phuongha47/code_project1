@extends('user.layouts.head')
@section('title','home')
@section('content')
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="section-title">
          <a>
            <h2>{{ $posts[0]->category['name'] }}</h2>
          </a>
        </div>
        @foreach($posts as $post)

        <div class="post-entry-2 d-flex">
          @foreach($imgPosts as $img)
          @if ($img->imageable_id == $post->id)
          <img style="width:250px" src="{{ $img->link }}" alt="">
          @endif
          @endforeach
          <div class="ml-3 contents order-md-1 pl-0">
            <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
            <p class="mb-3"> {{ \Illuminate\Support\Str::limit($post->body, 350, $end='...') }}</p>
            <div class="post-meta">
              <span class="d-block"><a href="#">{{ $post->user['name'] }} </a> <a href="#"></a></span>
              <span class="date-read">{{ $post->created_at }}</span>
            </div>
            <br>
            <h6 class="mb-4">
              <a>{{ __('messages.category') }} : {{ $post->category->name }}</a>
            </h6>
          </div>

        </div>

        @endforeach
        <div> {{ $posts->links("pagination::bootstrap-4")}}

        </div>
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
            </script>Sun asterisk<i class="icon-heart text-danger" aria-hidden="true"></i> </a>
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
