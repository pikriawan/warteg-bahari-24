@push('styles')
    @vite('resources/css/home.css')
@endpush
<x-customer-layout>
    <main class="main">
        <section class="hero">
            <h1 class="hero-title">
                Makan Enak
                <br>
                Harga Bersahabat
                <br>
                Serasa di Rumah Sendiri
            </h1>
            <p class="hero-text">
                Warteg Bahari 24 hadir dengan menu lengkap, rasa rumahan, dan harga yang ramah di kantong.
                <br>
                Dari sarapan sampai makan malam, kami selalu siap menemani.
            </p>
            <a class="button button-primary" href="/menus">
                Pesan sekarang
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
            </a>
        </section>
        <section class="advantages">
            <h2 class="advantages-title">Keunggulan Kami</h2>
            <div class="advantages-list">
                <div class="advantage-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#00B700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smile-icon lucide-smile"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" x2="9.01" y1="9" y2="9"/><line x1="15" x2="15.01" y1="9" y2="9"/></svg>
                    <h3 class="advantage-item-title">Pelayanan Cepat dan Ramah</h3>
                    <p class="advantage-item-text">Setiap pelanggan kami layani dengan cepat dan penuh senyum, agar pengalaman makan lebih menyenangkan.</p>
                </div>
                <div class="advantage-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#00B700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coffee-icon lucide-coffee"><path d="M10 2v2"/><path d="M14 2v2"/><path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1"/><path d="M6 2v2"/></svg>
                    <h3 class="advantage-item-title">Rasa Rumahan</h3>
                    <p class="advantage-item-text">Cita rasa masakan rumahan yang membuat pelanggan merasa seperti makan di rumah sendiri.</p>
                </div>
                <div class="advantage-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#00B700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-icon lucide-wallet"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"/><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"/></svg>
                    <h3 class="advantage-item-title">Harga Terjangkau</h3>
                    <p class="advantage-item-text">Menu lengkap dengan harga terjangkau untuk semua kalangan, terutama mahasiswa dan pekerja.</p>
                </div>
                <div class="advantage-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#00B700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
                    <h3 class="advantage-item-title">Buka 24 Jam</h3>
                    <p class="advantage-item-text">Kapan pun lapar, Warteg Bahari 24 selalu siap melayani Anda siang maupun malam.</p>
                </div>
            </div>
        </section>
        <section class="menus">
            <h2 class="menus-title">Menu yang Kami Sajikan</h2>
            <div class="menus-list">
                <div class="menu-item">
                    <img class="menu-item-image" src="/images/telur-balado.jpg" alt="Telur Balado">
                    <h3 class="menu-item-title">Telur Balado</h3>
                    <p class="menu-item-text">Telur rebus yang diolah dengan sambal balado pedas gurih, menghadirkan rasa khas nusantara yang selalu bikin ingin tambah nasi.</p>
                </div>
                <div class="menu-item">
                    <img class="menu-item-image" src="/images/sayur-sop.jpg" alt="Sayur Sop">
                    <h3 class="menu-item-title">Sayur Sop</h3>
                    <p class="menu-item-text">Kuah bening hangat dengan campuran sayuran segar dan bumbu sederhana. Segar, menyehatkan, dan cocok untuk semua suasana.</p>
                </div>
                <div class="menu-item">
                    <img class="menu-item-image" src="/images/tumis-pare.jpg" alt="Tumis Pare">
                    <h3 class="menu-item-title">Tumis Pare</h3>
                    <p class="menu-item-text">Tumis pare dengan sentuhan bumbu gurih pedas yang seimbang. Rasa khasnya justru bikin nagih di setiap suapan.</p>
                </div>
            </div>
            <a class="button button-primary" href="/menus">Jelajahi menu lainnya</a>
        </section>
        <section class="reviews">
            <h2 class="reviews-title">Apa Kata Mereka?</h2>
            <div class="reviews-list">
                <div class="review-item">
                    <img class="review-item-image" src="/images/reviewer-1.png" alt="Reviewer" width="48" height="48">
                    <h3 class="review-item-title">Gamma Assyafi Fadhillah Ar Rasyad</h3>
                    <p class="review-item-text">Makanan dan tempat seperti warteg pada umumnya. Kalau mau makan hemat bisa di sini, telur+nasi+sayur+es teh cuma 10rb. Cocok  buat anak kos yang pengen makan di luar tapi tetep hemat. Pelayanan sat  set ga pake lama~</p>
                </div>
                <div class="review-item">
                    <img class="review-item-image" src="/images/reviewer-2.png" alt="Reviewer" width="48" height="48">
                    <h3 class="review-item-title">Putri Adibatur Rohmah</h3>
                    <p class="review-item-text">Saya kesini bawa anak kecil masakan rata2 enak, tapi pedas. Jadi saya hanya bisa pesan soto saja untuk anak saya. Rasanya enak, kek soto seger Jatim. Saran saya kalau siang tambahi sayuran bening atau sop</p>
                </div>
                <div class="review-item">
                    <img class="review-item-image" src="/images/reviewer-3.png" alt="Reviewer" width="48" height="48">
                    <h3 class="review-item-title">Hafidz Prasetya</h3>
                    <p class="review-item-text">Seperti warteg bahari pada umumnya sih, tapi yang ini warna oren dan bukan wkb grup. Harga oke murah, es teh lebih manis dari yang sebelah. Tempat tidak terlalu besar sangat. Rasa mirip warteg dimana saja. Point plus belum ada tukang parkir liar.</p>
                </div>
                <div class="review-item">
                    <img class="review-item-image" src="/images/reviewer-4.png" alt="Reviewer" width="48" height="48">
                    <h3 class="review-item-title">Muhammad Rifqi</h3>
                    <p class="review-item-text">Harga murah rasanya enak cocok untuk para mahasiswa, buka 24 jam jadi bisa kapan aja makan di sini, tempat bersih dan nyaman, parkir gratis es teh/teh anget pun gratis jika makan ditempat</p>
                </div>
            </div>
        </section>
        <section class="contact">
            <h2 class="contact-title">Hubungi Kami</h2>
            <div class="contact-buttons">
                <a class="button button-outlined" href="#">
                    <svg role="img" width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    Hubungi kami via WhatsApp
                </a>
                <a class="button button-outlined" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                    Hubungi kami via email
                </a>
            </div>
        </section>
    </main>
</x-customer-layout>
