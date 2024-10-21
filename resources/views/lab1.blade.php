@extends('components.Layout')

@section('title', 'My Portfolio - Laboratory 1')

@section('content')
<div class="labs-container">
    <header>
        <h1 class="header-lab1-title">Laboratory 1 <br> (SetUp)</h1>
    </header>

    <div class="lab1">
        <h3>DESCRIPTION</h3>
        <p>
        The laboratory 1 consist of the installation and configuration of LARAVEL. Wherein the objectives are to install and configure Laravel,
        setting up the database connection, creating a Laravel Project, and creating basic views and routes.  
        </p>
        <h3>SUMMARY</h3>
        <p>
        I learned how to install Herd via Laravel Herd and how to configure it. I also learned how to create my first project by using commandprompt(CMD)
        and configuring the environment settings. And I also created the three views (Home, About, and Contents) that will be the pages of my website and 
        I also learned that in naming the views it must have the .blade.php because The .blade.php extension indicates that this file uses Blade,
        Laravel’s templating engine. Blade allows you to use PHP code within your HTML templates in a clean and concise manner. I also learned to 
        define routes in the routes/web.php file, which is very important so that the website will work properly. Routes handles the user requests 
        that are intended to be viewed in a browser, routes manages the flow of the websites depending on what the user wanted.
        </p>
        <div>
        <a href="{{ asset('documents/BUBAN_JeraldJay_lab1.pdf') }}" target="_blank">View Document File</a>
        <br>
        <a href="https://github.com/asleepJJ/BUBAN_JeraldJay_lab1.git" target="_blank">Visit the Laboratory 1 Repository</a>
</div>

    </div>

</div>

@endsection
