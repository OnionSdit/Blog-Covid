@extends('admin.layout.master')
@section('title', 'Danh sách sản phẩm')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-transform: uppercase;"> Danh sách sản phẩm
                        <small></small>
                    </h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr  class="odd gradeX" align="center" >
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $product->id}}</td>
                            <td>{{ $product->name }}</td>
                            <td><img src="/shop/img/products/{{ $product->img}}" alt="" style=" width: 50px;"></td>
                            <td>{{ number_format($product->price)}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.product.deleteProduct', $product->id) }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.product.editProduct', $product->id) }}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{-- {!! $posts->links() !!} --}}
            </div>

        </div>

    </div>

@endsection
