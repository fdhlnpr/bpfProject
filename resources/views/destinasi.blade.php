
<!DOCTYPE html>
<html lang="id" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="developer" content="TIM IT DISKOMINFOTIKSAN KOTA PEKANBARU">
        <meta name="csrf-token" content="Z3YQW2YhgbFWg2p8kzirrDI1UPLZbU5WBTvbjb1C">
        <meta property="fb:app_id" content="591456168577537" />

            <title> Daftar Objek - Smarttourism.pekanbaru.go.id </title>
    <meta name="keywords" content="daftar objek, Smarttourism.pekanbaru.go.id">
    <meta name="description" content="Daftar Objek - Smarttourism.pekanbaru.go.id">
    <meta property="og:url" content="https://smarttourism.pekanbaru.go.id/p/destinasi" />
    <meta property="og:type" content="website" />
	<meta property="og:title" content="Daftar Objek - Smarttourism.pekanbaru.go.id" />
	<meta property="og:description" content="Daftar Objek - Smarttourism.pekanbaru.go.id" />
    <meta property="og:image" content="https://smarttourism.pekanbaru.go.id/storage/icon/logo-icon.png" />
    <meta property="og:image:width" content="224">
    <meta property="og:image:height" content="224">
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Daftar Objek - Smarttourism.pekanbaru.go.id" />

        <!-- Icon Web -->
        <link rel="shortcut icon" href="https://smarttourism.pekanbaru.go.id/storage/icon/favicon.png"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
        <!-- Fonts Awesome CSS -->
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/vendors/fontawesome/css/all.min.css">
        <!-- jquery-ui css -->
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/vendors/jquery-ui/jquery-ui.min.css">
        <!-- modal video css -->
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/vendors/modal-video/modal-video.min.css">
        <!-- light box css -->
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/vendors/lightbox/dist/css/lightbox.min.css">
        <!-- slick slider css -->
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/vendors/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/vendors/slick/slick-theme.css">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://smarttourism.pekanbaru.go.id/assets/css/custom.css">

        <!-- Bar Rating -->
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets_be/plugins/jquery-bar-rating-master/dist/themes/fontawesome-stars.css">
        
        <!-- Leaflet Map -->
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet/leaflet.css" />
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.markercluster/dist/MarkerCluster.css" />
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.markercluster/dist/MarkerCluster.Default.css" />
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.fullscreen/dist/leaflet.fullscreen.css" />
        <link rel="stylesheet" href="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.search/dist/leaflet-search.min.css" />

        <!-- jQuery -->
        <script src="https://smarttourism.pekanbaru.go.id/assets/js/jquery.js"></script>
    </head>
    <body class="home">
        <div id="page" class="full-page">
                <style>

@media  only screen and (max-width: 600px){
    #logos{
    height:43px;
  }
}
</style>
<header id="masthead" class="site-header header-primary">    
    <div class="bottom-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="site-identity">
                <h1 class="site-title">
                    <img src="https://rokanhulukab.go.id/rohul-content/uploads/logo_kabupaten_rokan_hulu.png" alt="Logo Header" style="margin-top: 6%;" width="53px">
                    <img src="https://smarttourism.pekanbaru.go.id/assets/images/logo_WI.png" alt="Logo WI">
                </h1>
            </div>
            <div class="main-navigation d-none d-lg-block">
                <nav id="navigation" class="navigation">
                    <ul>
                        <li class="menu nav-home">
                            <a href="/beranda"> Beranda </a>
                        </li>
                        <li class="menu nav-destinations">
                            <a href="/destinasi"> Destinasi </a>
                        </li>
                        <li class="menu nav-articles">
                            <a href="/jasa"> Jasa </a>
                        </li>
                        @if(Auth::check())
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="/login">Login</a></li>
                            @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>
    <main id="content" class="site-main">
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(https://seringjalan.com/wp-content/uploads/2020/05/kota-Pengaraian.jpg);width: 100%; height: 700px; display: flex; justify-content: center; align-items: center;">
                <div class="container">
                    <div class="section-heading text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="text-white" > Daftar Objek </h2>
                                <h2 class="text-white"> Wisata </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>      
    </main>
    <section class="package-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://rokanhulukab.go.id/rohul-content/uploads/pemandian-gajah-3.jpg">
                            <figure class="desti-image">
                                <img src="https://rokanhulukab.go.id/rohul-content/uploads/pemandian-gajah-3.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>PEMANDIAN BATU GAJAH</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Alam
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://rokanhulukab.go.id/rohul-content/uploads/mstu.jpg">
                            <figure class="desti-image">
                                <img src="https://rokanhulukab.go.id/rohul-content/uploads/mstu.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>AIR TERJUN AEK MARTUA</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Alam
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjdsKOwHpGaPMZbNAO2Ir5rdQLBp_rs1YcGA&s">
                            <figure class="desti-image">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjdsKOwHpGaPMZbNAO2Ir5rdQLBp_rs1YcGA&s" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>PUNCAK ANABAWA</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Alam
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://seringjalan.com/wp-content/uploads/2020/05/dfd.jpg">
                            <figure class="desti-image">
                                <img src="https://seringjalan.com/wp-content/uploads/2020/05/dfd.jpg" alt="" style="width: 100%; height: 250px; ">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>DANAU CIPOGAS</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Alam
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://images.bisnis.com/posts/2023/04/21/1649220/1681965534_center_-_rohul2.jpg">
                            <figure class="desti-image">
                                <img src="https://images.bisnis.com/posts/2023/04/21/1649220/1681965534_center_-_rohul2.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>MASJID AGUNG MADANI ISLAMIC CENTER </h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Religi
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/pesona-objek-wisata-suligi-hill-di-kabupaten-rokan-hulu-provinsi-riau.jpg">
                            <figure class="desti-image">
                                <img src="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/pesona-objek-wisata-suligi-hill-di-kabupaten-rokan-hulu-provinsi-riau.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>BUKIT SULIGI</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Alam
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/objek-wisata-air-panas-hapanasan-di-kabupaten-rohul.jpg">
                            <figure class="desti-image">
                                <img src="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/objek-wisata-air-panas-hapanasan-di-kabupaten-rohul.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>AIR PANAS HAPANASAN</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Alam
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/Air-Terjun-Selanca-di-Lubuk-Bendahara-Kecamatan-Rokan-IV-Koto-Rokan-Hulu.jpg">
                            <figure class="desti-image">
                                <img src="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/Air-Terjun-Selanca-di-Lubuk-Bendahara-Kecamatan-Rokan-IV-Koto-Rokan-Hulu.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>AIR TERJUN SELANCA</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Alam
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                    <div class="desti-item text-center">
                        <a href="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/Istana-Raja-Rokan-di-Desa-Rokan-Koto-Ruang-Kecamatan-Rokan-IV-Koto-Kabupaten-Rokan-Hulu.jpg">
                            <figure class="desti-image">
                                <img src="https://t-2.tstatic.net/tribunpekanbarutravel/foto/bank/images/Istana-Raja-Rokan-di-Desa-Rokan-Koto-Ruang-Kecamatan-Rokan-IV-Koto-Kabupaten-Rokan-Hulu.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                        </a>
                        <div class="desti-content">
                            <h3>ISTANA RAJA ROKAN</h3>            
                        </div>
                        <span class='badge badge-danger badge-sm mb-1'> 
                            Wisata Sejarah
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script> 
    $('.nav-destinations').addClass('active'); 
    </script>
                <footer id="colophon" class="site-footer footer-primary">
    <div class="top-footer">
       <div class="container">
          <div class="row">
                <div class="col-lg-5 col-md-5">
                    <aside class="widget widget_text">
                        <div class="award-img">
                            <img src="https://rokanhulukab.go.id/rohul-content/uploads/logo_kabupaten_rokan_hulu.png" alt="Logo Header" width="70px">                         
                            <img src="https://smarttourism.pekanbaru.go.id/assets/images/logo_WI.png" alt="Logo WI" width="42.5%"></div>
                    </aside>
                </div>
                <div class="col-lg-4 col-md-4">
                    <aside class="widget widget_text">
                        <h3 class="widget-title"> INFORMASI KONTAK </h3>
                        <div class="textwidget widget-text">
                                                            <ul>
                                                                            <li>
                                            <a href="mailto:disbudparpku@gmail.com" target="_new">
                                                <i class="fas fa-envelope"></i> disbudparpku@gmail.com
                                            </a>
                                        </li>
                                                                                                                <li>
                                            <a href="tel:(0761) 39184">
                                                <i class="fas fa-phone-alt"></i> (0761) 39184
                                            </a>
                                        </li>
                                                                                                                <li>
                                            <a href="#">
                                                <i class="fas fa-fax"></i> (0761) 39183
                                            </a>
                                        </li>
                                                                                                            <!--                                         <li>
                                            <a href="https://www.facebook.com/pariwisata.pku.1" target="_new">
                                                <i class="fab fa-facebook-f"></i> Facebook
                                            </a>
                                        </li>
                                                                                                                <li>
                                            <a href="https://www.instagram.com/pariwisata.pekanbaru/" target="_new">
                                                <i class="fab fa-instagram"></i> Instagram
                                            </a>
                                        </li>
                                                                                                                                                                                        <li>
                                            <a href="https://www.youtube.com/channel/UC5bMUoZGYlayesd0zczNMIw" target="_new">
                                                <i class="fab fa-youtube"></i> YouTube
                                            </a>
                                        </li>
                                                                                                             -->
                                                                            <li>
                                            <a href="#">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Jl. A Rahman Hamid, Komplek Perkantoran Tenayan Raya Gedung B6 Lantai 4 Pekanbaru 
                                            </a>
                                        </li>
                                                                    </ul>
                                                    </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="buttom-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <center>
                        <div class="copy-right">
                            Copyright &copy; 2021 - 2024 <br>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
 </footer>            
            <a id="backTotop" href="#" class="to-top-icon">
                <i class="fas fa-chevron-up"></i>
            </a>
            <div class="header-search-form">
                <div class="container">
                    <div class="header-search-container">
                        <form action="https://smarttourism.pekanbaru.go.id/search" class="search-form" role="search" method="get">
                            <input type="text" name="query" placeholder="Mau cari apa...?" value="" required>
                        </form>
                        <a href="#" class="search-close">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/js/jquery.counterup.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/vendors/modal-video/jquery-modal-video.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/vendors/masonry/masonry.pkgd.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/vendors/slick/slick.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/js/jquery.slicknav.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets/js/custom.js"></script>
        <!-- Bar Rating -->
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/jquery-bar-rating-master/dist/jquery.barrating.min.js"></script>

        <!-- Leaflet Map -->
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet/leaflet.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.markercluster/dist/leaflet.markercluster.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.markercluster.layersupport/dist/leaflet.markercluster.layersupport-src.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.locatecontrol/dist/L.Control.Locate.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.fullscreen/dist/Leaflet.fullscreen.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.search/dist/leaflet-search.min.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.shapefile/shp.js"></script>
        <script src="https://smarttourism.pekanbaru.go.id/assets_be/plugins/leaflet.shapefile/leaflet.shpfile.js"></script>
        <!-- Sharethis -->
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6192b41c1e3283001314a026&product=sop' async='async'></script>
    </body>
</html>