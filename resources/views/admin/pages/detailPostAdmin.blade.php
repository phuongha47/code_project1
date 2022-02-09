@extends('admin.master_layout')

@section('pageTitle', 'Detail')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/resouce/meranda-master/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/jquery-ui.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/resouce/meranda-master/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/resouce/meranda-master/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/aos.css">
    <link href="/resouce/meranda-master/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/resouce/meranda-master/css/style.css">

</head>
<a href="{{ route('post.index') }}" class="btn btn-dark m-3">{{ __('messages.back') }}</a>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">
                @foreach($imgPosts as $img)
                @if ($img->imageable_id == $image_post->id)
                <a href="{{ route('userPost.show', $image_post->id) }}"><img style="width:50%" src="{{ $img->link }}"
                        alt=""></a>
                @endif
                @endforeach
                <h1 class="mb-4">
                    {{ $image_post->title }}
                </h1>
                <div class="post-meta d-flex mb-5">
                    <div class="bio-pic mr-3">
                        <p class="mb-5">
                            @foreach($imgPosts as $img)
                            @if ($img->imageable_id == $image_post->id)
                            <a href="{{ route('userPost.show', $image_post->id) }}"><img src="{{ $img->link }}"
                                    alt=""></a>
                            @endif
                            @endforeach
                        </p>
                    </div>

                    <div class="vcard">
                        <span class="d-block"><a href="#">{{ $image_post->user['name'] }}</a><a href="#"></a></span>
                        <span class="date-read">{{ $image_post->created_at }} </span>
                    </div>
                </div>

                <p>{!! $image_post->body !!}</p>

            </div>
        </div>
    </div>
</div>

</html>
@endsection