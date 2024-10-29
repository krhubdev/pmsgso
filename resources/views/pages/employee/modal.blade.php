<div class="modal fade" tabindex="-1" role="dialog" id="registration">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title">
                    Register New Employee
                </h1>
                <hr class="mt-2 mb-2">

                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf

                    <!-- First Name Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="first_name">First Name <b
                                        class="text-danger">*</b></label>
                                <span class="form-note">Specify the employee's first name here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter first name" required>
                            </div>
                        </div>
                    </div>

                    <!-- Last Name Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="last_name">Last Name <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the employee's last name here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter last name" required>
                            </div>
                        </div>
                    </div>

                    <!-- Position Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="position">Position <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the employee's position here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="position" name="position"
                                    placeholder="Enter position" required>
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
