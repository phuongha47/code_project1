@extends('admin.master_layout')

@section('pageTitle', 'Edit Category')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> 🔹{{ __("messages.editCategory") }} </h1>
        <a href="{{ route('category.search') }}"></a>
    </div>

    <!-- Content -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div>
                        <div>
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('messages.fillCategoryInfomation') }}</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('category.update', $category->id) }}">
                                    {{ method_field('PUT') }}
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3 form-group">
                                            <label class="control-label"
                                                for="title"><b>{{ __('messages.name') }}</b></label>
                                            <input cols="30" type="text" name="name" class="form-control"
                                                value="{{ $category->name }}">
                                        </div>
                                        <select name="parent_id" class="form-control" id="sel1"
                                            value="{{ $category->parent_id }}">
                                            <option value="1">level-1</option>
                                            <option value="2">level-1-1</option>
                                        </select>
                                        <input type="submit" value="{{ __('messages.submit') }}"
                                            class="btn btn-primary mt-5">
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @if ($errors->any())
    <div class="alert alert-danger w-25 alert_center">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection