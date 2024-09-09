<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Meta tags pour la page des résultats de recherche -->
  <meta name="description" content="Découvrez les résultats de recherche pour les articles de Blogger. Accédez à des guides de voyage, des aventures et des conseils pour découvrir le monde.">
  <meta name="keywords" content="recherche blog voyage, articles d'aventure, guides de voyage, résultats de recherche, découvrir le monde">
  <meta name="author" content="Nourhane Bendjeddou">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph Meta tags pour les réseaux sociaux -->
  <meta property="og:title" content="Résultats de recherche - Explorez les articles sur le voyage et l'aventure" />
  <meta property="og:description" content="Découvrez les résultats de recherche pour les articles de Blogger. Accédez à des guides de voyage, des aventures et des conseils pour découvrir le monde." />
  <meta property="og:image" content="{{ asset('mainassets/images/logo.png') }}" />
  <meta property="og:url" content="" />
  
  <!-- Twitter Meta tags -->
  <meta name="twitter:card" content="summary_large_image">
  
  <title>Résultats de recherche - Explorez les articles sur le voyage</title>
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
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/user/pages/about">About Us</a></li>
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
      <h1 class="title">Result of Search</h1>
    </div>
  </section>

  <section class="Popular-Post" id="Popular-post">
    <div class="container">
        <div class="design-content">
            @if(isset($searchResults))
                @if($searchResults->isEmpty())
                    <p>No articles found for your search.</p>
                @else
                    @foreach ($searchResults as $article)
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
                @endif
            @endif
        </div>
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
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/user/pages/about">About Us</a></li>
          <li><a href="/user/pages/articles">Articles</a></li>
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

  <!-- Scripts -->
  <script src="{{ asset('mainassets/js/script.js') }}"></script>

</body>
