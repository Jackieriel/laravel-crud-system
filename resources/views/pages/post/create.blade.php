@extends('layouts.app')
@section('title')
    Create Post
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Create Post</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	@if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif
      <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea name="description" class="form-control" id="description" rows="5" required></textarea>
        </div>
        <div class="form-group">
        <label for="status">Select post status</label>
        <select class="form-control" id="status" name="status">
          <option value="pending">Draft</option>
          <option value="completed">Published</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Post</button>
      </form>
        </div>
    </div>
</div>
<x-footer />
@endsection