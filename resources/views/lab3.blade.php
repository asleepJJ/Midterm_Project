@extends('components.Layout')

@section('title', 'My Portfolio - Laboratory 3')

@section('content')
<div class="labs-container">
    <header>
        <h1 class="header-lab3-title">Laboratory 3 <br> (Layout)</h1>
    </header>

    <div class="lab3">
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
        <a href="{{ asset('documents/BUBAN_JeraldJay_lab3.pdf') }}" target="_blank">View Document File</a>
        <br>
        <a href="https://github.com/jellamarie/G5-Layout.git" target="_blank">Visit the Laboratory 3 Repository</a>
    </div>

</div>

@endsection
