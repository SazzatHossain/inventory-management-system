{{--<h1>Add New Product</h1>--}}

{{--<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--    @csrf--}}

{{--    <div>--}}
{{--        <label for="name">Name:</label>--}}
{{--        <input type="text" name="name" id="name" required>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="code">Code:</label>--}}
{{--        <input type="text" name="code" id="code" required>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="category_id">Category:</label>--}}
{{--        <select name="category_id" id="category_id" required>--}}
{{--            @foreach($categories as $category)--}}
{{--                <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="cost">Cost:</label>--}}
{{--        <input type="number" name="cost" id="cost" step="0.01" required>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="price">Price:</label>--}}
{{--        <input type="number" name="price" id="price" step="0.01" required>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="brand_name">Brand Name:</label>--}}
{{--        <input type="text" name="brand_name" id="brand_name" required>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="quantity">Quantity:</label>--}}
{{--        <input type="number" name="quantity" id="quantity" required>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="image">Image:</label>--}}
{{--        <input type="file" name="image" id="image">--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="description">Description:</label>--}}
{{--        <textarea name="description" id="description" required></textarea>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <button type="submit">Add Product</button>--}}
{{--    </div>--}}
{{--</form>--}}

@extends('layouts.master')
@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <div class="mt-5">
                    <h4 class="card-title float-left mt-2">Add Category</h4>
                    <a href="/categories" class="btn btn-Info float-right veiwbutton mt-2 text-white">Category List</a>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-content profile-tab-cont">
                <div class="tab-pane fade show active">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="card" style="min-height: 400px">
                                <div class="card-body">
                                    <h5 class="card-title">Add Category</h5>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 mt-4">
                                            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="code">Code:</label>
                                                    <input type="text" name="code" id="code"
                                                           class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="image">Image:</label>
                                                    <input type="file" name="image" id="image"
                                                           class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <textarea name="description" id="description"
                                                              class="form-control" required></textarea>
                                                </div>

                                                <button class="btn btn-primary" type="submit">Save Category</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
