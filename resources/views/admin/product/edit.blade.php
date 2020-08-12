@extends('admin.partials.master')
@section('content')
                <p><b>Admin/Sửa sản phẩm</b></p>
                    <div class="col-6">
                        <form class="form" action="/admin/product" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <h3>Thêm loại sản phẩm</h3>
                        <input type="text" value="{{$product->id}}" name="product_id" hidden>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                            <input type="text" value="{{$product->name}}" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" value="{{$product->price}}" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <input type="text" value="{{$product->description}}" name="description" class="form-control">
                            </div>
                            <div class="form-group">

                                <label for="exampleInputEmail1">Hình ảnh</label>
                                <img style="margin-left: 100px" src="{{$product->image}}" width="50px" height="50px" />
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Loại</label>
                                <select class="form-control" name="category">
                                    @foreach ($category as $item)
                                    @if($item->id == $product->category_id)
                                        <option selected value="{{$item->id}}">{{$item->name}}</option>
                                    @else
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>

@endsection
