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
          Edit Blog Post
         </h3>
         <ul class="breadcrumb">
             <li>
                 <a href="#">Home</a>
                 <span class="divider">/</span>
             </li>
            
             <li class="active">
                Edit Blog Post
             </li>
             
            <a class="btn btn-primary btn-md-block pull-right" href="{{route('all.blog.post')}}">Edit Post</a>
             
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
                    <i class="icon-reorder"></i> Edit Blog Post
                </h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
            <form class="form-vertical" method="POST" action="{{URL::to('post/update/'.$blogpost->id)}}" enctype="multipart/form-data">
                @csrf
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label">Post Title in English : <span style="color:red">*</span></label>
                                <div class="controls controls-row">
                                    <input type="text" class="input-block-level" value="{{$blogpost->post_title_en}}" name="post_title_en">
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label">Post Title in Bangla : <span style="color:red">*</span></label>
                                <div class="controls controls-row">
                                    <input type="text" class="input-block-level" value="{{$blogpost->post_title_ban}}" name="post_title_ban">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row-fluid">
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label">Category Name: <span style="color:red">*</span></label>
                                <div class="controls controls-row">
                                    <select  class="input-block-level" data-placeholder="Choose a Category" tabindex="1" name="category_id">
                                      <option value="">Select Category</option>
                                        @foreach ($post_cat as $data)
                                    <option value="{{$data->id}}" {{($data->id == $blogpost->category_id) ? 'selected' : ''}}>
                                        {{$data->category_name_en}}
                                    </option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="control-group">
                                <label for="post_image" class="control-label">Image :</label>
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
                                               <input type="file" class="default" id="post_image" name="post_image" onchange="readURL1(this);">
                                               </span> <br><br>
                                               <span>
                                                <img src="{{asset('media/post/'.$blogpost->post_image)}}" alt="" id="one" width="50px" height="50px">
                                              
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

                      <div class="span12">
                        <div class="control-group">
                            <label class="control-label">Post Details in English : <span style="color:red">*</span></label>
                            <div class="controls controls-row">
                              <textarea class="span12 ckeditor" name="details_en" rows="6">{{ strip_tags(htmlspecialchars_decode($blogpost->details_en))}}</textarea>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                    <br>
                   
                <div class="row-fluid">
                    <div class="span12">
                        <div class="control-group">
                            <label class="control-label">Post Details in Bangla : <span style="color:red">*</span></label>
                            <div class="controls controls-row">
                              <textarea class="span12 ckeditor" name="details_ban" rows="6">{{ strip_tags(htmlspecialchars_decode($blogpost->details_ban))}}</textarea>
                            </div>
                        </div>
                    </div>
               
              </div>
 

                    <div class="form-actions">
                        <a href="{{route('all.blog.post')}}" class="btn btn-warning" type="button">Back</a>
                      <button class="btn btn-primary" type="submit">Update</button>
                      
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
@endsection
