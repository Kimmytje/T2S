@extends('base')
@section('body')

    <body>
        <!-- Loading animation -->
        
        <header>
            <nav>
                <a href="{{'/'}}" class="logo">
                    <figure>
                        <img src="/images/logo.png" alt=" logo">
                    </figure>
                </a>

                <ul>
                    <li><a href="#">Homes</a></li>
                    <li><a href="#">Animals</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Get in Touch</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <!-- <footer>
            
        </footer> -->
    </body>
    
@endsection