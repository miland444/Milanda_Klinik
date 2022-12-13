<section class="konten mt-2">
    <div class="contentainer">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('user'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
               <form method="post" action="<?= base_url('user/update'); ?>">
               <input type="hidden" name="id" value="<?= $r['id_user']; ?>">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" value="<?= $r['username']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="<?= $r['nama_lengkap']; ?>" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="Password" class="form-control" placeholder="Kosongkan jika tidak merubah password......">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                    
                 </form>
            </div>
        </div>
    </div>
</section>