@extends('layouts.app')
@section('content')
    <div>
        <!--==========================
      Portfolio Section
    ============================-->
    <br><br>
    <section id="portfolio" class="clearfix">
            <div class="container">
        
                <header class="section-header">
                <h3 class="section-title">Menu Hasil Panen Terbaik</h3>
                </header>
        
                <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-app">Udang</li>
                    <li data-filter=".filter-card">Hasil Laut</li>
                    <li data-filter=".filter-web">Ikan</li>
                    </ul>
                </div>
                </div>
        
                <div class="row portfolio-container">
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_udang1.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Udang 1</a></h4>
                        <p>Udang 1</p>
                        <div>
                        <a href="img/menu/menu_udang1.jpeg" data-lightbox="portfolio" data-title="Udang 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_ikan1.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Ikan 1</a></h4>
                        <p>Ikan 1</p>
                        <div>
                        <a href="img/menu/menu_ikan1.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Ikan 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_udang2.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Udang 2</a></h4>
                        <p>Udang 2</p>
                        <div>
                        <a href="img/menu/menu_udang2.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Udang 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_lobster1.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Lobster 1</a></h4>
                        <p>Lobster 1</p>
                        <div>
                        <a href="img/menu/menu_lobster1.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Lobster 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_ikan2.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Ikan 2</a></h4>
                        <p>Ikan 2</p>
                        <div>
                        <a href="img/menu/menu_ikan2.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Ikan 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_lobster2.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Lobster 2</a></h4>
                        <p>Lobster</p>
                        <div>
                        <a href="img/menu/menu_lobster2.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Lobster 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_lobster3.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Lobster 3</a></h4>
                        <p>Lobster</p>
                        <div>
                        <a href="img/menu/menu_lobster3.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Lobster 3" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_gurita1.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Gurita 1</a></h4>
                        <p>Gurita</p>
                        <div>
                        <a href="img/menu/menu_gurita1.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Gurita 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                    <img src="img/menu/menu_gurita2.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Gurita 2</a></h4>
                        <p>Gurita</p>
                        <div>
                        <a href="img/menu/menu_gurita2.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Gurita 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                        <img src="img/menu/menu_cumi1.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Cumi 1</a></h4>
                            <p>Cumi</p>
                            <div>
                            <a href="img/menu/menu_cumi1.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Cumi 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section><!-- #portfolio -->
    </div>
@endsection