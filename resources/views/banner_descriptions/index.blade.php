@extends('layouts.mainlayout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                 
                     <a class="btn btn-small btn-info pull-right" href="{{ URL::to('banner_descriptions/create') }}">
                                         <i class="glyphicon glyphicon-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Banner</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banner_descriptions as $key => $value)
                            <tr>
                                <td>{{$value->banner->name }}</td>
                                <td>{{$value->title }}</td>
                                <td>{{$value->link }}</td>
                                <td>{{$value->image }}</td>
                              
                                <td>
                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <!-- <a class="btn btn-small btn-success" href="{{ URL::to('banners/' . $value->banner_id) }}">Show
                                        this Nerd</a> -->

                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                    <a class="btn btn-small btn-info" href="{{ URL::to('banner_descriptions/' . $value->banner_description_id . '/edit') }}">
                                        Edit</a>


                                    <form action="{{ url('banner_descriptions', $value->banner_description_id) }}" method="POST" class="pull-right">
                                        <!-- {{ Form::open(array('url' => 'banners/' . $value->banner_id, 'class' => 'pull-right')) }} -->
                                        {{csrf_field()}}
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <!--{{Form::close() }} -->

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
{{ $banner_descriptions->links() }}
<!-- /.content -->
@endsection('content')