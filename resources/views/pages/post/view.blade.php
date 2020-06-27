@extends('layouts.app')

@section('title')
My Post
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>My Post</h2>
        </div>
        <div class="col-md-6">
            <div class="float-right">
                <a href="{{ route('post.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add new Post</a>
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
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Title</th> 
                <th>Status</th>           
                <th>Date</th>
              </tr>
        </thead>
        <tbody>
          @forelse ($posts as $post)
              <tr>
              <th>{{ $post->title }}</th>
              <td>{{ $post->status }}</td>
              <td>{{ $post->created_at }}</td>
              <td>
                <div class="action_btn">
                  <div class="action_btn">
                    <a href="{{ route('post.update', $post->id)}}" class="btn btn-warning">Edit</a>
                  </div>
                  <div class="action_btn margin-left-10">
                    <form action="{{ route('post.destroy', $post->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
          @empty
              <tr>
              <td colspan="4"><center>No post found</center></td>
            </tr>
          @endforelse
        </tbody>
      </table>
        </div>
    </div>
</div>
@endsection