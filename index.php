<?php
    // Set judul spesifik untuk halaman ini
    $pageTitle = "Beranda - Solusi Pangan Ransum Tahan Lama";

    // 1. Memanggil file header
    include 'header.php';
?>

<main>
    <div class="container">

        <section class="hero">
            <h1>Solusi Pangan Praktis & Tahan Lama</h1>
            <p>Makanan ransum bergizi untuk mendukung aktivitas dan kesiapsiagaan Anda.</p>
            
            <img 
                src="https://images.pexels.com/photos/18356746/pexels-photo-18356746.jpeg" 
                alt="Gambar makanan ransum kemasan" 
                style="width: 50%; border-radius: 8px; margin-bottom: 30px;">
        </section>

        <section class="features">
            <div class="feature-grid">
                
                <div class="feature-card">
                    <a href="tentang.php">
                        <h3>Tentang Kami</h3>
                        <p>Pelajari lebih lanjut tentang tim kami dan misi di balik proyek PKM ini.</p>
                    </a>
                </div>
                
                <div class="feature-card">
                    <a href="produk.php">
                        <h3>Deskripsi Produk</h3>
                        <p>Lihat detail nilai gizi, varian rasa, dan keunggulan produk ransum kami.</p>
                    </a>
                </div>
                
                <div class="feature-card">
                    <a href="qna.php">
                        <h3>Kolom QnA</h3>
                        <p>Punya pertanyaan? Temukan jawabannya atau ajukan pertanyaan baru di sini.</p>
                    </a>
                </div>
                
            </div> </section> </div> </main>

<?php
    // 3. Memanggil file footer
    include 'footer.php';
?>