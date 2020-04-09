<?php
$pg_arr = array("wed","enc","ins","sma","cod","sum","wrk","pwd");

$page = (isset($_GET["bg"]) && !empty($_GET["bg"]) && in_array(trim($_GET["bg"]), $pg_arr)) ? $_GET["bg"].".php":"blog-error.php";

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
                    <h2>BLOG</h2>
                </div>
            </div>
        </div>
    </section>

<section class="blog_area single-post-area section_gap">
            <div class="container">
                  <?php
                           include("./pages/blogs/".$page)?>
                    </div>
 </section>

    <?php include_once("./pages/shared/footer.php")?>
    
<script>
    $("#menu-lean-in").addClass('active');
</script>

</body>
</html>