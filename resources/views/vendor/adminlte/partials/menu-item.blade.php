<aside class="main-sidebar">
    <section class="sidebar">
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">SITE SETTING</li>
            <li>
                <a href="{{route('admin.navbar.index')}}">
                    <i class="fa fa-navicon"></i>
                    <span>Add Menu</span>
                </a>
            </li>
            <li class="header">NEWS
            <li>
            <li><a href="#">
                    <i class=" fa fa-newspaper-o"></i>ALL News</a>
            </li>

            <li>
                <a href="">
                    <i class=" fa fa-newspaper-o"></i>Add News
                </a>
            </li>

            <li class="header">BLOGS
            <li>
            <li><a href="{{route('admin.blog.index')}}">
                    <i class="fa fa-book"></i>All Blogs</a>
            </li>
            <li>
                <a href="{{route('admin.blog.create')}}">
                  <i class="fa fa-plus"></i>Add Blogs
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
