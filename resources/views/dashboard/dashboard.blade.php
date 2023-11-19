@extends('dashboard._layouts._app')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Welcome 👋!</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <div class="alert-body">
                            <p><strong>Hi!</strong> You are currently accessing the organization <strong><u>{{
                                        session('organization')->name }}</u></strong> dashboard with you as the
                                <strong><u>{{
                                        session('role')->name }}</u></strong>.
                            </p>
                            <p>If you want to change or access another organization, you can click on the profile
                                picture in the top right corner and select the organization you want to access.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush

@push('styles')
@endpush