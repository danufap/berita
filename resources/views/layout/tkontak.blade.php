<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kontak - Berita Garuda</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="img/logo.png" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Menu</div>
                    <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                        <input type="text" class="form-control" placeholder="Cari Berita...">
                        <div class="input-group-append">
                            <button class="input-group-text text-secondary"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                Nanti diisi login
            </div>
        </div>
        <div class="row align-items-center">
            <div class="">
                <img class="img-fluid" src="img/banner-logo.png" alt="">
            </div>
        </div>
    </div>



    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Beranda</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Olahraga</a>
                            <a href="#" class="dropdown-item">Hiburan</a>
                            <a href="#" class="dropdown-item">Bisnis</a>
                            <a href="#" class="dropdown-item">Teknologi</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{url('/kontak') }}" class="nav-item nav-link active">Kontak</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="#">Beranda</a>
                <span class="breadcrumb-item active">Kontak</span>
            </nav>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Hubungi Kami</h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h6 class="font-weight-bold">Hubungi Kami</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique blanditiis odit praesentium ducimus alias animi?</p>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Kantor Kami</h6>
                                <p class="m-0">Jl. Jalan Jalan no.00 Kab.Jalanan</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Email Kami</h6>
                                <p class="m-0">info@contoh.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Telepon</h6>
                                <p class="m-0">+62 0329xxxx</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="name" placeholder="Nama" required="required" data-validation-required-message="Masukkan nama anda" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control p-4" id="email" placeholder="Email" required="required" data-validation-required-message="Masukkan email anda" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subjek" required="required" data-validation-required-message="Masukkan subjek" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="4" id="message" placeholder="Pesan" required="required" data-validation-required-message="Masukkan Pesan"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="sendMessageButton">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="mb-3 pb-3">
                    <img class="img-fluid w-100" src="img/banner-logo.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, ipsa repellat natus veniam ad in.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Kategori
                </h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politik</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Bisnis</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Hiburan</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Teknologi</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Kesehatan</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Edukasi</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sains</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Makanan</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Gaya Hidup</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Liburan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="{{ url('/') }}">Berita Garuda</a> 
			Portal Berita <a class="font-weight-bold" href="https://htmlcodex.com">WINNICODE GARUDA TEKNOLOGI</a>
        </p>
    </div>

    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>
</body>

</html>