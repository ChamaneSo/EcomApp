@php $link = 'products' @endphp

@extends('merchants.app.layout')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('merchants.products.create') }}" class="btn btn-primary">Create</a>
    </div>
    @endsection

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Index</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endsection
