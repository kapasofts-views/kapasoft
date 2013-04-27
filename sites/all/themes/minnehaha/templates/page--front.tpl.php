<?php //print render($page['property_menu']); ?>
<div class="isi">
    <div class="container">

    <div class="row">

        <?php print render($page['header_logo']); ?>
        <div class="span5 pull-right">
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('nav nav-pills')))); ?>

        </div>
    </div>

    <div class="row">
        <div class="span12 batas"></div>
        <div class="clearfix"></div>
<!--        <g:render template="top_messaging"/>-->
        <div class="span12">
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item  active">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/img/minnehaha/slide_1.jpg" alt="">'; ?>
                    <div class="carousel-caption">
                        <h4>Elegance in design</h4>
                        <p>Elegantly furnished to ensure a comfortable and quality furnished home experience </p>
                    </div>
                </div>
                <div class="item">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/img/minnehaha/slide_2.jpg" alt="">'; ?>
                    <div class="carousel-caption">
                        <h4>Charm</h4>
                        <p>Restoring its original beauty while attaching today's craftsman touch brings a charm to our places that will please you at every moment</p>
                    </div>
                </div>
                <div class="item">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/img/minnehaha/slide_4.jpg" alt="">'; ?>
                    <div class="carousel-caption">
                        <h4>Feel of Home</h4>
                        <p>Furnished with everything one may wish, with your own back yard while located in lovely south minneapolis neighborhood adds a feel of home while away</p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
        </div>

    </div>


<div class="row">
    <div class="span12 batasdot"></div>
    <div class="clearfix"></div>
</div>

<div class="row">
    <div class="span12">
        <div class="well-small">
            <div class="well-header"><h2>Welcome To Minnehaha Lofts</h2></div>

            <div class="row-fluid">
                <div class="span12">We pride ourselves in providing home-like accommodations for our guests while visiting the Twin Cities. Minneahaha Lofts offers beautifully remodeled properties that offer high quality furnishings and are well maintained. Its important for us that our guests have a memoriable furnished home experience.
                </div>
                <div class="clearfix batas"></div>
            </div>
            <div class="row-fluid">
                <?php
                foreach($propertyMap as $key => $rental_unit){
                    print '<div class="span3 sticker">';
                    print '<h4>'.$rental_unit['title'].'</h4>';
                    print '<div class="clearfix batas"></div>';
                    print '<a class="thumbnail">';
                    print '<img src="'.$rental_unit['featuredPhotoUrl'].'" alt="'.$rental_unit['featuredPhotoAlt'].'">';
                    print '</a>';
                    print '<div class="clearfix batas"></div>';
                    print '<p>'.substr($rental_unit['summary'],0,120).'...</p>';
                    print '<div class="clearfix batas"></div>';
                    print '<a class="btn btn-small" href="'.$rental_unit['url'].'"><i class="icon-info-sign"></i> More Info</a>';
                    print '</div>';
                }
                ?>
                <div class="span3 sticker">
                    <?php
                    print '<h4>Meet Your Hosts</h4>';
                    print '<div class="clearfix batas"></div>';
                    print '<a class="thumbnail">';
                        print '<img src="'.$aboutHost['imgUrl'].'" alt="'.$aboutHost['imgAlt'].'">';
                    print '</a>';
                    print '<div class="clearfix batas"></div>';
                    print '<p>'.substr($aboutHost['summary'],0,120).'...</p>';
                    print '<div class="clearfix batas"></div>';
                    print '<a class="btn btn-small" href="'.$aboutHost['url'].'"><i class="icon-info-sign"></i> More Info</a>';
                    ?>
                </div>
                <div class="span6 sticker">
                    <h1 class="subjudul">Located South Minneapolis</h1>
                    <p>
                        We provide accommodation in a beautiful part of Minneapolis near Lake Nokomis and the Missisipi River. While being near so many attractions and downtown, you still have your privacy and sense of home. Light rail service few blocks away making it convenient  to commute. A nearby bike trail makes it easy to explore this beautiful city ...
                    </p>
                    <p>
                        <a class="btn btn-small" href="#"><i class="icon-asterisk"></i> More on Location & Map</a>
                    </p>
                </div>
                <div class="span5 sticker">
                    <h5><i class="  icon-comment jarak-kecil"></i> Testimonial</h5>
                    <br />
                    <!--        <g:each var="featuredReview" in="${company.featuredReviews}">-->
                    <p>
                    <div class="span3">
                        <!--                <img src="${createLinkTo(dir: featuredReview.imgUrl.tokenize('/')[0..-2].join('/').toLowerCase(), file: featuredReview.imgUrl.tokenize('/')[-1])}" class="span2 img-circle"  alt="">-->
                        <?php print '<img src="'.base_path() . path_to_theme() .'/img/minnehaha/sydney_min.jpg" alt="">'; ?>
                    </div>
                    <blockquote >${featuredReview.content}
                        <small>${featuredReview.submittedBy} ${featuredReview.dateReceived.toString("MMM d, yyyy")}</small>
                    </blockquote>
                    </p>
                    <!--        </g:each>-->

                    <p>
                        <a class="btn btn-small" href="${createLink(action: 'testimonial')}"><i class="icon-comment"></i> More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<hr />

<div class="row">
    <div class="span6">
        <h1 class="subjudul">Located South Minneapolis</h1>
        <p>
            We provide accommodation in a beautiful part of Minneapolis near Lake Nokomis and the Missisipi River. While being near so many attractions and downtown, you still have your privacy and sense of home. Light rail service few blocks away making it convenient  to commute. A nearby bike trail makes it easy to explore this beautiful city ...
        </p>
        <p>
            <a class="btn btn-small" href="#"><i class="icon-asterisk"></i> More on Location & Map</a>
        </p>
    </div>
    <div class="span6">
        <h5><i class="  icon-comment jarak-kecil"></i> Testimonial</h5>
        <br />
<!--        <g:each var="featuredReview" in="${company.featuredReviews}">-->
            <p>
            <div class="span3">
<!--                <img src="${createLinkTo(dir: featuredReview.imgUrl.tokenize('/')[0..-2].join('/').toLowerCase(), file: featuredReview.imgUrl.tokenize('/')[-1])}" class="span2 img-circle"  alt="">-->
                <?php print '<img src="'.base_path() . path_to_theme() .'/img/minnehaha/sydney_min.jpg" alt="">'; ?>
            </div>
            <blockquote >${featuredReview.content}
                <small>${featuredReview.submittedBy} ${featuredReview.dateReceived.toString("MMM d, yyyy")}</small>
            </blockquote>
            </p>
<!--        </g:each>-->

        <p>
            <a class="btn btn-small" href="${createLink(action: 'testimonial')}"><i class="icon-comment"></i> More</a>
        </p>
    </div>
</div>

<!--<div class="main-container container">-->
    <div class="clearfix bataspanjang"></div>
    </div><!-- end container -->
    <div class="footers">
        <?php print render($page['footer']); ?>
    </div>
</div><!-- end isi -->
    <script type="application/javascript">
        $('.carousel').carousel();
    </script>