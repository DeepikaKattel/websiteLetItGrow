<nav id="#navbar-top" class="navbar navbar-expand-lg navbar-dark sticky">
    <div class="container text-uppercase p-2">
        <a class="navbar-brand font-weight-bold text-white" href="#">
            <figure class="swing float-right">
                <img src="{{asset('images/logoFull.png')}}"/>
            </figure>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{--                    mr-auto brings list in left side where as ml-auto makes the list stay in the right side--}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('vision')}}">Vision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('career')}}">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
