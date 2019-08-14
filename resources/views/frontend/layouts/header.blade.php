<div id='main-menu' class='main-menu'>
    <div class='container-menu'>
        <nav class='navigation'>
      <span class='hamburger-menu'>Navigate
        <span class='burger-1'></span>
        <span class='burger-2'></span>
        <span class='burger-3'></span>
      </span>
            <ul class='core-menu'>
                @foreach($navbars as $item)
                    <li>
                        <a href="{{count($item->children) >0 ? '#' :url($item->slug)}}">
                            {{$item->name}}
                            @if(count($item->children)>0)
                                <span class='toggle'></span>
                            @endif
                        </a>
                        @if(count($item->children)>0)
                            <ul class='dropdown'>
                                @include('frontend.layouts.child-header',['children' => $item->children,'level'=>1])
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

</div>
@section('custom-js')
    <script>
        $(document).ready(function () {
            $(".core-menu li").hover(function () {
                    $(this).children('ul').slideDown({duration: 400});
                },
                function () {
                    $('ul', this).slideUp('fast');
                });
            $(".hamburger-menu").click(function () {
                $(".burger-1, .burger-2, .burger-3").toggleClass("open");
                $(".core-menu").slideToggle("fast");
            });
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                width:100
            })
        });
    </script>
@endsection


