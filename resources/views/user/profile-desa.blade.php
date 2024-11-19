@extends('layouts.layout')
@section('child')
    
<!-- End of Navbar -->

<!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Profile Desa</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Content -->
  <section id="sejarah-desa" class="container transition-container py-5">
    <h2 class="subjudul text-center mb-4">Sejarah Desa</h2>
    <div class="row">
      <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolorem
          cupiditate iste dignissimos adipisci sapiente nesciunt, exercitationem dolore consectetur
          praesentium rerum, labore quod maiores! Voluptatem accusantium, ipsa nihil libero aspernatur
          corrupti saepe consectetur suscipit. Repellendus, assumenda tempore, aliquid illo cumque, atque
          illum architecto reprehenderit magni voluptatibus delectus quas exercitationem eos. Non quod
          voluptate impedit, quis neque architecto voluptatum eligendi, est illo quasi ratione tempora esse
          commodi rerum perspiciatis atque obcaecati, omnis ipsam voluptas reiciendis? Cumque tempore
          obcaecati, expedita sed doloribus atque ex officiis similique accusantium libero ea, praesentium
          odit ducimus ipsa porro, pariatur necessitatibus? Quod facere doloribus modi dignissimos odio?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolorem
          cupiditate iste dignissimos adipisci sapiente nesciunt, exercitationem dolore consectetur
          praesentium rerum, labore quod maiores! Voluptatem accusantium, ipsa nihil libero aspernatur
          corrupti saepe consectetur suscipit. Repellendus, assumenda tempore, aliquid illo cumque, atque
          illum architecto reprehenderit magni voluptatibus delectus quas exercitationem eos. Non quod
          voluptate impedit, quis neque architecto voluptatum eligendi, est illo quasi ratione tempora esse
          commodi rerum perspiciatis atque obcaecati, omnis ipsam voluptas reiciendis? Cumque tempore
          obcaecati, expedita sed doloribus atque ex officiis similique accusantium libero ea, praesentium
          odit ducimus ipsa porro, pariatur necessitatibus? Quod facere doloribus modi dignissimos odio?</p>
      </div>
      <div class="container transition-container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <img src="img/1.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/2.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/3.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/4.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/5.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/6.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End of Content -->

  <!-- Visi Misi -->
  <section id="visi-misi" class="py-5">
    <div class="container transition-container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card-visimisi mb-3">
            <div class="card-header">
              <h5 class="mb-2">Visi</h5>
            </div>
            <div class="card-body">
              <p class="card-text">
                Mewujudkan masyarakat desa yang mandiri, sejahtera, dan berdaya saing dengan
                memanfaatkan
                potensi sumber daya alam dan manusia secara berkelanjutan.
              </p>
            </div>
          </div>
          <div class="card-visimisi mt-3 mb-5">
            <div class="card-header">
              <h5 class="mb-2">Misi</h5>
            </div>
            <div class="card-body">
              <ol class="card-text" style="list-style-type: disc;">
                <li>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan.</li>
                <li>Meningkatkan kesejahteraan masyarakat dengan menciptakan lapangan pekerjaan.</li>
                <li>Mengembangkan potensi ekonomi lokal melalui pertanian, pariwisata, dan UMKM.</li>
                <li>Meningkatkan infrastruktur dan fasilitas umum untuk kesejahteraan masyarakat.</li>
                <li>Mewujudkan pemerintahan desa yang transparan dan akuntabel.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Visi Misi -->

  <!-- Kependudukan -->
  <section id="kependudukan" class="py-5">
    <div class="container-fluid transition-container">
      <h2 class="subjudul mb-5 text-center">Kependudukan</h2>
      <div class="row text-center justify-content-center">
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total Jiwa</h5>
              <span class="counter display-4" data-target="5000">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total KK</h5>
              <span class="counter display-4" data-target="1200">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Dusun</h5>
              <span class="counter display-4" data-target="15">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Jumlah RT</h5>
              <span class="counter display-4" data-target="50">0</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid my-5 mt-1">
        <div class="row text-center justify-content-center">
          <!-- Diagram Lingkaran Suku -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Suku</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="sukuChart"></canvas>
            </div>
          </div>

          <!-- Diagram Lingkaran Agama -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Agama</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="agamaChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kependudukan -->

  <!-- Kantor Desa -->
  <section id="kantor-desa" class="py-5">
    <div class="container transition-container">
      <h2 class="subjudul text-center mb-4">Kantor Desa Sungai Keran</h2>
      <div class="row">
        <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17596.69517182833!2d108.89841217452445!3d0.692050119300173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e305ab91cca753%3A0x10d868d0d0d897e3!2sSungai%20Keran%20Village%20Office!5e0!3m2!1sen!2sid!4v1728940315050!5m2!1sen!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kantor Desa -->

  @endsection