<div class="modal fade" tabindex="-1" role="dialog" id="registration">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title">
                    Register New Acknowledgement Report
                </h1>
                <hr class="mt-2 mb-2">
                <form action="{{ route('article-items.store') }}" method="POST">
                    @csrf
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_article">Article <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the Article name here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-info"></em>
                                </div>
                                <input type="text" class="form-control" id="inp_article" name="article"
                                    placeholder="Enter Article Name here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_description">Description <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Specify the Description here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <textarea class="form-control" id="inp_description" name="description" placeholder="Enter Description here..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_acquisition_date">Acquisition Date <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Specify the Acquisition Date here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="date" class="form-control" id="inp_acquisition_date"
                                    name="acquisition_date">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_property_number_x">Property Number 2020 <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="inp_property_number_x"
                                    name="property_number_x" placeholder="Enter Property Number X here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_property_number_y">Property Number 2021 <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="inp_property_number_y"
                                    name="property_number_y" placeholder="Enter Property Number Y here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_unit_measure">Unit Measure <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="inp_unit_measure" name="unit_measure"
                                    placeholder="Enter Unit Measure here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_unit_value">Unit Value <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="number" step="0.01" class="form-control" id="inp_unit_value"
                                    name="unit_value" placeholder="Enter Unit Value here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_qty_property_card">Quantity per Property Card <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="inp_qty_property_card"
                                    name="quantity_per_property_card" placeholder="Enter Quantity here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_qty_physical_count">Quantity per Physical Count <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="inp_qty_physical_count"
                                    name="quantity_per_physical_count" placeholder="Enter Quantity here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_location">Location <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="inp_location" name="location"
                                    placeholder="Enter Location here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_condition">Condition <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="inp_condition" name="condition"
                                    placeholder="Enter Condition here...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_accountable_officer">Accountable Officer <b
                                        class="text-danger">*</b></label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="inp_accountable_officer"
                                    name="accountable_officer" placeholder="Enter Accountable Officer here...">
                            </div>
                        </div>
                    </div>

                    <!-- Form Buttons -->
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7" style="float: right">
                        <hr class="mt-4 mb-4">
                        <div class="form-group mt-2 mb-2 justify-end">
                            <button type="reset" class="btn btn-light bg-white mx-3">
                                <em class="icon ni ni-repeat"></em>&ensp; Reset
                            </button>
                            <button type="submit" class="btn btn-light bg-white">
                                <em class="icon ni ni-save"></em>&ensp; Submit Record
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
