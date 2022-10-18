<!--header bottom satrt-->
<?php
// dd($allCategory->toArray());
?>
<div class="header_bottom bottom_two sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="header_bottom_container">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">Browse categories</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                    @foreach ($allCategory as $item) 
                                        <li class="menu_item_children categorie_list"><a href="#">{{ $item->en_name }} <i class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu">
                                                @foreach ($item->Subcategorie as $sitem)
                                                <?php
                                                    // dd($sitem->toArray());
                                                    ?>
                                                <li class="menu_item_children"><a href="#">{{ $sitem->en_name }}</a>
                                                    <ul class="categorie_sub_menu">
                                                        @foreach ($sitem->ChildCategory as $citem)
                                                        <li><a href="#">{{ $citem->child_en_name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                                <!-- <li class="menu_item_children"><a href="#">Wheel Rim Screws</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="#">Accessories</a></li>
                                                        <li><a href="#">2-Stroke</a></li>
                                                        <li><a href="#">Handbag</a></li>
                                                        <li><a href="#">Clothing</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children last_child"><a href="#">Wheel Simulators</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                    <div class="categorie_banner">
                                                        <a href="#"><img src="{{ asset('assets/frontend/img/bg/banner2.jpg') }}" alt=""></a>
                                                    </div>
                                                </li> -->

                                            </ul>
                                        </li>
                                    @endforeach
                                        <!-- <li class="menu_item_children"><a href="#"> Wheels & Tires <i class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu">
                                                <li class="menu_item_children"><a href="#">Dresses</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Sweater</a></li>
                                                            <li><a href="#">Evening</a></li>
                                                            <li><a href="#">Day</a></li>
                                                            <li><a href="#">Sports</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Handbags</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Shoulder</a></li>
                                                            <li><a href="#">Satchels</a></li>
                                                            <li><a href="#">kids</a></li>
                                                            <li><a href="#">coats</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu_item_children"><a href="#">shoes</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Ankle Boots</a></li>
                                                            <li><a href="#">Clog sandals </a></li>
                                                            <li><a href="#">run</a></li>
                                                            <li><a href="#">Books</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Clothing</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Coats Jackets </a></li>
                                                            <li><a href="#">Raincoats</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">T-shirts</a></li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu column_3">
                                                <li class="menu_item_children"><a href="#">Chair</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Dining room</a></li>
                                                            <li><a href="#">bedroom</a></li>
                                                            <li><a href="#"> Home & Office</a></li>
                                                            <li><a href="#">living room</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Lighting</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Ceiling Lighting</a></li>
                                                            <li><a href="#">Wall Lighting</a></li>
                                                            <li><a href="#">Outdoor Lighting</a></li>
                                                            <li><a href="#">Smart Lighting</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Sofa</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Fabric Sofas</a></li>
                                                            <li><a href="#">Leather Sofas</a></li>
                                                            <li><a href="#">Corner Sofas</a></li>
                                                            <li><a href="#">Sofa Beds</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Turbo System <i class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu column_2">
                                                <li class="menu_item_children"><a href="#">Brake Tools</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Driveshafts</a></li>
                                                            <li><a href="#">Spools</a></li>
                                                            <li><a href="#">Diesel </a></li>
                                                            <li><a href="#">Gasoline</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Dolls for Girls</a></li>
                                                            <li><a href="#">Girls' Learning Toys</a></li>
                                                            <li><a href="#">Arts and Crafts for Girls</a></li>
                                                            <li><a href="#">Video Games for Girls</a></li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Lighting <i class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu column_2">
                                                <li class="menu_item_children"><a href="#">Check Trousers</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Building</a></li>
                                                            <li><a href="#">Electronics</a></li>
                                                            <li><a href="#">action figures </a></li>
                                                            <li><a href="#">specialty & boutique toy</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Calculators</a>
                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                            <li><a href="#">Dolls for Girls</a></li>
                                                            <li><a href="#">Girls' Learning Toys</a></li>
                                                            <li><a href="#">Arts and Crafts for Girls</a></li>
                                                            <li><a href="#">Video Games for Girls</a></li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            </ul>
                                        </li>
                                        <li><a href="#"> Accessories</a></li>
                                        <li><a href="#">Body Parts</a></li>
                                        <li><a href="#">Perfomance Filters</a></li>
                                        <li><a href="#"> Engine Parts</a></li>
                                        <li class="hidden"><a href="shop-left-sidebar.html">New Sofas</a></li>
                                        <li class="hidden"><a href="shop-left-sidebar.html">Sleight Sofas</a></li>
                                        <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="main_menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li class="home7new"><a href="index-7.html">Home 7</a><span>new</span></li>
                                            </ul>
                                        </li>
                                        <li class="mega_items"><a href="shop.html">shop<i class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li><a href="#">Shop Layouts</a>
                                                        <ul>
                                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                            <li><a href="shop-list.html">List View</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">other Pages</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="my-account.html">my account</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product Types</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                                            <li><a href="product-grouped.html">product grouped</a></li>
                                                            <li><a href="variable-product.html">product variable</a></li>

                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Concrete Tools</a>
                                                        <ul>
                                                            <li><a href="shop.html">Cables & Connectors</a></li>
                                                            <li><a href="shop-list.html">Graphics Tablets</a></li>
                                                            <li><a href="shop-fullwidth.html">Printers, Ink & Toner</a></li>
                                                            <li><a href="shop-fullwidth-list.html">Refurbished Tablets</a></li>
                                                            <li><a href="shop-right-sidebar.html">Optical Drives</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="banner_static_menu">
                                                    <a href="shop.html"><img src="{{ asset('assets/frontend/img/bg/banner1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="services.html">services</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about Us</a></li>
                                        <li><a href="contact.html"> Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--header bottom end-->