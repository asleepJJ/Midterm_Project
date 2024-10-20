@extends('components.Layout')

@section('title', 'My Portfolio - Welcome')

@section('content')
<header>
    <h1 class="header-portfolio-title">MY PORTFOLIO!</h1>
    <img src="{{ asset('/images/cat.jpg') }}" alt="Description of the image" class="welcome-image">
</header>

<div class="container">
    <div class="form-box">
        <form action="{{ url('/home1') }}" method="GET">
            <label for="username">Enter your username:</label>
            <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required>
        </form>
            <br><br>
        <form action="{{ route('store.age') }}" method="POST">
        @csrf
            <label for="age">Enter your age:</label>
            <input type="text" name="age"  id="age" required min="1" max="100">
            <div class="submit-home">
            <button type="submit">Submit</button>  
            </div>
        </form>
            
       
    </div>
</div>


@endsection