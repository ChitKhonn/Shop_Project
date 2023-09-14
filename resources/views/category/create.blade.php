@extends('layouts.app')

@section('title', '')

@section('contents')
    <style>
        .required_red {
            color: red;
        }
    </style>
    <p style="font-size: 18px;">Categories > <span style="color: blue;">Add Categories</span></p>
    <h1 class="mb-0">Add Categories</h1>
    <hr />
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Item Info --}}
        <div class="row">
            <div class="col-7">

                <div class="ml-1">
                </div>
                <div class="col mb-3">
                    <label for="">Category<span class="required_red">*</span> </label>
                    <input type="text" name="category_name" class="form-control" placeholder="Input Name">
                </div>
                <div class="col mb-3">
                    <label for="">Category Photo<span class="required_red">*</span> </label><br>
                    <p>Recommended size 400 x 200</p>
                    <input type="file" name="category_photo" class="form-control">
                </div>
                <div class="col mb-3">
                    <label for="">Status </label><br>
                    <input type="checkbox" name="status" class="mr-2" placeholder="Description"> Publish
                </div>

            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class=" d-grid">
                <button type="reset" class="btn btn-light">Cancel</button>
            </div>
            <div class=" d-grid">
                <button type="submit" class="btn btn-primary ml-2">Submit</button>
            </div>
        </div>
    </form>
@endsection
