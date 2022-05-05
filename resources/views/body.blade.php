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
                </ul>

                <ul class="account-section">
                    <li class="btn btn-primary dropdown">
                        {{$user->first()->fName}}
                        <ul class="dropdown-content">
                            <li>
                                <figure>
                                    <img src="/media/Users/Melissa.jpg" alt="User profile"  class="avatar">
                                </figure>
                            </li>
                            <li><a href="#"> My Account </a></li>
                            <li><a href="#"> My Animals </a></li>
                            <li><a href="#"> My Homes </a></li>
                            <li><a href="#"> Switch Account </a></li>
                        </ul>
                    </li>
                    <li class="btn btn-secondary">Log out</li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <!-- <footer>
            
        </footer> -->
    </body>
    
@endsection