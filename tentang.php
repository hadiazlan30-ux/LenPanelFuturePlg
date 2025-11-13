<?php
    // Set judul spesifik untuk halaman ini
    $pageTitle = "Tentang Kami - PKM Pangan Ransum";

    // 1. Memanggil file header (Menu dan CSS)
    include 'header.php';
?>

<main>
    <div class="container">

        <section class="page-header" style="text-align: center; padding: 20px 0 30px 0;">
            <h1 style="color: var(--color-accent); font-size: 2.5rem;">Tentang Kami</h1>
        </section>

        <section class="page-content" style="background: var(--color-white); border: 1px solid var(--border-light); border-radius: 8px; padding: 40px;">

            <h2 style="font-size: 1.8rem; color: var(--color-text); margin-bottom: 15px;">Misi Proyek Kami</h2>
            <p style="color: var(--color-text-light); margin-bottom: 40px;">
                Misi kami adalah menciptakan solusi pangan yang praktis, bergizi, dan tahan lama untuk mendukung 
                masyarakat dalam situasi darurat, aktivitas luar ruangan, atau bagi mereka yang membutuhkan 
                kepraktisan pangan sehari-hari. Kami percaya bahwa akses terhadap makanan bergizi 
                tidak boleh terhalang oleh situasi dan kondisi.
            </p>

            <h2 style="font-size: 1.8rem; color: var(--color-text); margin-bottom: 20px;">Tim Pengembang</h2>
            
            <ul style="list-style-type: none; padding-left: 0;">
                
                <li style="margin-bottom: 15px; border-bottom: 1px solid var(--border-light); padding-bottom: 15px;">
                    <strong style="font-size: 1.1rem; color: var(--color-text);">Azlan</strong>
                    <p style="color: var(--color-text-light);">Manajemen Proyek & Pengembangan Produk</p>
                </li>
                
                <li style="margin-bottom: 15px; border-bottom: 1px solid var(--border-light); padding-bottom: 15px;">
                    <strong style="font-size: 1.1rem; color: var(--color-text);">Geu</strong>
                    <p style="color: var(--color-text-light);">Kontrol Kualitas & Ahli Gizi</p>
                </li>

                <li style="margin-bottom: 15px; border-bottom: 1px solid var(--border-light); padding-bottom: 15px;">
                    <strong style="font-size: 1.1rem; color: var(--color-text);">Devi</strong>
                    <p style="color: var(--color-text-light);">Desain Kemasan & Pemasaran</p>
                </li>

                <li style="margin-bottom: 10px;">
                    <strong style="font-size: 1.1rem; color: var(--color-text);">Fadel</strong>
                    <p style="color: var(--color-text-light);">Pengembangan Web & Hubungan Masyarakat</p>
                </li>

            </ul>

        </section> </div> </main>

<?php
    // 3. Memanggil file footer
    include 'footer.php';
?>