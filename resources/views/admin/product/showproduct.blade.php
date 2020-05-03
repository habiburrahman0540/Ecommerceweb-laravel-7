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
            Product Page
         </h3>
         <ul class="breadcrumb">
             <li>
                 <a href="#">Home</a>
                 <span class="divider">/</span>
             </li>
            
             <li class="active">
               Product Page
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
                    <i class="icon-reorder"></i>  Product Details
                </h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
              
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="control-group">
                                <label class="control-label badge badge-success">Product Name : </label>
                                <div class="controls controls-row">
                                <strong>{{$product->product_name}}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                              <label class="control-label badge badge-success">Product Code : </label>
                              <div class="controls controls-row">
                                <strong>{{$product->product_code}}</strong>
                              </div>
                          </div>
                      </div>
                        <div class="span4">
                            <div class="control-group">
                                <label class="control-label badge badge-success">Product Quantity : </label>
                                <div class="controls controls-row">
                                    <strong>{{$product->product_quantity}}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                        <div class="span4">
                            <div class="control-group">
                                <label class="control-label badge badge-success">Category : </label>
                                <div class="controls controls-row">
                                    <strong>{{$product->category_name}}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                              <label class="control-label badge badge-success">Subcategory : </label>
                              <div class="controls controls-row">
                                <strong>{{$product->subcategory_name}}</strong>
                              </div>
                          </div>
                      </div>
                      <div class="span4">
                        <div class="control-group">
                            <label class="control-label badge badge-success">Brand : </label>
                            <div class="controls controls-row">
                                <strong>{{$product->brand_name}}</strong>
                            </div>
                        </div>
                    </div>
                        </div>
 
                    </div>
                    <div class="row-fluid">
                      <div class="span4">
                        <div class="control-group">
                            <label class="control-label badge badge-success">Product Size : </label>
                            <div class="controls controls-row">
                                <strong>{{$product->product_size}}</strong>
                                 </div>
                        </div>
                    </div>
                    <div class="span4">
                      <div class="control-group">
                          <label class="control-label badge badge-success">Product Color : </label>
                          <div class="controls controls-row">
                            <strong>{{$product->product_color}}</strong>
                            </div>
                      </div>
                  </div>
                  <div class="span4">
                    <div class="control-group">
                        <label class="control-label badge badge-success">Selling Price : </label>
                        <div class="controls controls-row">
                            <strong>{{$product->selling_price}}</strong>
                        </div>
                    </div>
                </div>
               
                    </div>
                    <div class="row-fluid">
                    <div class="span4">
                        <div class="control-group">
                            <label class="control-label badge badge-success">Discount Price : </label>
                            <div class="controls controls-row">
                                <strong>{{$product->discount_price}}</strong>   
                             </div>
                        </div>
                    </div>
                </div>
                    <div class="row-fluid">

                      <div class="span12">
                        <div class="control-group">
                            <label class="control-label badge badge-success">Product Details : </label>
                            <div class="controls controls-row">
                               <p> 
                                {{ strip_tags(htmlspecialchars_decode($product->product_details)  ) }}
                                   </p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="row-fluid">
                    <div class="span12">
                      <div class="control-group">
                          <label class="control-label badge badge-success">Video link :</label>
                          <div class="controls controls-row">
                            <strong>{{$product->video_link}}</strong> 
                         </div>
                      </div>
                  </div>
                </div>
                <div class="row-fluid">
                  <div class="span4">
                    <div class="control-group">
                        <label for="image_one" class="control-label badge badge-success">Image One (Main thumbnail) :</label>
                        <div class="controls controls-row">
                           
                          <div class="control-group">
                        
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div class="input-append" >
                                        <strong><img src="{{asset('media/product/'.$product->image_one)}}" alt="" width="80px" height="80px"></strong> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label for="image_two" class="control-label badge badge-success">Image Two :</label>
                        <div class="controls controls-row">
                           
                          <div class="control-group">
                        
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div class="input-append" >
                                        <strong><img src="{{asset('media/product/'.$product->image_two)}}" alt="" width="80px" height="80px"></strong> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label for="image_three" class="control-label badge badge-success">Image Three :</label>
                        <div class="controls controls-row">
                           
                          <div class="control-group">
                        
                            <div class="controls">
                                <div data-provides="fileupload" class="fileupload fileupload-new">
                                    <div class="input-append" >
                                        <strong><img src="{{asset('media/product/'.$product->image_three)}}" alt="" width="80px" height="80px"></strong> 
                                       
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
                        <label class="">
                            <div class="" id="uniform-undefined"><span>
                            </span></div>Main Slider
                            @if($product->main_slider == 1)
                            <span class="badge badge-success">
                               Active
                        </span>
                            @else
                            <span class="badge badge-warning">
                                Inactive
                         </span>
                            @endif
                                
                       
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="">
                            <div class="" id="uniform-undefined"><span>
                            </span></div>Hot Deal
                            @if($product->hot_deal == 1)
                            <span class="badge badge-success">
                               Active
                        </span>
                            @else
                            <span class="badge badge-warning">
                                Inactive
                         </span>
                            @endif
                                
                       
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="">
                            <div class="" id="uniform-undefined"><span>
                            </span></div>Best Rated
                            @if($product->best_rated == 1)
                            <span class="badge badge-success">
                               Active
                        </span>
                            @else
                            <span class="badge badge-warning">
                                Inactive
                         </span>
                            @endif
                                
                       
                        </label>
                    </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span4">
                    <div class="control-group">
                        <label class="">
                            <div class="" id="uniform-undefined"><span>
                            </span></div>Trend Product
                            @if($product->trends == 0)
                            <span class="badge badge-success">
                               Active
                        </span>
                            @else
                            <span class="badge badge-warning">
                                Inactive
                         </span>
                            @endif
                                
                       
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="">
                            <div class="" id="uniform-undefined"><span>
                            </span></div>Mid slider
                            @if($product->mid_slider == 1)
                            <span class="badge badge-success">
                               Active
                        </span>
                            @else
                            <span class="badge badge-warning">
                                Inactive
                         </span>
                            @endif
                                
                       
                        </label>
                    </div>
                </div>
                <div class="span4">
                    <div class="control-group">
                        <label class="">
                            <div class="" id="uniform-undefined"><span>
                            </span></div>Hot New
                            @if($product->hot_new == 1)
                            <span class="badge badge-success">
                               Active
                        </span>
                            @else
                            <span class="badge badge-warning">
                                Inactive
                         </span>
                            @endif
                                
                       
                        </label>
                    </div>
                </div>
              </div>

                 
                  
             
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>

@endsection
