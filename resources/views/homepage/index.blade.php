@extends('template.RequiredLayout')

@section('page title','Task 4')

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
    <a href="#" class="navigate-links">Link 1:no link</a>
    <a href="#" class="navigate-links">Link 2:no link</a>
    <a href="#" class="navigate-links">Link 3:no link</a>
    <a href="#" class="navigate-links">Link 4:no link</a>
@endsection

@section('header content')

<div class="header-content">
    <div>
        <h1>I suck in CSS</h1>
        <p>Garbage below</p>
    </div>
</div>
@endsection

@section('main content')
<div class="mainContent">
    <div class="centerContent">
        <h1 class="title-of-main-content">Creation Process: This Project</h1>
        <p>I don't have a name for this project so I will keep on referring to this
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
            <br><br>
            The design process is messy. Building without a plan, and going straigth to code
            is definitely not suitable for the long run.
            <br><br>
            A good example of a problem that I ran into while making this homepage without planning
            is that I don't have a proper naming scheme for the images that I am planning to use.
            <br><br>
            Now I am stuck trying to type out the long names I used for the images.
            <br><br>
            Creating the styles for this homepage was a good reviewer for the basics of CSS,
            I explored how to use the CSS flex and grid for creating layouts. I would have to use
            them sooner or later.
            <br><br>
            I think I have to study more about the units of measurement in CSS,
            studying the available options for relative positioning and measurement
            would greatly help. I spent majority of my time searching the web and
            asking chat gpt what a unit of measurement is for and what it does.
            <br><br>
            One day, some daaayy, I will do the things that I am typing.
        </p>
        <p>
            <strong>I did not use any images for the reasons:</strong>
            <br><br>
            1.project because I am not sure how the images
            will behave with the grid and flex. I am
            still on the process of reviewing the basics
            of css, so I do not want to complicate things
            and spend most of the time debugging.(Which
            I am not familiar, IDK how it works
            with a laravel project and the browser environment)
            <br><br>
            The page looks dry without the images. I think it is
            better for the page to be dry
            looking rather than be littered with images that
            breaks the layout and style.
            <br>
            <br>
            <br>
            2. I did not plan for this project.
            <br>
            <br>
            <br>
            <br>
            My bad
        </p>
    </div>
</div>

@endsection

@section('footer content')
    <div class="footercontent">
        <h3>
            FOOTER
        </h3>
        <h6>
            I don't have anything here.....
        </h6>
        <p>
            I cannot set the border-radius of the footer element. I tried and
            I failed.
        </p>
    </div>
@endsection
