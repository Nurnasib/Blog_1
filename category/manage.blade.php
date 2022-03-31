@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Category</h4>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
{{--                    <p class="card-title-desc">For basic styling—light padding and--}}
{{--                        only horizontal dividers—add the base class <code>.table</code> to any--}}
{{--                        <code>&lt;table&gt;</code>.--}}
{{--                    </p>--}}

                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$category->name}}</td>
                                <td>{{$category->Description}}</td>
                                <td>
                                    <img src="{{asset($category->image)}}" alt="" height="50" width="50"/>
                                </td>
                                <td>{{$category->status}}</td>
                                <td>
                                    <a href="{{route('category.edit', ['id'=>$category->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('category.delete', ['id'=>$category->id])}}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
