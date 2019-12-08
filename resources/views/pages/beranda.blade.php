@extends('layouts.app')
@section('content')
<!--==========================
Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">
        <img src="img/undraw_fishing.svg" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
        <h2>Kami mengantarkan <br><span>hasil panen terbaik </span><br>bagi anda!</h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">Lihat Menu</a>
            <a href="#services" class="btn-services scrollto">Pesan Antar</a>
        </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">
        <!--==========================
            About Us Section
        ============================-->
        <section id="about">
            <div class="container">
    
            <header class="section-header">
                <h3>Tentang Kami</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </header>
    
            <div class="row about-container">
    
                <div class="col-lg-6 content order-lg-1 order-2">
                <p>
                    Didirikan di Bandung Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, ex soluta nemo provident aut similique consectetur, perspiciatis quas quia iste laborum sint a exercitationem quo, unde ipsa enim numquam quidem!
                </p>
    
                <div class="icon-box wow fadeInUp">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="title"><a href="">Visi</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
    
                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-photo"></i></div>
                    <h4 class="title"><a href="">Misi</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
    
                {{-- <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div> --}}
    
                </div>
    
                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                <img src="img/about-img.svg" class="img-fluid" alt="">
                </div>
            </div>
    
            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp">
                <img src="img/about-extra-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                <h4>Hasil panen terbaik, langsung dari petani</h4>
                <p>
                    Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                </p>
                <p>
                    Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                </p>
                </div>
            </div>
    
            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                <img src="img/about-extra-2.svg" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                <h4>Layanan Pesan Antar untuk daerah Bandung, anda pesan kami antar!</h4>
                <p>
                    Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
                </p>
                <p>
                    Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                </p>
                <p>
                    Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                </p>
                </div>
                
            </div>
    
            </div>
        </section><!-- #about -->

        <!--==========================
      Team Section
    ============================-->
    <section id="team">
            <div class="container">
              <div class="section-header">
                <h3>Founder</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                  <div class="member">
                    <img src="img/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <div class="social">
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-google-plus"></i></a>
                          <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="member">
                    <img src="img/team-2.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <div class="social">
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-google-plus"></i></a>
                          <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="member">
                    <img src="img/team-3.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <div class="social">
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-google-plus"></i></a>
                          <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="member">
                    <img src="img/team-4.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <div class="social">
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-google-plus"></i></a>
                          <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- #team -->
@endsection