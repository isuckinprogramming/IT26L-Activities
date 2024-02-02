@extends('template.RequiredLayout')

@section('page title','Gotta try')

@section("head tags")
    {{-- <style>
        div{
            background-color: green;
        }
    </style> --}}
    {{-- I'm a fucking idiot --}}
    <link rel="stylesheet" href=" {{asset('css/HomepageStyle.css') }}">
    <script defer src="{{asset('js/HomepageScript.js')}}" ></script>
@endsection

@section('header content')
<div>
    <h3>HEADER</h3>
</div>
@endsection

@section('before main content')
<div>
    <h2>Before main content</h2>
    <p>Finally free from all the boilerplate</p>
</div>
@endsection

@section('main content')
<div class="mainContent">
    <div class="leftSideContent">
        <div class="lcontent">
            <h4>Left side content</h4>
        </div>
    </div>
    <div class="centerContent">
        <h1>MAIN CONTENT: I have no idea what to put here</h1>
        <p>CONTENTS: Some words here, this is to test random shit.</p>
    </div>
    <div class="rightSideContent">
        <h4>Right side content</h4>
    </div>
</div>

@endsection

@section('footer content')
    <div class="footercontent">
        <h3>
            FOOTER
        </h3>
    </div>
@endsection

@section('after main content')
<div>
    <p>AFTER MAIN CONTENT</p>
</div>
@endsection
