@extends('Components.layout')

@section('title', 'Home')

@section('content')
<video autoplay muted loop class="video-background" preload="auto">
            <source src="/images/carvid4.mp4" type="video/mp4">
            Your browser does not support the video tag.
    </video>
    
    <section id="home" class="section">
        <div class="container">
            <header>
                <h1>Welcome</h1>
            </header>
        </div>
    </section>
@endsection
