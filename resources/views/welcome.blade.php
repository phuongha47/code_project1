@extends('user.layouts.head')
@section('title','home')
@section('content')

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <a>
                <h2>{{ __('messages.hotNews') }}</h2>
              </a>
            </div>
            @foreach ($latestPosts as $post)
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            @if ($loop->first)
            <div class="post-entry-1">
              @foreach($imgPosts as $img)
              @if ($img->imageable_id == $post->id)
              <img style="width:300px" src="{{ $img->link }}" alt="">
              @endif
              @endforeach
              <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
              <p>{!! \Illuminate\Support\Str::limit($post->body, 200, $end='...') !!}</p>
              @endif
              @endforeach
            </div>
          </div>

          <div class="col-md-6">

            @foreach($latestPosts as $k => $post)
            @if ($k > 1)
            <div class="post-entry-2 d-flex bg-light">
              @foreach($imgPosts as $img)
              @if ($img->imageable_id == $post->id)
              <a href="{{ route('userPost.show', $post->id) }}" class="mt-3 ml-3"><img style="width:150px; height:150px" src="{{ $img->link }}" alt=""></a>
              @endif
              @endforeach
              <div class="contents">
                <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                <div class="post-meta">
                  <span class="d-block">{!! \Illuminate\Support\Str::limit($post->body, 80, $end='...') !!} <a href="#"></a></span>
                </div>

              </div>
            </div>
            @endif
            @endforeach
            <p>
              <a href="{{ route('userCategory.showCategory', $worldPosts[0]->category['parent_id']) }}" class="more">{{ __('messages.seeAll') }} <span class="icon-keyboard_arrow_right"></span></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="section-title">
          <a>
            <h2>{{ __('messages.Trending') }}</h2>
          </a>
        </div>
        @foreach($worldPosts as $post)
        <div class="trend-entry d-flex">
          <div class="number align-self-start">{{ $loop->index + 1 }}</div>
          <div class="trend-contents">
            <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
            <div class="post-meta">
              <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span>{{ \Illuminate\Support\Str::limit($post->body, 275, $end='...') }}<span class="icon-star2"></span></span>
            </div>

          </div>
        </div>
        @endforeach
        <p>
          <a href="{{ route('userCategory.showCategory', $worldPosts[0]->category['parent_id']) }}" class="more">{{ __('messages.seeAll') }} <span class="icon-keyboard_arrow_right"></span></a>
        </p>

      </div>
    </div>

    <!-- END section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title">
              <a>
                <h2>{{ __('messages.World') }}</h2>
              </a>
            </div>
            @foreach($worldPosts as $post)
            <div class="post-entry-1 d-flex">
              @foreach($imgPosts as $img)
              @if ($img->imageable_id == $post->id)
              <a href="{{ route('userPost.show', $post->id) }}">
                <div class="thumbnail"><img style="width:150px" src="{{ $img->link }}" alt=""></div>
              </a>
              @endif
              @endforeach
              <div class="ml-3 contents">
                <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                <p class="mb-3">{{ \Illuminate\Support\Str::limit($post->body, 250, $end='...') }}</p>
              </div>
            </div>
            @endforeach
            <br>
            <a href="{{ route('userCategory.showCategory', $worldPosts[0]->category['parent_id']) }}" class="more">{{ __('messages.seeAll') }}<span class="icon-keyboard_arrow_right"></span></a>
          </div>


          <div class="col-lg-6">
            <div class="section-title">
              <a>
                <h2>{{ __('messages.Business') }}</h2>
              </a>
            </div>
            @foreach($businessPosts as $post)
            <div class="post-entry-1 d-flex">
              @foreach($imgPosts as $img)
              @if ($img->imageable_id == $post->id)
              <a href="{{ route('userPost.show', $post->id) }}">
                <div class="thumbnail"><img style="width:150px" src="{{ $img->link }}" alt=""></div>
              </a>
              @endif
              @endforeach
              <div class="ml-3 contents">
                <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                <p class="mb-3">{{ \Illuminate\Support\Str::limit($post->body, 250, $end='...') }}</p>
              </div>
            </div>
            @endforeach
            <br>
            <a href="{{ route('userCategory.showCategory', $worldPosts[0]->category['parent_id']) }}" class="more">{{ __('messages.seeAll') }}<span class="icon-keyboard_arrow_right"></span></a>
          </div>
        </div>



        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-9">
                <div class="section-title">
                  <a>
                    <h2>{{ __('messages.Tech') }}</h2>
                  </a>
                </div>
                @foreach($techPosts as $post)
                <div class="post-entry-2 d-flex">
                  @foreach($imgPosts as $img)
                  @if ($img->imageable_id == $post->id)
                  <a href="{{ route('userPost.show', $post->id) }}"><img style="width:150px" src="{{ $img->link }}" alt=""></a>
                  @endif
                  @endforeach
                  <div class="ml-3 contents order-md-1 pl-0">
                    <h2><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <p class="mb-3">{{ \Illuminate\Support\Str::limit($post->body, 250, $end='...') }}</p>
                  </div>
                </div>
                @endforeach
                <a href="{{ route('userCategory.showCategory', $techPosts[0]->category['parent_id']) }}" class="more">{{ __('messages.seeAll') }} <span class="icon-keyboard_arrow_right"></span></a>
              </div>

              <div class="col-lg-3">
                <div class="section-title">
                  <a>
                    <h2>{{ __('messages.Health') }} </h2>
                  </a>
                </div>
                @foreach($healthPosts as $post)
                <div class="trend-entry d-flex">
                  <div class="trend-contents">
                    @foreach($imgPosts as $img)
                    @if ($img->imageable_id == $post->id)
                    <a href="{{ route('userPost.show', $post->id) }}"><img style="width:90%" src="{{ $img->link }}" alt=""></a>
                    @endif
                    @endforeach
                    <h2 class="mt-2"><a href="{{ route('userPost.show', $post->id) }}">{{ $post->title }}</a></h2>

                  </div>
                </div>
                @endforeach

                <p>
                  <a href="{{ route('userCategory.showCategory', $healthPosts[0]->category['parent_id']) }}" class="more">{{ __('messages.seeAll') }} <span class="icon-keyboard_arrow_right"></span></a>
                </p>
              </div>
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
              </script> Sun asterisk<i class="icon-heart text-danger" aria-hidden="true"></i> </a>
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

<script src="resouce/meranda-master/js/jquery-3.3.1.min.js"></script>
<script src="resouce/meranda-master/js/jquery-migrate-3.0.1.min.js"></script>
<script src="resouce/meranda-master/js/jquery-ui.js"></script>
<script src="resouce/meranda-master/js/popper.min.js"></script>
<script src="resouce/meranda-master/js/bootstrap.min.js"></script>
<script src="resouce/meranda-master/js/owl.carousel.min.js"></script>
<script src="resouce/meranda-master/js/jquery.stellar.min.js"></script>
<script src="resouce/meranda-master/js/jquery.countdown.min.js"></script>
<script src="resouce/meranda-master/js/bootstrap-datepicker.min.js"></script>
<script src="resouce/meranda-master/js/jquery.easing.1.3.js"></script>
<script src="resouce/meranda-master/js/aos.js"></script>
<script src="resouce/meranda-master/js/jquery.fancybox.min.js"></script>
<script src="resouce/meranda-master/js/jquery.sticky.js"></script>
<script src="resouce/meranda-master/js/jquery.mb.YTPlayer.min.js"></script>

<script src="resouce/meranda-master/js/main.js"></script>

</body>

</html>
@endsection