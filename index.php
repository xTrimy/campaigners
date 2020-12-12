<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/rockwell.css">
    <link rel="stylesheet" href="layout/css/master.css">
    <meta charset="utf-8">
    <title>Campaigners</title>
  </head>
  <body>
    <div id="header">
      <div class="nav-buttons">
        <div class="nb selected">Home</div>
        <div class="nb">About Us</div>
        <div class="nb">Blog</div>
      </div>
        <div class="logo">
          <img src="layout/png/logo-white.png" alt="Campaigners Logo White">
        </div>
        <div class="nav-buttons">
          <div class="nb">Watch</div>
          <div class="nb">Contact Us</div>
          <div class="nb">Contact Us</div>
        </div>
    </div>
    <div id="top-banner">
      <div class="content">
        <h2>Leading The Twenties</h2>
        <h1>Campaigners</h1>
      </div>
    </div>
      <div class="wrapper">
      <div id="section1" class="flex-container section">
        <div class="left" style="flex:4">
          <h1>What is Campaigners?</h1>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
            aliquyam erat, sed diam voluptua. At vero eos et. Lorem ipsum dolor
            sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
            invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et. Lorem ipsum dolor sit </p>

          <h2>Mission</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
            aliquyam erat, sed diam voluptua. At vero eos et. Lorem ipsum dolor
            sit amet, consetet </p>

          <h2>Vission</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
            aliquyam erat, sed diam voluptua. At vero eos et. Lorem ipsum dolor
            sit amet, consetet</p>
          <div class="xbutton">Read More</div>
        </div>
        <div class="right" style="flex:2">
          <!-- Images don't need to be put in h3 tag -->
          <img src="layout/svg/Tree.svg">
        </div>
      </div>
      <div id="section2" class="flex-container section">
    <div class="left">
      <img style="width:100%;" src="layout/png/Photos.png" alt="">
    </div>
    <div class="right">
      <div class="container">
        <h1>Our Work</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="xbutton">Take a Look!</div>
      </div>
    </div>
  </div>
  <div id="section3 section">
    <div class="latest-news">
      <h1 class="center">Latest News</h1>
      <div class="news-container">
        <?php for($i = 0; $i < 3; $i++){
          ?>
          <div class="item">
            <div class="image"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <div class="xbutton center">
              Read More
            </div>
          </div>
          <?php
        } ?>
        </div>
        <div class="xbutton center">View All</div>
    </div>
  </div>
    </div>
  </body>
</html>
