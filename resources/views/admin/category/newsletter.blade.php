@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Subscriber List
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Subscriber List Table</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                    </div>
                    <div class="widget-body">
                      
                            <div class="space15"></div>
                            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                
                                            <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" 
                                            aria-describedby="editable-sample_info">
                                <thead>
                                <tr role="row"><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Sl"
                                     style="width: 238px;">Sl</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="coupon code: activate to sort column ascending" 
                                     style="width: 352px;">Subscriber Email Address</th>
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Discount: activate to sort column ascending" 
                                     style="width: 352px;">Subscribing Time</th>

                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" 
                                     style="width: 226px;">Action</th>
                                    </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach ($newsletters as $data)
                                <tr class="odd">
                                    <td class="  sorting_1">{{$loop->iteration}}</td>
                                    
                                    <td class="center ">{{$data->email}}</td>
                                    <td class="center ">{{\Carbon\Carbon::parse($data->created_at)->diffForhumans()}}</td>
                                    <td>
                                    <a href="{{URL::to('newsletters/delete/'.$data->id)}}" class="btn btn-danger" id="delete"><i class="icon-trash "></i></a>
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
