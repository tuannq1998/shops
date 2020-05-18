@extends('layouts.app_master_frontend')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://www.dangquangwatch.vn/min/?g=css"/>
    <link rel="stylesheet" href="{{asset('css/home.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/daugia.js')}}">
    <script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NM8PGKC');</script>
    @stop
@section('content')
<h2>Home</h2>
    @stop
@section('script')
    <script src="{{asset('js/home.js')}}}" type="text/javascript"></script>
    <script src="https://www.dangquangwatch.vn/min/?g=js"></script>
@stop
