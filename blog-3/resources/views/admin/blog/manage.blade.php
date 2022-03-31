@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Category Info</h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>category id</th>
                            <th>blog_title</th>
                            <th>sub_title</th>
                            <th>short_descr</th>
                            <th>long_descr</th>
                            <th>Image</th>
                            <th>author_id</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blog->category_id}}</td>
                                <td>{{$blog->main_title}}</td>
                                <td>{{$blog->sub_title}}</td>
                                <td>{!! $blog->short_description !!}</td>
                                <td>{!! $blog->long_description !!}</td>
                                <td><img src="{{asset($blog->image)}}" alt="" height="50" width="60"/></td>
                                <td>{{$blog->author_id}}</td>
                                <td>{{$blog->status == 1? 'Published': 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('blog.edit', ['id'=> $blog->id, 'category'=>$categories->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('blog.delete', ['id'=> $blog->id])}}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

