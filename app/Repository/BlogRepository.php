<?php


namespace App\Repository;


use App\Models\Blog;

class BlogRepository
{
    protected $blog;

    public function __construct(Blog $blog)
    {

        $this->blog = $blog;

    }

    public function owlCarouselFeaturedBlogs()
    {
        return $this->blog->orderBy('created_at', 'desc')->paginate(5);
    }

    public function singleBlog()
    {
        return $this->blog->where('id', 100)->get();
    }

    public function doubleBlogs()
    {
        return $this->blog->where('id', '>', 120)->paginate(2);
    }


}
