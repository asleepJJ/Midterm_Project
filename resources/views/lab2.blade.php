@extends('components.Layout')

@section('title', 'My Portfolio - Laboratory 2')

@section('content')
<div class="labs-container">
    <header>
        <h1 class="header-lab2-title">Laboratory 2 <br> (Routes)</h1>
    </header>

    <div class="lab2">
        <h3>DESCRIPTION</h3>
        <p>
        The Laboratory 2 is all about Laravel route concepts of URI and a closure. 
        Learning how to provide a very simple and expressive method of defining routes behavior without complicated routing configuration.
        </p>
        <h3>SUMMARY</h3>
        <p>
        Making the Laboratory 2 involved understanding of key concepts in Laravel, specifically the routes. 
        By using the basic routing, I learned how to define routes using URI, and how routes map requests to specific views. 
        This helped me understand how Laravel directs traffic, ensuring that the correct page loads when a user navigates to a specific URL. 
        I also used the concept of view routes, which allowed me to directly return views. Understanding how named routes work also made my 
        navigation more efficient, as I could easily generate URLs or redirects using route names. 
        And lastly, I learned to define a route with a required parameter like (the route must accept a username parameter and display it and 
        if the user doesn’t input a username, it’ll be default to “Guest”), and to apply regular expression constraints to the route parameters.
        </p>
        <a href="{{ asset('documents/BUBAN_JeraldJay_lab2.pdf') }}" target="_blank">View Document File</a>
        <br>
        <a href="https://github.com/jellamarie/Group5.git" target="_blank">Visit the Laboratory 2 Repository</a>
    </div>

</div>

@endsection
