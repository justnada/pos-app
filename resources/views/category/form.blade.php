<div class="modal fade text-left" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="" method="POST" class="form form-horizontal">
                @csrf
                @method('post')

                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">

                            {{-- <div class="col-md-4">
                                <label for="invalid-state">Invalid State</label>
                            </div>

                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control is-invalid" id="invalid-state"
                                    placeholder="Invalid" value="Invalid" required>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    This is invalid state.
                                </div>
                            </div> --}}


                            <div class="col-md-4">
                                <label for="name">Category <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="name" class="form-control" name="name"
                                    placeholder="Category name" autofocus required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ms-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
