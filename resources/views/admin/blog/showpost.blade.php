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
          view Post
         </h3>
         <ul class="breadcrumb">
             <li>
                 <a href="#">Home</a>
                 <span class="divider">/</span>
             </li>
            
             <li class="active">
                view Post
             </li>
             
            <a class="btn btn-primary btn-md-block pull-right" href="{{route('all.blog.post')}}">All Post</a>
             
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
                    <i class="icon-reorder"></i> view Post
                </h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label badge badge-success">Post Title in English : </label>
                                <div class="controls controls-row">
                               <span ><p>{{$post->post_title_en}}</p> </span> 
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label badge badge-success">Post Title in Bangla : </label>
                                <div class="controls controls-row">
                                    <span><p>{{$post->post_title_ban}}</p> </span>   
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row-fluid">
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label badge badge-success">Category Name: </label>
                                <div class="controls controls-row">
                                    <span><p>{{$post->category_name_en}}</p> </span>   
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="control-group">
                                <label for="post_image" class="control-label badge badge-success">Image :</label>
                                <div class="controls controls-row">
                                   
                                  <div class="control-group">
                                
                                    <div class="controls">
                                        <span>
                                        <img src="{{asset('media/post/'.$post->post_image)}}" alt="" id="one" width="200px" height="200px">
                                        </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
 
                    
                   
            
                    <div class="row-fluid">

                      <div class="span12">
                        <div class="control-group">
                            <label class="control-label badge badge-success">Post Details in English :</label>
                            <div class="controls controls-row">
                                <span><p>{{strip_tags(htmlspecialchars_decode($post->details_en))}}</p> </span>   
                            </div>
                        </div>
                    </div>
                  
                    </div>
                    <br>
                   
                <div class="row-fluid">
                    <div class="span12">
                        <div class="control-group">
                            <label class="control-label badge badge-success">Post Details in Bangla :</label>
                            <div class="controls controls-row">
                                <span><p>{{strip_tags(htmlspecialchars_decode($post->details_ban))}}</p> </span> 
                            </div>
                        </div>
                    </div>
               
              </div>
 

                    <div class="form-actions">
                        <a href="{{route('all.blog.post')}}" class="btn btn-warning" type="button">Back</a>
                     
                      
                  </div>
               
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
