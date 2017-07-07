<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')
@section('content')
  
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

        <!-- form for create new product -->
        <form action="{{ url('add_product') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}            
            <!-- category -->
            <div class="form-group">
                <label for="category" class="col-sm-3 control-label">Category</label>

                <div class="col-sm-6">
                    <select name="category" id="category" class="form-control">
                        <option value="0" checked>Choose Product Category</option>>
                        @if (count($category) > 0)
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <!-- subcategory -->
            <div id="subcategory_target"></div>
            <!-- name -->
            <div class="form-group">
                <label for="product" class="col-sm-3 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="product" class="form-control">
                </div>
            </div>
            <!-- description -->
            <div class="form-group">
                <label for="product" class="col-sm-3 control-label">Description</label>

                <div class="col-sm-6">
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
            </div>
            <!-- price -->
            <div class="form-group">
                <label for="product" class="col-sm-3 control-label">Price</label>

                <div class="col-sm-6">
                    <input type="text" name="price" id="price" class="form-control">
                </div>
            </div>

            <!-- submit button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Product
                    </button>
                </div>
            </div>
        </form>
    
    </div>

    <!-- templates for pages -->
    @include('clones.product_page')

    <!-- javascript -->
    <script type="text/javascript" src="{{ URL::asset('js/classes/Product.class.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/product_form_page.js') }}"></script>
    
@endsection