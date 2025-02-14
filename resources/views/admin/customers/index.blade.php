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
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}"
                                                           class="text-muted">{{ __('Thành viên') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('listOfCustomer') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h2 class="mb-0">{{ __('Danh sách Customers') }} - <x-link class="text-primary" :href="route('admin.user.edit', $user->id)" :title="$user->fullname" /> - <x-link class="text-primary" :href="route('admin.user.edit', $user->id)" :title="$user->refferal_code" /></h2>
                    <x-link :href="route('admin.user.customer.create', $user->id)" class="btn btn-primary"><i class="ti ti-plus"></i>{{ __('Thêm khách hàng') }}</x-link>
                </div>
                <div class="card-body">
                    <div class="table-responsive position-relative">
                        <x-admin.partials.toggle-column-datatable />
                        {{$dataTable->table(['class' => 'table table-bordered', 'style' => 'min-width: 900px;'], true)}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('libs-js')
<!-- button in datatable -->
<script src="{{ asset('/public/vendor/datatables/buttons.server-side.js') }}"></script>
@endpush

@push('custom-js')

{{ $dataTable->scripts() }}

@include('admin.customers.scripts.datatable')

@endpush
