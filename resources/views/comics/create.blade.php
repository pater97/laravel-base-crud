@extends('layouts.app')


@section('content')

<div class="container my-5">
    <h1>Create a new Post</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type your title here" aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Type a title for your post. max: 250</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <textarea class="form-control" name="thumb" id="thumb" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <textarea class="form-control" name="price" id="price" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <textarea class="form-control" name="series" id="series" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <textarea class="form-control" name="type" id="type" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>

    </form>
</div>

@endsection