<?php
// index.php - Ibrahim Samoo Portfolio with Animated Cards + Code & Video Demo
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Ibrahim Samoo | Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background: #121212;
      color: #eee;
      scroll-behavior: smooth;
      transition: 0.3s;
    }

    header {
      background: #1e1e1e;
      color: #fff;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      animation: slideTop 1s ease-out;
    }

    header h1 { font-size: 26px; font-weight: 600; }

    nav a {
      color: white;
      margin-left: 20px;
      text-decoration: none;
      transition: 0.3s;
      font-weight: 500;
    }

    nav a:hover {
      color: #00ffcc;
      transform: scale(1.1);
    }

    .hero {
      padding: 100px 20px 80px;
      text-align: center;
      background: linear-gradient(to right, #1f1f1f, #222);
      color: white;
      animation: fadeIn 2s ease-in;
    }

    .hero h2 {
      font-size: 48px;
      margin-bottom: 10px;
      background: linear-gradient(90deg, #00ffcc, #00ff99);
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero p { font-size: 20px; }

    .btn {
      margin-top: 10px;
      padding: 10px 20px;
      background: linear-gradient(to right, #00ffcc, #00ff99);
      color: #000;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;
      transition: 0.4s ease;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      transform: scale(1.05);
      opacity: 0.9;
    }

    section {
      padding: 60px 20px;
      max-width: 1000px;
      margin: auto;
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.7s ease;
    }

    section.show {
      opacity: 1;
      transform: translateY(0);
    }

    section h2 {
      font-size: 36px;
      margin-bottom: 30px;
      text-align: center;
      background: linear-gradient(90deg, #00ffcc, #00ff66);
      -webkit-background-clip: text;
      color: transparent;
    }

    .profile {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 30px;
      background: #1e1e1e;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 255, 140, 0.2);
      animation: fadeInCard 1.2s ease-in-out;
    }

    .profile img {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      border: 4px solid #00ff99;
      object-fit: cover;
      animation: glow 2s infinite ease-in-out;
    }

    @keyframes glow {
      0%, 100% { box-shadow: 0 0 10px #00ff99, 0 0 20px #00ff99; }
      50% { box-shadow: 0 0 20px #00ffcc, 0 0 30px #00ffcc; }
    }

    .profile h3 {
      font-size: 24px;
      color: #00ffcc;
      margin-top: 10px;
    }

    .about p {
      text-align: center;
      font-size: 18px;
      line-height: 1.6;
    }

    .projects {
      display: grid;
      gap: 20px;
    }

    .project {
      background: #1e1e1e;
      border-radius: 12px;
      padding: 20px;
      border: 1px solid #444;
      box-shadow: 0 0 10px rgba(0,255,140,0.15);
      transition: 0.3s ease;
      animation: fadeInCard 1s ease forwards;
    }

    .project:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 0 25px rgba(0,255,140,0.3);
    }

    .project h3 {
      color: #00ffcc;
      margin-bottom: 10px;
    }

    .contact form input,
    .contact form textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #444;
      font-size: 16px;
      background: #1e1e1e;
      color: white;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #1e1e1e;
      color: white;
      margin-top: 40px;
      animation: slideBottom 1s ease-out;
    }

    footer a {
      color: #00ffcc;
      text-decoration: none;
    }

    @keyframes fadeIn { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes slideTop { from { transform: translateY(-100px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    @keyframes slideBottom { from { transform: translateY(100px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    @keyframes fadeInCard { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }

    @media(max-width: 600px) {
      .hero h2 { font-size: 32px; }
      .profile img { width: 120px; height: 120px; }
    }
  </style>
</head>
<body>

  <header>
    <h1>Ibrahim Samoo</h1>
    <nav>
      <a href="#profile">Profile</a>
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Hello, I'm Ibrahim</h2>
    <p>Aspiring Web-Developer & AI Enthusiast</p>
    <a href="CV_Ibrahim_Samoo.pdf" download class="btn">Download CV</a>
  </section>

  <section id="profile" class="profile">
    <h2>My Profile</h2>
    <img src="your-photo.jpg" alt="Ibrahim Samoo">
    <h3>Ibrahim Samoo</h3>
    <p>Computer Science Student at University Of Sindh Jamshoro | Python & AI Enthusiast | Creative Developer</p>
  </section>

  <section id="about" class="about">
    <h2>About Me</h2>
    <p>I am a Computer Science student passionate about Python programming and Artificial Intelligence. I love building real-world projects and solving problems through code.</p>
  </section>

  <section id="projects" class="projects">
    <h2>Projects</h2>

    <div class="project">
      <h3>Medical Store Management System</h3>
      <p>A PHP-based inventory and billing system with admin/user login, PDF reports, and dynamic UI.</p>
      <a href="https://github.com/yourusername/medical-store" target="_blank" class="btn">View Code</a>
      <video width="100%" controls style="margin-top:15px; border-radius:10px;">
        <source src="videos/medical-store-demo.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="project">
      <h3>AI Chatbot</h3>
      <p>A chatbot made in Python using text-to-speech/speech-to-text APIs for intelligent responses.</p>
      <a href="https://github.com/yourusername/ai-chatbot" target="_blank" class="btn">View Code</a>
      <iframe width="100%" height="215" src="https://www.youtube.com/embed/your-video-id" frameborder="0" allowfullscreen style="margin-top:15px; border-radius:10px;"></iframe>
    </div>

    <div class="project">
      <h3>Portfolio Website</h3>
      <p>This fully responsive one-page PHP portfolio site you're viewing now.</p>
      <a href="https://github.com/yourusername/portfolio" target="_blank" class="btn">View Code</a>
      <video width="100%" controls style="margin-top:15px; border-radius:10px;">
        <source src="videos/portfolio-showcase.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Contact Me</h2>
    <form method="post" action="#contact">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
      <button type="submit" class="btn">Send Message</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $msg = htmlspecialchars($_POST["message"]);
        echo "<p style='color:limegreen; text-align:center; margin-top:15px;'>Thanks <strong>$name</strong>! Your message has been received.</p>";
    }
    ?>
  </section>

  <footer>
    <p>© 2025 Ibrahim Samoo |
      <a href="https://facebook.com">Facebook</a> |
      <a href="mailto:your-email@example.com">Email</a>
    </p>
  </footer>

  <script>
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add("show");
      });
    }, { threshold: 0.3 });

    document.querySelectorAll("section").forEach(el => observer.observe(el));
  </script>
</body>
</html>
