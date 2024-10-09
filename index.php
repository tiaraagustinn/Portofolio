<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="icon" href="https://i.etsystatic.com/34563151/r/il/0a3aa1/3991022299/il_1080xN.3991022299_c55j.jpg">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav id="desktop-nav">
      <div class="logo">Tiara Agustin</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Tiara Agustin</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="image/3.jpg" />
      </div>
      <div class="section__text"> 
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Tiara Agustin</h1>
        <div id="socials-container">
          <img
            src="image/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/tiaraagustinn'"/>
        </div>
      </div>
    </section>
    <section id="about">
      <h1 class="title">About</h1>
      <div class="section-container">
        <div class="text-container">
              <p>
                Halo, terima kasih telah mengunjungi portofolio saya. Saya Tiara Agustin, mahasiswa Informatika angkatan 2022. Portofolio ini
                saya buat untuk memenuhi tugas Laboratorium Pemrograman Berbasis Web. Saya berminat masuk ke jurusan Informatika karena tertarik
                dengan perkembangan teknologi dan belajar tentang berbagai macam aspek teknologi, mulai dari pengembangan perangkat lunak hingga keamanan sistem.
              </p>
          </div>
      </div>
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Hard Skill</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/HTML.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/CSS.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/react.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>React</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/Javascript.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/vue.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Vue</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/bootstrap.jpg"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Bootstrap</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Tools</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/vscode.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Visual Studio Code</h3>
                </div>
              </article>
              <article>
                <img
                  src="./assets/intelij.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>IntelliJ IDEA </h3>
                </div>
              </article>
              <article>
                <img
                  src="./assets/android.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Android Studio</h3>
                </div>
              </article>
              <article>
                <img
                  src="./assets/github.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>GitHub Pilot</h3>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project.png"
                alt="Uncompleted Project"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Uncompleted Project</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/tiaraagustinn'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/tiaraagustinn'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project.png"
                alt="Uncompleted Project"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Uncompleted Project</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/tiaraagustinn'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/tiaraagustinn'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project.png"
                alt="Uncompleted Project"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Uncompleted Project</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/tiaraagustinn'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/tiaraagustinn'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="image/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:tiaraagustin7072@gmail.com">Gmail</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
    </footer>
    <script src="js/script.js"></script>

</body>
</html>