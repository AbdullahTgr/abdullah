@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header id="header" class="header">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="text-container">
                      <h1 class="h1-large">I love to create beautiful and efficient websites</h1>
                      <a class="btn-solid-lg page-scroll" href="#about">Discover</a>
                      <a class="btn-outline-lg page-scroll" href="#contact"><i class="fas fa-user"></i>Contact Me</a>
                  </div> <!-- end of text-container -->
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </header> <!-- end of header -->
  <!-- end of header -->


  <!-- About-->
  <div id="about" class="basic-1 bg-gray">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="text-container first">
                      <h2>Hi there I'm Abdullah ,</h2>
                      <p>And I love to create beautiful and efficient websites for my customers. I love going through the entire process with the customer from concept, to design and then development and launch</p>
                  </div> <!-- end of text-container -->
              </div> <!-- end of col -->
              <div class="col-lg-4">
                  <div class="text-container second">
                      <div class="time">2019 - PRESENT</div>
                      <h6>Freelance Web Developer</h6>
                      <p>Working happily on my own web projects</p>
                      <div class="time">2018 - 2019</div>
                      <h6>Lead Web Developer</h6>
                      <p>Beautiful project for a major digital agency</p>
                  </div> <!-- end of text-container -->
              </div> <!-- end of col -->
              <div class="col-lg-4">
                  <div class="text-container third">
                      <div class="time">2017 - 2018</div>
                      <h6>Senior Web Designer</h6>
                      <p>Inhouse web designer for ecommerce firm</p>
                      <div class="time">2016 - 2017</div>
                      <h6>Junior Web Designer</h6>
                      <p>Junior web designer for small web agency</p>
                  </div> <!-- end of text-container -->
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of basic-1 -->
  <!-- end of about -->


  <!-- Services -->
  <div id="services" class="basic-2">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="h2-heading">Offered services</h2>
                  <p class="p-heading">Web design and development have been my bread and butter for more than 3 years. During that time I've discovered that I can help startups and companies with the following services</p>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-4">
                  <div class="text-box">
                      <i class="far fa-gem"></i>
                      <h4>DESIGN</h4>
                      <p>Successful online projects start with good design. It establishes a solid foundation for future development and allows for long term growth</p>
                  </div> <!-- end of text-box -->
              </div> <!-- end of col -->
              <div class="col-lg-4">
                  <div class="text-box">
                      <i class="fas fa-code"></i>
                      <h4>DEVELOPMENT</h4>
                      <p>I can code my own designs or even use the customer's design as base. My focus is to generate clean code that's well structured for reliability</p>
                  </div> <!-- end of text-box -->
              </div> <!-- end of col -->
              <div class="col-lg-4">
                  <div class="text-box">
                      <i class="fas fa-tv"></i>
                      <h4>BASIC SEO</h4>
                      <p>i can setup your project to use basic SEO principles which will push your project to the first page on search engines and save you ads money</p>
                  </div> <!-- end of text-box -->
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of basic-2 -->
  <!-- end of services -->


  <!-- Details -->
<div class="split">
  <div class="area-1">
  </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2 bg-gray">
          <div class="container">    
              <div class="row">
                  <div class="col-lg-12">     
                      
                      <!-- Text Container -->
                      <div class="text-container">
                          <h2>Why Work With Me</h2>
                          <p>I am a great communicator and love to invest the necessary time to understand the customer's problem very well</p>
                          <h5>DEVELOPMENT SKILLS</h5>
                          <p>I am familiar and work on a daily basis with Php, Laravel Framework, Nodejs, HTML, CSS, JavaScript, Bootstrap </p>
                          
                          <div class="icons-container">
                            <img src="images/details-icon-html.png" alt="alternative">
                            <img src="images/details-icon-css.png" alt="alternative">
                            <img src="images/details-icon-bootstrap.png" alt="alternative">
                            <img src="images/details-icon-javascript.png" alt="alternative">
                            <img src="images/details-icon-photoshop.png" alt="alternative">

                            <img src="images/details-icon-laravel.png" alt="alternative">
                            <img src="images/details-icon-nodejs.png" alt="alternative">
                            <img src="images/details-icon-ajax.png" alt="alternative">
                            <img src="images/details-icon-mysql.png" alt="alternative">
                            
                          </div> <!-- end of icons-container -->
                          <br>
                          <h5>DESIGN TOOLS</h5>
                          <p>My favorite design tools are Photoshop and Illustrator </p>
                      </div> <!-- end of text-container -->
                      <!-- end of text container -->

                  </div> <!-- end of col -->
              </div> <!-- end of row -->
          </div> <!-- end of container -->
  </div> <!-- end of area-2 -->
  </div> <!-- end of split -->
  <!-- end of details -->


  <!-- Projects -->
  <div id="projects" class="basic-3">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="h2-heading">Delivered projects</h2>
                  <p class="p-heading">Listed below are some of the most representative projects I've worked on. They range from basic web design for presentation sites to advanced web development for online shops</p>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="text-container">
                      <div class="image-container">
                          <a href="https://elbadrstore.com">
                              <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
                          </a>
                      </div> <!-- end of image-container -->
                      <p><strong>Elbadr Store:</strong> For Machine's parts and accesories <strong>Project:</strong> E-Commerce for Elbadr with full controle panel<a class="blue" href="https://elbadrstore.com">details</a></p>
                  </div> <!-- end of text-container -->
                  <div class="text-container">
                      <div class="image-container">
                          <a href="https://al-namapacking.com/">
                              <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
                          </a>
                      </div> <!-- end of image-container -->
                      <p><strong>Al Namaa :</strong>For Packing And Filling Machines <strong>Project:</strong> Land Page For Thier Company With Professional Controle Panel <a class="blue" href="https://al-namapacking.com/">details</a></p>
                  </div> <!-- end of text-container -->
                  <div class="text-container">
                      <div class="image-container">
                          <a href="https://ieisco.com/">
                              <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
                          </a>
                      </div> <!-- end of image-container -->
                      <p><strong>Innovation </strong> for Engineering and Industrial Solutions <strong>Project:</strong> Land Page For Thier Company With High Professional Controle Panel <a class="blue" href="https://ieisco.com/">details</a></p>
                  </div> <!-- end of text-container -->
                  <div class="text-container">
                      <div class="image-container">
                          <a href="https://spandevelopers.com">
                              <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
                          </a>
                      </div> <!-- end of image-container -->
                      <p><strong>Span </strong> Span For Software Development <strong>Project:</strong>Land Page For Span Company, By the way, I'm the owner of this website, it's for bussiness development <a class="blue" href="https://spandevelopers.com/">details</a></p>
                  </div> <!-- end of text-container -->
                  <div class="text-container">
                      <div class="image-container">
                          <a href="http://profaliebrahim.com/">
                              <img class="img-fluid" src="images/work-4.jpg" alt="alternative">
                          </a>
                      </div> <!-- end of image-container -->
                      <p><strong>Span </strong> Span For Software Development <strong>Project:</strong>Land Page For Span Company, By the way, I'm the owner of this website, it's for bussiness development <a class="blue" href="https://spandevelopers.com/">details</a></p>
                  </div> <!-- end of text-container -->
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of basic-3 -->
  <!-- end of projects -->


  


  <!-- Testimonials -->
  <div class="cards-1">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="h2-heading">A few words from people that chose to work with me</h2>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-12">
                  
                  <!-- Card -->
                  <div class="card">
                      <div class="card-body">
                          <p class="testimonial-text">“Abdullah  is a skilled developer which will do everything possible to deliver the project on time and I really appreciate that”</p>
                          <div class="details">
                              <img src="images/testimonial-1.jpg" alt="alternative">
                              <div class="text">
                                  <div class="testimonial-author">Mostafa</div>
                                  <div class="occupation">Al Namaa Company</div>
                              </div> <!-- end of text -->
                          </div> <!-- end of testimonial-details -->
                      </div>
                  </div>
                  <!-- end of card -->

                  <!-- Card -->
                  <div class="card">
                      <div class="card-body">
                          <p class="testimonial-text">“Loved to work with Abdullah  he's such an awesome developer with great attention to details. He also has a great eye for design”</p>
                          <div class="details">
                              <img src="images/testimonial-2.jpg" alt="alternative">
                              <div class="text">
                                  <div class="testimonial-author">Ziad Tarek</div>
                                  <div class="occupation">Elbadr Store Owner</div>
                              </div> <!-- end of text -->
                          </div> <!-- end of testimonial-details -->
                      </div>
                  </div>
                  <!-- end of card -->

                  <!-- Card -->
                  <div class="card">
                      <div class="card-body">
                          <p class="testimonial-text">“What I'm saying about myself, I'm So passionate about mywork . ”</p>
                          <div class="details">
                              <img src="images/testimonial-3.jpg" alt="alternative">
                              <div class="text">
                                  <div class="testimonial-author">Abdullah Mostafa</div>
                                  <div class="occupation">General Manager - Shifter</div>
                              </div> <!-- end of text -->
                          </div> <!-- end of testimonial-details -->
                      </div>
                  </div>
                  <!-- end of card -->

              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of cards-1 -->
  <!-- end of testimonials -->


  <!-- Section Divider -->
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <hr class="section-divider">
          </div> <!-- end of col -->
      </div> <!-- end of row -->
  </div> <!-- end of container -->
  <!-- end of section divider -->


  <!-- Questions -->
  <div class="accordion-1">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="h2-heading">Frequent questions</h2>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-12">

                  <div class="accordion" id="accordionExample">
                      <div class="card">
                          <div class="card-header" id="headingOne">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  How can I contact you and quickly get a quote for my online project?
                              </button>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                  The best way to reach me is through the contact form of by messaging me on my social media accounts. For a fast quote make sure your provide many project details 
                              </div>
                          </div>
                      </div>
                     
                  </div> <!-- end of accordion -->

              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of accordion-1 -->
  <!-- end of questions -->


  <!-- Contact -->
  <div id="contact" class="form-1 bg-gray">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Contact details</h2>
                  <p class="p-heading">For any type of online project please don't hesitate to get in touch with me. The fastest way is to send me your message using the following email <a class="blue no-line" href="abdullah@spandevelopers.com">abdullah@spandevelopers.com</a> or <a class="blue no-line" href="info@spandevelopers.com">4multijob@gmail.com</a></p>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-12">
                  
                  <!-- Contact Form -->
                  <form id="contactForm">
                      <div class="form-group">
                          <input type="text" class="form-control-input" id="cname" required>
                          <label class="label-control" for="cname">Name</label>
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control-input" id="cemail" required>
                          <label class="label-control" for="cemail">Email</label>
                      </div>
                      <div class="form-group">
                          <textarea class="form-control-textarea" id="cmessage" required></textarea>
                          <label class="label-control" for="cmessage">Project details</label>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="form-control-submit-button">Submit</button>
                      </div>
                  </form>
                  <!-- end of contact form -->

              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of form-1 -->  
  <!-- end of contact -->

@endsection
 