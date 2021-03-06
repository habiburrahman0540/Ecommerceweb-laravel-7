@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Edit Coupon Code
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Edit coupon code by ID</h4>
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
                    <form class="cmxform form-horizontal" id="commentForm" method="post" action="{{URL::to('update/coupon/'.$coupon->id)}}" novalidate="novalidate">
                            @csrf

                <div class="modal-body">
                   
                  <div class="control-group ">
                    <label for="coupon" class="control-label">Coupon Code</label>
                    <div class="controls">
                    <input class="span6 " id="coupon" name="coupon" minlength="2" type="text" required="" value="{{$coupon->coupon}}">
                    </div>
                </div>
                <div class="control-group ">
                    <label for="cname" class="control-label">Discount(%)</label>
                    <div class="controls">
                    <input class="span6 " id="cname" name="discount" minlength="2" type="text" required="" value="{{$coupon->discount}}">
                    </div>
                </div>
                

                </div>
                <div class="modal-footer">
                <a href="{{route('admin.coupons')}}" class="btn btn-warning" data-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                        </form>
                    </div>
                            
                 
        
     
  







@endsection
