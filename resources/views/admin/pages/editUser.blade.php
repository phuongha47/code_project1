@extends('admin.master_layout')

@section('pageTitle', 'Edit User')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> 🔹{{ __("messages.editUser") }} </h1>
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
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('messages.fillUser') }}</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('user.update', $user->id) }}">
                                    <div class="form-group">
                                        {{ method_field('PUT') }}
                                        @csrf
                                        <div class="mb-3 form-group">
                                            <label class="control-label"
                                                for="content"><b>{{ __('messages.Username') }}</b></label>
                                            <input cols="30" rows="10" type="text" name="name" class="form-control"
                                                value="{{ $user->name }}"></input>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label class="control-label"
                                                for="content"><b>{{ __('messages.email') }}</b></label>
                                            <input cols="30" rows="10" type="text" name="email" class="form-control"
                                                value="{{ $user->email }}"></input>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label class="control-label"
                                                for="content"><b>{{ __('messages.Password') }}</b></label>
                                            <input cols="30" rows="10" type="password" name="password"
                                                class="form-control"></input>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label class="control-label"
                                                for="content"><b>{{ __('messages.ComfirmPassword') }}</b></label>
                                            <input cols="30" rows="10" type="password" name="password_confirmation"
                                                class="form-control"></input>
                                        </div>
                                        <label for=""><b>{{ __('messages.roleLevel') }}</b></label>
                                        <select name="role_id" class="form-control" id="sel1">
                                            <option value="1">{{ __('messages.user') }}</option>
                                            <option value="2">{{ __('messages.admin') }}</option>
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