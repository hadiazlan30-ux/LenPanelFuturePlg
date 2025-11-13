<?php
    // Set judul spesifik untuk halaman ini
    $pageTitle = "Kolom QnA - PKM Pangan Ransum";

    // 1. Memanggil file header (Menu dan CSS)
    include 'header.php';
?>

<main>
    <div class="container">

        <section class="page-header" style="text-align: center; padding: 20px 0 30px 0;">
            <h1 style="color: var(--color-accent); font-size: 2.5rem;">Kolom QnA</h1>
            <p style="font-size: 1.1rem; color: var(--color-text-light);">Pertanyaan yang Sering Diajukan (FAQ)</p>
        </section>

        <section class="page-content" style="background: var(--color-white); border: 1px solid var(--border-light); border-radius: 8px; padding: 40px;">

            <div class="qna-item" style="margin-bottom: 30px;">
                <h3 style="font-size: 1.3rem; color: var(--color-text); margin-bottom: 5px;">
                    T: Berapa lama masa simpan produk ini?
                </h3>
                <p style="color: var(--color-text-light);">
                    J: Produk kami dirancang untuk tahan hingga 24 bulan (2 tahun) jika disimpan di tempat yang sejuk dan kering, serta kemasan tidak rusak.
                </p>
            </div>
            
            <div class="qna-item" style="margin-bottom: 30px;">
                <h3 style="font-size: 1.3rem; color: var(--color-text); margin-bottom: 5px;">
                    T: Apakah produk ini halal dan aman dikonsumsi?
                </h3>
                <p style="color: var(--color-text-light);">
                    J: Ya. Kami menggunakan bahan-bahan baku yang 100% bersertifikat Halal. Produk ini juga diproses di lingkungan yang higienis dan telah lulus uji kelayakan pangan.
                </p>
            </div>
            
            <div class="qna-item" style="margin-bottom: 30px;">
                <h3 style="font-size: 1.3rem; color: var(--color-text); margin-bottom: 5px;">
                    T: Apa saja varian rasa yang tersedia?
                </h3>
                <p style="color: var(--color-text-light);">
                    J: Saat ini kami sedang mengembangkan 3 varian utama: Nasi Goreng Ayam (gurih), Bubur Kacang Hijau (manis), dan Rendang Daging (pedas).
                </p>
            </div>
            
            <div class="qna-item" style="margin-bottom: 30px;">
                <h3 style="font-size: 1.3rem; color: var(--color-text); margin-bottom: 5px;">
                    T: Di mana saya bisa membeli produk ini?
                </h3>
                <p style="color: var(--color-text-light);">
                    J: Saat ini produk kami masih dalam tahap pengembangan akhir (prototipe PKM) dan belum dipasarkan secara komersial. Pantau terus website ini untuk informasi peluncuran!
                </p>
            </div>
            
            <div class="qna-contact" style="text-align: center; border-top: 1px solid var(--border-light); padding-top: 30px; margin-top: 20px;">
                <h3 style="color: var(--color-text); margin-bottom: 10px;">Punya Pertanyaan Lain?</h3>
                <p style="color: var(--color-text-light);">
                    Jangan ragu untuk menghubungi kami melalui (misal: email pkm-anda@email.com).
                </p>
            </div>

        </section> </div> </main>

<?php
    // 3. Memanggil file footer
    include 'footer.php';
?>