@extends('layouts.admin-template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-warning btn-sm" href="{{ route('admin.asset-inventory.index') }}"><i class="menu-icon fa fa-caret-left"></i> Back to List</a>
    </div>
</div>
<br />

<div class="row">
    <div class="col-md-12">

    <div class="panel panel-default">

                <div class="panel-heading">New Asset Item</div>


                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-6">

                        <form method="post" action="{{ route('admin.asset-inventory.store') }}">
                                                    @csrf
                                                    

                                                    <!-- ID -->
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">Asset ID</span>
                                                        <input type="text" name="assetid" class="form-control" placeholder="" aria-describedby="basic-addon1" />
                                                    </div>
                                                    <!--  -->


                                                    <!-- Description -->

                                                    <div class="input-group" style="margin-top:10px;">
                                                            <span class="input-group-addon" id="basic-addon1">Description</span>
                                                            <input type="text" name="assetDescription" class="form-control" placeholder="Type the description of asset item" aria-describedby="basic-addon1" />
                                                    </div>
                                                    <!--  -->


                                                    <!-- Class -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Class</span>
                                                    <select name="assetClass" class="form-control" placeholder="Select a class" aria-describedby="basic-addon1" />
                                                        <option value="LCD Display">LCD Display</option>
                                                        <option value="Solid State Drive">Solid State Drive</option>
                                                        <option value="Hard Disk Drive">Hard Disk Drive</option>
                                                        <option value="MultiFunc Network Printer">MultiFunc Network Printer</option>
                                                        <option value="Dot Matrix Network Printer">Dot Matrix Network Printer</option>
                                                    </select> 
                                                    </div>
                                                    <!--  -->



                                                    <!-- Category -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Category</span>
                                                    <select name="assetCategory" class="form-control" placeholder="select a category" aria-describedby="basic-addon1" />
                                                        <option value="Laptop Parts">Laptop Parts</option>
                                                        <option value="Desktop Comp. Parts">Desktop Comp. Parts</option>
                                                        <option value="Laptop">Laptop</option>
                                                        <option value="Desktop CPU">Desktop CPU</option>
                                                        <option value="Storage">Storage</option>
                                                        <option value="Memory">Memory</option>
                                                        <option value="Memory">Network</option>
                                                    </select>
                                                    </div>
                                                    <!--  -->
                                                    
                                                    
                                                   <div class="row">
                                                    <div class="col-sm-6">
                                                                     <!-- Qty  -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Quantity</span>
                                                    <input type="number" name="assetQty" class="form-control" placeholder="Type value of quantity" aria-describedby="basic-addon1" />
                                                    </div>
                                                    <!--  -->

                                                   

                                                    </div>
                                                    <div class="col-sm-6">
                                                         <!-- Unit  -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Unit</span>
                                                    <select name="assetUnit" class="form-control" placeholder="Select a unit" aria-describedby="basic-addon1" >
                                                            <option value="Pcs.">Pcs.</option>
                                                            <option value="Sets">Sets</option>
                                                            <option value="Units">Units</option>
                                                            <option value="Pcks.">Packs</option>
                                                            <option value="Bxs">Boxes</option>
                                                    </select>
                                                    </div>
                                                    <!--  -->
                                                    </div>
                                                   </div>

                                                   

                                                        



                        </div>
                        <div class="col-sm-6">
                            
                                                    <!-- Status -->
                                                    <div class="input-group" style="">
                                                    <span class="input-group-addon" id="basic-addon1">Status</span>
                                                    <select type="text" name="assetStatus" class="form-control" placeholder="Select the Status" aria-describedby="basic-addon1" />
                                                        <option value="Good">Good</option>
                                                        <option value="Decommission">Decommission</option>
                                                        <option value="Inhouse Stock">Inhouse Stock</option>
                                                    </select>                                                    
                                                    </div>
                                                    <!--  -->
                                                        
                                                        
                                                    <!-- remarks -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Remarks</span>
                                                    <!-- <input type="text" name="assetRemarks" class="form-control" placeholder="Username" aria-describedby="basic-addon1" /> -->
                                                    <textarea type="text" name="assetRemarks" class="form-control" rows="5"></textarea>
                                                    </div>
                                                    <!--  -->


                            <!-- end col 6 -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-11"></div>
                        <div class="col-sm-1">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i>  Save</button>
                        </div>
                    </div>
                    </form>
                <!-- Panel body end -->
                </div>

    <!-- end of main panel -->
    </div>


    <!-- end of col 12 main column -->
    </div>

<!-- end of main row -->
</div>

               
     

@endsection
