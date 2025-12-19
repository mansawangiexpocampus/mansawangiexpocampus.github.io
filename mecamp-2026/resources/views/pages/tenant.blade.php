@extends('layouts.app')

@section('title', 'MECAMP-FEST 2026 - Informasi Tenant')

@section('content')
<!-- Tenant Section -->
<section id="tenant" class="section section-tenant">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Penawaran Spesial Tenant</h2>
            <div class="title-underline"></div>
            <p class="section-subtitle">Pilihan fleksibel untuk berbagai kebutuhan bisnis Anda</p>
        </div>

        <div class="tenant-options">
            <div class="tenant-card partnership-card">
                <div class="tenant-badge">Populer</div>
                <div class="tenant-header">
                    <div class="tenant-icon">🤝</div>
                    <h3>Tenant Kemitraan</h3>
                    <p class="tenant-type">Commitment Based</p>
                </div>

                <div class="tenant-price">
                    <div class="price-tag free">GRATIS</div>
                    <p class="price-note">Cocok untuk UMKM yang ingin berpartisipasi tanpa biaya</p>
                </div>

                <div class="tenant-details">
                    <div class="detail-section">
                        <h4>Persyaratan</h4>
                        <div class="requirement-box">
                            <p><strong>Deposit Komitmen:</strong></p>
                            <p class="deposit-amount">Rp 500.000,-</p>
                        </div>
                    </div>

                    <div class="detail-section">
                        <h4>Pengembalian</h4>
                        <div class="refund-box">
                            <div class="refund-badge">100% Full Refund</div>
                            <p>Dikembalikan H+7 setelah acara selama tenant mengikuti aturan dan beroperasi hingga akhir acara</p>
                        </div>
                    </div>
                </div>

                <div class="tenant-features">
                    <div class="feature-item">✓ Tanpa biaya sewa</div>
                    <div class="feature-item">✓ Lokasi strategis</div>
                    <div class="feature-item">✓ Akses ke ribuan pengunjung</div>
                </div>
            </div>

            <div class="tenant-card premium-card">
                <div class="tenant-badge premium">Premium</div>
                <div class="tenant-header">
                    <div class="tenant-icon">⭐</div>
                    <h3>Tenant Premium</h3>
                    <p class="tenant-type">Area Dalam Gesibu</p>
                </div>

                <div class="tenant-price">
                    <div class="price-amount">
                        <span class="currency">Mulai</span>
                        <span class="amount">Rp 500.000,-</span>
                    </div>
                    <p class="price-note">Lokasi eksklusif dengan traffic pengunjung tinggi</p>
                </div>

                <div class="tenant-details">
                    <h4>Keunggulan Premium</h4>
                    <ul class="premium-benefits">
                        <li>
                            <span class="benefit-icon">📍</span>
                            <span>Lokasi lebih strategis di area utama</span>
                        </li>
                        <li>
                            <span class="benefit-icon">🎤</span>
                            <span>Dekat dengan panggung utama</span>
                        </li>
                        <li>
                            <span class="benefit-icon">☂️</span>
                            <span>Terlindung dari cuaca</span>
                        </li>
                        <li>
                            <span class="benefit-icon">🏢</span>
                            <span>Indoor Gesibu (Area Utama Acara)</span>
                        </li>
                        <li>
                            <span class="benefit-icon">👥</span>
                            <span>Eksposur maksimal ke pengunjung</span>
                        </li>
                    </ul>
                </div>

                <div class="tenant-features">
                    <div class="feature-item premium">✓ Fasilitas premium</div>
                    <div class="feature-item premium">✓ Branding maksimal</div>
                    <div class="feature-item premium">✓ Dukungan promosi</div>
                </div>
            </div>
        </div>

        <div class="cta-section">
            <h3>Tertarik Menjadi Tenant?</h3>
            <p>Daftar sekarang dan raih kesempatan emas untuk mengembangkan bisnis Anda!</p>
            <a href="{{ route('home') }}#kontak" class="cta-button">Hubungi Kami</a>
        </div>

        <!-- Additional Info Section -->
        <div class="about-content" style="margin-top: 4rem;">
            <div class="theme-card">
                <h3 class="theme-title">Syarat & Ketentuan</h3>
                <div class="theme-description" style="text-align: left;">
                    <h4 style="margin-top: 1.5rem; color: var(--bark);">Tenant Kemitraan:</h4>
                    <ul style="margin-left: 1.5rem; line-height: 1.8;">
                        <li>Deposit sebesar Rp 500.000,- wajib dibayarkan saat pendaftaran</li>
                        <li>Deposit dikembalikan 100% dalam 7 hari kerja setelah acara</li>
                        <li>Tenant wajib beroperasi dari awal hingga akhir acara</li>
                        <li>Pelanggaran aturan dapat mengakibatkan deposit hangus</li>
                    </ul>

                    <h4 style="margin-top: 1.5rem; color: var(--bark);">Tenant Premium:</h4>
                    <ul style="margin-left: 1.5rem; line-height: 1.8;">
                        <li>Biaya sewa dimulai dari Rp 500.000,- (tergantung lokasi)</li>
                        <li>Lokasi di area indoor Gesibu dengan fasilitas lengkap</li>
                        <li>Mendapat prioritas promosi di media sosial panitia</li>
                        <li>Akses listrik dan fasilitas pendukung lainnya</li>
                    </ul>

                    <h4 style="margin-top: 1.5rem; color: var(--bark);">Fasilitas Umum:</h4>
                    <ul style="margin-left: 1.5rem; line-height: 1.8;">
                        <li>Area parkir untuk tenant</li>
                        <li>Keamanan 24 jam selama acara</li>
                        <li>Akses ke area persiapan</li>
                        <li>Dukungan tim operasional</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Back to Home -->
<section class="section" style="padding: 3rem 0;">
    <div class="container" style="text-align: center;">
        <a href="{{ route('home') }}" class="cta-button">Kembali ke Beranda</a>
    </div>
</section>
@endsection