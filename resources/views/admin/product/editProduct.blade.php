@extends('admin.layout.master')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Chỉnh sửa sản phẩm
                        {{-- <small>Edit</small> --}}
                    </h1>
                    @if(count($errors))
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{ route('admin.product.updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="name" value="{{ $product->name }}" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input class="form-control" name="price" value="{{ $product->price }}" placeholder="Please Enter Description" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh hiện tại:</label>
                            <img src="/shop/img/products/{{ $product->img}}" alt="" style=" width: 100px; margin: 20px;">
                        </div>
                        <div class="form-group">
                            <label>Thay đổi ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="image" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="description" name="description" class="ckeditor">{!! $product->description !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Cập nhật</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
