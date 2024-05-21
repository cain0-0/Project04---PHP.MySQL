<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math's website.</title>

    <!-- CSS Import -->
    <link rel="stylesheet" href="css/styles.css">

     <!-- PHP Config Import -->
    <?php require_once 'conn.php'; ?>

</head>

<body>
    <header>
        <div class="navbar">
            <a href="#hero"><span>math</span></a>
            <nav class="nav-list">  
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>          
            </ul>   
            </nav>
            <div class="dmode-button">
                <input type="checkbox" id="darkmode-toggle" onclick="darkMode();"/>
                <label for="darkmode-toggle">
        </div> 
        </div>
        
         

    <section id="hero">
        <div>
            <h1>Hello I'm, <span>math.</span></h1>
            <p>Welcome to my website showcase! Explore my curated collection of projects and discover the passion, creativity, and expertise behind each endeavor. Whether you're seeking 
                inspiration or searching for a trusted partner for your next venture, i invite you to immerse yourself in my website and witness the transformative power of my work.
            </p>
        </div>
        </div>
        <img src="img/math2.png" alt="math" />
        </div>
    </section>
    </header>

    <main>
        <div class="break">
            <img src="img/ghibli2.png">
        </div>
                    
            <section id="aboutme">
                <div class="am-img">
                    <img src="img/hand.jpg" alt="hand">
                </div>
                <div class="aboutme">
                    <h1>How it all began</h1> 
                    <h2>This is my story about how i can find my passion in computer engineering. i'am a young individual whose journey led me to discover my passion in computer engineering. 
                        From a young age, i was drawn to technology, spending countless hours tinkering with computers and gadgets. my fascination with how things worked ignited a spark within 
                        me that only grew brighter as i delved deeper into the world of technology.
                    </h2>
                </div>
            
            </section>

            <section id="blog">
                <h1>Best websites for student!</h1>
                <div class="blog-img-link">
                <?php
                while ($article = $result -> fetch_assoc()){
                    ?>
                       <div class="blog-img-child">
                            <img src="<?php echo $article['img']; ?>" alt=""><br>
                            <a href="<?php echo $article['link']; ?>">Read More. . .</a>
                        </div>
                    <?php
                    }
                    ?>              
                </div>
            </section>

            <section id="gallery">   
                <h1>Gallery</h1>
                <div class="gallery-img">
                    <div class="gallery-img-child">
                    <img src="img/mat1.jpg" alt="saya"width ="350">
                    </div>
                    
                    <div class="gallery-img-child">
                    <img src="img/mat2.jpg" alt="saya"width ="350">
                    </div>

                    <div class="gallery-img-child">    
                    <img src="img/mat3.jpg" alt="saya"width ="350">
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="title">
                    <h1>Contact Me On:</h1>
                </div>
                <div class="contact-container">
                    <div class="contact-card">
                        <i class="fa-brands fa-instagram"></i> 
                        <a href="https://www.instagram.com/cain3_">@cain3_</a>
                    </div>
                    <div class="contact-card">
                        <i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/matthew-darren-81ab24159/">Matthew Darren Sumampouw</a>
                    </div>
                    <div class="contact-card">
                        <i class="fa-solid fa-envelope"></i> 
                        <a href="mailto:matthewdarren97@gmail.com">matthewdarren97@gmail.com</a>
                    </div>
                </div>
            </section>
    </main>

    <footer>
        <section class="footer-card">
            <h2>About</h2>
            <p>Manado, Sulawesi Utara </p>
        </section>

        <section class="footer-card">
            <h2>Links</h2>
            <div class="footer-links">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>