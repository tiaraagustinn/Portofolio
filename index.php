<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiara Agustin — Portfolio</title>
  <meta name="description" content="Portfolio Tiara Agustin, Mahasiswi Informatika 2022. Berminat di bidang pengembangan perangkat lunak dan teknologi web.">
  <meta name="author" content="Tiara Agustin">
  <link rel="icon" href="https://i.etsystatic.com/34563151/r/il/0a3aa1/3991022299/il_1080xN.3991022299_c55j.jpg">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- ========== DESKTOP NAV ========== -->
  <nav id="desktop-nav">
    <div class="logo">Tiara Agustin</div>
    <ul class="nav-links">
      <li><a href="#about" id="nav-about">About</a></li>
      <li><a href="#experience" id="nav-experience">Skills</a></li>
      <li><a href="#projects" id="nav-projects">Projects</a></li>
      <li><a href="#contact" id="nav-contact">Contact</a></li>
    </ul>
  </nav>

  <!-- ========== HAMBURGER NAV ========== -->
  <nav id="hamburger-nav">
    <div class="logo">Tiara Agustin</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()" id="hamburger-icon-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="menu-links" id="mobile-menu">
        <li><a href="#about" onclick="toggleMenu()">About</a></li>
        <li><a href="#experience" onclick="toggleMenu()">Skills</a></li>
        <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
        <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- ========== HERO / PROFILE SECTION ========== -->
  <section id="profile">
    <div class="profile-pic-wrapper reveal-left">
      <div class="profile-pic-ring">
        <div class="section__pic-container">
          <img src="image/3.jpg" alt="Foto Tiara Agustin">
        </div>
      </div>
    </div>

    <div class="section__text reveal-right">
      <p class="hero-greeting">Hello, I'm</p>
      <h1 class="title">Tiara Agustin</h1>
      <p class="hero-role">
        <span class="typed-text" id="typed-text"></span><span class="cursor"></span>
      </p>
      <p class="hero-description">
        Mahasiswi Informatika angkatan 2022 yang bersemangat dalam pengembangan teknologi.
        Tertarik pada web development, software engineering, dan inovasi digital.
      </p>

      <div id="socials-container">
        <a href="https://github.com/tiaraagustinn" target="_blank" class="social-btn" id="github-social-btn">
          <img src="image/github.png" alt="GitHub" class="social-icon">
          GitHub
        </a>
        <a href="mailto:tiaraagustin7072@gmail.com" class="social-btn" id="email-social-btn">
          <img src="image/email.png" alt="Email" class="social-icon">
          Email
        </a>
      </div>

      <div class="hero-cta">
        <a href="#projects" class="btn btn-primary" id="view-projects-btn">
          Lihat Projects ↓
        </a>
        <a href="#contact" class="btn btn-outline" id="contact-btn">
          Hubungi Saya
        </a>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== ABOUT SECTION ========== -->
  <section id="about">
    <div class="reveal">
      <span class="section-badge">✦ Tentang Saya</span>
      <h2 class="section-title">About Me</h2>
    </div>

    <div class="about-card reveal">
      <p>
        Halo! Saya <strong style="color: var(--accent-secondary);">Tiara Agustin</strong>, mahasiswi Informatika angkatan 2022.
        Saya berminat masuk ke jurusan Informatika karena tertarik dengan perkembangan teknologi dan belajar
        berbagai aspek teknologi — mulai dari pengembangan perangkat lunak hingga keamanan sistem.
        Portfolio ini saya buat untuk memenuhi tugas Laboratorium Pemrograman Berbasis Web.
      </p>
    </div>

    <div class="about-stats reveal">
      <div class="stat-item">
        <div class="stat-number">2022</div>
        <div class="stat-label">Angkatan</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">6+</div>
        <div class="stat-label">Tech Stack</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">3+</div>
        <div class="stat-label">Projects</div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== EXPERIENCE / SKILLS SECTION ========== -->
  <section id="experience">
    <div class="reveal">
      <span class="section-badge">✦ Kemampuan</span>
      <h2 class="section-title">Hard Skills</h2>
      <p class="section-subtitle">Teknologi dan tools yang saya kuasai</p>
    </div>

    <div class="skills-grid">

      <!-- Frontend Card -->
      <div class="skill-category reveal">
        <h3 class="skill-category-title">
          <span class="skill-category-icon">🎨</span>
          Frontend Development
        </h3>
        <div class="skills-list">
          <div class="skill-item">
            <span class="skill-emoji">🟧</span>
            <div class="skill-info">
              <h3>HTML</h3>
              <p>Intermediate</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">🟦</span>
            <div class="skill-info">
              <h3>CSS</h3>
              <p>Intermediate</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">🟨</span>
            <div class="skill-info">
              <h3>JavaScript</h3>
              <p>Intermediate</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">⚛️</span>
            <div class="skill-info">
              <h3>React</h3>
              <p>Intermediate</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">💚</span>
            <div class="skill-info">
              <h3>Vue.js</h3>
              <p>Intermediate</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">🟣</span>
            <div class="skill-info">
              <h3>Bootstrap</h3>
              <p>Intermediate</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Tools Card -->
      <div class="skill-category reveal">
        <h3 class="skill-category-title">
          <span class="skill-category-icon">🛠️</span>
          Developer Tools
        </h3>
        <div class="skills-list">
          <div class="skill-item">
            <span class="skill-emoji">💙</span>
            <div class="skill-info">
              <h3>VS Code</h3>
              <p>Primary IDE</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">🔶</span>
            <div class="skill-info">
              <h3>IntelliJ IDEA</h3>
              <p>Java IDE</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">🤖</span>
            <div class="skill-info">
              <h3>Android Studio</h3>
              <p>Mobile Dev</p>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-emoji">🐙</span>
            <div class="skill-info">
              <h3>GitHub</h3>
              <p>Version Control</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== PROJECTS SECTION ========== -->
  <section id="projects">
    <div class="reveal">
      <span class="section-badge">✦ Karya Saya</span>
      <h2 class="section-title">Projects</h2>
      <p class="section-subtitle">Beberapa project yang sedang atau sudah saya kerjakan</p>
    </div>

    <div class="projects-grid">

      <!-- Project 1 -->
      <div class="project-card reveal">
        <div class="project-img-wrapper">
          <img src="image/1.png" alt="Project 1" class="project-img">
        </div>
        <div class="project-body">
          <span class="project-tag">Web App</span>
          <h3 class="project-title">Web Portfolio</h3>
          <p class="project-description">
            Portfolio website pribadi yang dibangun menggunakan HTML, CSS, dan JavaScript dengan desain modern dan responsif.
          </p>
          <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/tiaraagustinn'" id="project1-github-btn">
              ⬡ GitHub
            </button>
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/tiaraagustinn'" id="project1-demo-btn">
              ↗ Live Demo
            </button>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project-card reveal">
        <div class="project-img-wrapper">
          <img src="image/2.png" alt="Project 2" class="project-img">
        </div>
        <div class="project-body">
          <span class="project-tag">Frontend</span>
          <h3 class="project-title">UI/UX Design Project</h3>
          <p class="project-description">
            Implementasi desain antarmuka pengguna yang bersih dan intuitif menggunakan teknologi web modern.
          </p>
          <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/tiaraagustinn'" id="project2-github-btn">
              ⬡ GitHub
            </button>
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/tiaraagustinn'" id="project2-demo-btn">
              ↗ Live Demo
            </button>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="project-card reveal">
        <div class="project-img-wrapper">
          <img src="image/Screenshot (1407).png" alt="Project 3" class="project-img">
        </div>
        <div class="project-body">
          <span class="project-tag">Informatika</span>
          <h3 class="project-title">Academic Project</h3>
          <p class="project-description">
            Project akademik dalam rangka Laboratorium Pemrograman Berbasis Web, menampilkan kemampuan full-stack dasar.
          </p>
          <div class="btn-container">
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/tiaraagustinn'" id="project3-github-btn">
              ⬡ GitHub
            </button>
            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/tiaraagustinn'" id="project3-demo-btn">
              ↗ Live Demo
            </button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== CONTACT SECTION ========== -->
  <section id="contact">
    <div class="reveal">
      <span class="section-badge">✦ Hubungi</span>
      <h2 class="section-title">Contact Me</h2>
      <p class="section-subtitle">Jangan ragu untuk menghubungi saya!</p>
    </div>

    <div class="contact-grid reveal">
      <a href="mailto:tiaraagustin7072@gmail.com" class="contact-card" id="contact-email-btn">
        <div class="contact-icon-wrapper">📧</div>
        <div class="contact-text">
          <div class="contact-label">Email</div>
          <div class="contact-value">tiaraagustin7072@gmail.com</div>
        </div>
      </a>

      <a href="https://github.com/tiaraagustinn" target="_blank" class="contact-card" id="contact-github-btn">
        <div class="contact-icon-wrapper">🐙</div>
        <div class="contact-text">
          <div class="contact-label">GitHub</div>
          <div class="contact-value">@tiaraagustinn</div>
        </div>
      </a>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->
  <footer>
    <div class="footer-inner">
      <div class="footer-logo">Tiara Agustin</div>
      <ul class="footer-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <p class="footer-copy">© 2024 Tiara Agustin. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>