@extends('user.layouts.head')
@section('title','home')
@section('content')

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="section-title">
          <a>
            <h2>{{ $parentName }}</h2>
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
            <p class="w-30"> {{ \Illuminate\Support\Str::limit($post->body, 350, $end='...') }}</p>
            <div class="post-meta">
              <span class="d-block"><a href="#">{{ $post->user['name'] }} </a> <a href="#"></a></span>
              <span class="date-read">{{ $post->created_at }} </span>
              <i class=".flaticon-clock"></i>
            </div>

            <div class="pt-3 ">
              <h6 class="mb-4">
                <a>{{ __('messages.category') }} : {{ $post->category->name }}</a>
              </h6>

            </div>
          </div>
        </div>
        @endforeach
        <div> {{ $posts->links("pagination::bootstrap-4")}}

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
            </script> Sun asterisk<i class="icon-heart text-danger" aria-hidden="true"></i></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </div>
  </body>
  @endsection
