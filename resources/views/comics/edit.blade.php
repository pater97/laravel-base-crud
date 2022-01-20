@extends('layouts.app')


@section('content')

<div class="container my-5">
    <h1>MODIFICATION POST</h1>

    <form action="{{route('comics.update',$comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}" class="form-control" placeholder="Type your title here" aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Type a title for your post. max: 250</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" value="{{$comic->description}}" name="description" id="description" rows="3">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" name="thumb" value="{{$comic->thumb}}" id="thumb" rows="3">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" name="price" value="{{$comic->price}}" id="price" rows="3">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" name="series" value="{{$comic->series}}" id="series" rows="3">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" name="sale_date" value="{{$comic->sale_date}}" id="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" name="type" value="{{$comic->type}}" id="type" rows="3">
        </div>

        <button type="submit" class="btn btn-success">Save</button>

    </form>
</div>

@endsection