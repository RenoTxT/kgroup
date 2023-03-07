<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <form action="" method="post" class="form-produk">
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
                        <label for="nama_produk" class="col-md-4 col-md-offset-1 control-label">Nama Produk</label>
                        <div class="col-md-8">
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" required autofocus>
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_kategori" class="col-md-4 col-md-offset-1 control-label">Kategori</label>
                        <div class="col-md-8">
                            <select name="id_kategori" id="id_kategori" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $key => $item)
                                    <option value="{{$key}}">{{$item}}</option>
                                @endforeach
                            </select>
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merk" class="col-md-4 col-md-offset-1 control-label">Merk</label>
                        <div class="col-md-8">
                            <input type="text" name="merk" id="merk" class="form-control">
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_beli" class="col-md-4 col-md-offset-1 control-label">Harga Beli</label>
                        <div class="col-md-8">
                            <input type="number" name="harga_beli" id="harga_beli" class="form-control">
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_jual" class="col-md-4 col-md-offset-1 control-label">Harga Jual</label>
                        <div class="col-md-8">
                            <input type="number" name="harga_jual" id="harga_jual" class="form-control" required>
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="diskon" class="col-md-4 col-md-offset-1 control-label">Diskon</label>
                        <div class="col-md-8">
                            <input type="number" name="diskon" id="diskon" class="form-control" value="0">
                            <div class="span help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-md-4 col-md-offset-1 control-label">Stok</label>
                        <div class="col-md-8">
                            <input type="number" name="stok" id="stok" class="form-control" required value="0">
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
