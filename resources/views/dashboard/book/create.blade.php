@extends('layouts.dashboardApp')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h5>Add New Book</h5>
        </div>
        <hr>
        <div class="pull-right mb-3">
            <a class="btn btn-primary" href="{{ route('book.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-title"></div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="bookTitle" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="bookTitle" placeholder="Title  ">
            </div>

            <div class="mb-3">
                <label for="bookCategory" class="form-label">Cover</label>
                <input type="file" name="cover" class="form-control">
            </div>

            <div class="mb-3">
                <label for="bookCategory" class="form-label">Description</label>
                <textarea class="form-control" id="editor" placeholder="Enter the Description"
                    name="description"></textarea>
            </div>

            <div class="mb-3">
                <label for="bookAuthor" class="form-label">Author</label>
                <select name="author" class="form-select" size="3" aria-label="size 3 select example">

                    @foreach ($authors as $author)

                    <option value="{{ $author->id }}">{{ $author->name }}</option>

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="bookAuthor" class="form-label">Publisher</label>
                <select name="publisher" class="form-select" size="3" aria-label="size 3 select example">

                    @foreach ($publishers as $publisher)

                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="bookAuthor" class="form-label">Category</label>
                <select name="category" class="form-select" size="3" aria-label="size 3 select example">

                    @foreach ($categories as $category)

                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="bookRelease" class="form-label">Release Date</label>
                <input type="date" name="date_of_issue" class="form-control" id="bookRelease" placeholder="Category">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

@endsection
