

<nav class="navbar navbar-dark navbar-expand-lg bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">hanna.xvi</a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-custom fs-5 nav-line ">

          <li class="nav-item custom-nav-item">
            <a class="nav-link "  href="index.php">Home</a>
          </li>
          
          <li class="nav-item custom-nav-item ">
            <a class="nav-link" href="about.php">About</a>
          </li>

          <li class="nav-item custom-nav-item ">
            <a class="nav-link" href="projects.php">Projects</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="resume.php">Resume</a>
          </li>
          
        </ul>




      </div>
    </div>
  </nav>

  <script>
    const footer = document.querySelector('.footer-bg');

    window.addEventListener('scroll', () => {
      // Calculate the scrollable height
      const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
      const currentScroll = window.scrollY;

      // Check if we're at the bottom
      if (currentScroll >= scrollableHeight) {
        footer.classList.add('show-footer');
      } else {
        footer.classList.remove('show-footer');
      }
    });
  </script>