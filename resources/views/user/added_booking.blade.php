@extends('user.layout')
@section('content')
<div class="page-content-wrap">
          
    <div class="row">  
        <!-- <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
            <div class="col-md-12" style="margin-top:5px;">
                <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label>
                   
              
            <a href="added_project_entry.html"> <button id="on" type="button" class="btn mjks"
                style="color:#FFFFFF; height:30px; width:auto;background-color: #009999;"><i
                    class="fa fa-plus"></i>Added Project Entry</button>
        </a>                       
</div>
            </div> -->
       
         </div>
          
         <div class="row">
            <div class="col-md-12" style="text-align: center;margin-top: 5px;">
                <h6 class="panel-title" style="color:#FFFFFF; background-color:#006699; width:100%;height: 50%; font-size:16px;" align="center">
                    <i class="fa fa-file-text"><label style="margin: 7px;">Added Booking</label> </i> </h6>
            
            </div>
            <div class="col-md-12" style="overflow:scroll">

                <!-- START DEFAULT DATATABLE -->
          
                    <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                        <table class="table datatable" style="overflow:auto !important;">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Branch</th>
                                    <th>Project Code</th>
                                    
                                    <th>Project Name</th>
                                  
                                    <th>Area(Sq.Ft)</th>
                                    <th>Area(Sq.Mt)</th>
                                   
                                    <th>No.of Plots</th>
                                  
                                    <th>Mauja</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
                                    <td>1.</td>
                                   
                                    <td>Pune</td>
                                    <td>25656</td>
                                    <td>Project One</td>
                                    <td>23445</td>
                                    <td>4556</td>
                                    <td>25</td>
                                    <td>16</td>
                                    <!-- <td> -->
                                        <!-- <button data-toggle="modal" data-target="#popup3" style="background-color:#1abc3d; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" style="margin-left:5px;"></i></button> -->
                                        <!-- <button type="button" class="btn btn-sm btn-success" >Approve</button> -->
                                        <!-- <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button> -->
                                    <!-- </td> -->
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>
             
            </div>
        </div>
</div>

@stop