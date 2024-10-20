@extends('layouts.admin.admin-layout')

@section('titulo', '')

@section('conteudo')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12">
                <h3></h3>
            </div>
        </div>
        <div class="col-12 col-md-12 d-flex float-left mt-2">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('')}}"></a></li>
                    <li class="breadcrumb-item"></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <hr>
            </div>
        </div>
    </div>
@endsection