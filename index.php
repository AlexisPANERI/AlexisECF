<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>ECF</title>
</head>
<body class="text-center">
    <header class="py-4">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="#">
                <img src="img/logo.svg" alt="Logo" style="width:75px">
                <p>COMPANY LOGO</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#burgerNav" aria-controls="burgerNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="burgerNav">
                <ul class="navbar-nav">
                    <li class="nav-item text-start pe-3">
                        <a href="#" class="fs-4" style="color: #7e7d7d;border-bottom: 6px solid #f76900;font-family:'Bebas Neue', cursive;">HOME</a>
                        <a href="#">Menu styles</a>
                        <a href="#">Sliders</a>
                        <a href="#">More Features</a>
                    </li>
                    <li class="nav-item text-start pe-3">
                        <a href="#" class="fs-4" style="font-size: 1.2em;color: #7e7d7d;border-bottom: 6px solid #fcd04a;font-family: 'Bebas Neue', cursive;">COMPANY</a>
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Custom Pages</a>
                    </li>
                    <li class="nav-item text-start pe-3">
                        <a href="#" class="fs-4" style="font-size: 1.2em;color: #7e7d7d;border-bottom: 6px solid #9ec64b;font-family:'Bebas Neue', cursive;">PORTFOLIO</a>
                        <a href="#">Two Columns</a>
                        <a href="#">Three Columns</a>
                        <a href="#">More Layout</a>
                    </li>
                    <li class="nav-item text-start pe-3">
                        <a href="#" class="fs-4" style="font-size: 1.2em;color: #7e7d7d;border-bottom: 6px solid #3f91c1;font-family:'Bebas Neue', cursive;">PRODUCT</a>
                        <a href="#">Product Category 1</a>
                        <a href="#">Product Category 2</a>
                        <a href="#">Custom Template</a>
                    </li>
                    <li class="nav-item text-start">
                        <a href="#" class="fs-4" style="font-size: 1.2em;color: #7e7d7d;border-bottom: 6px solid #c078d0;font-family:'Bebas Neue', cursive;">BLOG</a>
                        <a href="#">Post Types</a>
                        <a href="#">Latest News</a>
                        <a href="#">Custom Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <hr/>
    <section class="house justify-content-center">
        <img src="img/interior1.png" alt="">
        <img src="img/interior2.png" alt="">
        <img src="img/interior3.png" alt="">
        <img src="img/interior4.png" alt="">
    </section>
    <hr/>
    <section class="lorem">
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do elusod tempor 
            <a href="" style="text-decoration: underline #f78633;color: rgb(138, 138, 138);">do eius mod tempor</a>
            labore et dolore magna aliqua. Ut enim ad minim veniam.
        </p>
    </section>
    <hr/>
    <div class="articles row justify-content-center gx-0">
        <div class="col-12 col-sm-6 col-md-6 col-lg-2 text-start">
            <article style="border: 1px solid rgb(194, 194, 194);box-shadow: 3px 3px rgba(233, 233, 233, 0.521);">
                <h2>Welcome</h2>
                <span>Lorem ipsus dolor sit amet</span>
                <img class="img-fluid" style="width: 195px;" src="img/clownfish.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec purus tellus, quis pulvinar tortor. Sed mattis lobortis gravida.</p>
                <a href="" style="font-size: 0.8em;font-weight: 700;font-style: italic;font-family: Georgia, 'Times New Roman', Times, serif;color: rgb(148, 148, 148);">read more</a>
            </article>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-2 text-start">
            <article>
                <div>
                    <h2>Latest Work</h2>
                    <span>sub title for home page box</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec purus tellus, quis pulvinar tortor. Sed mattis lobortis gravida.</p>
                </div>
                <div>
                    <h2>Our Products</h2>
                    <span>Lorem ipsus dolor sit amet</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec purus tellus, quis pulvinar tortor. Sed mattis lobortis gravida.</p>
                </div>
            </article>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-start">
            <article>
                <h2>Flexible Pages</h2>
                <span>sub title for home page box</span>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/FGBhQbmPwH8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </article>
        </div>
    </div>
    <hr/>
    <section class="banner py-3">
        <div style="max-width: 990px;margin: 0 auto;" class="d-flex row justify-content-between">
            <div class="col-3 col-sm-12 col-md-6 col-lg-3 text-start">
                <h3>CONTACT DETAILS</h3>
                <div class="d-flex align-items-baseline">
                    <i class="fas fa-home pr-2"></i>
                    <p>63739 street lorem ipsum <br/> City, Country</p>
                </div>
                <div class="d-flex align-items-baseline">
                    <i class="fas fa-phone pr-2"></i>
                    <p>+1 123 312 32 23</p>
                </div>
                <div class="d-flex align-items-baseline">
                    <i class="fas fa-envelope pr-2"></i>
                    <a href="">info@company.com</a>
                </div>
                <div class="d-flex align-items-baseline">
                    <i class="fas fa-life-ring pr-2"></i>
                    <a href="">Support@company.com</a>
                </div>
              </div>
              <div class="col-3 col-sm-12 col-md-6 col-lg-3 text-start">
                  <h3>Twitter Feeds</h3>
                  <span>about 5 hours ago</span>
                  <p>Pragmatic, practical font sizing in CSS <a href="http://t.co/K6m0VzL4">http://t.co/K6m0VzL4</a></p>
              </div>
              <div class="col-3 col-sm-12 col-md-6 col-lg-3 text-start">
                  <h3>Recent Post</h3>
                  <span>01 Mar 2012</span><br/>
                  <b>Gallery Post Tpye</b>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ligula quis urna placerat fermentum...</p>
              </div>
              <div class="col-3 col-sm-12 col-md-6 col-lg-3 text-start">
                  <h3>Widgetized footer</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at felis mi, at auctor mi. Donec vel nibh sem. Etiam ut lacus a dui accumsan accumsan. Aenean vel orci elit.</p>
              </div>
        </div>
    </section>
    <hr/>
    <footer class="my-3">
    <div class="footer d-flex justify-content-between">
      <div class="text-start">
        <a href="#">Press |</a>
        <a href="#">Company Blog |</a>
        <a href="#">Contact Us |</a>
        <a href="#">About Us</a>
        <p style="font-size: 0.7em;font-family: Arial, Helvetica, sans-serif;color: rgb(155, 155, 155);">Copyright © Company Name, Inc.</p>
      </div>
      <div>
        <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
        </span> 
        <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
        </span> 
        <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab fa-flickr fa-stack-1x fa-inverse"></i>
        </span> 
        <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
        </span> 
        <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab fa-dribbble fa-stack-1x fa-inverse"></i>
        </span>
        <span class="fa-stack fa-1x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab fa-google-plus-g fa-stack-1x fa-inverse"></i>
        </span>
      </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>