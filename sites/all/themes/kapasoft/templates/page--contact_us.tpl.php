<section class="section section-alt">
    <div id="map"></div>
</section>
<!-- 404 content -->
<section  class="section section-padded">
    <script type="text/javascript" src="http://kapasoft.com/repos/backbone/contact/main/contact.min.js"></script>
    <div class="container-fluid">
        <div class="section-header">
            <h1>
                We’d love
                <small class="light">to Hear</small>
            </h1>
        </div>
        <p class="lead text-center">
            Tell us about your idea, challenge or goal. We sincerely care about your success and would like to help.
        </p>
        <hr>
        <div class="row-fluid">
            <div class="span6" id="app-contact" >
            </div>
            <div class="span6 contact-details">
                <ul class="icons">
                    <li>
                        <h4>
                            <i class="icon-map-marker"></i>
                            Address
                        </h4>
                        <p>
                            3324 23rd Ave S,
                            <br>
                            Minneapolis, MN
                            <br>
                            US
                        </p>
                    </li>
                    <li>
                        <h4>
                            <i class="icon-phone"></i>
                            Contact details
                        </h4>
                        <p>
                            Phone: +1 651-334-6333
                            <br>
                            Email: info@kapasoft.com
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- More Questions -->
<!--<section class="section section-alt section-padded">-->
<!--    <div class="container-fluid">-->
<!--        <div class="section-header">-->
<!--            <h1>-->
<!--                Want a-->
<!--                <small class="light">Quote?</small>-->
<!--            </h1>-->
<!--        </div>-->
<!--        <p class="lead text-center">-->
<!--            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
<!--            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
<!--            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
<!--            consequat. Cras lobortis congue tempus. Mauris non justo nec arcu suscipit lacinia aliquet sed purus.-->
<!--        </p>-->
<!--        <div class="text-center">-->
<!--            <div class="btn btn-large btn-primary">-->
<!--                <i class="icon-heart"></i>-->
<!--                I want a quote-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<script src="javascripts/jquery.form.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    // Create an array of styles.
    var styles = [
            {
                stylers: [
                    { saturation: -85 }
                ]
            },{
                featureType: 'road',
                elementType: 'geometry',
                stylers: [
                    { hue: "#002bff" },
                    { visibility: 'simplified' }
                ]
            },{
                featureType: 'road',
                elementType: 'labels',
                stylers: [
                    { visibility: 'off' }
                ]
            }
        ],
    // put your locations lat and long here
        lat = 44.941953,
        lng = -93.239386,

    // Create a new StyledMapType object, passing it the array of styles,
    // as well as the name to be displayed on the map type control.
        styledMap = new google.maps.StyledMapType(styles,
            {name: 'Styled Map'}),

    // Create a map object, and include the MapTypeId to add
    // to the map type control.
        mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: new google.maps.LatLng( lat, lng ),
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP]
            }
        },
        map = new google.maps.Map(document.getElementById('map'), mapOptions),
        charlotte = new google.maps.LatLng( lat, lng ),

        marker = new google.maps.Marker({
            position: charlotte,
            map: map,
            title: "KapaSoft Web Solutions!"
        });

    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
</script>