
<form method="POST" action="<?= $this->url->get('pengguna/add') ?>" enctype="multipart/form-data" class="">
    <div>
        <?= $this->flashSession->output() ?>
    </div>
    <div class="form-group row">
        <label for="nama">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" placeholder="" required>
            </div>
    </div>
    <div class="form-group row">
        <label for="no_telp">No Telp</label>
            <div class="col-sm-10">
                <input type="text" name="no_telp" placeholder="" required>
            </div>
    </div>
    
    <input type="submit" value="Tambah Pengguna" class="btn btn-primary">
</form>