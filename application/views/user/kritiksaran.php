<section class="suggestion-box-section">
    <div class="containerkotaksaran">
        <h2 class="section-title" style="color: black;">Kotak Saran</h2>
        <form action="<?php echo site_url('kritiksaran/submit'); ?>" method="post" class="suggestion-form">
            <div class="form-group">
                <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" required class="form-control">
            </div>
            <div class="form-group">
                <textarea id="pesan" name="pesan" placeholder="Pesan" required class="form-control"></textarea>
            </div>
            <button type="submit" class="submit-btn">
                Kirim Pesan <span class="send-icon">✉️</span>
            </button>
        </form>
    </div>
</section>