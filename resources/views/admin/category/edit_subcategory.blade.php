@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Edit Subcategory
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Edit Subcategory by ID</h4>
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
                    <form class="cmxform form-horizontal" id="commentForm" method="post" action="{{URL::to('update/subcategory/'.$subcategory->id)}}" novalidate="novalidate">
                            @csrf

                <div class="modal-body">
                   
                  <div class="control-group ">
                    <label for="cname" class="control-label">Subcategory Name</label>
                    <div class="controls">
                    <input class="span6 " id="cname" name="subcategory_name" minlength="2" type="text" required="" value="{{$subcategory->subcategory_name}}">
                    </div>
                </div>

                <div class="control-group ">
                    <label for="category_id" class="control-label">Category Name</label>
                    <div class="controls">
                        <select name="category_id" id="category_id">
                            @foreach ($category as $data)
                        <option value="{{$data->id}}" {{ ( $data->id == $subcategory->category_id) ? 'selected' : '' }}>
                            {{$data->category_name}}
                        </option>  
                            @endforeach
                        </select>
                    </div>
                </div>
           
                </div>
                <div class="modal-footer">
                <a href="{{route('admin.subcategory')}}" class="btn btn-warning" data-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                        </form>
                    </div>
                            
                 
        
     
  







@endsection
