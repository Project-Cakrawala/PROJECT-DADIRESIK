<div class="testbox box">
    <form action="<?= base_url('Formpesan/tambah_pesan');  ?>" method="post">
        <h2 style="text-align: center; font-family:cursive; font-size:40px">Form Pemesanan</h2>
        <div style="color: #8B0000; border: 3px solid#0000FF;">
            <div style="margin-left: 10px;">
                <h3 style=" font-weight: bold;font-family: karla;">NOTE</h3>
                <li><strong>SILAHKAN LOGIN TERLEBIH DAHULU</strong></li>
                <!--<li>Jasa yang sudah di pesan <strong>tidak bisa dibatalkan</strong> </li>
                <li>Data Form Pemesanan akan secara otomatis terisi dari <strong>Data Saat Registrasi Akun</strong></li>
                <li>Simpan Konfirmasi Pembayaran yang telah dikirim ke email anda, dan tunjukan kepada karyawan kami</li>-->
            </div>
        </div>
        <hr class="hr">
        <?php if ($this->session->userdata('email')) : ?>
            <div class="item">
                <p><strong>ID Pesanan</strong></p>
                <input type="text" name="id_pemesanan" value="<?php echo $invoice; ?>" readonly />
            </div>
            <div class="item">
                <p><strong>Nama Pemesan</strong></p>
                <input type="hidden" name="id_brg" value="<?= $id_brg; ?>">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <input type="text" name="name" value="<?= $user['nama']; ?>" readonly />
                <i class="fas fa-user"></i>
            </div>
            <div class="item">
                <p><strong>Email</strong></p>
                <input type="text" name="email" value="<?= $user['email']; ?>" readonly />
                <i class="far fa-envelope"></i>
            </div>
            <div class="item">
                <p><strong>Alamat Pemesan</strong></p>
                <textarea rows="3" name="alamat" readonly><?= $user['alamat']; ?></textarea>
                <i class="fas fa-map-marked-alt"></i>
            </div>
            <div class="item">
                <p><strong>No.Telp</strong></p>
                <input type="text" name="hp" value="<?= $user['hp']; ?>" readonly />
                <i class="fas fa-phone"></i>
            </div>
            <div class="item">
                <p><strong>Nama Kota</strong></p>
                <input type="text" name="kota" value="<?= $user['kota']; ?>" readonly />
                <i class="fas fa-city"></i>
            </div>
            <div class="item">
                <p><strong>Tanggal Pesanan</strong></p>
                <input type="date" name="tanggal" required />
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
                <p><strong>Waktu Pesanan</strong></p>
                <input type="time" name="waktu" required />
                <i class="fas fa-clock"></i>
            </div>
            <div class="question">
                <p><strong>Metode Pembayaran</strong></p>
                <div class="question-answer">
                    <div>
                        <input type="radio" value="TRANSFER BANK" id="radio_1" name="recorded" />
                        <label for="radio_1" class="radio"><span>TRANSFER BANK</span></label>

                        <input type="radio" value="PAYPAL" id="radio_2" name="recorded" />
                        <label for="radio_2" class="radio"><span>PAYPAL</span></label>

                        <input type="radio" value="OVO" id="radio_3" name="recorded" />
                        <label for="radio_3" class="radio"><span>OVO</span></label>

                        <input type="radio" value="DANA" id="radio_4" name="recorded" />
                        <label for="radio_4" class="radio"><span>DANA</span></label>


                        <input type="radio" value="BAYAR DI TEMPAT" id="radio_5" name="recorded" />
                        <label for="radio_5" class="radio"><span>BAYAR DI TEMPAT</span></label>
                    </div>
                </div>
            </div>
            <div class="btn-block">

                <button type="submit" name="submit">SEND</button>
            </div>
        <?php endif; ?>
    </form>
</div>
</body>