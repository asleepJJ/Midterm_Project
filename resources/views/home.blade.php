@extends('components.Layout')

@section('title', 'My Portfolio - Home')

@section('content')
<div class="container home-container">
    <header>
        <h1 class="header-portfolio-title">Welcome to <br> MY PORTFOLIO!</h1>
    </header>
    <div class="introduction">
        <p>
        "This is the compilation of the hands-on laboratory activities i've done and its documentations. 
        Each laboratory activity shows my understanding and what I learned so far, 
        demonstrating my journey through various technical challenges and solutions."
        </p>
        <form action="{{ url('/welcome') }}" method="get">
            <button type="submit" class="btn btn-primary sign-in-button">Get Started</button>
        </form>
    </div>
</div>
@endsection
