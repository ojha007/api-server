<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">Tech News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach($navbars as $item)
                <li class="nav-item">
                    <a class="nav-link" href="{{count($item->children) >0 ? '' :url($item->slug)}}">{{$item->name}}</a>
                </li>
                @if(count($item->children)>0)
                    <li class="dropdown">
                        <ul class="dropdown-menu">
                            @foreach($item->children as $child)
                                <a class="dropdown-item" href="{{url('/category', $child->slug)}}">{{$child->name}}</a>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


