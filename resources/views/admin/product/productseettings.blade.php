@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Product Settings
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget blue">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Product Settings Table</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                    </div>
                    <div class="widget-body">
                        <div>
                            
                            <div class="space15"></div>
                            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                
                                            <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" 
                                            aria-describedby="editable-sample_info">
                                <thead>
                                <tr role="row"><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Sl"
                                     style="width: 138px;">Sl</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Product Code</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Product Name</th>
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Image</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 150px;">Quantity</th>
                                    
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Featured</th>
                                     
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 100px;">Trend</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 100px;">Best Rated</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" 
                                     style="width: 550px;">Action</th>
                                    </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach ($product as $data)
                                <tr class="odd">
                                    <td class="  sorting_1">{{$loop->iteration}}</td>
                                    <td class="center ">{{$data->product_code}}</td>
                                    <td class="center ">{{$data->product_name}}</td>
                                    <td class="center "><img src="{{asset('media/product/'.$data->image_one)}}" alt="" width="50px" height="50px"></td>
                                    <td class="center ">{{$data->product_quantity}}</td>
                                    <td class="center ">
                                        @if($data->hot_deal ==1)
                                    <a href="{{URL::to('inactive/product/hotdeal/'.$data->id)}}" class="btn btn-important" title="Inactive">ON</a> 
                                    @else
                                    <a href="{{URL::to('active/product/hotdeal/'.$data->id)}}" class="btn btn-info" title="Active">OFF</a>  
                                    @endif
                                    </td>
                                    <td class="center ">

                                        @if($data->trend ==1)
                                        <a href="{{URL::to('inactive/product/trend/'.$data->id)}}" class="btn btn-important" title="Inactive">ON</a> 
                                        @else
                                        <a href="{{URL::to('active/product/trend/'.$data->id)}}" class="btn btn-info" title="Active">OFF</a>  
                                        @endif
                                    </td>
                                    <td class="center ">

                                        @if($data->best_rated ==1)
                                        <a href="{{URL::to('inactive/product/bestrated/'.$data->id)}}" class="btn btn-important" title="Inactive">ON</a> 
                                        @else
                                        <a href="{{URL::to('active/product/bestrated/'.$data->id)}}" class="btn btn-info" title="Active">OFF</a>  
                                        @endif
                                    </td>
                                    
                               
                                    <td>
                                        
                                    <a href="{{URL::to('edit/product/'.$data->id)}}" class="btn btn-primary" title="Edit"><i class="icon-edit"></i></a>
                                    <a href="{{URL::to('product/delete/'.$data->id)}}" class="btn btn-danger" id="delete" title="Delete"><i class="icon-trash "></i></a>
                                    <a href="{{URL::to('product/view/'.$data->id)}}" class="btn btn-primary" title="Show product"><i class="icon-eye-open"></i></a>
                                   
                                   
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
        <input id="toggle-one" checked type="checkbox">
<script>
  $(function() {
    $('#toggle-one').bootstrapToggle();
  })
</script>
@endsection

