@extends('user_view.layouts.app')

@section('title')
TKIT1 Nurul 'Ilmi Tenggarong
@endsection

@section('content')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  {{-- Counter --}}
  <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto py-3">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-danger"><span id="state1" countTo="0">0</span>+</h1>
                <h5 class="mt-3">Total Siswa</h5>
                <p class="text-sm font-weight-normal">Siswa-siswi aktif belajar disekolah kami</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-danger"> <span id="state2" countTo="0">0</span>+</h1>
                <h5 class="mt-3">Fasilitas</h5>
                <p class="text-sm font-weight-normal">Fasilitas yang nyaman dan representatif</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-danger"> <span id="state3" countTo="0">0</span>+</h1>
                <h5 class="mt-3">Prestasi</h5>
                <p class="text-sm font-weight-normal">Prestasi terbaik putra-putri kami</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Visi --}}
  <div class="container">
    <div class="row">
      <div class="row justify-content-center text-center my-sm-5">
        <div class="col-lg-6">
          <span class="badge bg-danger mb-3">Visi TKIT1</span>
          <h2 class="text-dark mb-0">Visi Sekolah Kami</h2>
          <p class="lead">"Terwujudnya sekolah Islam Terpadu yang mencetak generasi unggul, bersih, sehat dan berkarakter berdasarkan IMTAQ dan IPTEK." </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Misi -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 mb-5 mb-lg-0">
          <div class="rotating-card-container">
            <div class="card card-rotate card-background card-background-mask-success shadow-success mt-md-0 mt-5">
              <div class="front front-background" style="background-image: url(frontend/assets/img/TKIT1/3.jpeg); background-size: cover;">
                <div class="card-body py-7 text-center">
                  <i class="material-icons text-white text-4xl my-3">touch_app</i>
                  <h3 class="text-white">Jelajahi <br /> TKIT1 Nurul 'Ilmi</h3>
                  <p class="text-white opacity-8">Mengenal program dan bidang TKIT1 dalam pengembangan didunia pendidikan.</p>
                </div>
              </div>
              <div class="back back-background" style="background-image: url(frontend/assets/img/TKIT1/2.jpeg); background-size: cover;">
                <div class="card-body pt-7 text-center">
                  <h3 class="text-white">Jelajahi TKIT1</h3>
                  <p class="text-white opacity-8">Mengenal program dan bidang TKIT1 dalam pengembangan didunia pendidikan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-2">Pendidikan Islam Terpadu</h5>
                <p class="pe-5">Menerapkan sistem pendidikan Islam Terpadu yang mengintegrasikan ayat-ayat qouliyah dan kauniyah, Iman dan ‘Amal, Ruhiyah dan Jasadiyah dalam lingkungan pendidikan yang Islami, Sehat, Bersih, aman dan nyaman.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-2">Pendidikan Karakter, Berwawasan dan Sehat</h5>
                <p class="pe-3">Membiasakan pola hidup Jujur, Disiplin dan Bertanggung Jawab, Membiasakan siswa untuk bersikap sopan santun (Adab Islami), Membiasakan pola hidup bersih serta Peduli Terhadap Pengendalian Pencemaran dan kerusakan juga Pelestarian lingkungan hidup, sehingga tercipta sekolah berwawasan, dan berbudaya lingkungan yang sehat.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-3">
            <div class="col-md-6 mt-2">
              <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Pendidikan Pusat Inovasi dan Inspirasi</h5>
              <p class="pe-5">Menyelenggarakan pendidikan yang menjadi pusat inovasi dan inspirasi pengembangan mutu pendidikan.</p>
            </div>
            <div class="col-md-6 mt-2">
              <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Pendidikan Tanah Air</h5>
              <p class="pe-5">Menanamkan rasa cinta tanah air dan bangsa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Jelajah --}}
  <section class="py-2">
    <div class="container mt-sm-5 mt-3">
      <div class="row">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Jelajahi TKIT1 Nurul 'Ilmi</h3>
            <h6 class="text-secondary font-weight-normal pe-3">Mari kenali sekolah kami dengan berbagai fasilitas, program dan prestasi.</h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Prestasi -->
            <div class="col-12">
              <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                  <div class="row justify-space-between py-2">
                    <div class="col-lg-3 me-auto">
                      <p class="lead fw-bold text-dark pt-1 mb-0">PRESTASI</p>
                    </div>
                    <div class="col-lg-3"></div>
                  </div>
                </div>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="preview-features-1">
                    <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
                      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                      <!-- Material Icons -->
                      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
                      <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.0" rel="stylesheet" />
                      <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6 my-auto">
                            <h3 class="mt-5 mt-lg-0">Prestasi-Prestasi Kami</h3>
                            <p class="pe-5">Segudang prestasi sekolah TKIT1 Nurul Ilmi Tenggarong.</p>
                          </div>

                          {{-- <div class="col-lg-6 mt-lg-0 mt-2 ps-lg-0 ps-0">
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>50 Guru Terbaik</strong> <br> Lomba Bahan Ajar Digital Dinas Pendidikan Prov. Kaltim 2021</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 2 Lomba Poster</strong> <br> Univ. Pajajaran Bandung Jawa Barat Tahun 2021</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 2 Speech Contest</strong> <br> HIMAPBI FKIP Univ. Kutai Kartanegara 2021</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Sekolah Adiwiyata</strong> <br> Prov. Kalimantan Timur Tahun 2021</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara Favorit</strong> <br> Lomba Poster Statistika ITK Tingkat Provinsi 2020</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 1 Lomba Poster</strong> <br> Dinas Perhubungan Kukar 2020</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 2 Lomba Melukis</strong> <br> HUT Bhayangkara Kukar 2019</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 3 Lomba Mading 3D</strong> <br> Islami Gema Muharam Kukar 2019</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 2 Lomba Tahfidz Putri</strong> <br> Gema Muharam Kukar 2019</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 3 Lomba Tahfidz Putri</strong> <br> Gema Muharam Kukar 2019</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 1 Lomba Fotografi</strong> <br> Germas Kukar 2018</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 1 Lari Putri</strong> <br> PORSSIQU Nasional 2017</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 1 MHQ Putra dan Putri</strong> <br> PORSSIQU Provinsi 2017</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class=""><strong>Juara 1 Lomba Lempar Lembing</strong> <br> Provinsi 2017</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-success shadow-success text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3 mb-5">
                                <p class=""><strong>Juara 1 Lomba Menulis Cerpen</strong> <br> Provinsi Kaltim-Tara 2016</p>
                              </div>
                            </div>
                          </div> --}}
                        </div>
                      </div>

                      <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

                      '>
                    </iframe>
                  </div>
                </div>
              </div>
            </div>

            {{-- Fasilitas --}}
            <div class="col-12">
              <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                  <div class="row justify-space-between py-2">
                    <div class="col-lg-3 me-auto">
                      <p class="lead fw-bold text-dark pt-1 mb-0">FASILITAS</p>
                    </div>
                    <div class="col-lg-3"></div>
                  </div>
                </div>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="preview-features-1">
                    <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
                      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                      <!-- Material Icons -->
                      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
                      <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.0" rel="stylesheet" />
                      <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6 my-auto">
                            <h3 class="mt-5 mt-lg-0">Fasilitas Sekolah Kami</h3>
                            <p class="pe-5">Berikut adalah fasilitas TKIT1 Nurul Ilmi Tenggarong.</p>
                          </div>

                          {{-- <div class="col-lg-6 mt-lg-0 mt-2 ps-lg-0 ps-0">
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Ruang Kelas Representatif</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Masjid Besar</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Laboratorium Komputer dan IPA</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Lapangan Voly</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Asrama Putra dan Putri</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Perpustakaan</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Lapangan Futsal</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Lapangan Basket</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Mini Market</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">ATM 24 Jam</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-warning shadow-warning text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3 mb-5">
                                <p class="fw-bold">Kantin Sehat</p>
                              </div>
                            </div>
                          </div> --}}
                        </div>
                      </div>

                      <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

                      '>
                    </iframe>
                  </div>
                </div>
              </div>
            </div>

            {{-- Progran Unggulan --}}
            <div class="col-12">
              <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                  <div class="row justify-space-between py-2">
                    <div class="col-lg-3 me-auto">
                      <p class="lead fw-bold text-dark pt-1 mb-0">PROGRAM</p>
                    </div>
                    <div class="col-lg-3"></div>
                  </div>
                </div>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="preview-features-1">
                    <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
                      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                      <!-- Material Icons -->
                      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
                      <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.0" rel="stylesheet" />
                      <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6 my-auto">
                            <h3 class="mt-5 mt-lg-0">Kegiatan Sekolah Unggulan</h3>
                            <p class="pe-5">Berikut adalah program unggulan TKIT1 Nurul Ilmi Tenggarong.</p>
                          </div>

                          {{-- <div class="col-lg-6 mt-lg-0 mt-2 ps-lg-0 ps-0">
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Kelas Tahfidz Al-Quran</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Muhadharah</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Bina Pribadi Islam</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Baca Quran Metode Qiroaty</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Supercamp Pramuka SIT</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Olimpiade Sains Nasional</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Leadership Training</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3 mb-5">
                                <p class="fw-bold">Siswa Masuk Desa</p>
                              </div>
                            </div>
                          </div> --}}
                        </div>
                      </div>

                      <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

                      '>
                    </iframe>
                  </div>
                </div>
              </div>
            </div>

            {{-- Ekstras --}}
            <div class="col-12">
              <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                  <div class="row justify-space-between py-2">
                    <div class="col-lg-3 me-auto">
                      <p class="lead  fw-bold text-dark pt-1 mb-0">EKSTRA</p>
                    </div>
                    <div class="col-lg-3"></div>
                  </div>
                </div>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="preview-features-1">
                    <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
                      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                      <!-- Material Icons -->
                      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
                      <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.0" rel="stylesheet" />
                      <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6 my-auto">
                            <h3 class="mt-5 mt-lg-0">Kegiatan Ekstrakurikuler</h3>
                            <p class="pe-5">Berikut adalah kegiatan Ekstra pengembangan potensi siswa TKIT1 Nurul Ilmi Tenggarong.</p>
                          </div>

                          {{-- <div class="col-lg-6 mt-lg-0 mt-2 ps-lg-0 ps-0">
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Pramuka SIT</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Forum Pena Remaja</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Arabic Club</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Desain Grafis</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">English Club</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Nasyid Akustik</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Bela Diri</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Tenis Meja</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Paskibraka</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="fw-bold">Habsiy</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-danger shadow-danger text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3 mb-5">
                                <p class="fw-bold">Futsal</p>
                              </div>
                            </div>
                          </div> --}}
                        </div>
                      </div>

                      <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

                      '>
                    </iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row mt-4">
            <div class="col-md-6">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/TKIT1/1.jpeg')}}" alt="aboutus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/TKIT1/2.jpeg')}}" alt="contacus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/TKIT1/3.jpeg')}}" alt="signin">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/TKIT1/4.jpeg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mx-auto mt-md-0 mt-5">
          <div class="position-sticky" style="top:100px !important">
            <h4 class="">Galeri TKIT1 Nurul 'Ilmi</h4>
            <h6 class="text-secondary font-weight-normal">Bagian dari landscape kegiatan kami sekolah TKIT1 Nurul 'Ilmi</h6>
          </div>
        </div>
      </div>
  </section>

  <!-- Prakata Guru -->
  <section class="pb-5 mt-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Guru-guru TKIT1 Nurul 'Ilmi Tenggarong</h3>
          <p class="text-white opacity-8 mb-0">Pesan-pesan guru kami.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">Kepala Sekolah</h6>
                  <p class="mb-0">Pesan-pesan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">Wakil Kepala Sekolah</h6>
                  <p class="mb-0">Pesan-pesan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">-</h6>
                  <p class="mb-0">-.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">-</h6>
                  <p class="mb-0">-.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Artikel -->
  <section class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Informasi Berita TKIT1 Nurul 'Ilmi</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/testimonial-6-2.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Kabar Berita 1</a>
              </h5>
              <p>
                -
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/testimonial-6-2.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Kabar Berita 2</a>
              </h5>
              <p>
                -
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/blog-9-4.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Kabar Berita 3</a>
              </h5>
              <p>
                -
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background cursor-pointer">
            <div class="full-background" style="background-image: url('frontend/material_kit/assets/img/examples/blog2.jpg')" loading="lazy"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <h2 class="card-title text-white">Kabar Berita 4</h2>
                <p class="card-description text-white">-.</p>
                <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                  <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-sm-4" id="download-soft-ui">
    <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
      <img src="{{ url('frontend/material_kit/assets/img/shapes/waves-white.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h3 class="text-white mb-0">TKIT1 Nurul 'Ilmi Tenggarong</h3>
            <h3 class="text-white">Daftarkan segera putra putri anda disekolah TKIT1 Nurul 'Ilmi</h3>
            <p class="text-white mb-5">Berkomitmen mengimplementasikan sistem pendidikan Islam secara terpadu untuk melahirkan generasi muslim terbaik menuju terwujudnya kejayaan Islam.</p>
            <a href="https://ynikoetaikartanagara.com/ppdb/smait_create" class="btn btn-info btn-lg mb-3 mb-sm-0">Pendaftaran Online TKIT1</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Support Section --}}
  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-12 my-auto">
          <h3 class="text-gradient text-danger mb-0">TKIT1 Nurul 'Ilmi</h3>
          <h3>Tenggarong</h3>
          <p class="pe-md-5 mb-4">
            TKIT1 Nurul ‘Ilmi Tenggarong merupakan SD berkonsep Islam Terpadu pertama berdiri di Kalimantan. TKIT1 Nurul ’Ilmi Tenggarong menyelenggarakan pendidikan sesuai dengan kurikulum nasional yang diperkaya dengan nilai-nilai Islam. Berkomitmen mengimplementasikan sistem pendidikan Islam secara terpadu untuk melahirkan generasi muslim terbaik menuju terwujudnya kejayaan Islam.
          </p>
        </div>
        <div class="col-md-5 col-12 my-auto">
          <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
            <img class="w-100 border-radius-lg shadow-lg" src="{{ url('frontend/assets/img/TKIT1/1.jpeg')}}" alt="Product Image">
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Kotak Saran --}}
  <section class="py-lg-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card box-shadow-xl overflow-hidden mb-5">
            <div class="row">
              <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('frontend/material_kit/assets/img/examples/blog2.jpg')" loading="lazy">
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-dark opacity-8"></div>
                  <div class="p-6 ps-sm-6 position-relative text-start z-index-2">
                    <h3 class="text-white">Kontak Informasi</h3>
                    <p class="text-white opacity-8 mb-4">Silahkan hubungi untuk informasi lebih lanjut.</p>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">-</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-envelope text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">-</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-map-marker-alt text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">Jl. Ahmad Dahlan RT 12, Keluharan Baru, Tenggarong, Kab. Kutai Kartanegara</span>
                      </div>
                    </div>
                    <div class="mt-4">
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                        <i class="fab fa-facebook"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <form class="p-3" id="contact-form" method="post">
                  <div class="card-header px-4 py-sm-5 py-3">
                    <h2>Assalamu'alaikum!</h2>
                    <p class="lead"> Kami senang bisa berkomunikasi dengan anda.</p>
                  </div>
                  <div class="card-body pt-1">
                    <div class="row">
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Nama Lengkap</label>
                          <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Nomor HP</label>
                          <input type="text" class="form-control" placeholder="Nomor HP">
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Domisili</label>
                          <input type="text" class="form-control" placeholder="Domisili">
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Pesan, Saran dan Masukan</label>
                          <textarea name="message" class="form-control" id="message" rows="6" placeholder="Pesan, Saran dan Masukan"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-end ms-auto">
                        <button type="submit" class="btn bg-gradient-info mb-0">Kirim Pesan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sosmed Section -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Jazaakumullah Khairan!</h4>
          <p class="lead mb-0">Kami memberi pelayanan pendidikan terbaik</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
          <a href="" class="btn btn-youtube mb-0 me-2" target="_blank">
            <i class="fab fa-youtube me-1"></i> Watch
          </a>
          <a href="" class="btn btn-facebook mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Share
          </a>
          <a href="" class="btn btn-instagram mb-0 me-2" target="_blank">
            <i class="fab fa-instagram me-1"></i> Post it
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

