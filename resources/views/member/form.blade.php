<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <form action="" method="post" class="form-member">
        @csrf
        @method('post')
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form">Tambah @yield('title')</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-md-4 col-md-offset-1 control-label">Nama Member</label>
                        <div class="col-md-8">
                            <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-md-4 col-md-offset-1 control-label">Telepon</label>
                        <div class="col-md-8">
                            <input type="text" name="telepon" id="telepon" class="form-control" required>
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-md-4 col-md-offset-1 control-label">Alamat</label>
                        <div class="col-md-8">
                            <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" >Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
