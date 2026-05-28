<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anjali Anand</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top left, #0b0f1a, #020617 70%);
            color: #fff;
        }

        body::before {
            content: "";
            position: fixed;
            width: 400px;
            height: 400px;
            background: #38bdf8;
            filter: blur(150px);
            opacity: 0.15;
            top: -100px;
            left: -100px;
            z-index: -1;
        }

        h1,
        h2 {
            letter-spacing: 0.5px;
        }

        .hero-text h2 {
            font-size: 56px;
            font-weight: 600;
        }

        .hero-text span {
            background: linear-gradient(90deg, #38bdf8, #6c63ff);
            -webkit-background-clip: text;
            color: transparent;
        }

        /* container */
        .container {
            max-width: 1100px;
            margin: auto;
        }

        /* header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 12px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(2, 6, 23, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            z-index: 1000;
        }

        header.scrolled {
            background: rgba(50, 54, 83, 0.95);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
        }

        /* logo */
        .logo {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #38bdf8, #6c63ff);
            -webkit-background-clip: text;
            color: transparent;
        }

        /* nav */
        nav {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        nav a {
            position: relative;
            text-decoration: none;
            color: #cbd5e1;
            font-size: 14px;
            transition: 0.3s;
        }

        /* underline hover */
        nav a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            background: #38bdf8;
            left: 0;
            bottom: -5px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #fff;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* right side */
        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* hire button */
        .hire-btn {
            padding: 8px 18px;
            border-radius: 20px;
            background: linear-gradient(90deg, #38bdf8, #6c63ff);
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            transition: 0.3s;
        }

        .hire-btn:hover {
            transform: scale(1.05);
        }

        /* hero split layout */
        .hero {
            margin-top: 100px;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 120px 60px 60px;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h2 {
            font-size: 52px;
            line-height: 1.2;
        }

        .hero-text p {
            margin: 20px 0;
            opacity: 0.7;
        }

        .hero-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .hero-img img {
            width: 260px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        /* buttons */

        /* sections */
        section {
            padding: 80px 60px;
        }

        h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* cards */
        .card {
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: .4s;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        /* .card:hover{
  transform:translateY(-8px);
} */
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(90deg, #38bdf8, #6c63ff);
            color: #fff;
            cursor: pointer;
            transition: .3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(56, 189, 248, 0.3);
        }

        /* grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        /* portfolio images */
        .card img {
            width: 100%;
            border-radius: 10px;
        }

        .card {
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* contact */
        .contact-form {
            max-width: 500px;
            margin: 30px auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #1e293b;
            color: #fff;
        }
   a {
  text-decoration: none;
}

        .contact-form button {
            background: linear-gradient(90deg, #38bdf8, #6c63ff);
            border: none;
            padding: 12px;
            border-radius: 25px;
            cursor: pointer;
        }

        .filters {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .filters button {
            padding: 8px 18px;
            border: none;
            border-radius: 20px;
            background: #1e293b;
            color: #fff;
            cursor: pointer;
            transition: .3s;
        }

        .filters button:hover {
            background: #38bdf8;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .gallery .card {
            overflow: hidden;
            position: relative;
        }

        .gallery .card img {
            transition: .4s;
        }

        .gallery .card:hover img {
            transform: scale(1.1);
        }

        /* overlay effect */

        .gallery .card {
            position: relative;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: .3s;
        }

        .overlay a {
            padding: 10px 20px;
            background: linear-gradient(90deg, #38bdf8, #6c63ff);
            color: #fff;
            border-radius: 25px;
            text-decoration: none;
            font-size: 14px;
        }

        .gallery .card:hover .overlay {
            opacity: 1;
        }

        .footer {
            background: #020617;
            padding: 60px 20px;
            text-align: center;
            margin-top: 50px;
        }

        .footer h2 {
            margin-bottom: 10px;
        }

        .footer p {
            opacity: 0.7;
        }

        .socials {
            margin: 20px 0;
        }

        .socials a {
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
            color: #fff;
            transition: .3s;
        }

        .socials a:hover {
            color: #38bdf8;
        }

        #about p {
            margin-top: 10px;
        }

        p {
            font-size: 15px;
            line-height: 1.7;
            color: #cbd5e1;
            font-weight: 300;
            letter-spacing: 0.3px;
        }

        section p {
            max-width: 700px;
        }

        .copy {
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.5;
        }

        .whatsapp-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: #fff;
            border: none;
            padding: 14px 22px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
            transition: .3s;
            animation: pulse 2s infinite;
        }

        .whatsapp-btn:hover {
            transform: scale(1.08);
        }

        /* pulse animation */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        #experience .card {
            position: relative;
            padding-left: 20px;
            border-left: 3px solid #38bdf8;
        }

        #experience .card b {
            color: #38bdf8;
            font-size: 15px;
        }

        #experience .card p {
            margin-top: 8px;
            font-size: 14px;
            color: #94a3b8;
        }

        .hero-text p {
            font-size: 16px;
            color: #94a3b8;
        }

        #skills .card {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px 20px;
            border-radius: 12px;
            background: #0f172a;
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: 0.3s;
        }

        /* hover */
        #skills .card:hover {
            border-color: #38bdf8;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        /* icon */
        .skill-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: rgba(56, 189, 248, 0.1);
            font-size: 18px;
            color: #38bdf8;
        }

        /* text */
        .skill-text {
            flex: 1;
        }

        .skill-text h4 {
            font-size: 15px;
            margin-bottom: 5px;
        }

        .skill-text span {
            font-size: 12px;
            color: #94a3b8;
        }

        .hero-img {
            position: relative;
        }

        .hero-img::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            background: linear-gradient(135deg, #38bdf8, #6c63ff);
            border-radius: 20px;
            z-index: 0;
            filter: blur(30px);
            opacity: 0.5;
        }

        .hero-img img {
            position: relative;
            z-index: 1;
            width: 260px;
            border-radius: 20px;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .hero-img img {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .about-wrapper {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 50px;
            margin-top: 20px;
        }

        /* text */
        .about-text p {
            margin-bottom: 15px;
            color: #94a3b8;
            font-size: 15px;
            line-height: 1.7;
        }

        .about-intro {
            font-size: 18px;
            color: #e2e8f0;
        }

        /* right info */
        .about-info {
            display: grid;
            gap: 12px;
        }

        .about-info div {
            background: #0f172a;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .about-info span {
            color: #38bdf8;
            font-weight: 500;
        }

        body.light {
            background: #f8fafc;
            color: #0f172a;
        }

        /* header */
        body.light header {
            background: rgba(255, 255, 255, 0.8);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* nav */
        body.light nav a {
            color: #0f172a;
        }

        body.light nav a:hover {
            color: #2563eb;
        }

        /* cards */
        body.light .card {
            background: #ffffff;
            color: #0f172a;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* section text */
        body.light p {
            color: #334155;
        }

        /* about info */
        body.light .about-info div {
            background: #ffffff;
        }

        /* contact inputs */
        body.light .contact-form input,
        body.light .contact-form textarea {
            background: #e2e8f0;
            color: #000;
        }

        /* footer */
        body.light .footer {
            background: #e2e8f0;
            color: #0f172a;
        }

        .social-icon {
            font-size: 18px;
            color: #cbd5e1;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-icon:hover {
            color: #38bdf8;
            transform: translateY(-2px);
        }
    .cta-section{
  text-align:center;
  padding:90px 20px;
}

.cta-section h2{
  font-size:36px;
  margin-bottom:10px;
}

.cta-subtext{
  max-width:600px;
  margin:10px auto 30px;
  color:#94a3b8;
  font-size:16px;
  line-height:1.6;
}

.cta-subtext span{
  color:#38bdf8;
  font-weight:500;
}

/* trust points */
.cta-points{
  display:flex;
  justify-content:center;
  gap:25px;
  flex-wrap:wrap;
  margin-bottom:35px;
  color:#cbd5e1;
  font-size:14px;
}

/* buttons */
.cta-buttons{
  display:flex;
  justify-content:center;
  gap:15px;
  flex-wrap:wrap;
}

.primary-btn{
  background:linear-gradient(90deg,#38bdf8,#6c63ff);
}

.outline-btn{
  background:transparent;
  border:1px solid #38bdf8;
  color:#38bdf8;
}

.outline-btn:hover{
  background:#38bdf8;
  color:#fff;
}
    </style>
</head>

<body>

    <header>

        <div class="logo">Anjali Anand</div>

        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#portfolio">Work</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="header-right">

            <a href="https://www.linkedin.com/in/anjali-anand-57662b136/" target="_blank"><img width="30" height="30"
                    src="https://img.icons8.com/3d-fluency/94/linkedin--v2.png" alt="linkedin--v2" /></a>
            <a href="mailto:anandanjali520@gmail.com" target="_blank"><img width="30" height="30"
                    src="https://img.icons8.com/papercut/60/new-post.png" alt="new-post" /></a>

            <!-- <button onclick="toggleTheme()">🌙</button> -->
            <a href="#contact" class="hire-btn">Hire Me</a>

        </div>

    </header>

    <section id="home" class="hero">

        <div class="hero-text">
            <h2>
                Php Web Developer with <span style="color:#38bdf8">2+ years of experience </span>
            </h2>
            <p>
                building
                modern, responsive and high-performing websites for clients.
            </p>

            <a href="anjali resume.pdf" target="_blank" class="btn">View Resume</a>
        </div>

        <div class="hero-img">
            <img src="anjali.jpg" alt="profile">
        </div>

    </section>

    <section id="about" class="fade">

        <h2>About Me</h2>

        <div class="about-wrapper">

            <!-- LEFT TEXT -->
            <div class="about-text">
                <p class="about-intro">
                    I am a passionate <b>PHP Web Developer</b> with <b>2+ years of experience</b> in building
                    modern, responsive, and high-performance websites.
                </p>

                <p>
                    I specialize in creating user-friendly interfaces, dynamic web applications, and
                    scalable backend solutions using PHP, WordPress, and modern web technologies.
                </p>

                <p>
                    I am currently working as a PHP Developer and continuously improving my skills
                    to deliver high-quality solutions and grow as a successful software professional.
                </p>
            </div>

            <!-- RIGHT INFO -->
            <div class="about-info">

                <div><span>Name:</span> Anjali Anand</div>
                <div><span>Experience:</span> 2+ Years</div>
                <div><span>Role:</span> PHP Web Developer</div>
                <div><span>Location:</span> India</div>

            </div>

        </div>

    </section>

    <section id="skills" class="zoom">
        <h2>Skills</h2>

        <div class="grid">

            <div class="card">
                <div class="skill-icon">💻</div>
                <div class="skill-text">
                    <h4>HTML, CSS, JavaScript</h4>
                    <span>Frontend Development</span>
                </div>
            </div>

            <div class="card">
                <div class="skill-icon">⚙️</div>
                <div class="skill-text">
                    <h4>PHP</h4>
                    <span>Backend Development</span>
                </div>
            </div>

            <div class="card">
                <div class="skill-icon">🧩</div>
                <div class="skill-text">
                    <h4>Laravel</h4>
                    <span>Framework (Basic)</span>
                </div>
            </div>

            <div class="card">
                <div class="skill-icon">🌐</div>
                <div class="skill-text">
                    <h4>WordPress</h4>
                    <span>Website Development</span>
                </div>
            </div>

            <div class="card">
                <div class="skill-icon">🎨</div>
                <div class="skill-text">
                    <h4>UI/UX Design</h4>
                    <span> Canva</span>
                </div>
            </div>

            <div class="card">
                <div class="skill-icon">🐍</div>
                <div class="skill-text">
                    <h4>Python</h4>
                    <span>Basic Knowledge</span>
                </div>
            </div>

        </div>
    </section>

    <section id="experience" class="zoom">
        <h2>Experience</h2>
        <div class="grid">
            <div class="card"><b>Internship </b><br>Web Developer/Php (01/2023 - 04/2023)<p>- Project on School
                    Management System</p>
            </div>
            <div class="card"><b>DELYFRESH FARM TECH PRIVATE LIMITED</b> <br>Frontend Web Developer (04/2023 - 09/2023)
                <p> - Working with the wider development team.
                    <br>- Manage website design
                </p>
            </div>
            <div class="card"><b>Genmish India Private Limited</b> <br>Software Associate (11/2023 - 06/2024)<br>
                <p>- Working with the wider development team.
                    <br>- Manage website design, content, Google and Social Media
                    <br>- Posting and Banner Design on Canva.
                </p>
            </div>
            <div class="card"><b>Freelancing</b> <br>Php Web Developer (05/2024 - 2026) <p> - Work on medical website.
                    <br>- create full dynamic website using php
                </p>
            </div>
            <div class="card"><b>Intenext Solutions Pvt. Ltd.</b> <br>Php Web Developer (04/2026 - Present)<p>- Php
                    Developer and managing all website
                    <br>- Wordpress and canva Design
                </p>
            </div>
        </div>
    </section>

    <section class="zoom">
        <h2>Qualification</h2>
        <div class="card">Master of Computer Applications (MCA)
            Patna Women's College | 2023</div>
    </section>

    <section id="portfolio" class="fade">
        <h2>My Work</h2>
        <div class="filters">
            <button data-filter="all">All</button>
            <button data-filter="web">Php Websites</button>
            <!-- <button data-filter="design">Design</button> -->
        </div>
        <div class="gallery">
            <div class="card">
                <img src="commandant.png">

                <div class="overlay">
                    <a href="https://commandantacademy.org" target="_blank">View Project</a>
                </div>

                <div class="project-info">
                    <h4>Commandant Academy</h4>
                    <p>Educational website with Email Verification and SEO Optimization</p>
                    <span>Tech: PHP,Bootstrap</span>
                </div>
            </div>
            <div class="card" data-category="web">
                <img src="everysolution.png">

                <div class="overlay">
                    <a href="https://everysolution.co.in" target="_blank">View Project</a>
                </div>
                <div class="project-info">
                    <h4>Every Solution</h4>
                    <p>Educational website with Admission Consultancy and SEO Optimization</p>
                    <span>Tech: PHP,Bootstrap</span>
                </div>
            </div>
            <div class="card" data-category="web">
                <img src="kmc medical.png">

                <div class="overlay">
                    <a href="https://www.kmcmedicalcollege.com/" target="_blank">View Project</a>
                </div>
                <div class="project-info">
                    <h4>Kmc Medical College</h4>
                    <p>Medical website with admin dashboard and fully dynamic</p>
                    <span>Tech: PHP, Mysqli and Bootstrap</span>
                </div>
            </div>
            <div class="card" data-category="web">
                <img src="admission partner.png">

                <div class="overlay">
                    <a href="https://admissionpartner.in" target="_blank">View Project</a>
                </div>
                <div class="project-info">
                    <h4>Admission Partner</h4>
                    <p>Admission Consultancy and SEO Optimization</p>
                    <span>Tech: PHP,Bootstrap</span>
                </div>
            </div>
            <div class="card" data-category="web">
                <img src="digispark.png">

                <div class="overlay">
                    <a href="https://digisparkind.com" target="_blank">View Project</a>
                </div>
                <div class="project-info">
                    <h4>DigiSpark Ind</h4>
                    <p>Digital Marketing Comapany with email and SEO Optimization</p>
                    <span>Tech: PHP,Bootstrap</span>
                </div>
            </div>
            <div class="card" data-category="web">
                <img src="mme.png">

                <div class="overlay">
                    <a href="https://mmepl.co.in" target="_blank">View Project</a>
                </div>
                <div class="project-info">
                    <h4>MMEPL</h4>
                    <p>Manufacturing company website with product showcase and contact information</p>
                    <span>Tech: PHP,Bootstrap</span>
                </div>
            </div>
        </div>
    </section>


    <!-- CLIENT ATTRACT SECTION -->
   <section class="fade cta-section">

  <h2>Let’s Work Together 🚀</h2>

  <p class="cta-subtext">
    I help businesses build <span>modern, high-converting websites</span> that attract customers and grow revenue.
  </p>

  <!-- trust points -->
  <div class="cta-points">
    <div>⚡ Fast Delivery</div>
    <div>🎯 Conversion Focused Design</div>
    <div>💰 Affordable Pricing</div>
  </div>

  <!-- CTA buttons -->
  <div class="cta-buttons">
    <a href="https://wa.me/8709602821" target="_blank" class="btn primary-btn">
      💬 Hire Me on WhatsApp
    </a>

    <a href="anjali resume.pdf" target="_blank" class="btn outline-btn">
      📄 View Resume
    </a>
  </div>

</section>

    <!-- PROJECT SHOWCASE WITH DETAILS -->
    <section class="fade">
        <h2 style="text-align:center">Featured Projects</h2>
        <div class="grid">
            <div class="card">
                <h3>UgAI</h3>
                <p>Smart Farming With UgAI</p>
                <button class="btn"><a href="https://ugai.in/" target="_blank">Live Demo</a></button>
            </div>
            <div class="card">
                <h3>Kisan Connect Card</h3>
                <p>Empowering Farmers Through Digital Agriculture</p>
                <button class="btn"><a href="https://kisanconnectcard.ugai.in/" target="_blank">Live Demo</a></button>
            </div>
            <div class="card">
                <h3>PatnaKart</h3>
                <p>Ecommerce Website</p>
                <button class="btn"><a href="https://patnakart.in/" target="_blank">View Project</a></button>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="fade" style="text-align:center">
        <h2>Client Feedback</h2>
        <div class="grid" style="margin-top:20px">
            <div class="card">
                <p>“Amazing work! Very professional and fast delivery.”</p>
                <strong>- Client</strong>
            </div>
            <div class="card">
                <p>“Loved the design and responsiveness.”</p>
                <strong>- Client</strong>
            </div>
        </div>
    </section>

    <section id="contact" class="fade">
    <h2>Contact Me</h2>

    <form class="contact-form" action="mail.php" method="POST">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>

    </form>
</section>

    <footer class="footer">
        <div class="footer-content">

            <h2>Anjali Anand</h2>
            <p>Building modern websites & creative digital experiences.</p>

            <div class="socials">
                <a href="https://www.linkedin.com/in/anjali-anand-57662b136/" target="_blank"><img width="30"
                        height="30" src="https://img.icons8.com/3d-fluency/94/linkedin--v2.png"
                        alt="linkedin--v2" /></a>
                <a href="mailto:anandanjali520@gmail.com" target="_blank"><img width="30" height="30"
                        src="https://img.icons8.com/papercut/60/new-post.png" alt="new-post" /></a>

            </div>

            <p class="copy">© 2026 All Rights Reserved</p>

        </div>
    </footer>
    <a href="https://wa.me/8709602821" target="_blank" class="whatsapp-btn">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" alt="WhatsApp" /></a>

        <div class="modal" id="modal"><img id="modalImg"></div>

        <script>
            function toggleTheme() { document.body.classList.toggle('light') }

            const buttons = document.querySelectorAll('.filters button');
            const cards = document.querySelectorAll('.gallery .card');
            buttons.forEach(btn => {
                btn.onclick = () => {
                    const f = btn.dataset.filter;
                    cards.forEach(c => {
                        c.style.display = (f === 'all' || c.dataset.category === f) ? 'block' : 'none';
                    });
                };
            });

            const modal = document.getElementById('modal');
            const modalImg = document.getElementById('modalImg');
            cards.forEach(c => {
                c.onclick = () => { modal.style.display = 'flex'; modalImg.src = c.querySelector('img').src };
            });
            modal.onclick = () => modal.style.display = 'none';

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) { entry.target.classList.add('show') }
                });
            });

            // document.querySelectorAll('.fade, .zoom').forEach(el => observer.observe(el));
            
        </script>
        <script>
            window.addEventListener("scroll", () => {
                document.querySelector("header").classList.toggle("scrolled", window.scrollY > 50);
            });
        </script>
</body>

</html>

