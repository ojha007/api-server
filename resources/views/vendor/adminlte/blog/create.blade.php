@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1> Add New BLOG</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-body pad">
                        <form>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" id="title" name="title" type="text">
                                </div>
                                <div class="form-group" id="slug">
                                    <label for="slug">Slug</label>
                                    <input class="form-control" id="slug" name="slug" type="text">
                                </div>

                                <div class="form-group">
                                    <label>Enter Tags</label>
                                    <input type="text" name="tag_title" id="tag_title" class="form-control" value=""/>

                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>

                                    <select class="form-control" id="category" name="category">
                                        <option value="" selected="selected">Default</option>
                                        <option value="review">Review</option>
                                        <option value="news">News</option>
                                        <option value="price">Price</option>
                                        <option value="offer">Offers</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="featured_image">Featured Image</label>

                                    <input name="featured_image" type="file" id="featured_image">

                                </div>

                                <div class="form-group">
                                    <label for="content">Content</label>
                                     <textarea id="blog-body" name="body" rows="10" cols="80">
                                         </textarea>

                                </div>
                                <div class="form-group">
                                    <label for="summary">Blog Summary</label>
                                    <textarea class="form-control" id="summary" name="summary" cols="50"
                                              rows="10"></textarea>

                                </div>

                                <div class="form-group">
                                    <label for="publish_on">Publish On</label>
                                    <input class="form-control" id="publish_on" name="publish_on" type="text">

                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>

                                    <select class="form-control" id="status" name="status">
                                        <option value="0">Unpublished</option>
                                        <option value="1">Published</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="writer">Writer</label>
                                    <select class="form-control" id="writer" name="writer">
                                        <option value="23">Uttam Regmi</option>
                                        <option value="33">Mukunda Bhattarai</option>
                                        <option value="40">GadgetFrame</option>
                                        <option value="93">Prakriti Regmi</option>
                                        <option value="324">Sujan Koirala</option>
                                        <option value="230">GadgetFrame</option>
                                        <option value="323">Sanjeev Dulal</option>
                                        <option value="330">Sabin Tamang</option>
                                        <option value="326">Nutan Swar</option>
                                        <option value="355">Sanjeeb Adhikari</option>
                                    </select>
                                </div>

                                <h4><b>SEO Settings</b></h4>
                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <input class="form-control" id="meta_title" name="meta_title" type="text">

                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea class="form-control " id="meta_description" name="meta_description"
                                              cols="50" rows="10"></textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">

                                <input class="btn btn-primary" type="submit" value="Add">
                                <a href="" class="btn btn-danger">
                                    Cancel
                                </a>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </section>
@stop
@section('adminlte_js')
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('blog-body');
            $( "#publish_on" ).datepicker();

        });
    </script>

@stop
