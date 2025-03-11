@extends('backend.layout.app')
@section('content')
    <!-- start-content -->

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('products.index') }}" class="btn btn-primary">All Product</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Create Products</h5>
                    <form action="{{ route('products.update', $product->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-9">
                                <input type="text"
                                    class="form-control @error('name') is-invalid
                                @enderror"
                                    id="name" name="name" value="{{ $product->name }}" placeholder="Enter Your Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-3 col-form-label">Product price</label>
                            <div class="col-sm-9">
                                <input type="number"
                                    class="form-control @error('price') is-invalid
                                @enderror"
                                    id="price" name="price" value="{{ $product->price }}" placeholder="Product price">
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                                <input type="number"
                                    class="form-control @error('quantity') is-invalid
                                @enderror"
                                    id="quantity" name="quantity" value="{{ $product->quantity }}" placeholder="Product quantity">
                                @error('quantity')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control @error('description') is-invalid
                                @enderror"
                                    id="description" name="description" rows="3" placeholder="description">{{ $product->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Save</button>
                                    <button type="reset" class="btn btn-light px-4">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- end-content -->
@endsection
