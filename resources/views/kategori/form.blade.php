<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <form action="" method="post" class="form-kategori">
        @csrf
        @method('post')
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form">Tambah Kategori</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_kategori" class="col-md-4 col-md-offset-1 control-label">Kategori</label>
                        <div class="col-md-8">
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required autofocus>
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
