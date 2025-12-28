@extends('layouts.app')

@section('title', 'MECAMP-FEST 2026 - Kepanitiaan')

@section('content')
<section id="panitia" class="section section-committee">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Susunan Kepanitiaan</h2>
            <div class="title-underline"></div>
        </div>

        <div class="core-committee">
            <h3 class="subsection-title">Struktur Inti Kepanitiaan</h3>
            <div class="core-grid">
                <div class="core-member">
                    <div class="member-role">Pengarah</div>
                    <div class="member-name">H. Sugeng Maryono</div>
                    <div class="member-detail">Kepala MAN 1 Banyuwangi</div>
                </div>
                <div class="core-member">
                    <div class="member-role">Penanggung Jawab</div>
                    <div class="member-name">Levina Agustin</div>
                    <div class="member-detail">Jember</div>
                </div>
                <div class="core-member highlight-member">
                    <div class="member-role">Ketua Panitia</div>
                    <div class="member-name">Zacky Zagarino</div>
                    <div class="member-detail">Banyuwangi</div>
                </div>
                <div class="core-member">
                    <div class="member-role">Wakil Ketua</div>
                    <div class="member-name">Natasya Salsabila</div>
                    <div class="member-detail">Banyuwangi</div>
                </div>
                <div class="core-member">
                    <div class="member-role">Sekretaris</div>
                    <div class="member-name">Kanaya Auriel Andaristy</div>
                    <div class="member-detail">Jember</div>
                    <div class="member-name secondary">Dona Agnesia</div>
                    <div class="member-detail">Banyuwangi</div>
                </div>
                <div class="core-member">
                    <div class="member-role">Bendahara</div>
                    <div class="member-name">Rahma Alifiana Cik Amin</div>
                    <div class="member-detail">Banyuwangi</div>
                    <div class="member-name secondary">Aula Izzatul Laini</div>
                    <div class="member-detail">Malang</div>
                </div>
            </div>
        </div>

        <div class="divisions-committee">
            <h3 class="subsection-title">Divisi Kepanitiaan</h3>
            <div class="divisions-grid">
                <div class="division-card">
                    <div class="division-header">
                        <div class="division-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <h4>Divisi Acara</h4>
                    </div>
                    <div class="coordinator">
                        <span class="coord-label">Koordinator:</span>
                        <span class="coord-name">Muhammad Zavier Akbar</span>
                    </div>
                    <ul class="division-members">
                        <li>Nazua Zuhria</li>
                        <li>Cheryl Alifia</li>
                        <li>Naraya Ghesa Prasetyo</li>
                        <li>Ineyda Fadilla Aulia Putri</li>
                        <li>Sulfi Wulandari</li>
                    </ul>
                </div>

                <div class="division-card">
                    <div class="division-header">
                        <div class="division-icon">
                            <i class="fa-solid fa-bullhorn"></i>
                        </div>
                        <h4>Divisi Humas</h4>
                    </div>
                    <div class="coordinator">
                        <span class="coord-label">Koordinator:</span>
                        <span class="coord-name">Balqis Adilah Oktarina</span>
                    </div>
                    <ul class="division-members">
                        <li>Suci Sevty Virgiyanti</li>
                        <li>Naufal Nayif Kasabyu Ramadhan</li>
                        <li>Achmad Vito Prayoga</li>
                        <li>Yughi Syifa Linafusil Alilah</li>
                    </ul>
                </div>

                <div class="division-card">
                    <div class="division-header">
                        <div class="division-icon">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                        <h4>Divisi PDD</h4>
                        <p class="division-subtitle">Publikasi, Dokumentasi, Desain</p>
                    </div>
                    <ul class="division-members">
                        <li>Ahmad Dzaky Hibrizy</li>
                        <li>Aqilah Ferryana Zahrah</li>
                        <li>Risma Ramadhani</li>
                        <li>Citra Anggun Lestari</li>
                        <li>Jessica Sukma Ayu</li>
                    </ul>
                </div>

                <div class="division-card">
                    <div class="division-header">
                        <div class="division-icon">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <h4>Divisi Perlengkapan</h4>
                    </div>
                    <div class="coordinator">
                        <span class="coord-label">Koordinator:</span>
                        <span class="coord-name">Mohammad Yoen Rijalul Qur'an</span>
                    </div>
                    <ul class="division-members">
                        <li>Zazika Raya Brilianti</li>
                        <li>Balqis Melinda Putri</li>
                        <li>Sakinah Suciana</li>
                        <li>Jelita Khoirotun Nissa</li>
                        <li>Aurelia Garnet Kirena</li>
                    </ul>
                </div>

                <div class="division-card">
                    <div class="division-header">
                        <div class="division-icon">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                        <h4>Divisi Dana Usaha</h4>
                    </div>
                    <div class="coordinator">
                        <span class="coord-label">Koordinator:</span>
                        <span class="coord-name">Mohammad Jevon Attaillah</span>
                    </div>
                    <ul class="division-members">
                        <li>Sendi Eko Prasetyo</li>
                        <li>Dian Restu Khoirunnisa</li>
                        <li>Vina Faizatus Sofita</li>
                        <li>Febriyan Putra Hariadi</li>
                        <li>Nina Derizca</li>
                        <li>Sazkiya Amanda Warda</li>
                    </ul>
                </div>

                <div class="division-card">
                    <div class="division-header">
                        <div class="division-icon">
                            <i class="fa-solid fa-utensils"></i>
                        </div>
                        <h4>Divisi Konsumsi</h4>
                    </div>
                    <div class="coordinator">
                        <span class="coord-label">Koordinator:</span>
                        <span class="coord-name">Zahraa Fidela Putri Utami</span>
                    </div>
                    <ul class="division-members">
                        <li>Isti Wahyuning Tyas</li>
                        <li>Nawra Ayesha Rahma Zain</li>
                        <li>Ivan Triwisudawan Sugianto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding: 3rem 0;">
    <div class="container" style="text-align: center;">
        <a href="{{ route('home') }}" class="cta-button">Kembali ke Beranda</a>
    </div>
</section>
@endsection