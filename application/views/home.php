<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    margin-left: -15px;
}
  .navbar-light .navbar-brand  {
    font-family: 'Dosis', sans-serif !important;
    font-weight: 700;
    text-transform: uppercase;
    padding: 0px;
    height: inherit;
    font-size: 36px;
    margin: -14px 0px;
}
.navbar-light .navbar-nav > li > a {
    color: #717f86;
    font-size: 18px;
    font-weight: 700;
}
.navbar-light .navbar-brand {
    color: #5FCF80;
}
.navbar-nav > li > a {
    padding: 0px;
    margin: -7px 5px;
    padding: 10px 15px;
}
.btn {
    background-color: #5FCF80;
    border-radius: 25px;
    color: #ffffff !important;
    border: 1px solid #5FCF80;
}
.carousel-inner img {
    width: 100%;
    
  }
  #testimonial {
    background-color: #111;
}
.section-padding {
    padding: 60px 0px;
}
body {
    font-size: 15px;
    line-height: 1.52;
    color: #717f86;
    font-size: 16px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}
.text-par {
    font-size: 20px;
    padding-bottom: 15px;
}
p {
    margin: 0 0 10px;
}
#testimon {
    margin-right: -15px;
    margin-left: -15px;
}
div {
    display: block;
}
.col-md-3 col-sm-3{
  background-color: white;
}
.text-comment {
    background-color: rgb(255, 255, 255);
    padding: 20px;
}
.header-section text-center {
    text-align: center;
}
.footer {
    padding: 60px 0 20px;
    background: #111;
    color: #ccc;
}

    footer .social-links {
    list-style: none;
    padding: 0;
    margin: 30px 0 40px;
    padding: 40px 0 0;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    display: inline-flex;
}

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">SS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about_us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tracking">Tracking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#refer">Refer & Earn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <a href="<?php echo base_url()?>index.php/user/login" > <li class="btn btn-primary mx-2">Login in</li></a>
          <li><a href="#">Helpline No: 01232-26482</a></li>
          
        </ul>
         
       
      </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="data:image/jpeg;base64,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" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
            <form>
        <div class="container">
           <div class="row">
		   
             <div class=" col-lg-5">
          <div class="form-group">
  
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  </div>
  <div class=" col-lg-5">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  <div class=" col-lg-2 mt-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  </div>
  </div>
</form>
            
            </div>   
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,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" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
            <form>
        <div class="container">
           <div class="row">
		   
             <div class=" col-lg-5">
          <div class="form-group">
  
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  </div>
  <div class=" col-lg-5">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  <div class=" col-lg-2 mt-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  </div>
  </div>
</form>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,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" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
            <form>
        <div class="container">
           <div class="row">
		   
             <div class=" col-lg-5">
          <div class="form-group">
  
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  </div>
  <div class=" col-lg-5">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  <div class=" col-lg-2 mt-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  </div>
  </div>
</form>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      <div class="container my-4">
        <h2 style="text-align: center;">About Us</h1>
        <div class="row">
          <div class="col-3">
          <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
              <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                  <div class="card" style="width: 18rem;">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img src="..." class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>
          
          </div>
      </div>
      <section id="testimonial" class="section-padding">
          <div class="container">
            <div class="row" id="testimon">
              <div class="header-section text-center">
                <h2 class="white"  style="text-align: center;">See What Our People Are Saying?</h2>
                <p class="white"  style="text-align: center;">A better school experience
      for everyone. Starts here....</p>
               
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development.</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development.</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development .</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development.</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              
            </div>
          </div>
        </section>

        <div class ="container my-4">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-box-c">
                          <h3>Terms and Conditions:</h3>
                          <p>
                              <i class="fa fa-map-signs" aria-hidden="true"></i>
                              <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                          </p>
                          <p>
                              <i class="fa fa-mobile" aria-hidden="true"></i>
                              <span>
            +91 80005 89080 
          </span>
                          </p>
                          <p>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <span><a href="#">support@foodfunday.com</a></span>
                          </p>
                      </div>
                      <!-- end footer-box-c -->
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="contact">
                      <div class="footer-box-c">
                          <h3>Contact Us</h3>
                          <p>
                              <i class="fa fa-map-signs" aria-hidden="true"></i>
                              <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                          </p>
                          <p>
                              <i class="fa fa-mobile" aria-hidden="true"></i>
                              <span>
            +91 80005 89080 
          </span>
                          </p>
                          <p>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <span><a href="#">support@foodfunday.com</a></span>
                          </p>
                      </div>
                    </div>
                      <!-- end footer-box-c -->
                  </div>
</div>
<!--Contact-->


 
<!--Footer-->
<footer id="footer" class="footer">
<div class="container text-center">


<!-- End newsletter-form -->

<ul class="social-links">
  <li><a href="#link"><img src="https://img.icons8.com/color/48/000000/facebook-circled.png"></a></li>
  <li><a href="#link"><img src="https://img.icons8.com/color/48/000000/whatsapp.png"></a></li>
  <li><a href="#link"><img src="https://img.icons8.com/color/48/000000/linkedin.png"></a></li>
 
</ul>
<div class="row text-center">
©2019 Harsh Tyagi. All rights reserved
<div class="credits">
 
  Designed by <a href="https://github.com/harshtyagimdr">Harshtyagimdr</a>
</div>
</div>
</div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>