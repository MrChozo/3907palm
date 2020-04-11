<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
  <title><?= $site_title ?></title>

  <link rel="stylesheet" href="../css/style0.css">
</head>
<body>
<header>
  <nav></nav>
</header>
<main>
  <section id="jumbotron">
    <div>
      <h1>3907 Palm Boulevard</h1>
      <h1>Isle of Palms, SC 29451</h1>
      <h1>$1,149,900</h1>
    </div>
  </section>
  <section id="three-images">
    <img src="https://res.cloudinary.com/mrchozo/image/upload/v1583714858/3907palm/1-High_Aerial_Shots-MLS_mjxghd.jpg"
         alt="3907 Palm Boulevard - front of house">
    <img
        src="https://res.cloudinary.com/mrchozo/image/upload/v1583714823/3907palm/0f1c41c5-c8e5-4db4-b93a-cb7908c867f9.f10_vciuvj.webp"
        alt="Isle of Palms, SC beach">
    <img src="https://res.cloudinary.com/mrchozo/image/upload/v1583714858/3907palm/37-Ground_Exterior-MLS_uftx38.jpg"
         alt="Distance from 3907 Palm Boulevard to beach access path">
  </section>
  <section class="heading">
    <h2>Easily add an addition, or rent now until you build your dream home. Reduced and priced to sell!</h2>
  </section>
  <section id="left-image">
    <img
        src="https://res.cloudinary.com/mrchozo/image/upload/v1583714845/3907palm/20190717_131201_1583027505470_rxouvg.jpg"
        alt="3907 Palm Boulevard - cupola skylight">
    <ul>
      <li>Two bedrooms, two bathrooms, and 1,194 square feet</li>
      <li>Directly across from beach access path</li>
      <li>Hexagonal-shaped beach cottage with custom-built cupola</li>
      <li>Heart pine walls and ceilings</li>
    </ul>
  </section>
  <section id="right-image">
    <ul>
      <li>VE flood zone</li>
      <li>.25 acres</li>
      <li>Large lot with trees trimmed to provide most room for building</li>
      <li>Second row from the beach</li>
    </ul>
    <img src="https://res.cloudinary.com/mrchozo/image/upload/v1583714835/3907palm/PALM-BLVD-3907fi-2_kiuqut.jpg"
         alt="3907 Palm Boulevard - site survey results">
  </section>
  <section class="heading">
    <h2>Contact Connie Gawrych for more info at <a href="mailto:cgawrych@gmail.com">cgawrych@gmail.com</a></h2>
  </section>
  <section id="social">
    <!-- https://www.redfin.com/SC/Isle-of-Palms/3907-Palm-Blvd-29451/home/108166057-->
    <!-- https://www.trulia.com/p/sc/isle-of-palms/3907-palm-blvd-isle-of-palms-sc-29451--2028057847-->
    <!-- https://www.realtor.com/realestateandhomes-detail/3907-Palm-Blvd_Isle-of-Palms_SC_29451_M54189-05945-->
    <?php
    for ($i = 0; $i < 4; $i++) {
      echo '
        <a href="https://www.zillow.com/homes/3907-Palm-Boulevard-Isle-of-Palms,-SC-29451_rb/10937177_zpid/"
           target="_blank" rel="noreferrer noopener">
          <div><img src="../img/Zillow_Wordmark_Blue_RGB lrg.png" alt="Zillow logo"></div>
        </a>
      ';
    }
    ?>
  </section>
  <!--
    843-224-7278

    Contact Form
    Name
    Email
    Message
  -->
</main>
</body>
</html>
