@extends('layouts.app')

@section('content')

<div class="row">
	@forelse($books as $book)
		<div class="col-md-6 col-md-offset-3">
		<div class="panel-heading"> {{ $book->filepath }} </div>
			<div class="panel panel-default">
				<div class="panel-body">
				<span>{{ $book->content }}</span>
				</div>
				<div class="panel-footer"><a href="/books/{{ $book->id }}">Read this book</a></div>
			</div>
		</div>
	@empty
		No books.
	@endforelse	
</div>

<div class="col-md6 col-md-offset-3">
	{{$books->links()}}
</div>



@endsection