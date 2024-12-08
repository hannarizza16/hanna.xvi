<?php
$title = "hanna.xvi | About";  // to have a dynamically changing title using PHP in header
$page = "About";
include('header.php')
?>


<style>



.about-container {
    display: flex;
    /* flex-direction: column; */
    align-items: center;
    padding: 2rem;
    max-width: 90%;
    margin: 0 auto;
  }
   /* KNOW MW MORE TEXT */
   .about-text {
    position: absolute;
    left: 16vw;
    top: 14vh;
    color: rgb(247, 247, 116);
    font-family: 'Poppins', sans-serif;
    font-size: 50px;
    font-weight: 400;
    text-transform: uppercase;
  }
  .animation-container {
    position: relative;
    bottom: 14vh;
    right: 2vw;
    width: 200px;
    height: 200px;
    z-index: 2;
  }
  .frame {
    position: absolute;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    z-index: 2;
  }
/* Image active */
  .frame.active {
    opacity: 1;
  }
    /* BG CONTAINER */
  .introduction-container {
    position: absolute;
    color: beige;
    opacity: 0.5;
    width: 95%;
    height: 50vh;
    top: 22vh;
    left: 3vw;
    margin-right: 50%;
    background-color: #333;
    text-align: center;
    border-radius: 30px;
  }
  .box-xontainer {
    display: block;
  }




  /* @media (max-width: 768px) {
  img .frame {
    border: 2px solid red;
    width: 10px;
  }
} */
</style>

<body>

  <?php include('navbar.php'); ?>


  <canvas></canvas>

  <div class="about-container">
    <div class="about-text">
      Know me more
    </div>

    <!-- Image -->


    <div class="animation-container">
      <img class="frame" src="img/1.png" alt="Frame 1">
      <img class="frame" src="img/2.png" alt="Frame 2">
      <!-- <img class="frame" src="img/3.png" alt="Frame 3"> -->
      <img class="frame" src="img/4.png" alt="Frame 4">
    </div>
  </div>


  <div class="introduction-container text-start">
    <div class="row row-cols-2">
      <!-- <div class="col" style="background-color: aliceblue; color: black">Column</div>
          <div class="col" style="background-color: brown; color: white">Column</div>
          <div class="col" style="background-color: brown; color: white">Column</div>
          <div class="col" style="background-color: aliceblue; color: black">Column</div> -->
    </div>
  </div>

  <!-- ACTIVE PICTURE -->
  <script>
    const frames = document.querySelectorAll('.frame');
    let currentIndex = 0;

    function showNextFrame() {
      frames[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % frames.length; // Loop back to first picture or frame
      frames[currentIndex].classList.add('active');
    }

    // Initial setup
    frames[currentIndex].classList.add('active');
    setInterval(showNextFrame, 1000); // Change image every second
  </script>


  <?php include('footer.php'); ?>



</body>

</html>