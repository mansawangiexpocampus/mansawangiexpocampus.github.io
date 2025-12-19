@extends('layouts.app')

@section('title', 'MECAMP-FEST 2026 - Beranda')

@section('content')
<!-- About Section -->
<section id="tentang" class="section section-about">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tentang MECAMP-FEST 2026</h2>
            <div class="title-underline"></div>
        </div>

        <div class="about-content">
            <div class="about-intro">
                <p class="lead-text">MECAMP-FEST 2026 yang diselenggarakan oleh <strong class="highlight">Ikatan Alumni MAN 1 Banyuwangi</strong> merupakan festival edukasi, pendidikan, karir, dan kewirausahaan yang menghadirkan serangkaian acara pameran informatif dan hiburan berkelas.</p>
            </div>

            <div class="about-history">
                <div class="history-card">
                    <div class="history-icon">🎯</div>
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

<!-- Goals Section -->
<section id="tujuan" class="section section-goals">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tujuan Kegiatan</h2>
            <div class="title-underline"></div>
        </div>

        <div class="goals-grid">
            <div class="goal-card">
                <div class="goal-icon">🎯</div>
                <h3 class="goal-title">Memberikan Informasi Pendidikan</h3>
                <p class="goal-description">Menyediakan informasi lengkap mengenai pendaftaran dan kehidupan di PTN/PTS melalui berbagai jalur masuk yang tersedia.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">💼</div>
                <h3 class="goal-title">Meningkatkan Wawasan Karir</h3>
                <p class="goal-description">Membuka pandangan peserta didik tentang dunia kerja, berbagai pilihan karir, dan peluang kewirausahaan yang menjanjikan.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">🤝</div>
                <h3 class="goal-title">Memperkuat Silaturahmi Alumni</h3>
                <p class="goal-description">Menjadi jembatan bagi Ikatan Alumni untuk berbagi pengalaman, bersilaturahmi, dan berkontribusi kepada almamater tercinta.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">🎨</div>
                <h3 class="goal-title">Mendorong Kreativitas</h3>
                <p class="goal-description">Memberi ruang promosi bagi UMKM dan pelaku seni lokal melalui Bazar dan Pameran Seni yang menarik.</p>
            </div>

            <div class="goal-card">
                <div class="goal-icon">🎪</div>
                <h3 class="goal-title">Menciptakan Acara Edukatif & Rekreatif</h3>
                <p class="goal-description">Menggabungkan Expo Campus dengan Hiburan Konser Musik untuk pengalaman belajar yang menyenangkan dan berkesan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Schedule Section -->
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
                    <div class="timeline-date">Kamis, 22 Januari 2026</div>
                    <h3 class="timeline-title">Hari Pertama</h3>
                    <p class="timeline-description">Tryout kelas 12 - Persiapan intensif untuk menghadapi ujian masuk perguruan tinggi</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Jumat, 23 Januari 2026</div>
                    <h3 class="timeline-title">Hari Kedua</h3>
                    <p class="timeline-description">Talkshow Expo Campus bersama Alumni MAN 1 Banyuwangi yang telah sukses di berbagai bidang</p>
                </div>
            </div>

            <div class="timeline-item highlight-item">
                <div class="timeline-marker">
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Sabtu, 24 Januari 2026</div>
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

<!-- Audience Section -->
<section id="audiens" class="section section-audience">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Target Audiens</h2>
            <div class="title-underline"></div>
            <p class="section-subtitle">Jangkauan luas dengan estimasi <strong>±3.500 pengunjung</strong></p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">🎓</div>
                <div class="stat-number">±1.400</div>
                <div class="stat-label">Siswa MAN 1 Banyuwangi</div>
                <div class="stat-bar">
                    <div class="stat-fill" style="width: 40%"></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">👨‍🏫</div>
                <div class="stat-number">80</div>
                <div class="stat-label">Dewan Guru & Kepala Sekolah</div>
                <div class="stat-bar">
                    <div class="stat-fill" style="width: 15%"></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">🎯</div>
                <div class="stat-number">20</div>
                <div class="stat-label">Siswa Delegasi</div>
                <div class="stat-bar">
                    <div class="stat-fill" style="width: 5%"></div>
                </div>
            </div>

            <div class="stat-card highlight-stat">
                <div class="stat-icon">👥</div>
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
                    <div class="benefit-icon">🎯</div>
                    <h4>Target Tepat</h4>
                    <p>Menjangkau generasi muda yang produktif dan kreatif</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">📢</div>
                    <h4>Eksposur Maksimal</h4>
                    <p>Visibilitas tinggi untuk brand dan produk Anda</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🤝</div>
                    <h4>Networking</h4>
                    <p>Kesempatan membangun relasi bisnis baru</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="kontak" class="section section-contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="title-underline"></div>
            <p class="section-subtitle">Ada pertanyaan? Kami siap membantu Anda</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h3>Informasi Kontak</h3>
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div class="contact-detail">
                        <h4>Email</h4>
                        <p>mecamp.fest2026@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <div class="contact-detail">
                        <h4>WhatsApp</h4>
                        <p>+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-detail">
                        <h4>Lokasi Acara</h4>
                        <p>Gesibu Blambangan, Banyuwangi</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">🏫</div>
                    <div class="contact-detail">
                        <h4>Alamat Sekretariat</h4>
                        <p>MAN 1 Banyuwangi<br>Jl. Ikan Tongkol No. 21, Banyuwangi</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <h3>Kirim Pesan</h3>
                <form class="contact-form" id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <select id="subject" name="subject" required>
                            <option value="">Pilih Subjek</option>
                            <option value="tenant">Informasi Tenant</option>
                            <option value="sponsor">Sponsorship</option>
                            <option value="partnership">Kemitraan</option>
                            <option value="general">Pertanyaan Umum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-button">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection