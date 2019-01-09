@extends('layouts.mainlayout')

@section('content')


<section class="content-header">
    <h1>
        Products
        <small>Create Products</small>
    </h1>

</section>

<!-- Main content -->
<div class="card mb-3">
        <div class="card-header">
                <i class="fas fa-table"></i>
                Create Products
            
              </div>
    <div class="card-body">
     
         
    
            <form class="form-horizontal" method="POST" action="/products">
                {{csrf_field()}}

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="home" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="data-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="false">Data</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="links-tab" data-toggle="tab" href="#links" role="tab" aria-controls="links" aria-selected="false">Links</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" id="attributes-tab" data-toggle="tab" href="#attributes" role="tab" aria-controls="attributes" aria-selected="true">Attributes</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="discount-tab" data-toggle="tab" href="#discount" role="tab" aria-controls="discount" aria-selected="false">Discount</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" id="special-tab" data-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Special</a>
                                  </li>
                                  <li class="nav-item">
                                        <a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image" aria-selected="false">Image</a>
                                      </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">

              <br>
                        
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Product Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="name" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-10">
                                    <textarea name="editor1" id="editor1" name="description" rows="10" cols="100">
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
                                    <input type="text" class="form-control" id="meta_keywords" placeholder="name" name="meta_keywords">
                                </div>
                            </div>

                      



                    </div>
                    <div id="data" class="tab-pane fade" role="tabpanel" aria-labelledby="data-tab">
                     <br>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Model</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="model" placeholder="name" name="model">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Price</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="price" placeholder="name" name="price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Tax Class</label>

                                <div class="col-sm-10">
                                    <select name="tax_class_id" class="form-control js-example-responsive" style="width:100%">

                                        <option value="0">Taxable Goods</option>
                                    </select>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Quantity</label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="quantity" placeholder="name" name="quantity">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Min Quantity</label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="minimum" placeholder="minimum" name="minimum">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Sort Order</label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="sort_order" placeholder="minimum"
                                        name="sort_order">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Viewed</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="status" placeholder="viewed" name="viewed">
                                </div>
                            </div>




                    


                    </div>
                    <div id="links" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>


                    </div>
                    <div id="attributes" class="tab-pane fade">
                        <h3>Attributes</h3>
                        <p>Some content in menu 2.</p>
                        <div class="input_fields_wrap3">
                            <button class="btn btn-primary add_field_button1">Add Attributes</button>
                            <div class=" table-responsive">
                                <table class="table">


                                    <thead>
                                        <tr>
                                            <th>Attributes</th>
                                            <th>Text</th>



                                        </tr>

                                    </thead>
                                    <tbody class="input_fields_wrap1">


                                    </tbody>




                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="discount" class="tab-pane fade">
                        <h3>Discount</h3>
                        <p>Some content in menu 2.</p>
                        <div class="box-body">

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Customer Group</label>

                                <div class="col-sm-10">
                                    <select>
                                        <option value=1>default </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Priority</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="priority" placeholder="viewed" name="priority">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Price</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="price" placeholder="viewed" name="price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Start Date</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="start_date" placeholder="viewed" name="start_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">End Date</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="end_date" placeholder="viewed" name="end_date">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="special" class="tab-pane fade">
                        <h3>special</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="image" class="tab-pane fade">
                        <h3>Image</h3>
                        <p>Some content in menu 2.</p>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label"> Image</label>

                            <div class="col-sm-10">
                                <img src="{{asset('/img/avatar.png')}}" alt="Picture" id="image_src" name="string_img"
                                    style="width:100px;height:100px !important" data-toggle="popover" title="Popover title"
                                    data-content='<input type="file" class="file-upload" name="image" ></input>'>

                            </div>
                            <div class="input_fields_wrap4">
                                <button class="btn btn-primary add_field_button2">Add Additional Images</button>
                                <div class=" table-responsive">
                                    <table class="table">


                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Choose a file</th>
                                                <th>Sort Order</th>



                                            </tr>

                                        </thead>
                                        <tbody class="input_fields_wrap2">


                                        </tbody>




                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <!-- /.box-footer -->
            </form>
    

        <!-- /.box -->
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
                
               
                $('#image_src')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


    $(document).ready(function () {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap1"); //Fields wrapper
        var add_button = $(".add_field_button1"); //Add button ID

        //<option value=1>1</option> <option value=2>2</option><option value=3>3</option><option value=4>4</option>
        var allOption;
        $.ajax({
            url: '/getJsonAttributes',
            dataType: 'json',
            async: false,
            success: function (response) {


                var option = "";

                if (response.attributes.length > 0) {

                    for (var i = 0; i < response.attributes.length; i++) {

                        option = option + "<option  value='" + response.attributes[i].id + "'>" +
                            response.attributes[i].name + "</option>";

                    }

                }


                allOption = option;



            },
            error: function (xhr, status, error) {
                if (xhr.status === 0) {
                    alert('Not connect.n Verify Network.');
                } else if (xhr.status == 404) {
                    alert('Invalid input');
                } else if (xhr.status == 500) {
                    alert('Internal Server Error');
                } else if (error === 'parsererror') {
                    alert('Requested JSON parse failed.');
                } else if (error === 'timeout') {
                    alert('Time out error.');
                } else if (error === 'abort') {
                    alert('Ajax request aborted.');
                } else {
                    alert('Uncaught Error.n' + xhr.responseText);
                }

            }
        });
        var attributes = '<select class="form-control js-example-responsive" name="attributes[]">' +
            allOption + '</select>';
        var text = '<div><input type="text" class="form-control" name="text[]"/>';

        var deletebutton = '<a href="#" class="glyphicon glyphicon-trash remove_field">   </a>';

        var x = 1; //initial text box count

        $(wrapper).append('<tr><td>' + attributes + '</td>' + '<td>' + text + '</td></tr>');

        $(add_button).on('click', function (e) { //on add input button click

            e.preventDefault();
            if (x < max_fields) { //max input box allowed

                x++; //text box increment

                $(wrapper).append('<tr><td>' + attributes + '</td>' + '<td>' + text + '</td>' + '<td>' +
                    deletebutton + '</td> </tr>');

            }
        });

        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parents('tr').remove();
            x--;
        });


    });
    $(document).ready(function () {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap2"); //Fields wrapper
        var add_button = $(".add_field_button2"); //Add button ID
        var file = "<input type='file' class='file-upload'></input>";

        var images = '<img src="/img/avatar.png" name="image[]" style="width:80px;height:80px">'
            + '</img>';
        var text = '<div><input type="text" class="form-control" name="text[]"/>';

        var deletebutton = '<a href="#" class="glyphicon glyphicon-trash remove_field">   </a>';

        var x = 1; //initial text box count

        $(wrapper).append('<tr><td>' + images + '</td>' +   '<td>' + file + '</td>' +'<td>' + text + '</td></tr>');

        $(add_button).on('click', function (e) { //on add input button click
            alert()
            e.preventDefault();
            if (x < max_fields) { //max input box allowed

                x++; //text box increment

                $(wrapper).append('<tr><td>' + images + '</td>' +  '<td>' + file + '</td>' +'<td>' + text + '</td>' + '<td>' +
                    deletebutton + '</td> </tr>');

            }
        });

        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parents('tr').remove();
            x--;
        });


    });
</script>


@endsection
