@extends('layouts.admin.main')

@section('page-level-css')
    <link href="{{@asset('admin/assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Edit Product</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductController@update',$product->id] , 'enctype' => 'multipart/form-data']) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" value="{{ $product->name }}" name="name"
                                   placeholder="aashirwad-aata">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            {{ Form::select('category', $categories, $product->category, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            <label for="">Sub Category</label>
                            {{ Form::select('subCategory', $subCategories, $product->subCategory, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="">Variation</label>
                            {{ Form::select('variation', $variations, $product->variation, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="">Strike through Price</label>
                            <input type="text" class="form-control" value="{{ $product->strikeThroughPrice }}"
                                   name="strikeThroughPrice" placeholder="aashirwad-aata">
                        </div>

                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" value="{{ $product->price }}" name="price"
                                   placeholder="aashirwad-aata">
                        </div>

                        <div class="form-group">
                            <label for="description">Short Description</label>
                            <textarea class="form-control" id="short_description" name="description"
                                      rows="3">{{ $product->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Product image</label>
                            <input type="file" id="exampleInputFile" name="photo" aria-describedby="fileHelp">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Current image</label>
                            <img src="{{ $url }}" />
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@if(session()->has('success'))
    @section('page-level-scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                swal({
                    title: 'Success',
                    text: "Product edited successfully!",
                    type: 'success',
                    showCancelButton: true
                });
            });
        </script>
    @stop

    @section('page-level-js')
        <script src="{{@asset('admin/assets/plugins/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
    @stop
@endif