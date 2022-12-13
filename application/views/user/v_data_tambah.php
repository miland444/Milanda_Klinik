<section class="konten mt-2">
    <div class="contentainer">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('user'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
               <form method="post" action="<?= base_url('user/insert'); ?>">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="Password" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                    
                 </form>
            </div>
        </div>
    </div>
</section>