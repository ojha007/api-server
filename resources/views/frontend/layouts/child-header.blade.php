@if($level < 6)
    @foreach($children as $child)
        <li>
            <a href="{{count($child->children) >0 ? '#' :url('category/' .$child->slug)}}">
                {{$child->name}}
                @if(count($child->children)>0)
                    <span class='toggle2'></span>
                @endif
            </a>
        @if(count($child->children) >0)
            <ul class="dropdown2">
                @include('frontend.layouts.child-header',["children" => $child->children, "level" => $level + 1])
            </ul>
        @endif
        </li>
    @endforeach
@endif
