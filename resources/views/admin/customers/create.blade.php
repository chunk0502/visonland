@extends('admin.layouts.master')
@push('libs-css')
@endpush
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                    class="text-muted">{{ __('Dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.customer.index', $user->id) }}"
                                                           class="text-muted">{{ __('Danh sách của ') }}{{$user->fullname}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Thêm Customers cho ') }}{{$user->fullname}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.user.customer.store')" type="post" :validate="true">
                <div class="row justify-content-center">
                    <x-input type="hidden" name="user_id" :value="$user->id" />
                    @include('admin.customers.forms.create-left')
                    @include('admin.customers.forms.create-right')
                </div>
            </x-form>
        </div>
    </div>
@endsection

@push('libs-js')
<script src="{{ asset('public/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('public/libs/ckeditor/adapters/jquery.js') }}"></script>
@include('ckfinder::setup')
@include('admin.articles.scripts.create-script')
@endpush

@push('custom-js')

@endpush
