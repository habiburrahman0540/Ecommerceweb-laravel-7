@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Post List
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget blue">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Post List Table</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                    </div>
                    <div class="widget-body">
                        <div>
                            <div class="clearfix">
                                <div class="btn-group">
                                    <div class="pd-y-30 tx-center bg-gray-700">
                                    <a class="btn btn-primary" href="{{route('add.blogpost')}}" title="Add New Product">Add New Post</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="space15"></div>
                            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                
                                            <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" 
                                            aria-describedby="editable-sample_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Sl"
                                     style="width: 138px;">Sl</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Category Name</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Post Title in English</th>
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Post Title in Bangla</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Image</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Post Details in English</th>
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 150px;">Post Details in Bangla</th>
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" 
                                     style="width: 550px;">Action</th>
                                    </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach ($post as $data)
                                <tr class="odd">
                                    <td class="  sorting_1">{{$loop->iteration}}</td>
                                    <td class="center ">{{$data->category_name_en}}</td>
                                    <td class="center ">{{$data->post_title_en}}</td>
                                    <td class="center ">{{$data->post_title_ban}}</td>
                                    <td class="center "><img src="{{asset('media/post/'.$data->post_image)}}" alt="" width="50px" height="50px"></td>
                                    
                                    <td class="center ">{{ strip_tags(htmlspecialchars_decode($data->details_en)) }}</td>
                                    
                                    <td class="center ">{{ strip_tags(htmlspecialchars_decode($data->details_ban))}}</td>
                               
                                    <td>
                                        
                                    <a href="{{URL::to('post/edit/'.$data->id)}}" class="btn btn-primary" title="Edit"><i class="icon-edit"></i></a>
                                    <a href="{{URL::to('post/delete/'.$data->id)}}" class="btn btn-danger" id="delete" title="Delete"><i class="icon-trash "></i></a>
                                    <a href="{{URL::to('post/view/'.$data->id)}}" class="btn btn-primary" title="Show product"><i class="icon-eye-open"></i></a>
                                 
                                     
                                  </td>
                                   
                             </tr>
                                @endforeach
                                
                            
                            </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
            </div>
        </div>

@endsection
