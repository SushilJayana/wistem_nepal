
<?php 

?>

<footer>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">

                    <div class=" col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>Byayam Marg, Bhatbhatteni-4</p>
                                <p>Naxal, Kathmandu</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    +977- 9849215337
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>info@wistemnepal.org
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="offset-lg-1 col-lg-8 col-md-6 col-sm-6">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="row">
                <p class="col-lg-12 footer-text text-center">© 2016-2020 All rights reserved. WiSTEM Nepal.</p>
            </div>
            </div>
        </div>
    </footer>
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
    <script>

        function initMap() {
        
        var wistem_location = {lat: 27.7210819, lng: 85.332591};
    
        var map = new google.maps.Map(document.getElementById('map'), {zoom: 19, center: wistem_location});
    
        var marker = new google.maps.Marker({position: wistem_location, map: map});
        }
    </script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWTVWShxVFzHK7toUXpBAOBy0LDyi45Y4&callback=initMap">
    </script>

<script src="js/theme.js"></script>
