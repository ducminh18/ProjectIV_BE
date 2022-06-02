@extends('home.layouts.home-layout')
@section('title')
    Trang chủ
@endsection
@section('page-title')
    Trang chủ
@endsection
@section('content')
    @include('home/partial/slider')
    @include('home/partial/banner')
@endsection
@section('scripts')
    <script src="/assets/home/js/homeController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
