<div class="modal fade" tabindex="-1" role="dialog" id="registration">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title">
                    Register New Inventory
                </h1>
                <hr class="mt-2 mb-2">
                <form action="{{ route('inventory.store') }}" method="POST">
                    @csrf                    
                    <!-- Description Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="description">Description <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the description here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quantity Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="qty">Quantity <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the quantity.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter quantity" required>
                            </div>
                        </div>
                    </div>
            
                    <!-- Unit Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="unit">Unit <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the unit here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="unit" name="unit" placeholder="Enter unit" required>
                            </div>
                        </div>
                    </div>
            
                    <!-- Unit Cost Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="unit_cost">Unit Cost <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the unit cost here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="unit_cost" name="unit_cost" placeholder="Enter unit cost" required>
                            </div>
                        </div>
                    </div>
            
                    <!-- Total Cost Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="total_cost">Total Cost <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the total cost here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="total_cost" name="total_cost" placeholder="Enter total cost" required>
                            </div>
                        </div>
                    </div>
            
                    <!-- Inventory Item No Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inventory_item_no">Inventory Item No <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the inventory item number here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="inventory_item_no" name="inventory_item_no" placeholder="Enter inventory item no" required>
                            </div>
                        </div>
                    </div>
            
                    <!-- Estimated Useful Life Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="estimated_useful_life">Estimated Useful Life</label>
                                <span class="form-note">Specify the estimated useful life.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="estimated_useful_life" name="estimated_useful_life" placeholder="Enter estimated useful life (optional)">
                            </div>
                        </div>
                    </div>
            
                    <!-- ICS ID Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="ics_id">ICS ID</label>
                                <span class="form-note">Specify the ICS ID if available.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="ics_id" name="ics_id" placeholder="Enter ICS ID (optional)">
                            </div>
                        </div>
                    </div>
            
                    <!-- Form Buttons -->
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7" style="float: right">
                        <hr class="mt-4 mb-4">
                        <div class="form-group mt-2 mb-2 justify-end">
                            <button type="reset" class="btn btn-light bg-white mx-3">
                                <em class="icon ni ni-repeat"></em> Reset
                            </button>
                            <button type="submit" class="btn btn-light bg-white">
                                <em class="icon ni ni-save"></em> Submit Record
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>