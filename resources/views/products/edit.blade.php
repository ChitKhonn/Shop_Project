@extends('layouts.app')

@section('title', 'Edit Item')

@section('contents')
    <h1 class="mb-0">Edit Item</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">

                <div class="ml-1">

                </div>

                <div class="col mb-3">
                    <p>Item Information</p>
                </div>

                <div class="col mb-3">
                    <label for="">Item Name<span class="required_red">*</span> </label>
                    <input type="text" value="{{ $product->name }}" name="name" class="form-control" placeholder="Input Name">
                </div>


                <div class="col mb-3">
                    <label for="">Select Category<span class="required_red">*</span></label>
                    <select name="category_name"  id="category_id" class="form-control">
                        <option value="{{ $product->category_name }}">{{$product->category_name}}</option>
                        @foreach($category_name as $name)
                            {{-- <option value="{{ $name->id }}">{{ $name->name }}</option> --}}
                            <option value="{{ $name->category_name }}">{{ $name->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="">Price<span class="required_red">*</span> </label>
                    <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                </div>
                <div class="col mb-3">
                    <label for="">Description<span class="required_red">*</span> </label>
                    <input type="text"  name="description" value="{{ $product->description }}" class="form-control" placeholder="Description">
                </div>

                <div class="col mb-3">
                    <label for="">Select Item Condition</label>
                    <select name="item_condition"  id="item_condition_id" class="form-control">
                        <option value="{{ $product->item_condition }}">{{$product->item_condition}}</option>
                        <option value="new">New</option>
                        <option value="used">Used</option>
                        <option value="good second hand">Good Second Hand</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="">Select Item Type</label>
                    <select name="item_type" value="{{ $product->item_type }}" id="item_type_id" class="form-control">
                        <option value="{{ $product->item_type }}">{{$product->item_type}}</option>

                        <option value="sell">Sell</option>
                        <option value="buy">Buy</option>
                        <option value="exchange">Exchange</option>
                    </select>
                </div>

                <div class="col mb-3">
                    <label for="">Status</label><br>
                    <input type="checkbox" value="{{ $product->status }}" name="status" class="mr-2" placeholder="">Publish
                </div>

            </div>
            {{-- Owner Info --}}
            <div class="col-6">
                <div class="col mb-3">
                    <p>Owner Information</p>
                </div>

                <div class="col mb-3">
                    <label for="">Owner Name<span class="required_red">*</span> </label>
                    <input type="text" name="owner_name"  value="{{ $product->owner_name }}" class="form-control" placeholder="Input Owner Name">
                </div>

                <div class="col mb-3">
                    <label for="">Contact Number</label> <br>
                    <input type="number" name="contact" value="{{ $product->contact }}" class="form-control" placeholder="Add Number">
                </div>


                <div class="col mb-3">
                    <label for="">Address </label>
                    <input type="text" name="address" value="{{ $product->address }}" class="form-control" placeholder="Address">
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
                    <button type="submit" class="btn btn-primary ml-2">Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection
