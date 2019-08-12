@if($level < 6)
    @foreach($children as $child)
        <li class="dropdown-submenu nav-item">
            <a href="#"  class="nav-link" data-toggle="dropdown">{{$child->name}}</a>
        @if(count($child->children) >0)
            <ul class="dropdown-menu ">
                @include('Frontend.layouts.child-header',["children" => $child->children, "level" => $level + 1])
            </ul>
        @endif
        </li>
    @endforeach
@endif
