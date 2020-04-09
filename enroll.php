<?php

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>WiSTEM Nepal</title>
      
        <?php require_once('./pages/shared/style.php')?>
    </head>
<body>
<?php include_once("./pages/shared/header.php")?>

    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>ENROLL</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">                
                <div class="col-lg-12">
                    <h2><b>Please fill the enroll form :</b></h2><br/>
                    <form class="row enroll_form" action="enroll_process.php" method="post"
                    name="enrollForm" id="enrollForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="enroll_type" id="enroll_type">
                                <option value="">-- I AM A .. -- </option>
                                <option value="STUDENT">STUDENT</option>
                                <option value="TEACHER">TEACHER</option>
                                <option value="PARENT">PARENT</option>
                                <option value="GAURDIAN">GAURDIAN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn primary_btn">Enroll</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	
    <?php include_once("./pages/shared/footer.php")?>

    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p id="message_enroll">Submitting enrollment form...</p>            
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->
    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong. Please try again after some time.</p>
                </div>
            </div>
        </div>
    </div>

	<script>
        $("#menu-enroll").addClass('active');
    </script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/enroll.js"></script>
    
    </body>
</html>