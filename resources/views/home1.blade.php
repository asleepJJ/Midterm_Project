@extends('components.Layout')

@section('title', 'My Portfolio - Home')

@section('content')
<div class="container home-container">
    <header>
        <h1 class="header-portfolio-title">Welcome to <br> MY PORTFOLIO!</h1>
    </header>
    <div class="introduction">
        <p>
        "Welcome to my portfolio, this is the compilation of the hands-on laboratory activities and its documentation. 
        Each laboratory activity shows my understanding and what I learned so far, 
        demonstrating my journey through various technical challenges and solutions."
        </p>
    </div>

    <div class="lab-container">
        <a href="{{ url('/lab1') }}" class="lab">
            <img src="{{ asset('images/lab1.png') }}" alt="lab 1" class="lab-image">
        </a>

        <a href="{{ url('/lab2') }}" class="lab">
            <img src="{{ asset('images/lab2.png') }}" alt="lab 2" class="lab-image">
        </a>

        <a href="{{ url('/lab3') }}" class="lab">
            <img src="{{ asset('images/lab3.png') }}" alt="lab 3" class="lab-image">
        </a>

        <a href="{{ url('/lab4') }}" class="lab">
            <img src="{{ asset('images/lab4.png') }}" alt="lab 4" class="lab-image">
        </a>
    </div>

</div>
@endsection
