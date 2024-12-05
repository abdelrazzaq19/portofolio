<?php
include 'config.php';

$query = "SELECT * FROM proyek ORDER BY tanggal DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();
$proyek = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
</head>
<body>
    
    <header class="header">
        <a href="#" class="logo"><span>ABDEL</span>RAZZAQ</a>
        
        <nav class="navbar">
            <a href="#" class="active">Portofolio</a>
            <a href="#" class="active">Expereinces</a>
            <a href="#" class="active">Contact Me</a>
        </nav>
        
        <a href="#" class="contact">contact me</a>
    </header>
    
    <section class="home">
        <div class="home-content">
            <h3></h3>
            
            <h1>
                i'm <span>ABDEL<br /></span>a frontend developer
            </h1>
            
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
                sint sit harum non doloribus quis ea. Tempore expedita distinctio est
                maiores quod. Beatae qui obcaecati vero rerum error officiis dolores.
            </p>
            
            <div class="btn-box">
                <button class="btn-1">hire me</button>
                <button class="btn-2">experiences</button>
                <button class="btn-3">skills</button>
            </div>
        </div>
        <div class="img-box">
            <img src="p.webp" alt="" />
        </div>
    </section>
    
    <section class="about">
        <div class="about-img">
            <img src="kh.jpg" alt="" />
        </div>
        
        <div class="about-content">
            <h2 class="heading">About<span>me</span></h2>
            <h3>frontend <span>Developer</span></h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                soluta? Mollitia, eos obcaecati? Laboriosam ullam esse aliquid,
                eligendi possimus a voluptates! Saepe delectus doloremque accusamus
                provident nisi quidem consequatur possimus?
            </p>
            <a href="#" class="btn-2">experiences</a>
        </div>
    </section>
    
    <section class="skills">
        <div class="skills-img">
            <img src="l.jpg" alt="" />
        </div>
        
        <div class="about-content">
            <h2 class="heading">my<span>skills</span></h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis
                tempora consequatur quis officiis similique labore atque nihil enim
                modi, numquam provident architecto aperiam ipsam vero! Nulla unde iure
                tenetur cupiditate.
            </p>
            <a href="#" class="btn-3">skills</a>
        </div>
    </section>
    
    <section class="contact-form">
        <h2 class="contact-me">contact <span>me</span></h2>
        
        <form action="#">
            <div class="input-box">
                <input
                type="text"
                placeholder="full 
                Name"
                />
                <input type="email" placeholder="Email" />
            </div>
            
            <div class="input-box">
                <input type="number" placeholder="phone number" />
                <input type="email" placeholder="subject" />
            </div>
            
            <textarea name="" id="" cols="30" rows="10" placeholder="your Massege">
                </textarea>
                <input type="submit" value="send Massege" class="btn-1" />
            </form>
        </section>

        <header>
            <a href="add_proyek.php">Tambah Proyek Baru</a>
        </header>
        
        <footer class="footer">
            <div class="social">
                <a href="#"><i class="bx bxl-meta"></i></a>
                <a href="#"><i class="bx bxl-java"></i></a>
                <a href="#"><i class="bx bxl-css3"></i></a>
                <a href="#"><i class="bx bxl-html5"></i></a>
                <a href="#"><i class="bx bx-podcast"></i></a>
            </div>

      <ul class="list">
        <li>
          <a href="#">Skills</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">About me</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
        <li>
          <a href="#">Privacy Policy</a>
        </li>
      </ul>

      <p class="copyright">@ 2023 ABDEL | All Rights Reserved</p>
    </footer>
  </body>
</html>

</body>
</html>
