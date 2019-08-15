<div class="container mb-5">
    <div class="row">
        <div class="col-md-9  col-lg-9 col-xl-9 col-sm-9">
            <div class="page-title pb-4 latest-blog-title">
                <h5><span>Latest Blogs </span></h5>
                <hr>
            </div>
            <div class="col-md-12  col-sm-12 p-0 ">
                @foreach($carouselFeaturedBlogs as $blog)
                    <div class="item pb-3 mt-3 pt-3">
                        <div class="row p-0">
                            <div class="  col-sm-3 col-md-3">
                                <div class="blog-image">
                                    <img src="{{asset('uploads/images/original/'.$blog->featured_image)}}"
                                         alt="{{$blog->title}}"
                                         class="img img-responsive image-full-w-h">
                                </div>
                            </div>
                            <div class=" col-sm-9 col-md-9  ">
                                <div class="blog-text p-2">
                                    <div class="latest-blog-title">
                                        {{$blog->title}}
                                    </div>
                                    <div class="latest-blog-meta-tag">
                                        <i class="fa fa-pencil"></i>
                                        {{$blog->created_at}}
                                    </div>
                                    <div class="latest-blog-text">
                                        {!! $blog->summary !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-sm-3">
            <div class="stay-connect ">
                <div class="page-title">
                    <h5><span>Stay Connect</span></h5>
                </div>
            </div>

        </div>
    </div>
</div>


