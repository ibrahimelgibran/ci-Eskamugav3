<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up"><?= $home['judul'] ?></h1>
        <h2 data-aos="fade-up" data-aos-delay="400"><?= $home['isi'] ?></h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start" >
            <a href="<?= base_url($home['link']); ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" >
              <span><?= $home['tombol'] ?></span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url('assets/'); ?>img/<?= $home['img'] ?>" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<div class="ocean">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
              <use xlink:href="#gentle-wave" x="48" y="3" fill="#F5F7F8" />
              <use xlink:href="#gentle-wave" x="48" y="5" fill="#F5F7F8" />
              <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#F5F7F8" />
            </g>
        </svg>
    </div>

<style>
 .ocean {
    position: relative;
    background-color: black;
}

.waves {
    position: absolute;
    width: 100%;
    height: 15vh;
    min-height: 80px;
    max-height: 80px;
    bottom: 0;
    left: 0;
}

.parallax>use {
    animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
}

.parallax>use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
}

.parallax>use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
}

.parallax>use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
}

.parallax>use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
}

@keyframes move-forever {
    0% {
        transform: translate3d(-90px, 0, 0);
    }

    100% {
        transform: translate3d(85px, 0, 0);
    }
}


/*Shrinking for mobile*/

@media (max-width: 768px) {
    .waves {
        height: 40px;
        min-height: 40px;
    }
}

</style>

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Tentang Kami</h3>
            <h2><?= $web['nama'] ?></h2>
            <p>
              <?= $web['deskripsi'] ?>
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= base_url('about') ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Selengkapnya</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img style="max-width: 100%; height: auto; border-radius: 20px;" src="<?= base_url('assets/'); ?>img/<?= $about['img'] ?>" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2></h2>
        <p>Jurusan Sekolah Kami</p>
      </header>

      <div class="row">

        <?php foreach ($tagline as $tag) : ?>

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="<?= base_url('assets/'); ?>img/<?= $tag['img'] ?>" class="img-fluid" alt="">
              <h3><?= $tag['nama'] ?></h3>
              <p><?= $tag['deskripsi'] ?></p>
            </div>
          </div>

        <?php endforeach ?>

      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_siswa ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total siswa</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-person-circle"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_karyawan ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Guru & Pegawai</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-book-half" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_pendidikan ?>" data-purecounter-duration="0" class="purecounter">3</span>
              <p>Jurusan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-text" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_kelas ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kelas</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2></h2>
        <p>Ciri Khas Sekolah</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="<?= base_url('assets/'); ?>img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Terakreditasi A</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Sistem Pendidikan Terpadu</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Kursus Akses Gratis Seumur Hidup</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Area Pendidikan yang Luas dan Kondusif</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Full Development Of Personality</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Orientasi Pekerjaan Terjamin</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

    </div>

  </section><!-- End Features Section -->

  <!-- ======= About Section ======= -->
  <!-- <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

      <header class="section-header">
        <h2></h2>
        <p>Siswa Free Akses Course</p>
      </header>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Free Course</h3>
            <h2>ESKAMUGA x GMTpedia</h2>
            <p>
            Siswa memiliki akses seumur hidup untuk terus berkembang sebagai seorang profesional, menuju tingkat keahlian yang mereka inginkan dalam bidang tertentu.
            </p>
            <div class="text-center text-lg-start">
              <a href="http://localhost/fiturbelajar/home/sign_up" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Daftar Sekarang</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img style="max-width: 100%; height: auto; border-radius: 20px;" src="<?= base_url('assets/'); ?>img/bg3.png" class="img-fluid" alt="">
            </div>

      </div>
    </div>

  </section>End About Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2></h2>
        <p>Gallery</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">New</li>
            <?php foreach ($kategori as $k) : ?>
              <li data-filter=".<?= $k['uniq'] ?>"><?= $k['nama'] ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($gallery as $g) : ?>
          <?php $kat = $this->db->get_where('kategori_gallery', ['id' => $g['id_kat']])->row_array(); ?>

          <div class="col-lg-4 col-md-6 portfolio-item <?= $kat['uniq'] ?>">
            <div class="portfolio-wrap">
              <img style="height: 300px;width: 400px;" src="<?= base_url('assets/'); ?>img/gallery/<?= $g['img'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $g['nama'] ?></h4>
                <p><?= $kat['nama'] ?></p>
                <div class="portfolio-links">
                  <a href="<?= base_url('assets/'); ?>img/gallery/<?= $g['img'] ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $g['nama'] ?>"><i class="bi bi-plus"></i></a>
                  <a href="<?= base_url('detail_gallery?id=' . $g['id']); ?>" title="Lihat Detail"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>

      <div class="portfolio-pagination text-center pt-5">
        <a href="<?= base_url('gallery') ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
          <span>Selengkapnya</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>
  </section><!-- End Portfolio Section -->



  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Informasi Acara</p>
      </header>

      <div class="row">

        <?php foreach ($acara as $d) : ?>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img style="height: 250px;width: 450px;" src="<?= base_url('assets/'); ?>img/blog/<?= $d['img'] ?>" class="img-fluid" alt=""></div>
              <span class="post-date"><?= $d['tgl'] ?></span>
              <h3 class="post-title"><?= $d['judul'] ?></h3>
              <a href="<?= base_url('detail_acara?id=' . $d['id']); ?>" class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        <?php endforeach ?>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

     <!-- ======= F.A.Q Section ======= -->
     <section id="features" class="features">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <p class="mb-3">F.A.Q (Tanya Jawab)</p>
            <h2>Pertanyaan dan Jawaban yang sering dilakukan.</h2>
          </header>

          <div id="accordion" class="faq-list">
          <?php foreach ($faq as $d) : ?>
            <div class="card mb-3" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex" id="heading<?= $d['role'] ?>">
                <h5 class="mb-0">
                  <a href="#" data-toggle="collapse" data-target="#collapse<?= $d['role'] ?>" aria-expanded="true" aria-controls="collapse<?= $d['role'] ?>">
                  <i class="bi bi-patch-question icon-help"></i> <?= $d['pertanyaan'] ?> 
                  </a>
                </h5>
              </div>

              <div id="collapse<?= $d['role'] ?>" class="collapse <?php if($d['role'] == '1') : ?>show<?php endif ?>" aria-labelledby="heading<?= $d['role'] ?>" data-parent="#accordion">
                <div class="card-body">
                <?= $d['jawaban'] ?>
                </div>
              </div>
            </div>

            <?php endforeach ?>
          </div>


        </div>
      </section>
      <!-- End F.A.Q Section -->


</main><!-- End #main -->