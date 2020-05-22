<div class="container-fluid">
    <div class="page-header" style="text-align: center;">
        <h2>Pengguna</h2>
    </div>
    <br>

    <div class="page-header">
        <a href="<?= $this->url->get('transaksi/') ?>" class="btn btn-primary">Kembali</a>
        <br>
    </div>

    <table class="table table-hover">
        <thead>
            <tr class="text-center">
                <th>Nama</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengguna as $pengguna) { ?>
            <tr class="text-center">
                <td><?= $pengguna->nama ?></td>
                <td><?= $pengguna->no_telp ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>