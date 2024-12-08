<?php
$title = "hanna.xvi | About";  // to have a dynamically changing title using PHP in header
$page = "About";
include('header.php')
?>


<style>
  .animation-container {
    position: relative;
    top: -20vh;
    left: -6vw;
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

  .frame.active {
    opacity: 1;
  }

  .box-container {
    /* position: relative; */
    color: beige;
    /* opacity: 0.5; */
    width: 100% auto;
    height: 50vh;
    background-color: #333;
    text-align: center;
    /* Center the text and images */
    border-radius: 30px;
  }

  .about-text {
    color: rgb(247, 247, 116);
    font-family: 'Poppins', sans-serif;
    font-size: 50px;
    font-weight: 400;
    text-transform: uppercase;
    padding-left: 12vw;
  }

  .about-container {
    display: flex;
    flex-direction: column;
    /* align-items: center; */
    padding: 2rem;
    max-width: 90%;
    margin: 0 auto;
    /* display: flex; */
  }

  .introduction-container {
    position: relative;
    top: -20vh;
    margin: 0 5%;
  
  }
</style>

<body>

  <?php include('navbar.php'); ?>


  <canvas></canvas>

  <div class="about-container">
    <div class="about-text">
      Know me more
    </div>
    <div class="box-container">
      <div class="animation-container">
        <img class="frame" src="img/1.png" alt="Frame 1">
        <img class="frame" src="img/2.png" alt="Frame 2">
        <!-- <img class="frame" src="img/3.png" alt="Frame 3"> -->
        <img class="frame" src="img/4.png" alt="Frame 4">
      </div>


      <div class="introduction-container text-start">
        <div class="row row-cols-2">
          <div class="col" style="background-color: aliceblue; color: black">Column</div>
          <div class="col" style="background-color: brown; color: white">Column</div>
          <div class="col" style="background-color: brown; color: white">Column</div>
          <div class="col" style="background-color: aliceblue; color: black">Column</div>
        </div>
      </div>
    </div>


  </div>
  </div>



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