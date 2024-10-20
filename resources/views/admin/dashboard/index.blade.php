@extends('layouts.admin.admin-layout')

@section('titulo', 'Dashboard')

@section('conteudo')
    @include('components.admin.dashboard.resumo')
    @include('components.admin.dashboard.partidas')
    @include('components.admin.dashboard.ultimas-partidas')
    @include('components.admin.dashboard.scouts')
    @include('components.admin.dashboard.videos')
    @include('components.admin.dashboard.blog')
@endsection
