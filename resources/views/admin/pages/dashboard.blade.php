@extends('admin.master_layout')

@section('pageTitle', 'Dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> 🔹{{ __('messages.dashboard') }} </h1>
    </div>

    <!-- Content -->
    <a href="{{ route('home.index') }}" class="btn btn-light btn-icon-split">
        <span class="icon text-gray-600">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">{{ __('messages.goToHome') }}</span>
    </a>

</div>
@endsection
