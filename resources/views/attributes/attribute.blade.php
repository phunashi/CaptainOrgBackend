@extends('layouts.mainlayout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Attributes
        <small>Manage Attributes</small>
    </h1>
 
</section>

<!-- Main content -->
<div class="card mb-3">
        <div class="card-header">
                <i class="fas fa-table"></i>
                Categories
                <a name="" id="" class="btn btn-outline-primary" href="{{ URL::to('attribute_create') }}" role="button">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attributes as $key => $value)
                            <tr>
                                <td>{{$value->name }}</td>
                             
                              
                                <td>
                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <!-- <a class="btn btn-small btn-success" href="{{ URL::to('banners/' . $value->banner_id) }}">Show
                                        this Nerd</a> -->

                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-secondary" href="{{ URL::to('attribute_edit/' . $value->attribute_id ) }}">
                                        Edit</a>


                                    <form action="{{ url('attributes', $value->attribute_id) }}" method="POST" class="pull-right">
                                        {{csrf_field()}}
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>   
                                    </div>
                             

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
     
 
    </div>

</div>
{{ $attributes->links() }}
<!-- /.content -->
@endsection('content')