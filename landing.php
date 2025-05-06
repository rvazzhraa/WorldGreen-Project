<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorlGreen - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    
    <!-- Carousel -->
<div id="carouselExample" class="carousel slide mt-0" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slide1.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-white text-shadow " >Selamat Datang di WorldGreen</h5>
                <p style="margin-bottom: 5px; line-height: 1.3;" class="text-white text-shadow ">
                 Saatnya beralih ke pilihan yang lebih hijau dan bertanggung jawab!
                </p>
                <p style="margin-bottom: 5px; line-height: 1.3;" class="text-white text-shadow ">
                 Bersama, kita ciptakan perubahan untuk bumi yang lebih sehat.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slide2.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-white text-shadow">Pilih Produk Ramah Lingkungan, Wujudkan Perubahan</h5>
                <p class="text-white text-shadow" >Setiap langkah kecil menuju keberlanjutan berdampak besar bagi bumi!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slide3.jpg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bergabung dengan Kami</h5>
                <p>Jadilah bagian dari gerakan hijau dunia</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>


       <!-- Tentang Perusahaan -->
    <section id="tentang" class="container my-5">
    <h2 class="text-center">Tentang WorldGreen</h2>
    <p class="text-center">
        WorldGreen adalah perusahaan startup yang berdedikasi untuk menjadi bagian dari solusi global dalam menjaga kelestarian bumi. 
        Kami hadir dengan komitmen kuat untuk menyediakan berbagai produk ramah lingkungan yang tidak hanya bermanfaat bagi manusia, 
        tetapi juga bagi masa depan planet ini. Visi kami sederhana namun bermakna: menciptakan dunia yang lebih bersih, hijau, dan berkelanjutan.
    </p>
    <p class="text-center">
        Sebagai perusahaan yang peduli terhadap lingkungan, WorldGreen berfokus pada penyediaan produk-produk berkualitas tinggi yang 
        terbuat dari bahan daur ulang dan ramah lingkungan. Kami percaya bahwa perubahan besar berawal dari langkah kecil. Oleh karena itu, 
        kami terus berinovasi untuk menghadirkan produk yang dapat mengurangi limbah plastik, sampah rumah tangga, dan berbagai bentuk polusi lainnya.
    </p>
    <p class="text-center">
        Tidak hanya berhenti pada produk, WorldGreen juga aktif menjalankan berbagai program sosial dan lingkungan. Salah satu bentuk komitmen kami 
        adalah melalui gerakan <strong>Penanaman Pohon Seribu Harapan</strong>, di mana setiap pembelian produk dari kami akan disisihkan untuk 
        mendukung penanaman pohon di berbagai daerah yang membutuhkan penghijauan. Kami percaya bahwa menjaga bumi bukan hanya tugas satu pihak, 
        tetapi tanggung jawab bersama.
    </p>
    <p class="text-center">
        Melalui website ini, kami ingin mengajak seluruh masyarakat untuk bersama-sama menciptakan perubahan. Anda tidak hanya membeli produk, 
        tetapi juga berkontribusi langsung dalam menjaga lingkungan, mengurangi sampah, serta menciptakan masa depan yang lebih baik untuk generasi mendatang.
    </p>
    <p class="text-center">
        <strong>Bergabunglah bersama WorldGreen dan jadilah bagian dari gerakan hijau dunia. Karena bumi yang lebih baik, dimulai dari kita.</strong>
    </p>
</section>

    </section>

    <!-- Testimoni Pelanggan -->
    <section id="testimoni" div class="container text-center">
    <h2 class="mb-4">Testimoni Pelanggan</h2>
    <div class="row">
        
        <!-- Testimoni 1 -->
        <div class="col-md-4">
            <div class="card p-3 border rounded shadow-sm">
            <img src="images/user1.jpeg" class="img-fluid rounded-circle mx-auto d-block" style="width: 80px; height: 80px; object-fit: cover;">

                <p class="mt-3">"Produk WorldGreen sangat membantu dalam menjaga lingkungan, dan juga harganya terjangkau banget"</p>
                <strong>@javelinjasmine23</strong>
            </div>
        </div>
        
        <!-- Testimoni 2 -->
        <div class="col-md-4">
            <div class="card p-3 border rounded shadow-sm">
            <img src="images/user2.jpeg" class="img-fluid rounded-circle mx-auto d-block" style="width: 80px; height: 80px; object-fit: cover;">
                <p class="mt-3">"Aku suka banget dengan kualitas produk WorldGreen, terus desainnya estetik"</p>
                <strong>@catlogintothewild</strong>
            </div>
        </div>

        <!-- Testimoni 3 -->
        <div class="col-md-4">
            <div class="card p-3 border rounded shadow-sm">
            <img src="images/user3.jpeg" class="img-fluid rounded-circle mx-auto d-block" style="width: 80px; height: 80px; object-fit: cover;">
                <p class="mt-3">"Kayanya aku bakalan beli banyak lagi deh disini haha"</p>
                <strong>@hindsh_yena</strong>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 d-flex flex-column align-items-center justify-content-center">
        <h5 class="mb-1">Contact Us</h5>
        <p class="mb-1 small">Email: worldgreenofficial@gmail.com</p>
        <p class="mb-1 small">Phone: +62 182 754</p>
    </footer>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>  
    
