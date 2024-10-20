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
        "Welcome to my portfolio, this is the compilation of the hands-on laboratory activities and its documentation. 
        Each laboratory activity shows my understanding and what I learned so far, 
        demonstrating my journey through various technical challenges and solutions."
        </p>
        <h3>SUMMARY</h3>
        <p>
        "Welcome to my portfolio, this is the compilation of the hands-on laboratory activities and its documentation. 
        Each laboratory activity shows my understanding and what I learned so far, 
        demonstrating my journey through various technical challenges and solutions."
        </p>
        <div>
        <a href="{{ asset('documents/BUBAN_JeraldJay_lab1.pdf') }}" target="_blank">View Document File</a>
        <br>
        <a href="https://github.com/asleepJJ/BUBAN_JeraldJay_lab1.git" target="_blank">Visit the Laboratory 1 Repository</a>
</div>

    </div>

</div>

@endsection
