@extends('layouts.app')

@section('title', '')

@section('contents')

    <style>
        .required_red {
            color: red;
        }
    </style>
    <p style="font-size: 18px;">Items > <span style="color: blue;">Add Items</span></p>

    <h1 class="mb-0">Add Items</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Item Info --}}
        <div class="row">
            <div class="col-6">

                <div class="ml-1">

                </div>

                <div class="col mb-3">
                    <p>Item Information</p>
                </div>

                <div class="col mb-3">
                    <label for="">Item Name<span class="required_red">*</span> </label>
                    <input type="text" name="name" class="form-control" placeholder="Input Name">
                </div>


                <div class="col mb-3">
                    <label for="">Select Category<span class="required_red">*</span></label>
                    <select name="category_name" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($category_name as $name)
                            {{-- <option value="{{ $name->id }}">{{ $name->name }}</option> --}}
                            <option value="{{ $name->id }}">{{ $name->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="">Price<span class="required_red">*</span> </label>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
                <div class="col mb-3">
                    <label for="">Description<span class="required_red">*</span> </label>
                    <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
                </div>

                <div class="col mb-3">
                    <label for="">Select Item Condition</label>
                    <select name="item_condition" id="item_condition_id" class="form-control">
                        <option value="">Select Item Condition</option>
                        <option value="new">New</option>
                        <option value="used">Used</option>
                        <option value="good second hand">Good Second Hand</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="">Select Item Type</label>
                    <select name="item_type" id="item_type_id" class="form-control">
                        <option value="">Select Item Type</option>
                        <option value="sell">Sell</option>
                        <option value="buy">Buy</option>
                        <option value="exchange">Exchange</option>
                    </select>
                </div>

                <div class="col mb-3">
                    <label for="">Status</label><br>
                    <input type="checkbox" name="status" class="mr-2" placeholder="">Publish
                </div>

                <div class="col mb-3">
                    <label for="">Item Photo<span class="required_red">*</span> </label><br>
                    <p>Recommended size 400 x 200</p>
                    <input width="555" height="500" frameborder="0" style="border:0;" type="file" name="item_photo"
                        class="">
                </div>

            </div>
            {{-- Owner Info --}}
            <div class="col-6">
                <div class="col mb-3">
                    <p>Owner Information</p>
                </div>

                <div class="col mb-3">
                    <label for="">Owner Name<span class="required_red">*</span> </label>
                    <input type="text" name="owner_name" class="form-control" placeholder="Input Owner Name">
                </div>

                <div class="col mb-3">
                    <label for="">Contact Number</label> <br>
                    <input type="number" name="contact" class="form-control" placeholder="Add Number">
                </div>


                <div class="col mb-3">
                    <label for="">Address </label>
                    <textarea type="text" name="address" class="form-control" placeholder="Address"></textarea>
                </div>

                <div class="col mb-3">
                    <!-- Google Map Copied Code -->
                    <iframe class=""
                        src="
                        https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15274.140979615657!2d96.13106448658452!3d16.84939693533285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194962007f863%3A0x1ce0d39a47ca647c!2sLOTTE%20HOTEL%20YANGON!5e0!3m2!1sen!2smm!4v1694700224232!5m2!1sen!2smm"
                        width="555" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0">
                    </iframe>
                </div>

                <div class="row d-flex justify-content-end mr-3">
                    <div class="d-grid">
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary ml-2">Submit</button>
                    </div>
                </div>
            </div>

    </form>
@endsection
