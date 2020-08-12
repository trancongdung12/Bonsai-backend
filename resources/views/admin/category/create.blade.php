@extends('admin.partials.master')
@section('content')
                <p><b>Admin/Loại sản phẩm</b></p>
                <div class="row">
                    <div class="col-6">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th>Active</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($category as $item)
                              <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <form action="/admin/category/{{$item->id}}/edit" method="get">
                                        <button class="btn btn-primary">Sửa</button>
                                    </form>
                                    <form action="/admin/category/{{$item->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                    <button class="btn btn-danger">Xóa</button></td>
                                    </form>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                    </div>
                    <div class="col-6">
                        <form class="form" action="/admin/category" method="post" >
                            @csrf
                            <h3>Thêm loại sản phẩm</h3>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <button class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
@endsection
