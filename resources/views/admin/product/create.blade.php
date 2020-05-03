@extends('admin.admin_layouts')
@section('admin_content')
<div class="container-fluid">
  <!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
     <div class="span12">
         <!-- BEGIN THEME CUSTOMIZER-->
         <div id="theme-change" class="hidden-phone">
             <i class="icon-cogs"></i>
              <span class="settings">
                  <span class="text">Theme Color:</span>
                  <span class="colors">
                      <span class="color-default" data-style="default"></span>
                      <span class="color-green" data-style="green"></span>
                      <span class="color-gray" data-style="gray"></span>
                      <span class="color-purple" data-style="purple"></span>
                      <span class="color-red" data-style="red"></span>
                  </span>
              </span>
         </div>
         <!-- END THEME CUSTOMIZER-->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
         <h3 class="page-title">
          Add Product
         </h3>
         <ul class="breadcrumb">
             <li>
                 <a href="#">Home</a>
                 <span class="divider">/</span>
             </li>
            
             <li class="active">
              Add Product
             </li>
             
            <a class="btn btn-primary btn-md-block pull-right" href="{{route('all.product')}}">All Product</a>
             
         </ul>
         <!-- END PAGE TITLE & BREADCRUMB-->
     </div>
  </div>
  <!-- END PAGE HEADER-->

  <!-- BEGIN PAGE CONTENT-->

  <div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget blue">
            <div class="widget-title">
                <h4>
                    <i class="icon-reorder"></i> Add Product
                </h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                <form class="form-vertical" method="POST" action="{{route('store.product')}}" enctype="multipart/form-data">
                @csrf
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="control-group">
                                <label class="control-label">Product Name : <span style="color:red">*</span></label>
                                <div class="controls controls-row">
                                    <input type="text" class="input-block-level" placeholder="Enter Product Name" name="product_name">
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                              <label class="control-label">Product Code : <span style="color:red">*</span></label>
                              <div class="controls controls-row">
                                  <input type="text" class="input-block-level" placeholder="Enter Product Code" name="product_code">
                              </div>
                          </div>
                      </div>
                        <div class="span4">
                            <div class="control-group">
                                <label class="control-label">Product Quantity : <span style="color:red">*</span></label>
                                <div class="controls controls-row">
                                    <input type="text" class="input-block-level" placeholder="Enter Product Quantity" name="product_quantity">
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                        <div class="span4">
                            <div class="control-group">
                                <label class="control-label">Category : <span style="color:red">*</span></label>
                                <div class="controls controls-row">
                                    <select  class="input-block-level" data-placeholder="Choose a Category" tabindex="1" name="category_id">
                                      <option value="">Select Category</option>
                                        @foreach ($category as $data)
                                        <option value="{{$data->id}}">{{$data->category_name}}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                              <label class="control-label">Subcategory : <span style="color:red">*</span></label>
                              <div class="controls controls-row">
                                  <select  class="input-block-level" data-placeholder="Choose a Category" tabindex="1" name="subcategory_id">
                                    <option value="">Select Subcategory</option>
                                    
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="span4">
                        <div class="control-group">
                            <label class="control-label">Brand : <span style="color:red">*</span></label>
                            <div class="controls controls-row">
                                <select  class="input-block-level" data-placeholder="Choose a Category" tabindex="1" name="brand_id">
                                  <option value="">Select Brand</option>
                                  @foreach ($brand as $data)
                                  <option value="{{$data->id}}">{{$data->brand_name}}</option>
                                  @endforeach
                                 
                                 </select>
                            </div>
                        </div>
                    </div>
                        </div>
 
                    </div>
                    <div class="row-fluid">
                      <div class="span4">
                        <div class="control-group">
                            <label class="control-label">Product Size : <span style="color:red">*</span></label>
                            <div class="controls controls-row">
                                <input type="text" class="input-block-level" class="tags" placeholder="Enter Product Size" name="product_size" data-role="tagsinput">
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                      <div class="control-group">
                          <label class="control-label">Product Color : <span style="color:red">*</span></label>
                          <div class="controls controls-row">
                              <input type="text" class="input-block-level" class="tags" placeholder="Enter Product Color" name="product_color" data-role="tagsinput">
                          </div>
                      </div>
                  </div>
                  <div class="span4">
                    <div class="control-group">
                        <label class="control-label">Selling Price : <span style="color:red">*</span></label>
                        <div class="controls controls-row">
                            <input type="text" class="input-block-level" class="tags" placeholder="Enter Product Selling Price" name="selling_price">
                        </div>
                    </div>
                </div>
               
                    </div>
                    <div class="row-fluid">
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label">Discount Price : <span style="color:red">*</span></label>
                            <div class="controls controls-row">
                                <input type="text" class="input-block-level" class="tags" placeholder="Enter Product Discount Price" name="discount_price">
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row-fluid">

                      <div class="span12">
                        <div class="control-group">
                            <label class="control-label">Product Details : <span style="color:red">*</span></label>
                            <div class="controls controls-row">
                              <textarea class="span12 ckeditor" name="product_details" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="row-fluid">
                    <div class="span12">
                      <div class="control-group">
                          <label class="control-label">Video link :</label>
                          <div class="controls controls-row">
                              <input type="text" class="input-block-level" class="tags" placeholder="Enter Product Video link" name="video_link">
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row-fluid">
                  <div class="span4">
                    <div class="control-group">
                        <label for="image_one" class="control-label">Image One (Main thumbnail) :</label>
                        <div class="controls controls-row">
                           
                          <div class="control-group">
                        
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div class="input-append" >
                                        <div class="uneditable-input">
                                            <i class="icon-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                       <span class="btn btn-file btn-primary" >
                                       <span class="fileupload-new">Browse</span>
                                       <span class="fileupload-exists">Browse</span>
                                       <input type="file" class="default" id="image_one" name="image_one" onchange="readURL1(this);">
                                       </span> <br>
                                       <span>
                                           <img src="" alt="" id="one">
                                       </span>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label for="image_two" class="control-label">Image Two :</label>
                        <div class="controls controls-row">
                           
                          <div class="control-group">
                        
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div class="input-append" >
                                        <div class="uneditable-input">
                                            <i class="icon-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                       <span class="btn btn-file btn-primary" >
                                       <span class="fileupload-new">Browse</span>
                                       <span class="fileupload-exists">Browse</span>
                                       <input type="file" class="default" id="image_two" name="image_two" onchange="readURL2(this)">
                                       </span>
                                       <br>
                                       <span>
                                           <img src="" alt="" id="two">
                                       </span>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label for="image_three" class="control-label">Image Three :</label>
                        <div class="controls controls-row">
                           
                          <div class="control-group">
                        
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div class="input-append" >
                                        <div class="uneditable-input">
                                            <i class="icon-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                       <span class="btn btn-file btn-primary" >
                                       <span class="fileupload-new">Browse</span>
                                       <span class="fileupload-exists">Browse</span>
                                       <input type="file" class="default" id="image_three" name="image_three" onchange="readURL3(this)">
                                       </span>
                                       <br>
                                       <span>
                                           <img src="" alt="" id="three">
                                       </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span4">
                    <div class="control-group">
                        <label class="checkbox">
                            <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="main_slider" value="1" style="opacity: 0;"></span></div>Main slider
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="checkbox">
                            <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="hot_deal" value="1" style="opacity: 0;"></span></div>Hot Deal
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="checkbox">
                            <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="best_rated" value="1" style="opacity: 0;"></span></div>Best Rated
                        </label>
                    </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span4">
                    <div class="control-group">
                        <label class="checkbox">
                            <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="trend" value="1" style="opacity: 0;"></span></div>Trend Product
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="checkbox">
                            <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="mid_slider" value="1" style="opacity: 0;"></span></div>Mid slider
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="checkbox">
                            <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="hot_new" value="1" style="opacity: 0;"></span></div>Hot New
                        </label>
                    </div>
                </div>
              </div>

                    <div class="form-actions">
                        <a href="{{route('all.product')}}" class="btn btn-warning" type="button">Back</a>
                      <button class="btn btn-primary" type="submit">Submit</button>
                      
                  </div>
                  
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>
<script type="text/javascript">
    function readURL1(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#one')
          .attr('src', e.target.result)
          .width(60)
          .height(60);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>   
  <script type="text/javascript">
    function readURL2(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#two')
          .attr('src', e.target.result)
          .width(60)
          .height(60);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>    
<script type="text/javascript">
    function readURL3(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#three')
          .attr('src', e.target.result)
          .width(60)
          .height(60);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>    
@endsection
