@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Edit Brand
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Edit Brand by ID</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="widget-body">
                    <form class="cmxform form-horizontal" id="commentForm" method="post" action="{{URL::to('update/brand/'.$brand->id)}}" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf

                <div class="modal-body">
                   
                  <div class="control-group ">
                    <label for="cname" class="control-label">Brand Name</label>
                    <div class="controls">
                    <input class="span6 " id="cname" name="brand_name" minlength="2" type="text" required="" value="{{$brand->brand_name}}">
                    </div>
                </div>

                <div class="control-group ">
                    <label for="clogo" class="control-label">Brand Logo</label>
                    <div class="controls">
                    <input class="span6 " id="clogo" name="brand_logo" minlength="2" type="file" required="" value="{{$brand->brand_logo}}">
                    </div>
                </div>
                <div class="control-group ">
                    <label for="coldlogo" class="control-label">Old Logo</label>
                    <div class="controls">
                    <img src="{{URL::to($brand->brand_logo)}}" alt="" width="100px" height="100px">
                    <input class="span6 " id="coldlogo" name="old_logo" minlength="2" type="hidden" required="" value="{{$brand->brand_logo}}">
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <a href="{{route('admin.brands')}}" class="btn btn-warning" data-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                        </form>
                    </div>
                            
                 
        
     
  







@endsection
