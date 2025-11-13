<?php
    // Set judul spesifik untuk halaman ini
    $pageTitle = "Deskripsi Produk - PKM Pangan Ransum";

    // 1. Memanggil file header (Menu dan CSS)
    include 'header.php';
?>

<main>
    <div class="container">

        <section class="page-header" style="text-align: center; padding: 20px 0 30px 0;">
            <h1 style="color: var(--color-accent); font-size: 2.5rem;">Deskripsi Produk</h1>
        </section>

        <section class="page-content" style="background: var(--color-white); border: 1px solid var(--border-light); border-radius: 8px; padding: 40px;">

            <img 
                src="https://images.pexels.com/photos/18356746/pexels-photo-18356746.jpeg" 
                alt="Gambar produk ransum" 
                style="width: 50%; border-radius: 8px; margin-bottom: 30px;">

            <h2 style="font-size: 1.8rem; color: var(--color-text); margin-bottom: 15px;">Keunggulan Produk Kami</h2>
            <p style="color: var(--color-text-light); margin-bottom: 20px;">
                Produk ransum kami dirancang khusus untuk memberikan energi maksimal dengan cara paling efisien.
                Berikut adalah keunggulan utamanya:
            </p>
            <ul style="color: var(--color-text-light); margin-left: 20px; margin-bottom: 40px;">
                <li><strong>Tahan Lama:</strong> Diformulasikan dengan teknologi pengemasan vakum untuk masa simpan hingga 2 tahun tanpa bahan pengawet buatan.</li>
                <li><strong>Bergizi Seimbang:</strong> Setiap kemasan mengandung makronutrien (Karbohidrat, Protein, Lemak) dan mikronutrien esensial yang dibutuhkan tubuh.</li>
                <li><strong>Praktis & Siap Saji:</strong> Dapat dikonsumsi langsung atau cukup diseduh dengan air panas, siap dalam 3 menit.</li>
                <li><strong>Ringan & Kompak:</strong> Kemasan didesain agar ringan dan tidak memakan banyak tempat, ideal untuk pendakian, situasi darurat, atau bekal perjalanan.</li>
            </ul>

            <h2 style="font-size: 1.8rem; color: var(--color-text); margin-bottom: 15px;">Informasi Nilai Gizi (Per Saji)</h2>
            <p style="color: var(--color-text-light); margin-bottom: 20px;">
                Berikut adalah tabel nutrisi rata-rata untuk produk kami:
            </p>
            
            <table style="width: 100%; border-collapse: collapse;">
                <tr style="border-bottom: 1px solid var(--border-light);">
                    <td style="padding: 10px; color: var(--color-text);">Energi Total</td>
                    <td style="padding: 10px; color: var(--color-text); text-align: right;"><strong>450 kkal</strong></td>
                </tr>
                <tr style="border-bottom: 1px solid var(--border-light);">
                    <td style="padding: 10px; color: var(--color-text);">Protein</td>
                    <td style="padding: 10px; color: var(--color-text); text-align: right;"><strong>15g</strong></td>
                </tr>
                <tr style="border-bottom: 1px solid var(--border-light);">
                    <td style="padding: 10px; color: var(--color-text);">Karbohidrat</td>
                    <td style="padding: 10px; color: var(--color-text); text-align: right;"><strong>60g</strong></td>
                </tr>
                <tr style="border-bottom: 1px solid var(--border-light);">
                    <td style="padding: 10px; color: var(--color-text);">Lemak</td>
                    <td style="padding: 10px; color: var(--color-text); text-align: right;"><strong>18g</strong></td>
                </tr>
            </table>

        </section> </div> </main>

<?php
    // 3. Memanggil file footer
    include 'footer.php';
?>