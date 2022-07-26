<?php
include '../includes/dbconfig.php';
?>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title>About • Tharunkommaddi</title>
        <meta name="description" content="Archive of recent and past work made by Precious Onyenekwe. © Code by sseqmm">
        <meta name="robots" content="index, follow">

        <meta property="og:url" content="https://tharunkommaddi.com/about">
        <meta property="og:title" content="Tharunkommaddi • Website Developer">
        <meta property="og:description" content="Helping brands thrive in the digital world. Located in The Pakistan. Delivering tailor-made digital designs and building interactive websites from scratch. © Code by sseqmm">
        <meta property="og:site_name" content="Tharunkommaddi" />
        <meta property="og:type" content="website" />
		<link rel="shortcut icon" href="tharunkommaddi.png" type="image/png" />
		<link rel="apple-touch-icon" href="tharunkommaddi.png">
		
        <link rel="canonical" href="about.php">
        <link href="assets/css/normalize.css" rel="stylesheet">
        <link href="assets/css/locomotive-scroll.css" rel="stylesheet">
        <link href="assets/css/styleguide.css" rel="stylesheet">
        <link href="assets/css/components.css" rel="stylesheet">
        <link href="assets/css/style-new.css" rel="stylesheet">
    </head>

    <body data-barba="wrapper">
        <div class="no-scroll-overlay"></div>
        <div class="loading-container">
            <div class="loading-screen">
                <div class="rounded-div-wrap top">
                    <div class="rounded-div"></div>
                </div>
                <div class="loading-words">
                    <h2 class="home-active home-active-first">Welcome<div class="dot"></div></h2>
                    <h2 class="home-active">Bienvenue<div class="dot"></div></h2>
                    <h2 class="home-active">स्वागते<div class="dot"></div></h2>
                    <h2 class="home-active">Bem-vindo<div class="dot"></div></h2>
                    <h2 class="home-active">Selamat datang<div class="dot"></div></h2>
                    <h2 class="home-active jap">أهلا وسهلا<div class="dot"></div></h2>
                    <h2 class="home-active">Benarrivata<div class="dot"></div></h2>
                    <h2 class="home-active">Ласкаво просимо<div class="dot"></div></h2>
                    <h2 class="home-active-last">いらっしゃいませ<div class="dot"></div></h2>
                                        <h2>Home<div class="dot"></div></h2>
                                        <h2>Work<div class="dot"></div></h2>
                                        <h2 class="active">About<div class="dot"></div></h2>
                                        <h2>Contact<div class="dot"></div></h2>
                                        <h2>Archive<div class="dot"></div></h2>
                                    </div>
                <div class="rounded-div-wrap bottom">
                    <div class="rounded-div"></div>
                </div>
            </div>
        </div>
        <main class="main" id="about" data-barba="container" data-barba-namespace="about" >
                                                        <div class="btn btn-hamburger">
                <div class="btn-click magnetic" data-strength="50" data-strength-text="25">
                    <div class="btn-fill"></div>
                    <div class="btn-text">
                        <div class="btn-bars"></div>
                        <span class="btn-text-inner">Menu</span>
                    </div>
                </div>
            </div>
            <div class="overlay fixed-nav-back"></div>
            <div class="fixed-nav theme-dark">
                <div class="fixed-nav-rounded-div">
                    <div class="rounded-div-wrap">
                        <div class="rounded-div"></div>
                    </div>
                </div>
                <div class="fixed-nav-inner">
                    <div class="row nav-row">
                        <h5>Navigation</h5>
                        <div class="stripe"></div>
                        <ul class="links-wrap">
                            <li class="btn btn-link">
                                <a href="index.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                                <span class="btn-text">
                                    <span class="btn-text-inner">Home</span>
                                </span>
                                </a>
                            </li>
                            <li class="btn btn-link">
                                <a href="work.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                                <span class="btn-text">
                                    <span class="btn-text-inner">Work</span>
                                </span>
                                </a>
                            </li>
                            <li class="btn btn-link active">
                                <a href="about.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                                <span class="btn-text">
                                    <span class="btn-text-inner">About</span>
                                </span>
                                </a>
                            </li>
                            <li class="btn btn-link">
                                <a href="contact.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                                <span class="btn-text">
                                    <span class="btn-text-inner">Contact</span>
                                </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row social-row">
                        <div class="stripe"></div>
                        <div class="socials">
                          <?php

                            $sql = "SELECT * FROM contact_table";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {

                            ?>
                            <h5>Socials</h5>
                            <?php
                              while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                            <ul>
                                <li class="btn btn-link btn-link-external">
                                    <a href="<?php echo $row["website"]; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                        <span class="btn-text">
                                            <span class="btn-text-inner">Website</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="btn btn-link btn-link-external">
                                    <a href="<?php echo $row["instagram"]; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                        <span class="btn-text">
                                            <span class="btn-text-inner">Instagram</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="btn btn-link btn-link-external">
                                    <a href="<?php echo $row["whatsapp"]; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                        <span class="btn-text">
                                            <span class="btn-text-inner">Whatsapp</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="btn btn-link btn-link-external">
                                    <a href="<?php echo $row["dribble"]; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                        <span class="btn-text">
                                            <span class="btn-text-inner">Dribbble</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="btn btn-link btn-link-external">
                                    <a href="<?php echo $row["linkedin"]; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                        <span class="btn-text">
                                            <span class="btn-text-inner">LinkedIn</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                          <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-wrap" data-scroll-container><header class="section default-header about-header" data-scroll-section>
   <div class="nav-bar">
    <div class="credits-top">
        <div class="btn btn-link btn-left-top">
            <a href="index.php" class="btn-click magnetic" data-strength="20" data-strength-text="10">
            <span class="btn-text">
                <div class="credit"><span>©</span></div><div class="cbd"><span class="code-by">Code by </span><span class="dennis"><span class="dennis-span">sseqmm</span></span></span></div>
            </span>
            </a>
        </div>
    </div>
    <ul class="links-wrap">
        <li class="btn btn-link">
            <a href="work.php" class="btn-click magnetic" data-strength="20" data-strength-text="10">
            <span class="btn-text">
                <span class="btn-text-inner">Work</span>
            </span>
            </a>
        </li>
        <li class="btn btn-link active">
            <a href="about.php" class="btn-click magnetic" data-strength="20" data-strength-text="10">
            <span class="btn-text">
                <span class="btn-text-inner">About</span>
            </span>
            </a>
        </li>
        <li class="btn btn-link">
            <a href="contact.php" class="btn-click magnetic" data-strength="20" data-strength-text="10">
            <span class="btn-text">
                <span class="btn-text-inner">Contact</span>
            </span>
            </a>
        </li>
        <li class="btn btn-link btn-menu">
            <div class="btn-click magnetic" data-strength="20" data-strength-text="10">
                <div class="btn-text">
                    <span class="btn-text-inner">Menu</span>
                </div>
            </div>
        </li>
    </ul>
</div>
<?php

  $sql2 = "SELECT * FROM about_table";
  $result2 = mysqli_query($conn, $sql2);
  if (mysqli_num_rows($result2) > 0) {

  ?>
  <?php
    while ($row2 = mysqli_fetch_assoc($result2)) {
    ?>
 <div class="container medium once-in">
      <div class="row">
         <div class="flex-col">
            <h1><span><?php echo $row2['short_heading']; ?> </span></h1>
         </div>
      </div>
   </div>
</header>
<section class="section no-padding line-globe once-in" data-scroll-section>
   <div class="container medium">
      <div class="row">
            <div class="flex-col">
               <div class="stripe"></div>
               <div class="digital-ball">
                  <div class="overlay"></div>
                  <div class="globe">
                     <div class="globe-wrap">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle-hor"></div>
                        <div class="circle-hor-middle"></div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section>
<section class="section about-image once-in" data-scroll-section>
   <div class="bottom-lightgray"></div>
   <div class="container">
      <div class="row">
         <div class="flex-col">
            <div class="arrow"><?xml version="1.0" encoding="UTF-8"?>
<svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>arrow-up-right</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-1019.000000, -279.000000)" stroke="#FFFFFF" stroke-width="1.5">
            <g id="arrow-up-right" transform="translate(1026.000000, 286.000000) rotate(90.000000) translate(-1026.000000, -286.000000) translate(1020.000000, 280.000000)">
                <polyline id="Path" points="2.76923077 0 12 0 12 9.23076923"></polyline>
                <line x1="12" y1="0" x2="0" y2="12" id="Path"></line>
            </g>
        </g>
    </g>
</svg></div>
            <p data-scroll data-scroll-speed="-1" data-scroll-position="top" data-scroll-offset="0%, -50%"><?php echo $row2['medium_heading']; ?> </p>
            <p data-scroll data-scroll-speed="-1" data-scroll-position="top" data-scroll-offset="0%, -50%"><span style="opacity: .5; display: block; padding-top: .5em;">Always exploring<span class="animate-dot">.</span><span class="animate-dot">.</span><span class="animate-dot">.</span></span></p>
         </div>

         <div class="flex-col">
            <div class="single-about-image">
               <div style="background: url('<?php if (file_exists('assets/img/' . $row2['image'])) { echo 'assets/img/' . $row2['image']; }?>') center center no-repeat; object-fit: cover;" class="overlay overlay-image" data-scroll data-scroll-speed="-2" data-scroll-position="top"></div>
               <div class="overlay"></div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section about-services" data-scroll-section>
   <div class="container">
      <div class="row">
         <div class="flex-col">
            <h2>I can help you with <span class="animate-dot">.</span><span class="animate-dot">.</span><span class="animate-dot">.</span></h2>
         </div>
      </div>
      <div class="row">
         <div class="flex-col">
            <h5>01</h5>
            <div class="stripe"></div>
            <h4>Design</h4>
            <p><?php echo $row2['design']; ?></p>
         </div>
         <div class="flex-col">
            <h5>02</h5>
            <div class="stripe"></div>
            <h4>Development</h4>
            <p><?php echo $row2['development']; ?></p>
         </div>
         <div class="flex-col">
            <h5>03</h5>
            <div class="stripe"></div>
            <h4><span><?xml version="1.0" encoding="UTF-8"?>
<svg width="100px" height="100px" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Oval + Oval + Oval + Oval Mask</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-468.000000, -671.000000)" fill="#FFFFFF">
            <g id="Oval-+-Oval-+-Oval-+-Oval-Mask" transform="translate(468.000000, 671.000000)">
                <path d="M99.1731586,50.0066986 C71.9402858,50.4482381 50,72.6619049 50,100 L50,100 L49.9933014,99.1731586 C49.5517619,71.9402858 27.3380951,50 0,50 L0,50 L0.826841425,49.9933014 C28.0597142,49.5517619 50,27.3380951 50,0 L50,0 L50.0066986,0.826841425 C50.4482381,28.0597142 72.6619049,50 100,50 L100,50 Z" id="Combined-Shape"></path>
            </g>
        </g>
    </g>
</svg></span>The full package</h4>
            <p><?php echo $row2['complete_package']; ?></p>
         </div>
      </div>
   </div>
</section>
<style media="screen">
.about-awwwards .single-image  .overlay:nth-child(1) {
   background: url("<?php if (file_exists('assets/img/' . $row2['talk'])) { echo 'assets/img/' . $row2['talk']; }?>") center center no-repeat;
   background-size: cover;
   height: 130%;
   top: -25%;
   width: 105%;
   left: -5%;

   background: url("<?php if (file_exists('assets/img/' . $row2['talk'])) { echo 'assets/img/' . $row2['talk']; }?>") center center no-repeat;
   background-size: cover;
   top: -3%;
   height: 106%;
   width: 140%;
   left: -40%;
}
.about-awwwards .single-image  .overlay:nth-child(1) {
   background: url("<?php if (file_exists('assets/img/' . $row2['talk'])) { echo 'assets/img/' . $row2['talk']; }?>") center center no-repeat;
   background-size: cover;
   top: -8%;
   height: 110%;
   width: 150%;
   left: -50%;
}
</style>
<section class="section about-awwwards" data-scroll-section>
   <div class="container medium">
      <div class="row">
         <div class="flex-col">
            <div class="single-image">
               <div class="overlay" data-scroll data-scroll-speed="-1"></div>
               <div class="overlay"></div>
            </div>
         </div>
         <div class="flex-col">
            <div class="awwwards-badge">
              <?php echo $row2['company']; ?>
            </div>
            <h2<?php echo $row2['joined']; ?></h2>
            <p><?php echo $row2['description']; ?></p>
         </div>
      </div>
   </div>
</section>
<?php } ?>
<?php } ?>
                                <div class="footer-rounded-div" data-scroll-section>
                    <div class="rounded-div-wrap">
                        <div class="rounded-div"></div>
                    </div>
                </div>
                <div class="footer-wrap footer-footer-wrap theme-dark" data-scroll-section>
                    <footer class="section footer" data-scroll data-scroll-speed="-4" data-scroll-position="bottom">
                        <div class="container medium">
                            <div class="row">
                                <div class="flex-col">
                                    <div class="arrow"><?xml version="1.0" encoding="UTF-8"?>
<svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>arrow-up-right</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-1019.000000, -279.000000)" stroke="#FFFFFF" stroke-width="1.5">
            <g id="arrow-up-right" transform="translate(1026.000000, 286.000000) rotate(90.000000) translate(-1026.000000, -286.000000) translate(1020.000000, 280.000000)">
                <polyline id="Path" points="2.76923077 0 12 0 12 9.23076923"></polyline>
                <line x1="12" y1="0" x2="0" y2="12" id="Path"></line>
            </g>
        </g>
    </g>
</svg></div>
<?php
$sql7 = "SELECT * FROM contact_table";
$result7 = mysqli_query($conn, $sql7);
if (mysqli_num_rows($result7) > 0) {
?>
<?php while ($row7 = mysqli_fetch_assoc($result7)) { ?>
<style media="screen">
/* ------------------------- PF -------------------------------------------------- */

.profile-picture {
   position: relative;
   display: inline-flex;
   border-radius: 50%;
   background: url("<?php if (file_exists('assets/img/' . $row7['image_name'])) { echo 'assets/img/' . $row7['image_name']; }?>") center center no-repeat;
   background-size: cover;
   width: clamp(4.5em, 6.5vw, 8em);
   height: clamp(4.5em, 6.5vw, 8em);
}
</style>
                                    <h2><span><div class="profile-picture"></div> Let’s work  </span><span>together</span></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="flex-col">
                                    <div class="stripe"></div>
                                    <div class="btn-fixed">
                                        <div class="btn btn-round" data-scroll data-scroll-speed="-1" data-scroll-direction="horizontal" data-scroll-position="bottom" data-scroll-offset="-50%, 0">
                                            <a href="contact.php" class="btn-click magnetic " data-strength="100" data-strength-text="50">
                                                <div class="btn-fill"></div>
                                                <span class="btn-text">
                                                    <span class="btn-text-inner">Get in touch</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="flex-col">
                                    <div class="btn btn-normal">
                                        <a href="mailto:<?php echo $row7['email']; ?>" class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                        <div class="btn-fill"></div>
                                        <span class="btn-text">
                                            <span class="btn-text-inner change"><?php echo $row7['email']; ?></span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="btn btn-normal">
                                        <a href="tel:<?php echo $row7['phone_number']; ?>" class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                        <div class="btn-fill"></div>
                                        <span class="btn-text">
                                            <span class="btn-text-inner change"><?php echo $row7['phone_number']; ?></span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container no-padding">
                            <div class="row bottom-footer">
                                <div class="flex-col">
                                    <div class="credits">
                                        <h5>Version</h5>
                                        <p>2022 © Edition</p>
                                    </div>
                                    <div class="time">
                                        <h5>Local time</h5>
                                        <p><span id="timeSpan">09:41 PM CET</span></p>
                                    </div>
                                </div>
                                <div class="flex-col">
                                    <div class="socials">
                                        <h5>Socials</h5>
                                        <ul>
                                            <li class="btn btn-link btn-link-external">
                                                <a href="<?php echo $row7['website']; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                                    <span class="btn-text">
                                                        <span class="btn-text-inner">Website</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="btn btn-link btn-link-external">
                                                <a href="<?php echo $row7['instagram']; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                                    <span class="btn-text">
                                                        <span class="btn-text-inner">Instagram</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="btn btn-link btn-link-external">
                                                <a href="<?php echo $row7['whatsapp']; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                                    <span class="btn-text">
                                                        <span class="btn-text-inner">Whatsapp</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="btn btn-link btn-link-external">
                                                <a href="<?php echo $row7['dribble']; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                                    <span class="btn-text">
                                                        <span class="btn-text-inner">Dribbble</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="btn btn-link btn-link-external">
                                                <a href="<?php echo $row7['linkedin']; ?>" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                                                    <span class="btn-text">
                                                        <span class="btn-text-inner">LinkedIn</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="stripe"></div>
                                    </div>
                                </div>
                              <?php } ?>
                              <?php } ?>
                            </div>
                        </div>
                    </footer>
                    <div class="overlay overlay-gradient"></div>
                </div>
                            </div>
        </main>
        <script src="../code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
        <script src="../cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="../cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
        <script src="https://unpkg.com/@barba/core"></script>
        <script src="../cdn.jsdelivr.net/npm/vanilla-lazyload%4017.6.1/dist/lazyload.min.js"></script>

        <script src="assets/js/locomotive-scroll.min.js"></script>
        <script defer src="assets/js/index-new.js"></script>
      </body>

</html>
