
    <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                    <div class="col-lg-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Halaman Login!!</h1>
                        </div>
                        <?= $this->session->flashdata('pesan'); ?>
                        <from class="user" method="post"action="<?= base_url('auntentifikasi'); ?>">
                        <div class="from-group">
                            <input type="text"
                            class="from-control form-control-user" value="<?=
                            set_value('email'); ?>" id="email" placeholder="Masukan Alamat Email" name="email">
                            <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password"class="form-control form-control-user" id="password"placeholder="password" name="password">
                            <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            masuk
                        </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?=base_url('auntentifikasi/lupapassword'); ?>">lupa password?</a>
                        </div>
                        </div class="text-center">
                        <a class="text-center">
                            <a class="small" href="<?=base_url('auntentifikasi/registrasi'); ?>">Daftar Member!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>