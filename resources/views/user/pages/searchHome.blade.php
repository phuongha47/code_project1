@extends('user.layouts.head')
@section('title','home')
@section('content')
<br><br>
<div class="container">
  @if ($posts->total() < 2) <span class="caption">{{ __('messages.result') }}</span>
    <p> {{ $posts->total() }} {{ __('messages.result') }}</p>
    @else
    <span class="caption">{{ __('messages.results') }}</span>
    <p> {{ $posts->total() }} {{ __('messages.results') }}</p>
    @endif
    <div class="py-0">

      @if (!empty($posts))
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


          <div class="pt-5 ">

          </div>
        </div>
      </div>
      @endforeach
      @else
      ahahaaha
      @endif
      <div> {{ $posts->links("pagination::bootstrap-4")}}


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
                </script> Sun asterisk <i class="icon-heart text-danger" aria-hidden="true"></i></a>
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
