@extends('admin.admin_layouts')

@section('admin_content')
<!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Category List
                  </h3>
                 
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Category List Table</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                    </div>
                    <div class="widget-body">
                        <div>
                            <div class="clearfix">
                                <div class="btn-group">
                                    <button id="editable-sample_new" class="btn btn-primary">
                                        Add New <i class="icon-plus"></i>
                                    </button>
                                </div>
                                
                            </div>
                            <div class="space15"></div>
                            <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="row-fluid"><div class="span6">
                                    <div id="editable-sample_length" class="dataTables_length">
                                        <label><select size="1" name="editable-sample_length" aria-controls="editable-sample" class="xsmall">
                                            <option value="5" selected="selected">5</option>
                                            <option value="15">15</option><option value="20">20</option>
                                            <option value="-1">All</option></select> records per page</label>
                                        </div></div>
                                        <div class="span6"><div class="dataTables_filter" id="editable-sample_filter"><label>Search: <input type="text" 
                                            aria-controls="editable-sample" class="medium"></label></div></div></div><table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
                                <thead>
                                <tr role="row"><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Sl"
                                     style="width: 238px;">Sl</th>
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" 
                                     style="width: 352px;">Category Name</th>
                                     
                                     <th class="sorting" role="columnheader" tabindex="0" 
                                     aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" 
                                     style="width: 226px;">Action</th>
                                    </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                    <td class="  sorting_1">1</td>
                                    
                                    <td class="center ">new user</td>
                                    <td>
                                        
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger" id="delete"><i class="icon-trash "></i></button>
                                    </td>
                                   
                               
                               
                                </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="editable-sample_info">Showing 1 to 5 of 12 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Prev</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
            </div>
        </div>
@endsection