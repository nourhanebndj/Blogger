<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Blogger - Your ultimate guide to travel, adventure, and discovering the world">
  <meta name="keywords" content="blogging, blogger, articles, share, write, read,travel">
  <meta name="author" content="Nourhane Bendjeddou">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Blogger - Your ultimate guide to travel, adventure, and discovering the world" />
  <meta property="og:description" content="Your ultimate guide to travel, adventure, and discovering the world" />
  <meta property="og:image" content="{{ asset('mainassets/images/logo.png') }}" />
  <meta property="og:url" content="" />
  <meta name="twitter:card" content="summary_large_image">
  <title>Blogger - Your Blogging website</title>
  <link rel="icon" type="image/png" href="{{ asset('mainassets/images/open-book.png') }}" sizes="32x32">

  <!-- External Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('mainassets/css/style.css') }}">
</head>

<body>

  <header  id="header">
    <div class="container">
      <a href="#" class="logo">
        <img src="{{ asset('mainassets/images/logo.png') }}" alt="BlossomVibes" class="logo-image">
      </a>
      <nav class="navbar">
        <ul class="nav-links">
            <li class="active"><a href="./">Home</a></li>
            <li><a href="/user/pages/about">About Us</a></li>
            <li ><a href="/user/pages/articles">Articles</a></li>
            <li><a href="/user/pages/contact">Contact us</a></li>
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
      <h1 class = "title">
        <span>Wanderlust.</span> Chronicles Blog
      </h1>
      <p>Your ultimate guide to travel, adventure, and discovering the world</p>
      <form method="GET" action="{{ route('articles.search') }}">
        <input type="text" name="query" class="search-input" placeholder="Search articles...">
        <button type="submit" class="search-btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>
  </section>

  <!----Popular Post----->
  <section class="Popular-Post" id="Popular-post">
    <div class="container">
      <div class="title-container">
        <div class="title">
          <h2>Popular Travels & Adventures</h2>
          <p>Discover the popular journeys and experiences from around the globe.</p>
        </div>
        <a href="/user/pages/articles" class="view-all">View All</a>
      </div>

      <div class="design-content">
        <!-- Loop over the popular articles -->
        @foreach ($popularArticles as $article)
          <div class="design-item">
            <div class="design-img">
              <img src="{{ asset('images/' . $article->front_image) }}" alt="{{ $article->title }}">
              <span>{{ $article->category->category_name }}</span>
            </div>
            <div class="design-title">
              <a href="{{ url('user/pages/article_details', $article->id) }}">{{ $article->title }}</a>
            </div>
            <p class="design-description">{{ \Illuminate\Support\Str::limit($article->content, 100, '...') }}</p>
          </div>
        @endforeach
      </div>
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
      
        <a href="/user/pages/about">
          <button type="button">Read More</button>
      </a>
          </div>
    </div>
  </section>

  <!----Recent Post----->
  <section class="Popular-Post" id="Recent-post">
    <div class="container">
      <div class="title-container">
        <div class="title">
          <h2>Recent Travels & Adventures</h2>
          <p>Discover the latest articles and experiences from around the globe.</p>
        </div>
        <a href="/user/pages/articles" class="view-all">View All</a>
      </div>

      <div class="design-content">
        <!-- Loop over the recent articles -->
        @foreach ($recentArticles as $article)
          <div class="design-item">
            <div class="design-img">
              <img src="{{ asset('images/' . $article->front_image) }}" alt="{{ $article->title }}">
              <span>{{ $article->category->category_name }}</span>
            </div>
            <div class="design-title">
              <a href="{{ url('user/pages/article_details', $article->id) }}">{{ $article->title }}</a>
            </div>
            <p class="design-description">{{ \Illuminate\Support\Str::limit($article->content, 100, '...') }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>
<section class="subscribtion">
    <div class="container">
      <h2>Subscribe to our newsletter for the newest articles</h2>
      @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
      @endif
      <form method="POST" action="/subscribe">
        @csrf 
        <input type="email" name="email" placeholder="Type your email here.." required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </section>
  

  <!--Footer--->
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
        <h4>Explorate</h4>
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li ><a href="/user/pages/about">About Us</a></li>
          <li><a href="/user/pages/articles">Articles</a></li>
          <li><a href="/user/pages/contact">Contact Us</a></li>
        </ul>  
      </div>
      <div class="footer-col">
        <h4>Headquarter</h4>
        <ul>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102080.62320168696!2d7.662062569591307!3d36.91379875316436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007bb034e7571%3A0x28fddce8b255b712!2sAnnaba!5e0!3m2!1sfr!2sdz!4v1725823327476!5m2!1sfr!2sdz" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </ul>
      </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100027476321541" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://www.linkedin.com/in/nourhane-bendjeddou-a4252625b/" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="https://github.com/nourhanebndj" target="_blank"><i class="fa fa-github"></i></a>
          <a href="https://wa.me/213658934340" target="_blank"><i class="fa fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>
<!---Script---->
<script src="{{ asset('mainassets/js/script.js') }}"></script>

</html>
