<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Learn more about Wanderlust Chronicles Blog, your ultimate guide to travel, adventure, and discovering the world.">
    <meta name="keywords" content="about us, wanderlust, travel blog, adventure, discovery, travel experiences">
    <meta name="author" content="Nourhane Bendjeddou">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph for Social Media Sharing -->
    <meta property="og:title" content="About Us - Wanderlust Chronicles Blog | Your Travel Hub" />
    <meta property="og:description" content="Discover the team and the story behind Wanderlust Chronicles Blog, your ultimate guide to travel, adventure, and discovering the world." />
    <meta property="og:image" content="{{ asset('mainassets/images/logo.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    
    <!-- Twitter Card Data -->
    <meta name="twitter:card" content="summary_large_image">
    
    <!-- Title & Favicon -->
    <title>About Us - Wanderlust Chronicles Blog</title>
    <link rel="icon" type="image/png" href="{{ asset('mainassets/images/open-book.png') }}" sizes="32x32">
    
    <!-- External Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('mainassets/css/style.css') }}">
</head>
  
<body>
    <header id="header">
        <div class="container">
            <a href="/" class="logo">
                <img src="{{ asset('mainassets/images/logo.png') }}" alt="BlossomVibes" class="logo-image">
            </a>
            <nav class="navbar">
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/user/pages/about">About Us</a></li>
                    <li><a href="/user/pages/articles">Articles</a></li>
                    <li><a href="/user/pages/contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="right-icons">
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100027476321541" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/nourhane-bendjeddou-a4252625b/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/nourhanebndj" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://wa.me/213658934340" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
            </div>
            <i class="fa-solid fa-bars menu-hamburger"></i>
        </div>
    </header>
  
    <section class="landing">
        <div class="container">
            <h1 class="title"><span>About Us -</span> Our Journey to Inspire Your Wanderlust</h1>
            <p>Welcome to Wanderlust Chronicles Blog, your ultimate guide to travel, adventure, and discovery. Our passion for exploring the world drives us to share meaningful travel stories, tips, and guides to inspire your next adventure. Whether you’re a seasoned traveler or just starting your journey, we are here to provide insights, experiences, and advice to make your trips unforgettable. Join us as we explore the world, one destination at a time!</p>
        </div>
    </section>

     <!----About Section----->
  <section class="about">
    <div class="container">
      <img src="{{ asset('mainassets/images/image3.jpg') }}">
      <div class="text">
        <h2>Who Are We?</h2>
        <p>
          We are passionate travelers and storytellers who believe in the power of travel to open minds and create unforgettable experiences. Wanderlust Chronicles is your trusted guide for discovering hidden gems and popular destinations alike. Our goal is to inspire and equip you with the tools you need to make every journey extraordinary.
          Whether you're planning a solo adventure or a family vacation, we provide practical tips, destination guides, and travel insights to make your trips seamless and memorable. Join us as we explore the world and embrace the beauty of travel, one adventure at a time.
        </p>
       </div>
    </div>
  </section>
<section class="galerie">
    <div class="full-img" id="fullImgBox">
        <img src="" id="fullImg">
        <span onclick="closeFullImg()">X</span>
    </div>
    <div class="img-gallery">
        <img src="{{ asset('mainassets/images/img2.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/img3.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/img5.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/image4.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/bali.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/StreetFoods.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/travel.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/FrenchCountryside.jpg') }}" alt="" onclick="openFullImg(this.src)">
        <img src="{{ asset('mainassets/images/img4.jpg') }}" alt="" onclick="openFullImg(this.src)">

    </div>
</section>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-col">
                <h4>Contact the Publisher</h4>
                <ul>
                    <li><a href="mailto:nourhanebndj@gmail.com">nourhanebndj@gmail.com</a></li>
                    <li><a href="https://wa.me/213658934340">+213658934340</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Explore</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/user/pages/about">About Us</a></li>
                    <li><a href="/user/pages/articles">Articles</a></li>
                    <li><a href="/user/pages/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Headquarter</h4>
                <ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102080.62320168696!2d7.662062569591307!3d36.91379875316436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007bb034e7571%3A0x28fddce8b255b712!2sAnnaba!5e0!3m2!1sfr!2sdz!4v1725823327476!5m2!1sfr!2sdz" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </ul>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=100027476321541" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/nourhane-bendjeddou-a4252625b/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/nourhanebndj" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://wa.me/213658934340" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="{{ asset('mainassets/js/script.js') }}"></script>
</body>
