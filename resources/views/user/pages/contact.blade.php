<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="Contact Blogger to share your travel experiences or inquire about collaborations.">
  <meta name="keywords" content="blogging, contact blogger, collaborations, travel, articles">
  <meta name="author" content="Nourhane Bendjeddou">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph for Social Media Sharing -->
  <meta property="og:title" content="Contact Us - Blogger | Your Travel Hub" />
  <meta property="og:description" content="Reach out to Blogger to share your ideas or inquire about collaborations." />
  <meta property="og:image" content="{{ asset('mainassets/images/logo.png') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  
  <!-- Twitter Card Data -->
  <meta name="twitter:card" content="summary_large_image">
  
  <!-- Title & Favicon -->
  <title>Contact Us - Blogger | Your Blogging Hub</title>
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
          <a href="#" class="logo">
              <img src="{{ asset('mainassets/images/logo.png') }}" alt="BlossomVibes" class="logo-image">
          </a>
          <nav class="navbar">
              <ul class="nav-links">
                  <li><a href="/">Home</a></li>
                  <li><a href="/user/pages/about">About Us</a></li>
                  <li><a href="/user/pages/about">Articles</a></li>
                  <li class="active"><a href="/user/pages/contact">Contact us</a></li>
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
          <h1 class="title"><span>Contact Us -</span> Let's Explore Together!</h1>
          <p>Thank you for reaching out to Wanderlust Chronicles Blog, your gateway to extraordinary travel experiences. Whether you have questions, collaboration ideas, or simply want to share your adventures, we're excited to connect with fellow explorers. Please fill out the form below or reach us via email. We look forward to hearing from you and embarking on new adventures together!</p>
      </div>
  </section>

  <section class="contact">
      <div class="container">
          <div class="left">
              <div class="form-wrapper">
                  <div class="contact-heading">
                      <h1>Let's work together<span>.</span></h1>
                      <p class="text">Or reach us via <a href="mailto:nourhanebndj@gmail.com">nourhanebndj@gmail.com</a></p>
                  </div>

                  @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
            <form action="{{ route('contact.send') }}" class="contact-form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-wrap input">
                    <input type="text" class="contact-input" autocomplete="off" name="first_name" required>
                    <label>First Name</label>
                    <i class="icon fa-regular fa-address-card"></i>
                </div>
                <div class="input-wrap input">
                    <input type="text" class="contact-input" autocomplete="off" name="last_name" required>
                    <label>Last Name</label>
                    <i class="icon fa-regular fa-address-card"></i>
                </div>
                <div class="input-wrap w-100">
                    <input type="email" class="contact-input" autocomplete="off" name="email" required>
                    <label>Email</label>
                    <i class="icon fa-regular fa-envelope"></i>
                </div>
                <div class="input-wrap textarea w-100">
                    <textarea class="contact-input" autocomplete="off" name="contact_message" required></textarea>
                    <label>Message</label>
                    <i class="icon fa-solid fa-inbox"></i>
                </div>
                <div class="contact-buttons">
                    <input type="submit" value="Send Message" class="btn">
                </div>
            </form>
              </div>
          </div>
          <div class="right">
              <div class="image-wrapper">
                  <img src="{{ asset('mainassets/images/image4.jpg') }}" class="img" alt="Image Description">
                  <div class="wave-wrap">
                      <svg class="wave" viewBox="0 0 783 1536" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path id="wave" d="M236.705 1356.18C200.542 1483.72 64.5004 1528.54 1 1535V1H770.538C793.858 63.1213 797.23 196.197 624.165 231.531C407.833 275.698 274.374 331.715 450.884 568.709C627.393 805.704 510.079 815.399 347.561 939.282C185.043 1063.17 281.908 1196.74 236.705 1356.18Z" />
                      </svg>
                  </div>
              </div>
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
                <li><a href="/">Home</a></li>
                <li ><a href="/user/pages/about">About Us</a></li>
                <li><a href="/user/pages/articles">Articles</a></li>
                <li class="active"><a href="/user/pages/contact">Contact Us</a></li>
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
