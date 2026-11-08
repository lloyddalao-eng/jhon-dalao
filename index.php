
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #0b1120;
            color: #e2e8f0;
            line-height: 1.7;
        }

        header {
            background: linear-gradient(135deg, #111c35, #164e63);
            color: white;
            text-align: center;
            padding: 70px 20px;
            border-bottom: 3px solid #06b6d4;
        }

        header h1 {
            font-size: 42px;
            margin-bottom: 8px;
            color: #67e8f9;
        }

        header p {
            color: #cbd5e1;
            font-size: 17px;
        }

        nav {
            margin-top: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px 15px;
            font-weight: 600;
            transition: 0.3s;
        }

        nav a:hover {
            color: #67e8f9;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }

        section {
            background: #172033;
            padding: 30px;
            margin-bottom: 25px;
            border-radius: 15px;
            border: 1px solid #29374f;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        section:hover {
            border-color: #0891b2;
            transform: translateY(-3px);
        }

        h2 {
            color: #22d3ee;
            font-size: 25px;
            margin-bottom: 18px;
            border-left: 4px solid #06b6d4;
            padding-left: 12px;
        }

        section p {
            color: #cbd5e1;
        }

        .skills span {
            display: inline-block;
            background: #164e63;
            color: #a5f3fc;
            padding: 9px 18px;
            margin: 6px;
            border-radius: 25px;
            border: 1px solid #0891b2;
            font-size: 14px;
            transition: 0.3s;
        }

        .skills span:hover {
            background: #0891b2;
            color: white;
        }

        .project {
            background: #1e293b;
            padding: 18px;
            margin-bottom: 15px;
            border-radius: 10px;
            border-left: 4px solid #06b6d4;
        }

        .project h3 {
            color: #67e8f9;
            margin-bottom: 5px;
        }

        footer {
            background: #111c35;
            color: #94a3b8;
            text-align: center;
            padding: 25px;
            border-top: 2px solid #06b6d4;
        }

        @media(max-width: 600px) {
            header h1 {
                font-size: 30px;
            }

            nav a {
                display: inline-block;
                margin: 8px;
            }

            .container {
                padding: 15px;
            }

            section {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>Jhon dalao</h1>
    <p>IT Student | Future Web Developer</p>

    <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<div class="container">

    <section id="about">
        <h2>About Me</h2>
        <p>
            Hello! I am an Information Technology student
            who enjoys learning about computers, programming,
            and modern technology. I am passionate about
            improving my skills and creating useful projects.
        </p>
    </section>

    <section id="skills">
        <h2>My Skills</h2>
        <div class="skills">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>Networking</span>
        </div>
    </section>

    <section id="projects">
        <h2>My Projects</h2>

        <div class="project">
            <h3>Personal Portfolio</h3>
            <p>A website that introduces myself and my skills.</p>
        </div>

        <div class="project">
            <h3>Student Management System</h3>
            <p>A simple system for managing student information.</p>
        </div>

        <div class="project">
            <h3>Web Development Project</h3>
            <p>A website created using HTML, CSS, and PHP.</p>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <p>Email: lloyd.dalao@gmail.com</p>
        <p>Facebook: jhon dalao</p>
    </section>

</div>

<footer>
    <p>© 2026 My Personal Portfolio | All Rights Reserved</p>
</footer>

</body>
</html>
