@extends('base')
@section('body')

    <body>
        <!-- Loading animation -->
        
        <header>
            <nav>
                <a href="/home" class="logo">
                    <figure>
                        <img src="/images/logo.png" alt=" logo">
                    </figure>
                </a>

                <ul>
                    <li><a href="/homes">Homes</a></li>
                    <li><a href="/animals">Animals</a></li>
                </ul>

                <ul class="account-section">
                    <li class="btn btn-primary dropdown">
                        {{$user->username}}
                        <ul class="dropdown-content">
                            <li>
                                <figure>
                                    <img src="{{$user->media}}" alt="User profile"  class="avatar">
                                </figure>
                            </li>
                            <li><a href="#"> My Account </a></li>
                            <li><a href="#"> My Animals </a></li>
                            <li><a href="#"> My Homes </a></li>
                        </ul>
                    </li>
                    <li class="btn btn-secondary"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav>
        </header>

        @yield('content')

        <!-- <footer>
            
        </footer> -->
    </body>
    
@endsection