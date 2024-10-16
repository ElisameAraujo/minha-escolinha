@extends('layouts.admin.admin-layout')

@section('titulo', 'Dashboard')

@section('conteudo')
    @include('components.dashboard.resumo')
    @include('components.dashboard.partidas')
    @include('components.dashboard.ultimas-partidas')
    @include('components.dashboard.scouts')
    @include('components.dashboard.videos')
    @include('components.dashboard.blog')
@endsection
