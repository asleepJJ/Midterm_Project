@extends('components.Layout')

@section('title', 'My Portfolio - About Me')

@section('content')
<div class="container about-container">
    <div class="heading">
            <h1>About Me</h1>
            <p>Name: Jerald Jay G. Buban
                <br>
                Course, Year, Bloc: BS Information Technology - 3C
                <br>
                Age: 20 years old
                <br>
                E-mail: <a href="https://jjgb2022-7633-85760@bicol-u.edu.ph" target="_blank">jjgb2022-7633-85760@bicol-u.edu.ph</a>

            </p>
            
    </div>
</div>
<br>
    <h2>Me if I'm a Cat</h2>
        <div class="cat-cards">
            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                    <img src="{{ asset('images/cat1.jpg') }}" alt="Cat1">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*me when starting to study* ^_^</b></p>
                </div>
            </div>
          
            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="{{ asset('images/cat2.jpg') }}" alt="Cat2">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*after 5 minutes* <br> (get distracted easily)</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="{{ asset('images/cat3.jpg') }}" alt="Cat3">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*always sleepy*<br>._.</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="{{ asset('images/cat4.jpg') }}" alt="Cat4">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*clingy*<br> >_<</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="{{ asset('images/cat5.jpg') }}" alt="Cat5">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*even the cat have a boyfriend, can't relate*</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="{{ asset('images/cat6.jpg') }}" alt="Cat6">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*low mood but friend's trying to be friendly*</b></p>
                </div>
            </div>

        </div>
@endsection