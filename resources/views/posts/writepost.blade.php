@extends('welcome')
@section('content')
    <div class="Container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <a href="{{route('add.category')}}" class="btn btn-danger">Add Category</a>
                <a href="#" class="btn btn-info">All Category</a>
                <hr>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Title</label>
                            <input type="text" class="form-control" placeholder="Post Title" id="title">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Category</label>
                            <select class="form-control" name="category_id">
                                <option>Programming C</option>
                                <option>JAVA</option>
                                <option>PHP</option>
                                <option>DART</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Post Image</label>
                            <input type="file" class="form-control" placeholder="Post Image" id="image">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Details</label>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
