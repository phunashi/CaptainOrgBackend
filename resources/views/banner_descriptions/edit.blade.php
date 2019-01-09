@extends('layouts.mainlayout')

@section('content')


<section class="content-header">
    <h1>
        Banner
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{route('banner_descriptions.update',[$banner->banner_description_id])}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Banner</label>

                        <div class="col-sm-10">
                            <select class="form-control" name="banner_id">
                                @foreach($load_banners as $key=>$value)
                                <option value="{{$value->banner_id}}">{{$value->name }} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Title</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="title" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Link</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="link" name="link">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">image</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="image" name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Sord Order</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sort_order" placeholder="sort_order" name="sort_order">
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>

        <!-- /.box -->
    </div>

</section>


@endsection
