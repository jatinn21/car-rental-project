<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&family=Orbitron&display=swap"
    rel="stylesheet"
  />

  <!-- import  -->
  <script
    type="module"
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"
  ></script>
  <body>
    <div class="reading-indicator"></div>
    <section class="section--1">
      <!-- navbar starts -->
      <nav class="navbar">
        <ul class="nav-links center left-link-section">
          <span class="nav-link" id="about-link">About</span>
          <span class="nav-link" id="vehicles-link">vehicles</span>
          <span class="nav-link" id="booking-link">booking</span>
          <span class="nav-link" id="contacts-link">contacts</span>
        </ul>
        <ul class="nav-links center center-link-section">
          <span class="logo">HireCars</span>
        </ul>
        <ul class="nav-links center right-link-section">
          <span class="nav-link">Login</span>
          <span class="nav-link">Signup</span>
        </ul>
      </nav>
      <!-- navbar ends -->
      <div class="heading-section">
        <p class="headline">
          Luxuary car<br /><span class="highlight">rental in Bharat</span>
        </p>
        <button class="rent-now-btn">Rent Now</button>
      </div>
    </section>
    <section class="section--2">
      <div class="section--2--part section--2-partA">
        <h1 class="section--2--part-headline">About Us</h1>
        <p class="section--2--part-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
          dolorem quia amet ullam illum doloremque? Autem quos ratione, culpa
          illum saepe harum nisi aut quas, nam cumque beatae labore nemo placeat
          recusandae eligendi esse nostrum voluptates minima debitis laudantium
          cum libero unde .
        </p>
        <p class="section--2--part-description">
          Nostrum ad, in illum reiciendis animi dicta molestiae, molestias omnis
          quos, non dolorum! Sequi officia, temporibus quos quibusdam iure minus
          provident quisquam nisi laboriosam hic natus optio nam deleniti
          debitis pariatur consequuntur ut deserunt, inventore fugit ullam?
          Placeat, excepturi distinctio.
        </p>
      </div>
      <div class="section--2--part section--2-partB"></div>
      <div class="section--2--part section--2-partC">
        <p class="center">
          <span>+10 year</span>
          <span>Experience</span>
        </p>
        <p></p>
      </div>
    </section>
    <section class="section--3">
      <div class="bestOffers center">
        <h1 class="headline">Best Offer</h1>
        <p class="section--3--part-description">
          <span class="highlight-2">Tesla Model S &nbsp;&rightarrow;</span
          ><br />for $400/day
        </p>
        <button class="rent-now-btn2">Rent Now</button>
      </div>
      <model-viewer
        loading="eager"
        disable-zoom
        disable-tap
        src="./assets/tesla_2018_model_3.glb"
        alt="VR Headset"
        auto-rotate
        camera-controls
        ar
      ></model-viewer>
    </section>
  </body>
</html>
