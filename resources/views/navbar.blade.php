<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}">SLC, IIT Madras</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{route('blog.index')}}">Blog</a>
                </li>
                <li>
                    <a href="{{route('constitution')}}">Constitution</a>
                </li>
                <li>
                    <a href="{{route('members')}}">Members</a>
                </li>
                <li>
                    <a href="{{route('documents')}}">Documents</a>
                </li>
                <li>
                    <a href="{{route('gallery')}}">Gallery</a>
                </li>
                {{-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quick Links
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="divider"></li>
                        <li>
                            <a href="{{route('minutes')}}">Minutes</a>
                        </li>
                        <li>
                            <a href="{{route('finances')}}">Finances</a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li> --}}
                </ul>
            <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('contact')}}">Contact</a>
                </li>
                <li>
                @if (Route::has('login'))
                    @auth
                    <a href="{{ route('admin') }}">Admin Home</a>
                </li>
                    {{-- @else --}}
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        @endauth
                @endif
                </li>
                {{-- <li>
                    <a href="{{route('about')}}">About</a>
                </li> --}}
                <li>
                    <a href="http://www.iitm.ac.in"> IIT Madras
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/69/IIT_Madras_Logo.svg/1200px-IIT_Madras_Logo.svg.png" width="17px">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

