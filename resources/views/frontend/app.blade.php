@extends('frontend.layouts.master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-xs-12 homepage-box">
                <div class="row full-height">
                    <div class="col-md-12 col-xs-12 full-height p-0">
                        <div class="owl-carousel owl-theme" id="owl-carousel">
                            @foreach($carouselFeaturedBlogs as $blog)
                                <div class="owl-carousel-item">
                                    <img src="{{asset('uploads/images/original/'.$blog->featured_image)}}"
                                         alt="{{$blog->title}}" class="img img-responsive image-full-w-h">
                                    <div class="owl-carousel-caption">
                                        <div class="owl-carousel-title">
                                            <p>{{$blog->title}}</p>
                                        </div>
                                        <div class="owl-carousel-text">
                                            <i class="fa fa-calendar"></i>
                                                {{$blog->created_at}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-xs-12 col-sm-12 px-2">
                <div class="col-md-12 col-xl-12 px-0">
                    @foreach($singleFeaturedBlog as $blog)
                        <div class="homepage-box border-radius-12 height-180">
                            <img src="{{asset('uploads/images/original/'.$blog->featured_image)}}"
                                 alt="{{$blog->title}}" class="img responsive image-full-w-h">
                            <div class="blog-caption">
                                <div class="blog-title">
                                    {{$blog->title}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="row mt-2">
                        @foreach($doubleFeaturedBlogs as $blog)
                            <div class="col-md-6 col-xl-6 col-sm-6 padding-{{$loop->index ==0 ?'right' :'left'}}-2">
                                <div class="homepage-box border-radius-12 height-180">
                                    <a href="">
                                    <img src="{{asset('uploads/images/original/'.$blog->featured_image)}}"
                                         alt="{{$blog->title}}" class="img responsive image-full-w-h">
                                    <div class="blog-caption">
                                        <div class="blog-title">
                                            {{$blog->title}}
                                        </div>
                                    </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
  @include('frontend.pages.homepage-blog')
@endsection


