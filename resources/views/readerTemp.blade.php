@extends('layouts.app')

@section('content')


<h1>Storage::url({{$book->filepath}}.pdf)</h1>

<h1>{{$book->filepath}}</h1>
<iframe src="/pdfjs/web/viewer.html?file=bookstore/{{$book->filepath}}.pdf" style="border: 0" width="100%" height="800" frameborder="0" scrolling="no"></iframe>

<form method="POST" action="/comments" enctype="multipart/form-data">

{{ csrf_field() }}
	<div class="form-group">
            <label class="col-md-3 control-label" name="resume">Write a comment:</label>
           <!--input  type="text" id="filepath" placeholder="Book Name" name="filepath" class=""/-->
	<TEXTAREA name="comment_body" class="form-control"></TEXTAREA>
	<input type="hidden" name="book_id" value="{{ $book->id }}">
	<input type="submit" class="btn btn-success pull-right">
</form>

@foreach($book->comments as $comment)
{
	<p>{{ $comment->comment_body }}</p>
}
@endforeach

@endsection