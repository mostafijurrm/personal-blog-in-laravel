@extends('welcome')
@section('content')
    <div class="Container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <a href="{{route('add.category')}}" class="btn btn-danger">Add Category</a>
                <a href="#" class="btn btn-info">All Category</a>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('store.category')}}" method="post">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Category Name</label>
                            <input type="text" class="form-control" placeholder="Category Name" name="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Slug Name</label>
                            <input type="text" class="form-control" placeholder="Slug Name" name="slug">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Add category</button>
                </form>
            </div>
        </div>
    </div>
@endsection
