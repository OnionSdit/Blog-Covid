@extends('admin.layout.master')
@section('title', 'Thêm sản phẩm')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Thêm sản phẩm
                        {{-- <small>Add</small>  --}}
                    </h1>
                    @if(count($errors))
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{ route('admin.product.storeProduct') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input class="form-control" name="name" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input class="form-control" type="number" name="price" placeholder="Please Enter Price" />
                        </div>

                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control" name="img" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="description" name="description" class="ckeditor"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
