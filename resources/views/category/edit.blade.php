@extends('layouts.app')

@section('title', 'Edit Category')

@section('contents')
    <h1 class="mb-0">Edit Category</h1>
    <hr />
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-7">
                <div class=" mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Name"
                        value="{{ $category->category_name }}">
                </div>
                <div class=" mb-3">
                    <label for="">Status<span>*</span> </label><br>
                    <input type="checkbox" name="status" class="mr-2" placeholder="Description"
                        value="{{ $category->status }}"> Publish
                </div>
            </div>
        </div>

            <div class="row d-flex justify-content-center">
                <div class=" d-grid">
                    <button type="reset" class="btn btn-light">Cancel</button>
                </div>
                <div class=" d-grid">
                    <button type="submit" class="btn btn-primary ml-2">Update</button>
                </div>
            </div>

    </form>
@endsection
