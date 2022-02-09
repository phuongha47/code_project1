@extends('admin.master_layout')

@section('pageTitle', 'Search Post')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{ __('messages.listOfPost') }}</h6>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="table-responsive">
                        <form action="{{ route('post.search') }}" method="GET"
                            class="w-100 p-3 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control bg-light border-0 small mb-3"
                                    placeholder="{{  __('messages.search') }}" aria-label="Search"
                                    aria-describedby="basic-addon2" value="{{ $searchKeyWord }}">
                                <div class="input-group-append w-75 mr-5 mb-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form action="{{ route('post.deleteAll') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('messages.category') }}</th>
                                            <th>{{ __('messages.title') }}</th>
                                            <th>{{ __('messages.content') }}</th>
                                            <th class="col-2">{{ __('messages.action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td> {{ $loop->index }} </td>
                                            <td>{{ $post->category['name']}}</td>
                                            <td class="col-4 text-left">
                                                <a href="{{ route('post.show', $post->id) }}">
                                                    <h6>{{ $post->title }}</h6>
                                                </a>
                                            </td>
                                            <td class="col-7 text-left">
                                                <p>{{ \Illuminate\Support\Str::limit($post->body, 150, $end='...') }}
                                                </p>
                                            </td>
                                            <td class="col-3">
                                                <li class="list-inline-item">
                                                    <a href="{{ route('post.show', $post->id) }}"
                                                        class="btn btn-primary btn-sm mb-2">{{ __('messages.view') }}</i></a>
                                                    <br>
                                                    <a href="{{ route('post.edit', $post->id) }}"
                                                        class="btn btn-success btn-sm mb-2">{{ __('messages.edit') }}</a>
                                                    <br>

                                                    <button formaction="{{ route('post.destroy', $post->id) }}"
                                                        class="btn btn-danger btn-sm"
                                                        type="submit">{{ __('messages.delete') }}</button>
                                                </li>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $posts->links("pagination::bootstrap-4")}}
                            </div>
                    </div>
                </div>
                </form>
            </div>

        </div>
        @endsection