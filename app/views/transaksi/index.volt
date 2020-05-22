
<div class="container-fluid">
    <div class="page-header" style="text-align: center;">
        <h2>Transaksi</h2>
    </div>
    <br>

    <div class="page-header">
        <a href="{{url('transaksi/create')}}" class="btn btn-primary">Tambah Transaksi</a>
        <a href="{{url('pengguna/')}}" class="btn btn-primary">Daftar pengguna</a>
        <a href="{{url('pengguna/create')}}" class="btn btn-primary">Tambah pengguna</a>
        <br>
    </div>

    <table class="table table-hover">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Jumlah</th>
                <th>Waktu</th>
                <th>Pengguna</th>
                <th>Bantuan</th>
            </tr>
        </thead>
        <tbody>
            {% for transaksi in transaksi %}
            <tr class="text-center">
                <td>{{ transaksi.id_transaksi }}</td>
                <td>{{ transaksi.jumlah }}</td>
                <td>{{ transaksi.waktu }}</td>
                <td>{{ transaksi.pengguna.nama}}</td>
                <td>{{ transaksi.bantuan.nama_barang }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>