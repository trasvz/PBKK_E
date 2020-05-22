<div class="page-header">
    <a href="{{url('transaksi/')}}" class="btn btn-primary">Kembali</a>
    <br>
</div>
<br>
<form method="POST" action="{{url('transaksi/add')}}" enctype="multipart/form-data" class="">
    <div>
        {{ flashSession.output() }}
    </div>
    <div class="form-group row">
        <label for="jumlah">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" name="jumlah" placeholder="" required>
            </div>
    </div>
    <div class="form-group row">
        <label for="waktu">Waktu</label>
            <div class="col-sm-10">
                <input type="date" name="waktu" placeholder="" required>
            </div>
    </div>
    <div class="form-group row">
        <label for="pengguna">Pengguna</label>
            <div class="col-sm-10">
                <select name="pengguna" class="form-control">
                    {% for pengguna in pengguna %}
                        <option value="{{pengguna.id_user}}">{{pengguna.nama}}</option>
                    {% endfor %}
                </select>
            </div>
    </div>
    <div class="form-group row">
        <label for="bantuan">Bantuan</label>
        <div class="col-sm-10">
            <select name="bantuan" class="form-control">
                {% for bantuan in bantuan %}
                    <option value="{{bantuan.id_bantuan}}">{{bantuan.nama_barang}}</option>
                {% endfor %}         
        </div>
    </div>
    
    <br>
    <input type="submit" value="Tambah Transaksi" class="btn btn-primary">
</form>