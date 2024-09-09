<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Dynamic Meta Tags -->
  <meta name="title" content="{{ $article->meta_title }}">
  <meta name="description" content="{{ $article->meta_content }}">
  <meta name="keywords" content="{{ $article->meta_keywords }}">
  <meta name="author" content="Nourhane Bendjeddou">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="{{ $article->meta_title }}" />
  <meta property="og:description" content="{{ $article->meta_content }}" />
  <meta property="og:image" content="{{ asset('images/' . $article->front_image) }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta name="twitter:card" content="summary_large_image">
  
  <title>{{ $article->meta_title }} - Wanderlust Chronicles</title>
  
  <link rel="icon" type="image/png" href="{{ asset('mainassets/images/open-book.png') }}" sizes="32x32">

  <!-- External Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('mainassets/css/style.css') }}">
</head>
<body>
<!-- Header Section (For Articles Page) -->
<header id="header" class="header-articles">
  <div class="container">
    <a href="#" class="logo">
      <img src="{{ asset('mainassets/images/logo.png') }}" alt="BlossomVibes" class="logo-image">
    </a>
    <nav class="navbar">
      <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/user/pages/about">About Us</a></li>
        <li class="active"><a href="/user/pages/articles">Articles</a></li>
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

  <section class="article-landing">
    <div class="container">
        <img class="article-img" src="{{ asset('images/' . $article->front_image) }}" alt="{{ $article->title }}">
    </div>
</section>

<section class="content">
    <div class="container">
        <h2 class="article-title">{{ $article->title }}</h2>
        <h4 class="category">{{ $article->category->category_name }}</h4>
        <p> {{ $article->content }}
        </p>
        <h4 class="date">Date of creation:{{ $article->updated_at->format('F d, Y') }}</h4>

    </div>
</section>


  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-col">
        <h4>Contact the Publisher</h4>
        <ul>
          <li><a href="#">nourhanebndj@gmail.com</a></li>
          <li><a href="https://wa.me/213658934340">+213658934340</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Explore</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/user/pages/about">About Us</a></li>
          <li class="active"><a href="/user/pages/articles">Articles</a></li>
          <li><a href="/user/pages/contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Headquarters</h4>
        <ul>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102080.62320168696!2d7.662062569591307!3d36.91379875316436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007bb034e7571%3A0x28fddce8b255b712!2sAnnaba!5e0!3m2!1sfr!2sdz!4v1725823327476!5m2!1sfr!2sdz" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Follow Us</h4>
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
</html>
