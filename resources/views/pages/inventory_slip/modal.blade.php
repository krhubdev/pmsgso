<div class="modal fade" tabindex="-1" role="dialog" id="registration">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title">
                    Register New Inventory Slip
                </h1>
                <hr class="mt-2 mb-2">

                <form action="{{ route('inventory.slip.store') }}" method="POST">
                    @csrf

                    <!-- LGU Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="lgu">LGU <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the Local Government Unit here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="lgu" name="lgu"
                                    placeholder="Enter LGU" required>
                            </div>
                        </div>
                    </div>

                    <!-- Fund Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="fund">Fund <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the fund source here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fund" name="fund"
                                    placeholder="Enter fund source" required>
                            </div>
                        </div>
                    </div>

                    <!-- Office Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="office">Office <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the office here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="office" name="office"
                                    placeholder="Enter office" required>
                            </div>
                        </div>
                    </div>

                    <!-- Date Acquired Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="date_acquired">Date Acquired <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Specify the acquisition date here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="date" class="form-control" id="date_acquired" name="date_acquired"
                                    required>
                            </div>
                        </div>
                    </div>

                    <!-- Custodian ID Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="custodian_id">Custodian <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Specify the custodian here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <select name="custodian_id" id="custodian_id" class="form-select" required>
                                    <option name="" id="" value="" selected disabled>-</option>
                                    @foreach ($custodian as $data)
                                        <option value="{{ $data->custodian_id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Recipient ID Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="recipient_id">Recipient <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Specify the recipient here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <select name="recipient_id" id="recipient_id" class="form-select" required>
                                    <option name="" id="" value="" selected disabled>-</option>
                                    @foreach ($recipient as $data)
                                        <option value="{{ $data->recipient_id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
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
