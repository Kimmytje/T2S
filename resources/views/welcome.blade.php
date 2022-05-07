@section('title')
    {{"Passen Op Je Dier | Welcome"}}
@endsection

@extends('base')
@section('body')
<body>
    <main class="area">
        <section class="content">
            <h1 class="context">Welcome</h1>

            <button onclick="window.location.href='/login'" class="btn btn-primary btn-welcome">Log in</button>
            <button onclick="window.location.href='/register'" class="btn btn-secondary btn-welcome">Sign up</button>
        </section>

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </main>
</body>
    
@endsection