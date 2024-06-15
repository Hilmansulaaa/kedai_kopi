<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($pesan = $this->cart->contents()) {
                    foreach ($pesan as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Total Pembayaran: Rp. " . number_format($grand_total, 0, '.', '.');
                } ?>
            </div><br><br>

            <h4>Input Pembelian</h4>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>Take Away / Dine In</label>
                    <select class="form-control">
                        <option>Pilih</option>
                        <option>Take Away</option>
                        <option>Dine In</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No.Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>Pilih</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>Pilih</option>
                        <option>BCA - XXXXX</option>
                        <option>BNI - XXXXX</option>
                        <option>BJB - XXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Bayar</button>
            </form>
        </div>
        <div class="cold-md-2"></div>
    </div>
</div>