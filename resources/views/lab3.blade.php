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
        The laboratory 3 is all about the Layout File, like its directory structure, folder creation, and its purpose. 
        About defining layouts in blade, blade directives and its uses, and layout file with blade directives. 
        </p>
        <h3>SUMMARY</h3>
        <p>
        In Laboratory 3, I learned how to create a layout file using Blade, which serves as a template for other views. 
        Instead of writing the same HTML structure repeatedly, I now use a layout file to define the general structure of the website, 
        such as headers, footers, and navigation bars. This saved me a lot of time and made the code cleaner.
        I applied Blade directives such as "@ extends", "@ section", and "@ yield" to let specific pages inherit the layout and insert unique content, making the site consistent and efficient. 
        I also used other Blade features like “@ csrf” to protect forms from cross-site request forgery (CSRF) attacks. 
        By setting up routes in “web.php” to serve these views and learned how to handle route-to-view connections effectively, 
        I streamlined the development process and made the code cleaner and more organized for this lab.
        </p>
        <a href="{{ asset('documents/BUBAN_JeraldJay_lab3.pdf') }}" target="_blank">View Document File</a>
        <br>
        <a href="https://github.com/jellamarie/G5-Layout.git" target="_blank">Visit the Laboratory 3 Repository</a>
    </div>

</div>

@endsection
