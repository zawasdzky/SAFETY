<div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <section class="event-listing">
                    <?php foreach ($eventos_solutions -> result() as $evento) { ?>
                        <!--EVENT LIST START-->
                        <article>
                            <figure class="hover-style">
                                <a href="#"><img src="images/event-listing.png" alt=""></a>
                                <div class="caption">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <h2><?php echo  $evento -> nombre_evento; ?></h2>
                                        </div>
                                        <div class="span4">
                                            <div class="defaultCountdown hasCountdown">
                                                <span class="countdown_row countdown_show3">
                                                    <span class="countdown_section">
                                                    <span class="countdown_amount">10</span><br>Hours</span>
                                                    <span class="countdown_section"><span class="countdown_amount">10</span><br>Minutes</span>
                                                    <span class="countdown_section"><span class="countdown_amount">10</span><br>Seconds</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="span2">
                                            <p class="event-date">30th<br>JULY</p>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="text">
                                <ul class="admin-timing">
                                    <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                                    <li><i class="fa fa-clock-o"></i>9:00 am to 5:00 pm</li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i>Club Bingo Center</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in scelerisque sem. Nam auctor malesuada tortor consectetur sollicitudin. Aliquam ante quam, imperdiet vitae neque condimentum, eleifend auctor nunc. Nam mollis fermentum tempor. Quisque vitae erat fermentum, volutpat nisl eget, mattis sapien. Suspendisse potenti. Morbi suscipit massa ut aliquam commodo. Nulla augue erat, elementum sed convallis id, pellentesque eget nulla. Maecenas gravida, dolor at congue egestas, metus arcu hendrerit elit, ac porttitor velit neque eget arcu. Morbi tristique sapien nec augue dignissim lobortis. </p>
                                <!-- <a href="#" class="btn-style">Buy Ticket</a> -->
                                <a href="#" class="btn-style">Ver más</a>
                        </article>
                        <!--EVENT LIST END-->
                        <?php } ?>
                    </section>
                </div>
                <div class="span4">
                    <div class="sidebar">
                        <!--PHOTOS WIDGET START-->
                        <div class="widget photos-widget gallery">
                            <ul>
                                <li><a href="images/m1.png" data-rel="prettyPhoto[gallery1]"><img src="images/m1.png" alt=""></a></li>
                                <li><a href="images/m2.png" data-rel="prettyPhoto[gallery1]"><img src="images/m2.png" alt=""></a></li>
                                <li><a href="images/m3.png" data-rel="prettyPhoto[gallery1]"><img src="images/m3.png" alt=""></a></li>
                                <li><a href="images/m4.png" data-rel="prettyPhoto[gallery1]"><img src="images/m4.png" alt=""></a></li>
                            </ul>
                        </div>
                        <!--PHOTOS WIDGET END-->
                        <!--TWITTER FEEDS WIDGET START-->
                        <div class="widget widget-twitter">
                            <header>
                                <i class="fa fa-twitter"></i>
                                <h4>Tweetz</h4>
                                <p>My twitter feed</p>
                            </header>
                            <ul>
                                <li>
                                    <p>Experience more with expanded Tweets </p>
                                    <a href="#" class="color">http://t.co/8gH7sqUE</a>
                                    <p class="feed-time">18 hours ago</p>
                                </li>
                                <li>
                                    <p>Experience more with expanded Tweets </p>
                                    <a href="#" class="color">http://t.co/8gH7sqUE</a>
                                    <p class="feed-time">18 hours ago</p>
                                </li>
                                <li>
                                    <p>Experience more with expanded Tweets </p>
                                    <a href="#" class="color">http://t.co/8gH7sqUE</a>
                                    <p class="feed-time">18 hours ago</p>
                                </li>
                                <li>
                                    <p>Experience more with expanded Tweets </p>
                                    <a href="#" class="color">http://t.co/8gH7sqUE</a>
                                    <p class="feed-time">18 hours ago</p>
                                </li>
                                <li>
                                    <p>Experience more with expanded Tweets </p>
                                    <a href="#" class="color">http://t.co/8gH7sqUE</a>
                                    <p class="feed-time">18 hours ago</p>
                                </li>
                            </ul>
                        </div>
                        <!--TWITTER FEEDS WIDGET END-->
                        <!--NEW CATEGORIES WIDGET START-->
                        <div class="widget widget-top3">
                            <h2>News Category </h2>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top1.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top2.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top3.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top1.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top2.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top3.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top1.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img alt="" src="images/top1.png"></a>
                                    </figure>
                                    <div class="text">
                                        <a href="#">Emma Thomson</a>
                                        <p>New Post<span>12 minutes ago</span></p>
                                    </div>
                                </li>                                    
                            </ul>
                        </div>
                        <!--NEW CATEGORIES WIDGET END-->
                        <!--TAGS WIDGET START-->
                        <div class="widget widget-tags">
                            <h2>Tags</h2>
                            <ul>
                                <li><a href="#">resource</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">art</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Photoshop</a></li>
                            </ul>
                        </div>
                        <!--TAGS WIDGET END-->
                        <!--NEWLETTER WIDGET START-->
                        <div class="widget widget-newsletter">
                            <h2>Newsletters</h2>
                            <div class="text">
                                <input type="text" class="input-block-level" placeholder="Submit your Email-ID here">
                                <button class="btn-style">Subscribe</button>
                            </div>
                        </div>
                        <!--NEWLETTER WIDGET START-->
                         <!--RELATED POST WIDGET START-->
                        <div class="widget widget-related-post">
                            <h2>Related Post</h2>
                            <ul>
                                <li>
                                    <p>Philosophy cannot be taught; it is the application of the sciences to truth</p>
                                    <a href="#" class="color">by Lord Wilmore</a>
                                </li>
                                <li>
                                    <p>Now let the avenging god make way for me to punish the wrongdoer!</p>
                                    <a href="#" class="color">by Abbé Busoni</a>
                                </li>
                                <li>
                                    <p>Philosophy cannot be taught; it is the application of the sciences to truth</p>
                                    <a href="#" class="color">by Lord Wilmore</a>
                                </li>
                            </ul>
                        </div>
                        <!--RELATED POST WIDGET END-->

                    </div>
                </div>
            </div>
        </div>
    </div>


