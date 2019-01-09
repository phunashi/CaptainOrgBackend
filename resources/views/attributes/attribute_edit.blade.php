@extends('layouts.mainlayout')

@section('content')


<section class="content-header">
    <h1>
        Attribute
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
            <form class="form-horizontal" method="POST" action="/attribute_update">
                {{csrf_field()}}
                <div class="box-body">
                    
                   
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="name" name="name">
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
