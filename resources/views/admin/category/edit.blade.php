@extends('admin.partials.master')
@section('content')
                <p><b>Admin/Sửa loại sản phẩm</b></p>
                <div class="row">
                    <div class="col-6">
                        <form class="form" action="/admin/category" method="post" >
                            @csrf
                            @method('PATCH')
                            <h3>Sửa loại sản phẩm</h3>
                            <input type="text" value="{{$categories->id}}" name="id-category" hidden>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                            <input type="text" value="{{$categories->name}}" name="name" class="form-control">
                            </div>
                            <button class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
@endsection
