@extends('admin.partials.master')
@section('content')
                <p><b>Admin/Sản phẩm</b></p>

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Loại</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Mô tả</th>
                                <th>Active</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($product as $item)
                              <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->category->name}}</td>
                                <td><img src="{{$item->image}}" width="50px" height="50px" /></td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    <form action="/admin/product/{{$item->id}}/edit" method="get">
                                        <button class="btn btn-primary">Sửa</button>
                                    </form>
                                    <form action="/admin/product/{{$item->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                    <button class="btn btn-danger">Xóa</button></td>
                                    </form>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                    <div class="col-6">
                        <form class="form" action="/admin/product" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3>Thêm loại sản phẩm</h3>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Loại</label>
                                <select class="form-control" name="category">
                                    @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-primary">Thêm</button>
                        </form>
                    </div>

@endsection
