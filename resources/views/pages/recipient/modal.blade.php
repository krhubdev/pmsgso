<div class="modal fade" tabindex="-1" role="dialog" id="registration">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title">
                    Register New Recipient
                </h1>
                <hr class="mt-2 mb-2">

                <form action="{{ route('recipient.store') }}" method="POST">
                    @csrf
                    
                    <!-- Name Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="name">Recipient Name <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the recipient's name here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter recipient name" required>
                            </div>
                        </div>
                    </div>
            
                    <!-- Position Field -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="position">Position <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the recipient's position here.</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="position" name="position" placeholder="Enter position" required>
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
