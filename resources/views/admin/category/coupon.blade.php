@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Coupon List
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Coupon List Table</h4>
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
                                      <input type="button" class="btn btn-lg btn-primary launch-modal" value="Add New Coupon">
                                      </div><!-- pd-y-30 -->
                                    </div>
                                </div>
                                
                            </div>
                            <div class="space15"></div>
                            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                
                                            <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" 
                                            aria-describedby="editable-sample_info">
                                <thead>
                                <tr role="row"><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Sl"
                                     style="width: 238px;">Sl</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="coupon code: activate to sort column ascending" 
                                     style="width: 352px;">Coupon Code</th>
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Discount: activate to sort column ascending" 
                                     style="width: 352px;">Discount(%)</th>

                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" 
                                     style="width: 226px;">Action</th>
                                    </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach ($coupon as $data)
                                <tr class="odd">
                                    <td class="  sorting_1">{{$loop->iteration}}</td>
                                    
                                    <td class="center ">{{$data->coupon}}</td>
                                    <td class="center ">{{$data->discount}}%</td>
                                    <td>
                                        
                                    <a href="{{URL::to('edit/coupon/'.$data->id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                    <a href="{{URL::to('coupon/delete/'.$data->id)}}" class="btn btn-danger" id="delete"><i class="icon-trash "></i></a>
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

        <!--  Data table model   -->
        
     
  <div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New Coupon</h4>
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
                        <form class="cmxform form-horizontal" id="commentForm" method="post" action="{{route('store.coupon')}}" novalidate="novalidate">
                            @csrf

                <div class="modal-body">
                   
                  <div class="control-group ">
                    <label for="coupon" class="control-label">Coupon Code</label>
                    <div class="controls">
                        <input class="span6 " id="coupon" name="coupon" minlength="2" type="text" required="" placeholder="Enter coupon code.">
                    </div>
                </div>
                <div class="control-group ">
                    <label for="discount" class="control-label">Discount (%)</label>
                    <div class="controls">
                        <input class="span6 " id="discount" name="discount" minlength="2" type="text" required="" placeholder="Enter Discount.">
                    </div>
                </div>


                </div>
                <div class="modal-footer">
                <a href="{{route('admin.coupons')}}" type="button" class="btn btn-warning" data-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                        </form>
            </div>
        </div>
    </div>
</div>







@endsection
