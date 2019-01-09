@extends('layouts.mainlayout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Banner
        <small>Manage Banner</small>
    </h1>

</section>
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Banners
      <a name="" id="" class="btn btn-outline-primary" href="{{ URL::to('banners/create') }}" role="button">
        <i class="fa fa-plus"> Add</i>
    </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
         
            @foreach($banners as $key => $value)
            <tr>
                <td>{{$value->name }}</td>
                <td>{{$value->status==1?'Yes':'No' }}</td>
                <td>@if($value->position=='L')
                    Left
                    @elseif($value->position=='R')
                    Right
                    @elseif($value->position=='T')
                    Top
                    @elseif($value->position=='B')
                    Bottom
                    @endif
                </td>
                <td>
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <!-- <a class="btn btn-small btn-success" href="{{ URL::to('banners/' . $value->banner_id) }}">Show
                        this Nerd</a> -->

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <div class="btn-group" role="group" aria-label="Basic example">
                 <a class="btn btn-outline-secondary" href="{{ URL::to('banners/' . $value->banner_id . '/edit') }}">
                        Edit</a>


                    <form action="{{ url('banners', $value->banner_id) }}" method="POST" class="pull-right">
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
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
  {{ $banners->links() }}

@endsection('content')