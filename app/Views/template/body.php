<body>
		
        <div class="colorlib-loader"></div>
    
        <div id="page">
            <nav class="colorlib-nav" role="navigation">
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7 col-md-9">
                                <div id="colorlib-logo"><a href="index.html">SKMSHOES</a></div>
                            </div>
                            <div class="col-sm-5 col-md-3">
                            <form action="#" class="search-wrap">
                               <div class="form-group">
                                  <input type="search" class="form-control search" placeholder="Search">
                                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                               </div>
                            </form>
                         </div>
                     </div>
                        <div class="row">
                            <div class="col-sm-12 text-left menu-1">
                                <ul>
                                    <li class="<?= ($halaman_aktif == "home") ? "colorlib-active" : "" ?>"><a href="<?= base_url("") ?>">Home</a></li>
                                    <li class="has-dropdown">
                                        <a href="pria.html">Pria</a>
                                        <ul class="dropdown">
                                            <li><a href="product-detail.html">Product Detail</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="order-complete.html">Order Complete</a></li>
                                            <li><a href="add-to-wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="wanita.html">WANITA</a></li>
                                    <li class="<?= ($halaman_aktif == "about") ? "colorlib-active" : "" ?>"><a href="<?= base_url("/home/about") ?>">About</></li>
                                    <li><a href="contact.html">Kontak</a></li>
                                    <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </nav>
            <aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                       <li style="background-image: url(./assets/images/bg1.png);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                       <div class="slider-text-inner">
                                           <div class="desc">
                                               <h1 class="head-1">Sepatu</h1>
                                               <h2 class="head-2">Pria & Wanita</h2>
                                               <h2 class="head-3"></h2>
                                               <p class="category"><span>Model Terkini</span></p>
                                               <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>
                       <li style="background-image: url(./assets/images/bg2.png);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                       <div class="slider-text-inner">
                                           <div class="desc">
                                               <h1 class="head-1">Diskon</h1>
                                               <h2 class="head-2">Sampai dengan</h2>
                                               <h2 class="head-3"><strong class="font-weight-bold">50%</strong></h2>
                                               <p class="category"><span></span></p>
                                               <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>
                       <li style="background-image: url(./assets/images/bg3.png);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                       <div class="slider-text-inner">
                                           <div class="desc">
                                               <h1 class="head-1">Produk</h1>
                                               <h2 class="head-2">Terbaru</h2>
                                               <h2 class="head-3">Bangga Produk Lokal<strong class="font-weight-bold"></strong></h2>
                                               <p class="category"><span></span></p>
                                               <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>
                      </ul>
                  </div>
            </aside>
            <div class="colorlib-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="intro">Selamat datang di toko resmi kami SKMSHOES Cintai Produk Lokal Indonesia</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-product">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <div class="featured">
                                <a href="#" class="featured-img" style="background-image: url(./assets/images/men.jpg);"></a>
                                <div class="desc">
                                    <h2><a href="#">Sepatu Koleksi Pria</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="featured">
                                <a href="#" class="featured-img" style="background-image: url(./assets/images/women.jpg);"></a>
                                <div class="desc">
                                    <h2><a href="#">Sepatu Koleksi Wanita</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="colorlib-product">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                            <h2>Best Sellers</h2>
                        </div>
                    </div>
                    <div class="row row-pb-md">
                        <?php foreach ($dataBarang as $barang) : ?>
                        <div class="col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="./assets/images/<?=$barang['barang_img']?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#"><?=$barang['barang_title']?></a></h2>
                                        <span class="price">RP. <?=$barang['barang_harga']?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="colorlib-partner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                            <h2>Partner Tepercaya</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col partner-col text-center">
                            <img src="./assets/images/brand-1.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="./assets/images/brand-2.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="./assets/images/brand-3.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="./assets/images/brand-4.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="./assets/images/brand-5.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                    </div>
                </div>
            </div>
        <!-- <div  style="background-image: url(./assets/images/client1.jpg); class="container "> -->