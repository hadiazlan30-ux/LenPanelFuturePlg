// Modal galeri gambar
const modal = document.getElementById('modal');
const modalImg = document.getElementById('modal-img');
const caption = document.getElementById('caption');
const closeBtn = document.querySelector('.close');

document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', () => {
        modal.style.display = 'block';
        modalImg.src = item.dataset.src;
        caption.textContent = item.querySelector('img').alt;
    });
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

// Logout - arahkan kembali ke halaman login (index.html)
document.getElementById('logout').addEventListener('click', function (e) {
    e.preventDefault();
    window.location.href = 'index.html';
});

// Validasi dan proses sederhana form kontak dashboard
const form = document.getElementById('contact-form-dashboard');
form.addEventListener('submit', (e) => {
    e.preventDefault();

    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const message = form.message.value.trim();

    if (name && email && message) {
        alert('Terima kasih, pesan Anda telah terkirim!');
        form.reset();
    } else {
        alert('Harap lengkapi semua kolom.');
    }
});