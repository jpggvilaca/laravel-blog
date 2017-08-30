@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <h2>Add Post</h2>

                  <form method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label>Post Title</label>
                      <input name="title" type="text" class="form-control" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label>Content</label>
                      <textarea name="body" rows="20" cols="50" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
