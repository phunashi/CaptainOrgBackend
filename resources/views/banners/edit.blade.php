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
            <form class="form-horizontal" method="POST" action="{{route('banners.update',[$banner->banner_id])}}">
                {{csrf_field()}}
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="name" name="name" value={{$banner->name}}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">status</label>

                        <div class="col-sm-10">
                            <select class="form-control" name="status">
                                @if($banner->status==1)
                                <option value="1" selected>Yes</option>
                                <option value="0">No</option>
                                @elseif($banner->status==0)
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">position</label>

                        <div class="col-sm-10">
                            <select class="form-control" name="position">
                                @if($banner->position=="L")
                                <option value="L" selected>Left</option>
                                <option value="R">Right</option>
                                <option value="T">Top</option>
                                <option value="B">Bottom</option>
                                @elseif($banner->position=="R")
                                <option value="L">Left</option>
                                <option value="R" selected>Right</option>
                                <option value="T">Top</option>
                                <option value="B">Bottom</option>
                                @elseif($banner->position=="T")
                                <option value="L">Left</option>
                                <option value="R">Right</option>
                                <option value="T" selected>Top</option>
                                <option value="B">Bottom</option>

                                @elseif($banner->position=="B")
                                <option value="L">Left</option>
                                <option value="R">Right</option>
                                <option value="T">Top</option>
                                <option value="B" selected>Bottom</option>
                                @endif
                            </select>
                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>

        <!-- /.box -->
    </div>

</section>
@endsection
