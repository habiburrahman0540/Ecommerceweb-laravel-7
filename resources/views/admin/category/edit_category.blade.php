@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Edit Category
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Edit Category by ID</h4>
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
                    <form class="cmxform form-horizontal" id="commentForm" method="post" action="{{URL::to('update/category/'.$category->id)}}" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf

                <div class="modal-body">
                   
                  <div class="control-group ">
                    <label for="cname" class="control-label">Category Name</label>
                    <div class="controls">
                    <input class="span6 " id="cname" name="category_name" minlength="2" type="text" required="" value="{{$category->category_name}}">
                    </div>
                </div>
                <div class="control-group ">
                    <label for="one" class="control-label">Category Image</label>
                    <div class="controls">
                    <input class="span6 " id="one" name="category_image" minlength="2" type="file" required="" onchange="readURL1(this)">
                    </div>
                </div>
                <div class="control-group ">
                   
                    <div class="controls">
                        <img src="{{asset('media/category/'.$category->category_image)}}" alt="" id="one" width="50px" height="50px">
                    </div>
                </div>
                

                </div>
                <div class="modal-footer">
                <a href="{{route('admin.categories')}}" class="btn btn-warning" data-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                        </form>
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
  







@endsection
