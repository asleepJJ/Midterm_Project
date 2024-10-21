@extends('components.Layout')

@section('title', 'My Portfolio - Laboratory 4')

@section('content')
<div class="labs-container">
    <header>
        <h1 class="header-lab4-title">Laboratory 4 <br> (Middleware)</h1>
    </header>

    <div class="lab4">
        <h3>DESCRIPTION</h3>
        <p>
        The laboratory 4 is about Middleware. Defining middleware, registering middleware (global middleware, assingning middleware to routes, middleware groups), 
        middleware parameters, and terminable middleware.
        </p>
        <h3>SUMMARY</h3>
        <p>
        In Laboratory 4, I learned how to create and implement middleware in Laravel, which acts as a filter for HTTP requests. 
        Middleware can inspect or modify requests before they reach the application. 
        I used this knowledge to create a middleware that checks if a user is of the correct age (e.g., 18 or older) that directs 
        and gives the user access to the pages, and if the user is below 18, the user is redirected to an "Access Denied" page 
        and can’t access the remaining pages. And also, if the user inputs an age above 21, there will be a page that will prompt to the user 
        saying that it’s the “Restricted Area” but still, they can access the remaining pages. Understanding how to register and apply middleware 
        to specific routes helped me manage access control and improve security in the web application for my Laboratory 4.
        </p>
        <a href="{{ asset('documents/BUBAN_JeraldJay_lab4.pdf') }}" target="_blank">View Document File</a>
        <br>
        <a href="https://github.com/jellamarie/Middleware.git" target="_blank">Visit the Laboratory 4 Repository</a>
    </div>

</div>

@endsection
