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

@section("nav links")
    {{-- ul>(li>a{Link $:To be filled with}[class="navigate-links" href="#"])*4 --}}
    <a href="#" class="navigate-links">Link 1:To be filled with</a>
    <a href="#" class="navigate-links">Link 2:To be filled with</a>
    <a href="#" class="navigate-links">Link 3:To be filled with</a>
    <a href="#" class="navigate-links">Link 4:To be filled with</a>
@endsection

@section('header content')

<div class="header-content">
    <div>
        <h1>I suck in CSS</h1>
        <p>Garbage below</p>
    </div>
</div>
@endsection

@section('before main content')
<div class="before-main">
    <h2>Before main content</h2>
    <p>Finally free from all the boilerplate,
        now I just have to worry about my actual content.</p>
</div>
@endsection

@section('main content')
<div class="mainContent">
    <div class="leftSideContent">
        <div class="lcontent">
            <h4>SIDE BAR</h4>
            <br><br>
            <p>I have no idea what goes here,
                when I was making this, I tried to copy the look of
                the example in w3schols.
                <br><br>
                Turns out copying whatever I see
                that works, will not work for my
                very specific needs.
                <br><br>
                Oh no, anyway.
                <br><br>
                Ignore this side bar.
            </p>
        </div>
    </div>
    <div class="centerContent">
        <h1 class="title-of-main-content">Creation process this Project</h1>
        <p>First off, I don't have a name for this project so I will keep on referring to this
            project as this project.
            <br>
            <br>
            I don't have much of a clue as to how I am going to handle this project.
            All I know is that there are requirements to be filled which is why I just put
            together whatever I can to this thing. Which I should not have done.
            <br>
            <br>
            Proper planning is important, important to ignore.
            <br>
            <br>
            I think I had a bare minimum of a plan when making this project,
            all I planned(??????) to do was use a <code>main</code>,
            <code>header</code> ,<code>footer</code> , and <code>nav</code>. So
            this part is what I did first.
            <br>
            <br>
            The next step should have design the page. I did somewhat make a design for the
            page, at least it is not bare bones text. Yeah it is shit.
            <br>
            <br>
            So I left the design part and wandered of-course(browsing random things I forgot)
            and then slept during the afternoon, and then after dinner electricity went out, then
            I started working on the actual content of the wholepage this evening (around 9pm, Feb 1,2024).
            <br>
            <br>
            The deadline of this activity is tommorow morning at 8 am.
            <br>
            <br>
            I am efficiently inefficient.
            <br>
            <br>
            I spent most of my time in wandering around VSC and then back to YT to select a
            different music. This workflow is heavily influenced by my self-diagnosed ADHD.
            <br>
            <br>
            Start work-then go to YT-back to work.
            <br>
            <br>
            I tried to integrate a mysql database to store data on the content of the
            page. I mean I want to store all the data of the page to a table and
            just inject the content to a <code>blade</code> file.
            <br>
            <br>
            But, I tried searching how to do exactly that but the thing is hard to implement.
            <br>
            <br>
            I have to learn how to use the Eloquent ORM first and then how blade works with
            the ORM, in receiving data. I'm not even planning to receive data and the process
            is just way too complicated(I think).
            <br>
            <br>
            I have not tried out retrieving data from a mysql table and then displaying it
            on the page. Tried once, but I forgot the process, I have not coded for 5 days since
            the last activity, so I am forgetting some if not most of the basics when using
            laravel.
            <br>
            <br>
            So I abandoned my plan of using the mysql database to store data - retrieve data - diplayed data.
            <br>
            <br>
            I think, I am going to take a long time when in learning how the tool works before
            I actually work on what I want, displaying the stored data.
    </div>
    <div class="rightSideContent">
        <h4>Right side content</h4>
        <p>This portion is actually useless</p>
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
<div class="after-main">
    <p>AFTER MAIN CONTENT</p>
</div>
@endsection
