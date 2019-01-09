@extends('layouts.mainlayout')


@section('content')


<section>
    <h1>
       Create Categories
        
    </h1>
 
</section>
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Create Categories
  
    </div>
    <div class="card-body">
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data</a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
    </li> --}}
  </ul>
  <form class="form-horizontal" method="POST" action="/categories" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Category name</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Description</label>

            <div class="col-sm-10">
                <textarea id="editor1" name="description" rows="10" cols="100">
                    This is my textarea to be replaced with CKEditor.
                     </textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Meta-Tag Title</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="meta_title" placeholder="name" name="meta_title">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Meta-Tag Description</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="meta_description" placeholder="name"
                    name="meta_description">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Meta-Tag Keywords</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="meta_keywords" placeholder="name"
                    name="meta_keywords">
            </div>
        </div>



    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label"> parent</label>

            <div class="col-sm-10">

                <select class="form-control js-example-responsive" name="parent_id" style="width: 100%">

                    @for($i=0; $i<count($parentCategories);$i++ ) <option value={{$parentCategories[$i]['id']}}>
                        {{$parentCategories[$i]['parent'] }}</option>
                        @endfor



                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="image" class="col-sm-2 control-label"> Image</label>

            <div class="col-sm-10">
                <img src="{{asset('/img/avatar.png')}}" alt="Picture" id="image" name="string_img"
                    style="width:100px;height:100px !important" data-toggle="popover" title="Popover title"
                    data-content='<input type="file" class="file-upload" name="image" ></input>'>

            </div>

        </div>
        <div class="form-group">
            <label for="sort_order" class="col-sm-2 control-label"> Sort Order</label>

            <div class="col-sm-10">
                <input type="number" class="form-control" id="sort_order" placeholder="name"
                    name="sort_order" min="1" max="1000">

            </div>

        </div>
        <div class="form-group">
            <label for="status" class="col-sm-2 control-label"> Status</label>

            <div class="col-sm-10">

                <select class="form-control" name='status'>
                    <option value="0">No</option>
                    <option value="1">Yes</option>

                </select>

            </div>

        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">
        <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Save
    </button>
    {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> --}}
  </div>
  </form>
    </div>
</div>
       <!-- CK Editor scripts for all pages-->
       <script src="{{asset ('sbtheme/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script>

<script>
    $(document).ready(function () {
        alert();
        $('[data-toggle="popover"]').popover({
            animation: true,
            //content: "<input type='file' class='file-upload' ></input>",
            html: true
        });

        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5();

        $('#myTabContent').on('change', '.file-upload', function () {
            readURL(this);
        });

        $('.js-example-responsive').select2();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection
