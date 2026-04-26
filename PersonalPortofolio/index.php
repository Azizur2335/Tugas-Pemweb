<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Web Portofolio Jijur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container nav">
            <a href="#" class="logo">
                <span class="logo-box">AR</span>
                <span class="logo-text">Azizurrifki</span>
            </a>
            <nav class="navbar" >
                <a href="#Home">Home</a>
                <a href="#About">About</a>
                <a href="project.html">Project</a>
                <a href="#Contact">Contact</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="container hero">
            <div class="hero-text">
                <h1>Hi, I'm <u>Azizurrifki</u> — A Passionate Weebs Coder</h1>
                <p>Saya adalah seorang wibu yang sangat antusias dengan jejepangan dan programming,
                    saya tertarik dengan anime, sejarah, bahasa, dan budaya Jepang namun juga senang dalam programming.
                </p>
                <div class="hero-btn">
                    <a href="#Project" class="btn hitam">View Projects</a>
                    <a href="#Contact" class="btn">Contact Me</a>
                </div>
            </div>
            <div class="hero-img">
                <div class="image-box">
                    <img src="asset/myfotogw.jpg" alt="FotoJijurGanteng">
                </div>
            </div>
        </section>
        <section class="container about" id="About">
            <h2>About</h2>
            <p>
                <br>
                こんにちは!
                <br> <br>
                Perkenalkan nama saya <strong>Azizurrifki</strong>, saya berasal dari Mataram, Nusa Tenggara Barat. Saya adalah seorang
                mahasiswa jurusan Teknik Informatika di Universitas Mataram. Saya menyukai dunia jejepangan seperti
                anime, budaya, bahasa, sejarah, dll, selain itu juga saya menyukai programming sejak saya berkuliah di
                Teknik Informatika, oleh karena itu pada website ini saya menyebut diri saya sebagai "<strong>WeebsCoder</strong>". <br><br>
                Di satu sisi, saya menonton anime, mendengarkan soundtrack dari band jepang favorit saya, dan terkadang
                tenggelam dalam cerita-cerita sejarah jepang yang menarik. Di sisi lainnya, saya senang mempelajari sesuatu
                tentang teknologi, khususnya pemrograman, seperti membuat website dll. <br><br>
                Website ini tidak hanya sekadar tugas, tapi adalah suatu tempat untuk saya bisa berkembang lebih jauh lagi,
                serta sebagai tempat untuk saya menyimpan perjalanan saya dalam membuat website dan mungkin sebagai tempat saya
                bisa mengekspresikan hal-hal yang saya sukai seperti jejepangan. <br><br>
                <h3>Interest:</h3>Anime, Manga, Budaya Jepang, Bahasa jepang, Sejarah Jepang, HTML, CSS, SQL, 
            </p>
        </section>
        <section class="container skill">
            <h2>My Skills</h2>
            <table class="skill-table">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Level</th>
                        <th>Experience</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Japanese Traditional Dance</td>
                        <td>
                            <div class="bar">
                                <div class="fill" style="width:90%"></div>
                            </div>
                            <span class="label">Advanced</span>
                        </td>
                        <td>3 Years</td>
                    </tr>
                    <tr>
                        <td>Acting</td>
                        <td>
                            <div class="bar">
                                <div class="fill" style="width:35%"></div>
                            </div>
                            <span class="label">Beginner</span>
                        </td>
                        <td>4 Months</td>
                    </tr>
                    <tr>
                        <td>Origami</td>
                        <td>
                            <div class="bar">
                                <div class="fill" style="width:65%"></div>
                            </div>
                            <span class="label">Intermediate</span>
                        </td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>Magic Chess</td>
                        <td>
                            <div class="bar">
                                <div class="fill" style="width:90%"></div>
                            </div>
                            <span class="label">Advanced</span>
                        </td>
                        <td>5 Years</td>
                    </tr>
                    <tr>
                        <td>HTML</td>
                        <td>
                            <div class="bar">
                                <div class="fill" style="width:40%"></div>
                            </div>
                            <span class="label">Beginner</span>
                        </td>
                        <td>2 Months</td>
                    </tr>
                    <tr>
                        <td>CSS</td>
                        <td>
                            <div class="bar">
                                <div class="fill" style="width:35%"></div>
                            </div>
                            <span class="label">Beginner</span>
                        </td>
                        <td>2 Months</td>
                    </tr>
                    <tr>
                        <td>SQL</td>
                        <td>
                            <div class="bar">
                                <div class="fill" style="width:50%"></div>
                            </div>
                            <span class="label">Beginner</span>
                        </td>
                        <td>6 Months</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="container contact" id="Contact">
            <h2>Contact</h2>
            <form class="form" action="backendForm.php" method="POST">
                <label>Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
                <label>Email:</label>
                <input type="email" name='email' placeholder="Masukkan Email" required>
                <label>Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                <label>Nomor Telepon:</label>
                <input type="tel" name='telepon' required>
                <label>Pesan:</label>
                <textarea name="pesan" placeholder="Masukkan Pesan" required></textarea>
                <button class="submitBtn" type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer class="footer">
        <hr>
        <div class="container footer">
            © <span id="year"></span> Azizurrifki. All rights reserved.
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>