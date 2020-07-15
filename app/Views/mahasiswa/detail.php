<!-- form start -->
<?php
helper('form');
echo form_open_multipart(base_url("mahasiswa/upload_photo"));
?>
<div class="card-body">
    <div class="form-group">
        <label>Nim</label>
        <input type="number" readonly="true" class="form-control" placeholder="Input NIM"
            value="<?= $records['nim']; ?>">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" readonly="true" class="form-control" placeholder="Input Nama"
            value="<?= $records['nama']; ?>">
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" readonly="true" class="form-control" placeholder="Input Jurusan"
            value="<?= $records['jurusan']; ?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" rows="3" placeholder="Input Alamat"
            readonly="true"><?= $records['alamat']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" readonly="true" class="form-control" placeholder="Input Email"
            value="<?= $records['email']; ?>">
    </div>
    <div class="form-group">
        <label>No. Telp.</label>
        <input type="number" readonly="true" class="form-control" placeholder="Input No. Telp."
            value="<?= $records['no_telp']; ?>">
    </div>
    <div class="form-group">
        <label>File input</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="photo" required="true">
                <label class="custom-file-label">Choose file</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
            </div>
        </div>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="button" class="btn btn-info btn-sm"
        onclick="window.location.href='<?= base_url('mahasiswa');?>';">Kembali</button>
    <button type="submit" class="btn btn-primary btn-sm">Upload Foto</button>
</div>
<?= form_close(); ?>