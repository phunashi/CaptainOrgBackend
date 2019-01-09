@extends('layouts.mainlayout')

@section('content')
 


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
       Products
        <small>Manage Products</small>
    </h1>

</section>

<!-- Main content -->
<div class="card mb-3">
        <div class="card-header">
                <i class="fas fa-table"></i>
                Products
                <a name="" id="" class="btn btn-outline-primary" href="{{ URL::to('products/create') }}" role="button">
                  <i class="fa fa-plus"> Add</i>
              </a>
              </div>
    <div class="card-body">
       
            
                <!-- /.box-header -->
                <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-outline-secondary" href="{{ URL::to('products/ 1' . '/edit') }}">
                                        Edit</a>


                                    <form action="{{ url('products', 1) }}" method="POST" class="pull-right">

                                        {{csrf_field()}}
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>

                                        </div>
              
                                  

                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
   
    </div>
    <!-- /.row -->
</div>

<!-- /.content -->
@endsection('content')