
<!--
I begin to speak only when I am certain
what I will say is not better left unsaid.

- Cato the Younger
I'm keeping the qoute
-->
@extends('template.RequiredLayout')

@section('page title','Gotta try')
@section("stylesheets")
<link rel="stylesheets" href=" asset('css/app.css') ">

@section('header')
<div>
    <h3>So this is the header which I absolutely have no idea what to do with</h3>
</div>

@section('before main content')
<div>
    <p>Finally free from all the boilerplate</p>
</div>

@section('main content')
<div>
    <h1>This is The main content: I have no idea what to put here</h1>
    <p>Some words here, this is to test random shit.</p>
</div>

@section('after main content')
<div>
    <p>No idea what goes here</p>
</div>
@section('footer')
<div>
    <h3>Something should be inside the footer</h3>
</div>
