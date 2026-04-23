<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Logis - Solusi Logistik & Pengiriman Terpercaya</title>
  <meta name="description" content="Layanan logistik dan pengiriman cepat untuk bisnis Anda. Terpercaya, aman, dan terjangkau.">
  <meta name="keywords" content="logistik, pengiriman, ekspedisi, cargo, warehouse, delivery indonesia">

  <!-- Favicons (Online Placeholder) -->
  <link href="https://via.placeholder.com/32x32/3b82f6/ffffff?text=L" rel="icon">
  <link href="https://via.placeholder.com/180x180/3b82f6/ffffff?text=Logis" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  
  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- GLightbox -->
  <link href="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css" rel="stylesheet">
  
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- Main CSS File -->
  <link href="public/css/main.css" rel="stylesheet">
  
  <!-- Custom Inline CSS for Demo -->
  <style>
    .hero-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.15;
      z-index: -1;
    }
    .service-card {
      transition: transform 0.3s, box-shadow 0.3s;
      border: none;
      border-radius: 16px;
      overflow: hidden;
    }
    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.12);
    }
    .service-icon {
      width: 64px;
      height: 64px;
      background: linear-gradient(135deg, #3b82f6, #8b5cf6);
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 28px;
      margin-bottom: 20px;
    }
    .pricing-item {
      border-radius: 20px;
      padding: 32px 24px;
      text-align: center;
      border: 2px solid #e2e8f0;
      transition: all 0.3s;
    }
    .pricing-item.featured {
      border-color: #3b82f6;
      background: linear-gradient(135deg, #eff6ff, #ffffff);
      transform: scale(1.05);
    }
    .pricing-item:hover {
      border-color: #3b82f6;
      box-shadow: 0 12px 30px rgba(59, 130, 246, 0.15);
    }
    .stats-item {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .stats-item .purecounter {
      font-size: 2rem;
      font-weight: 700;
      color: #3b82f6;
    }
    .contact-info i {
      width: 48px;
      height: 48px;
      background: #eff6ff;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #3b82f6;
      font-size: 20px;
      margin-right: 16px;
    }
    .testimonial-card {
      background: white;
      padding: 24px;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    .avatar {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #3b82f6;
    }
    .btn-getstarted {
      background: linear-gradient(135deg, #3b82f6, #8b5cf6);
      color: white;
      padding: 10px 24px;
      border-radius: 10px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s;
    }
    .btn-getstarted:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
      color: white;
    }
  </style>
</head>

<body class="index-page">

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <i class="bi bi-truck me-2" style="font-size: 24px; color: #3b82f6;"></i>
        <h1 class="sitename mb-0" style="font-weight: 700; color: #1e293b;">Logis</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#pricing">Harga</a></li>
          <li><a href="#testimonials">Testimoni</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="public/login.php">
        <i class="bi bi-box-arrow-in-right me-1"></i>Login
      </a>

    </div>
  </header>

  <main class="main">
    
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <!-- Online Background Image from Unsplash -->
      <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1920&q=80" 
           alt="Logistics Background" 
           class="hero-bg" 
           data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up" style="font-weight: 800; font-size: 2.5rem; line-height: 1.2;">
              Kirim Lebih Cepat,<br>
              <span style="color: #3b82f6;">Bisnis Makin Laris!</span> 🚀
            </h2>
            <p data-aos="fade-up" data-aos-delay="100" class="lead">
              Solusi logistik terintegrasi untuk UMKM hingga enterprise. 
              Pengiriman same-day, tracking real-time, dan dukungan 24/7.
            </p>

            <form action="#" class="form-search d-flex align-items-stretch mb-4 gap-2" 
                  data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control form-control-lg" 
                     placeholder="🔍 Cek ongkir: Ketik kota atau kode pos..."
                     style="border-radius: 12px; border: 2px solid #e2e8f0;">
              <button type="submit" class="btn btn-primary btn-lg" 
                      style="background: #3b82f6; border: none; border-radius: 12px; padding: 12px 28px;">
                Cek Sekarang
              </button>
            </form>

            <div class="row gy-3" data-aos="fade-up" data-aos-delay="300">
              <div class="col-6 col-lg-3">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="50000" data-purecounter-duration="2" class="purecounter">0</span>
                  <p class="mb-0 text-muted small">Pengiriman/Bulan</p>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="99.7" data-purecounter-duration="2" class="purecounter">0</span>
                  <p class="mb-0 text-muted small">% On-Time Delivery</p>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="2" class="purecounter">0</span>
                  <p class="mb-0 text-muted small">Kota Terjangkau</p>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter">0</span>
                  <p class="mb-0 text-muted small">Jam Support</p>
                </div>
              </div>
            </div>
            
            <!-- Trust Badges -->
            <div class="d-flex flex-wrap gap-3 mt-4" data-aos="fade-up" data-aos-delay="400">
              <span class="badge bg-light text-dark px-3 py-2">
                <i class="bi bi-shield-check text-success me-1"></i>Asuransi Pengiriman
              </span>
              <span class="badge bg-light text-dark px-3 py-2">
                <i class="bi bi-geo-alt text-primary me-1"></i>Live Tracking
              </span>
              <span class="badge bg-light text-dark px-3 py-2">
                <i class="bi bi-clock-history text-warning me-1"></i>Same-Day Delivery
              </span>
            </div>
          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <!-- Online Illustration from undraw.co -->
            <img src="https://undraw.co/api/illustrations/random?tag=delivery&color=3b82f6" 
                 class="img-fluid mb-3 mb-lg-0" 
                 alt="Delivery Illustration"
                 onerror="this.src='https://via.placeholder.com/500x400/3b82f6/ffffff?text=Logis+Delivery'">
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section py-5">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <span class="text-primary fw-semibold">🚀 Layanan Unggulan</span>
          <h2 class="mt-2" style="font-weight: 700;">Solusi Lengkap untuk Kebutuhan Pengiriman Anda</h2>
          <p class="text-muted">Pilih layanan yang paling sesuai dengan bisnis Anda</p>
        </div>
        
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card service-card h-100 p-4">
              <div class="service-icon">
                <i class="bi bi-lightning-charge-fill"></i>
              </div>
              <h4 class="card-title fw-bold">⚡ Express Delivery</h4>
              <p class="card-text text-muted">
                Pengiriman same-day & next-day untuk dokumen dan paket urgent. 
                Garansi sampai atau uang kembali!
              </p>
              <ul class="list-unstyled small text-muted mb-3">
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Pickup dalam 30 menit</li>
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Tracking real-time</li>
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Asuransi hingga Rp 10 juta</li>
              </ul>
              <a href="#" class="btn btn-outline-primary btn-sm stretched-link">Pelajari Selengkapnya →</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card service-card h-100 p-4">
              <div class="service-icon">
                <i class="bi bi-box-seam-fill"></i>
              </div>
              <h4 class="card-title fw-bold">📦 Cargo & Freight</h4>
              <p class="card-text text-muted">
                Solusi pengiriman barang besar, kargo darat/laut/udara. 
                Harga kompetitif untuk volume besar.
              </p>
              <ul class="list-unstyled small text-muted mb-3">
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Door-to-door service</li>
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Custom packaging</li>
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Dokumen kepabeanan</li>
              </ul>
              <a href="#" class="btn btn-outline-primary btn-sm stretched-link">Pelajari Selengkapnya →</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card service-card h-100 p-4">
              <div class="service-icon">
                <i class="bi bi-building-fill-gear"></i>
              </div>
              <h4 class="card-title fw-bold">🏢 Warehousing</h4>
              <p class="card-text text-muted">
                Gudang strategis di 15+ kota besar. 
                Kelola inventory, fulfillment, dan distribusi dalam satu platform.
              </p>
              <ul class="list-unstyled small text-muted mb-3">
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Suhu terkontrol</li>
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Integrasi e-commerce</li>
                <li><i class="bi bi-check-circle-fill text-success me-1"></i> Laporan real-time</li>
              </ul>
              <a href="#" class="btn btn-outline-primary btn-sm stretched-link">Pelajari Selengkapnya →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section py-5">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <!-- Online Image from Unsplash -->
            <div class="position-relative">
              <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" 
                   class="img-fluid rounded-4 shadow" 
                   alt="Our Team">
              <div class="position-absolute bottom-0 end-0 p-3">
                <div class="bg-white rounded-3 shadow px-4 py-3 d-flex align-items-center gap-3">
                  <i class="bi bi-award-fill text-warning fs-4"></i>
                  <div>
                    <strong class="d-block">Terpercaya Sejak 2018</strong>
                    <small class="text-muted">ISO 9001:2015 Certified</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <span class="text-primary fw-semibold">🏆 Tentang Logis</span>
            <h2 class="mt-2 mb-4" style="font-weight: 700;">Mitra Logistik yang Anda Bisa Andalkan</h2>
            <p class="text-muted mb-4">
              Kami hadir untuk mempermudah bisnis Anda dengan solusi logistik yang 
              <strong>cepat, aman, dan terjangkau</strong>. Didukung teknologi terbaru 
              dan tim profesional yang siap membantu 24/7.
            </p>
            
            <div class="row g-3 mb-4">
              <div class="col-sm-6">
                <div class="d-flex align-items-start">
                  <i class="bi bi-diagram-3 text-primary fs-5 me-3 mt-1"></i>
                  <div>
                    <h6 class="fw-semibold mb-1">Sistem Terintegrasi</h6>
                    <small class="text-muted">Dashboard all-in-one untuk kelola pengiriman</small>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-start">
                  <i class="bi bi-globe2 text-primary fs-5 me-3 mt-1"></i>
                  <div>
                    <h6 class="fw-semibold mb-1">Jangkauan Nasional</h6>
                    <small class="text-muted">Cover 500+ kota & kabupaten di Indonesia</small>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-start">
                  <i class="bi bi-headset text-primary fs-5 me-3 mt-1"></i>
                  <div>
                    <h6 class="fw-semibold mb-1">Support 24/7</h6>
                    <small class="text-muted">Tim customer service siap bantu via chat, WA, telepon</small>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-start">
                  <i class="bi bi-shield-lock text-primary fs-5 me-3 mt-1"></i>
                  <div>
                    <h6 class="fw-semibold mb-1">Keamanan Terjamin</h6>
                    <small class="text-muted">Asuransi pengiriman & enkripsi data end-to-end</small>
                  </div>
                </div>
              </div>
            </div>
            
            <a href="#contact" class="btn btn-primary px-4 py-2" style="border-radius: 10px;">
              <i class="bi bi-chat-dots me-2"></i>Konsultasi Gratis
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services section py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <span class="text-primary fw-semibold">📋 Layanan Lengkap</span>
          <h2 class="mt-2" style="font-weight: 700;">Semua Kebutuhan Logistik dalam Satu Tempat</h2>
          <p class="text-muted">Dari pengiriman kecil hingga manajemen rantai pasok kompleks</p>
        </div>

        <div class="row g-4">
          <!-- Service 1 -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 border-0 shadow-sm" style="border-radius: 16px;">
              <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?auto=format&fit=crop&w=400&q=80" 
                   class="card-img-top" alt="Storage" style="height: 180px; object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title fw-bold">🗄️ Storage & Warehousing</h5>
                <p class="card-text small text-muted">
                  Gudang modern dengan sistem inventory terintegrasi. 
                  Cocok untuk e-commerce dan distributor.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 2 -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 border-0 shadow-sm" style="border-radius: 16px;">
              <img src="https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&w=400&q=80" 
                   class="card-img-top" alt="Logistics" style="height: 180px; object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title fw-bold">🚚 Distribution</h5>
                <p class="card-text small text-muted">
                  Jaringan distribusi luas dengan armada terawat. 
                  Optimalisasi rute untuk efisiensi biaya.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 3 -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100 border-0 shadow-sm" style="border-radius: 16px;">
              <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?auto=format&fit=crop&w=400&q=80" 
                   class="card-img-top" alt="Cargo" style="height: 180px; object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title fw-bold">✈️ International Cargo</h5>
                <p class="card-text small text-muted">
                  Pengiriman internasional via udara & laut. 
                  Handle dokumen ekspor-impor & customs clearance.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 4 -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100 border-0 shadow-sm" style="border-radius: 16px;">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=400&q=80" 
                   class="card-img-top" alt="Tech" style="height: 180px; object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title fw-bold">💻 Tech Solutions</h5>
                <p class="card-text small text-muted">
                  API integration, dashboard analytics, dan automasi 
                  untuk optimalkan operasional logistik Anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section py-5">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <span class="text-primary fw-semibold">💰 Paket Harga</span>
          <h2 class="mt-2" style="font-weight: 700;">Pilih Paket yang Cocok untuk Bisnis Anda</h2>
          <p class="text-muted">Semua paket termasuk tracking real-time & support 24/7</p>
        </div>

        <div class="row gy-4 justify-content-center">
          <!-- Basic Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item h-100">
              <h4 class="fw-bold mb-1">Starter</h4>
              <p class="text-muted small">Untuk UMKM & pemula</p>
              <h2 class="my-3"><sup class="fs-6 text-muted">Rp</sup>99.000<span class="fs-6 text-muted">/bulan</span></h2>
              <ul class="list-unstyled text-start mb-4">
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>100 pengiriman/bulan</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Tracking dasar</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Email support</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Laporan bulanan</li>
                <li class="py-2 text-muted"><i class="bi bi-x-circle me-2"></i>API access</li>
                <li class="py-2 text-muted"><i class="bi bi-x-circle me-2"></i>Dedicated account manager</li>
              </ul>
              <a href="public/register.php?plan=starter" class="btn btn-outline-primary w-100" style="border-radius: 10px;">Mulai Sekarang</a>
            </div>
          </div>

          <!-- Business Plan (Featured) -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured h-100">
              <span class="badge bg-primary mb-3">🔥 Paling Populer</span>
              <h4 class="fw-bold mb-1">Business</h4>
              <p class="text-muted small">Untuk bisnis yang berkembang</p>
              <h2 class="my-3"><sup class="fs-6 text-muted">Rp</sup>299.000<span class="fs-6 text-muted">/bulan</span></h2>
              <ul class="list-unstyled text-start mb-4">
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>500 pengiriman/bulan</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Live tracking + notifikasi</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Priority support (chat/WA)</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Dashboard analytics</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>API access</li>
                <li class="py-2 text-muted"><i class="bi bi-x-circle me-2"></i>Dedicated account manager</li>
              </ul>
              <a href="public/register.php?plan=business" class="btn btn-primary w-100" style="border-radius: 10px;">Coba Gratis 14 Hari</a>
            </div>
          </div>

          <!-- Enterprise Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item h-100">
              <h4 class="fw-bold mb-1">Enterprise</h4>
              <p class="text-muted small">Untuk korporat & skala besar</p>
              <h2 class="my-3"><sup class="fs-6 text-muted">Rp</sup>Custom<span class="fs-6 text-muted"></span></h2>
              <ul class="list-unstyled text-start mb-4">
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Unlimited pengiriman</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Custom tracking & branding</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Dedicated support team</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Advanced analytics & reporting</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Full API + webhook</li>
                <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Account manager khusus</li>
              </ul>
              <a href="#contact" class="btn btn-outline-primary w-100" style="border-radius: 10px;">Hubungi Sales</a>
            </div>
          </div>
        </div>
        
        <p class="text-center text-muted small mt-4">
          <i class="bi bi-info-circle me-1"></i>
          Semua harga belum termasuk PPN. 
          <a href="#" class="text-primary">Lihat perbandingan fitur lengkap →</a>
        </p>
      </div>
    </section>

    <!-- Testimonials Section (NEW) -->
    <section id="testimonials" class="testimonials section py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <span class="text-primary fw-semibold">💬 Testimoni</span>
          <h2 class="mt-2" style="font-weight: 700;">Apa Kata Pelanggan Kami?</h2>
        </div>

        <div class="row g-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-card">
              <div class="d-flex align-items-center mb-3">
                <img src="https://i.pravatar.cc/150?img=32" alt="User" class="avatar me-3">
                <div>
                  <strong class="d-block">Sari Wijaya</strong>
                  <small class="text-muted">Owner, TokoBunda.id</small>
                </div>
              </div>
              <p class="text-muted mb-0">
                "Sejak pakai Logis, komplain keterlambatan turun 80%! 
                Tracking-nya akurat dan CS-nya responsif banget. Recommended! ⭐⭐⭐⭐⭐"
              </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-card">
              <div class="d-flex align-items-center mb-3">
                <img src="https://i.pravatar.cc/150?img=11" alt="User" class="avatar me-3">
                <div>
                  <strong class="d-block">Budi Santoso</strong>
                  <small class="text-muted">Operations Manager, FreshMart</small>
                </div>
              </div>
              <p class="text-muted mb-0">
                "Warehouse integration-nya smooth banget. 
                Inventory auto-update, pengiriman lebih cepat. 
                Hemat waktu tim kami 3-4 jam/hari! 🙌"
              </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-card">
              <div class="d-flex align-items-center mb-3">
                <img src="https://i.pravatar.cc/150?img=59" alt="User" class="avatar me-3">
                <div>
                  <strong class="d-block">Maya Putri</strong>
                  <small class="text-muted">Founder, CraftByMaya</small>
                </div>
              </div>
              <p class="text-muted mb-0">
                "Sebagai UMKM, harga Starter-nya sangat terjangkau. 
                Fitur lengkap, gak perlu pakai 3-4 aplikasi berbeda. 
                Thank you Logis! 🚀"
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section py-5">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <span class="text-primary fw-semibold">📞 Hubungi Kami</span>
          <h2 class="mt-2" style="font-weight: 700;">Siap Bantu Kebutuhan Logistik Anda</h2>
          <p class="text-muted">Tim kami siap merespons dalam 1 jam kerja</p>
        </div>

        <div class="row gy-4">
          <!-- Contact Info -->
          <div class="col-lg-5" data-aos="fade-right">
            <div class="contact-info mb-4">
              <div class="d-flex align-items-start mb-4">
                <i class="bi bi-geo-alt-fill"></i>
                <div>
                  <h5 class="fw-semibold mb-1">Kantor Pusat</h5>
                  <p class="text-muted mb-0">
                    Gedung Logis Tower, Lt. 12<br>
                    Jl. Jend. Sudirman Kav. 52-53<br>
                    Jakarta Selatan 12190, Indonesia
                  </p>
                </div>
              </div>

              <div class="d-flex align-items-start mb-4">
                <i class="bi bi-envelope-fill"></i>
                <div>
                  <h5 class="fw-semibold mb-1">Email</h5>
                  <p class="text-muted mb-0">
                    <a href="mailto:hello@logis.id" class="text-decoration-none text-dark">hello@logis.id</a><br>
                    <a href="mailto:support@logis.id" class="text-decoration-none text-dark">support@logis.id</a>
                  </p>
                </div>
              </div>

              <div class="d-flex align-items-start mb-4">
                <i class="bi bi-telephone-fill"></i>
                <div>
                  <h5 class="fw-semibold mb-1">Telepon / WA</h5>
                  <p class="text-muted mb-0">
                    <a href="tel:+622150888999" class="text-decoration-none text-dark">+62 21 5088 8999</a><br>
                    <a href="https://wa.me/6281234567890" class="text-decoration-none text-dark">+62 812-3456-7890</a>
                  </p>
                </div>
              </div>

              <!-- Social Links -->
              <div class="d-flex gap-2 mt-4">
                <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-twitter-x"></i>
                </a>
                <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-linkedin"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="col-lg-7" data-aos="fade-left">
            <form class="bg-white p-4 rounded-4 shadow-sm">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Contoh: Budi Santoso" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Email</label>
                  <input type="email" class="form-control" placeholder="budi@perusahaan.com" required>
                </div>
                <div class="col-12">
                  <label class="form-label small fw-semibold">Perusahaan</label>
                  <input type="text" class="form-control" placeholder="Nama perusahaan Anda">
                </div>
                <div class="col-12">
                  <label class="form-label small fw-semibold">Kebutuhan</label>
                  <select class="form-select" required>
                    <option value="">Pilih layanan...</option>
                    <option>Express Delivery</option>
                    <option>Cargo & Freight</option>
                    <option>Warehousing</option>
                    <option>International Shipping</option>
                    <option>Konsultasi Custom</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label small fw-semibold">Pesan</label>
                  <textarea class="form-control" rows="4" placeholder="Ceritakan kebutuhan logistik Anda..." required></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100 py-2" style="border-radius: 10px;">
                    <i class="bi bi-send me-2"></i>Kirim Pesan
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer id="footer" class="footer dark-background py-4">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <a href="index.php" class="logo d-flex align-items-center mb-3">
            <i class="bi bi-truck me-2" style="font-size: 24px; color: #3b82f6;"></i>
            <span class="sitename fw-bold" style="color: white;">Logis</span>
          </a>
          <p class="text-white-50 small">
            Solusi logistik terintegrasi untuk percepat pertumbuhan bisnis Anda. 
            Cepat, aman, terpercaya.
          </p>
          <div class="social-links d-flex mt-3 gap-2">
            <a href="#" class="text-white-50 hover-white"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="text-white-50 hover-white"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white-50 hover-white"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white-50 hover-white"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6">
          <h6 class="text-white fw-semibold mb-3">Layanan</h6>
          <ul class="list-unstyled small">
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Express Delivery</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Cargo & Freight</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Warehousing</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">International</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6">
          <h6 class="text-white fw-semibold mb-3">Perusahaan</h6>
          <ul class="list-unstyled small">
            <li class="mb-2"><a href="#about" class="text-white-50 text-decoration-none hover-white">Tentang Kami</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Karir</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Blog</a></li>
            <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Partner</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h6 class="text-white fw-semibold mb-3">Newsletter</h6>
          <p class="text-white-50 small">Dapatkan tips logistik & promo eksklusif</p>
          <form class="d-flex gap-2">
            <input type="email" class="form-control form-control-sm" placeholder="Email Anda" style="border-radius: 8px;">
            <button class="btn btn-primary btn-sm" style="border-radius: 8px;">
              <i class="bi bi-arrow-right"></i>
            </button>
          </form>
        </div>
      </div>

      <hr class="border-secondary my-4">
      
      <div class="text-center text-white-50 small">
        © <span id="year"></span> <strong>Logis</strong>. All Rights Reserved. 
        <span class="mx-2">|</span>
        <a href="#" class="text-white-50 text-decoration-none">Privacy Policy</a>
        <span class="mx-2">|</span>
        <a href="#" class="text-white-50 text-decoration-none">Terms of Service</a>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  
  <!-- Pure Counter for Stats -->
  <script src="https://cdn.jsdelivr.net/gh/mrdoob/stats.js@r17/build/stats.min.js"></script>
  
  <!-- Main JS File -->
  <script src="js/main.js"></script>
  
  <!-- Inline Init Scripts -->
  <script>
    // Set current year in footer
    document.getElementById('year').textContent = new Date().getFullYear();
    
    // Initialize AOS
    AOS.init({
      duration: 800,
      once: true,
      offset: 100
    });
    
    // Initialize GLightbox
    if (typeof GLightbox !== 'undefined') {
      GLightbox({ selector: '.glightbox' });
    }
    
    // Simple purecounter fallback (if library not loaded)
    document.addEventListener('DOMContentLoaded', function() {
      const counters = document.querySelectorAll('.purecounter');
      counters.forEach(counter => {
        const end = parseInt(counter.getAttribute('data-purecounter-end'));
        const duration = parseInt(counter.getAttribute('data-purecounter-duration')) * 1000;
        let start = 0;
        const increment = end / (duration / 16);
        
        const updateCounter = () => {
          start += increment;
          if (start < end) {
            counter.textContent = Math.floor(start).toLocaleString('id-ID');
            requestAnimationFrame(updateCounter);
          } else {
            counter.textContent = end.toLocaleString('id-ID');
          }
        };
        
        // Start animation when in view (simple version)
        const observer = new IntersectionObserver((entries) => {
          if (entries[0].isIntersecting) {
            updateCounter();
            observer.unobserve(counter);
          }
        });
        observer.observe(counter);
      });
    });
  </script>
  
  <!-- CSS Helper for Hover Effects -->
  <style>
    .hover-white:hover { color: white !important; }
    .form-control:focus, .form-select:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
    }
  </style>

</body>
</html>