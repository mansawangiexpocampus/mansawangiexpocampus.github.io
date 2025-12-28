@extends('layouts.app')

@section('title', 'MECAMP-FEST 2026 - Beranda')

@section('content')
<section id="tentang" class="section section-about">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tentang MECAMP-FEST 2026</h2>
            <div class="title-underline"></div>
        </div>

        <div class="about-content">
            <div class="about-intro">
                <p class="lead-text">MECAMP-FEST 2026 yang diinisiasi oleh <strong class="highlight">Ikatan Alumni MAN 1 Banyuwangi</strong> dan diselenggarakan oleh <strong class="highlight">tim Balika Cabinet</strong> merupakan festival edukasi, pendidikan, karir, dan kewirausahaan yang menghadirkan serangkaian acara pameran informatif dan hiburan berkelas.</p>
            </div>

            <div class="about-history">
                <div class="history-card">
                    <div class="history-icon">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <div class="history-content">
                        <h3>Sejarah & Transformasi</h3>
                        <p>Sejak pertama kali diadakan pada tahun 2018 dan telah terselenggara sebanyak 5 kali, acara tahunan ini bertransformasi menjadi gelaran yang lebih besar dengan pameran seni, bazar UMKM, Expo Campus yang informatif, dan ditutup dengan hiburan konser musik yang meriah.</p>
                    </div>
                </div>
            </div>

            <div class="theme-section">
                <div class="theme-card">
                    <h3 class="theme-title">Tema: Balika Cipta Niskala</h3>
                    <p class="theme-subtitle">(Penciptaan oleh gadis kecil atas hal-hal yang tadinya tak terwujud)</p>
                    <div class="theme-description">
                        <p>Tidak ada mimpi yang terlalu besar untuk sang pemimpi kecil. Sekecil apapun, bahkan seorang anak perempuan pun bisa menciptakan sesuatu dengan tekad yang kuat. Setiap mimpi butuh perjuangan, mulai dari membangun karir dengan keberanian melangkah dan kemauan untuk terus belajar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tujuan" class="section section-goals">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tujuan Kegiatan</h2>
            <div class="title-underline"></div>
        </div>

        <div class="goals-grid">
            <div class="goal-card">
                <div class="goal-icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3 class="goal-title">Memberikan Informasi Pendidikan</h3>
                <p class="goal-description">Menyediakan informasi lengkap mengenai pendaftaran dan kehidupan di PTN/PTS melalui berbagai jalur masuk yang tersedia.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3 class="goal-title">Meningkatkan Wawasan Karir</h3>
                <p class="goal-description">Membuka pandangan peserta didik tentang dunia kerja, berbagai pilihan karir, dan peluang kewirausahaan yang menjanjikan.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h3 class="goal-title">Memperkuat Silaturahmi Alumni</h3>
                <p class="goal-description">Menjadi jembatan bagi Ikatan Alumni untuk berbagi pengalaman, bersilaturahmi, dan berkontribusi kepada almamater tercinta.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3 class="goal-title">Mendorong Kreativitas</h3>
                <p class="goal-description">Memberi ruang promosi bagi UMKM dan pelaku seni lokal melalui Bazar dan Pameran Seni yang menarik.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">
                    <i class="fa-solid fa-music"></i>
                </div>
                <h3 class="goal-title">Menciptakan Acara Edukatif & Rekreatif</h3>
                <p class="goal-description">Menggabungkan Expo Campus dengan Hiburan Konser Musik untuk pengalaman belajar yang menyenangkan dan berkesan.</p>
            </div>
        </div>
    </div>
</section>

<section id="jadwal" class="section section-schedule">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Jadwal Kegiatan</h2>
            <div class="title-underline"></div>
        </div>

        <div class="schedule-timeline">
            <div class="timeline-item">
                <div class="timeline-marker">
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Jumat, 23 Januari 2026</div>
                    <h3 class="timeline-title">Hari Pertama</h3>
                    <p class="timeline-description">Tryout kelas 12 - Persiapan intensif untuk menghadapi ujian masuk perguruan tinggi</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Sabtu, 24 Januari 2026</div>
                    <h3 class="timeline-title">Hari Kedua</h3>
                    <p class="timeline-description">Talkshow Expo Campus bersama Alumni MAN 1 Banyuwangi yang telah sukses di berbagai bidang</p>
                </div>
            </div>

            <div class="timeline-item highlight-item">
                <div class="timeline-marker">
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Minggu, 25 Januari 2026</div>
                    <h3 class="timeline-title">Hari Ketiga - Acara Puncak 🎉</h3>
                    <p class="timeline-description">MECAMP-Festival 2026 di Gesibu Blambangan dengan Expo Campus, Bazar UMKM, Pameran Seni, dan Konser Musik</p>
                </div>
            </div>
        </div>

        <div class="highlights-grid">
            <div class="highlight-card">
                <div class="highlight-number">01</div>
                <h4>Try Out</h4>
                <p>Pelaksanaan Try Out oleh siswa-siswi kelas 12 MAN 1 Banyuwangi</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-number">02</div>
                <h4>Talkshow Alumni</h4>
                <p>Berbagi inspirasi dan pengalaman dari alumni sukses</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-number">03</div>
                <h4>Festival Meriah</h4>
                <p>Pameran, bazar, seni, dan hiburan dalam satu tempat</p>
            </div>
        </div>
    </div>
</section>

<section id="audiens" class="section section-audience">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Target Audiens</h2>
            <div class="title-underline"></div>
            <p class="section-subtitle">Jangkauan luas dengan estimasi <strong>±3.500 pengunjung</strong></p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fa-solid fa-user-graduate"></i>
                </div>
                <div class="stat-number">±1.400</div>
                <div class="stat-label">Siswa MAN 1 Banyuwangi</div>
                <div class="stat-bar">
                    <div class="stat-fill" style="width: 40%"></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <div class="stat-number">80</div>
                <div class="stat-label">Dewan Guru & Kepala Sekolah</div>
                <div class="stat-bar">
                    <div class="stat-fill" style="width: 15%"></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fa-solid fa-id-card-clip"></i>
                </div>
                <div class="stat-number">20</div>
                <div class="stat-label">Siswa Delegasi</div>
                <div class="stat-bar">
                    <div class="stat-fill" style="width: 5%"></div>
                </div>
            </div>

            <div class="stat-card highlight-stat">
                <div class="stat-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="stat-number">±2.000</div>
                <div class="stat-label">Masyarakat Umum</div>
                <div class="stat-bar">
                    <div class="stat-fill" style="width: 57%"></div>
                </div>
            </div>
        </div>

        <div class="audience-benefits">
            <h3>Mengapa MECAMP-FEST 2026?</h3>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h4>Target Tepat</h4>
                    <p>Menjangkau generasi muda yang produktif dan kreatif</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <h4>Eksposur Maksimal</h4>
                    <p>Visibilitas tinggi untuk brand dan produk Anda</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-people-arrows"></i>
                    </div>
                    <h4>Networking</h4>
                    <p>Kesempatan membangun relasi bisnis baru</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kontak" class="section section-contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="title-underline"></div>
            <p class="section-subtitle">Ada pertanyaan? Jangan ragu untuk menghubungi kami</p>
        </div>

        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Informasi Kontak</h3>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-detail">
                        <h4>Email</h4>
                        <p>
                            <a href="mailto:mecampexpo@gmail.com">
                                mecampexpo@gmail.com
                            </a>
                        </p>
                    </div>
                </div>

                <div class="contact-item">
                <div class="contact-icon" style="background-color: #25D366; color: white; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 28px;">
                    <i class="fab fa-whatsapp"></i>
                </div>
                
                <div class="contact-detail">
                    <h4>WhatsApp</h4>
                    <p>
                        <a href="https://wa.me/6288973189604?text=Halo%20kak,%20saya%20ingin%20bertanya%20seputar%20MECAMP-FEST%202026" target="_blank" style="text-decoration: none; color: inherit;">
                            +62 889-7318-9604 (Admin)
                        </a>
                    </p>
                </div>
            </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-detail">
                        <h4>Lokasi Acara</h4>
                        <p>
                            <a href="https://www.google.com/maps/search/?api=1&query=Gesibu+Blambangan,+Banyuwangi" target="_blank">
                                Gesibu Blambangan, Banyuwangi
                            </a>
                        </p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div class="contact-detail">
                        <h4>Alamat Sekretariat</h4>
                        <p>
                            <a href="https://www.google.com/maps/search/?api=1&query=MAN+1+Banyuwangi" target="_blank">
                                MAN 1 Banyuwangi<br>
                                Jl. Ikan Tongkol No. 21, Banyuwangi
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection