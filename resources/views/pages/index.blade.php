{{-- resources/views/post/list.blade.php --}}
@extends('layouts.app')

@section('title')
Home
@endsection


@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6 table-responsive">
    		<h2>POSTS</h2>
        </div>
        <table class="table table-bordered ">
        <thead class="thead-light">
          <tr>
            <th>Title</th>            
            <th>Author</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($posts as $post)
              <tr>
              <td>{{ $post->title }}</td>
              <td>{{ $post->user->name }}</td>
              <td>{{ $post->created_at }}</td>
            </tr>
          @empty
              <tr>
              <td colspan="4"><center>No data found</center></td>
            </tr>
          @endforelse
          
        </tbody>
      </table>
      {{-- pagination --}}
      {{ $posts->appends(Request::all())->links() }}
        </div>
    </div>
</div>
<x-footer />
@endsection