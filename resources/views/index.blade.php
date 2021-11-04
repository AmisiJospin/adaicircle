@include("app.header")
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url({{ asset('img/slide/slide-adai-1.JPG') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Adai <span>Circle</span></h2>
                <p>It was etablished out of the heart of <i>"We are the change that we want to see". </i> 
                    We believe that teaching the refugees technology is the only way of which refugees and the most vulnerable people can be
                    able to change their life and become self-reliant. <i>"Build to change"</i>.</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                </div>
            </div>
            </div>
            <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-adai-2.JPG') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Our mission</h2>
                <p>Is to bridge the technological gap that exists in refugees communities, and bring hope to young people by teaching them the most demanded skills through Hardware design and development, Software design and development, as well as Artificial Intelligence and Data Science to help them be self-reliant. </p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                </div>
            </div>
            </div>
            <div class="carousel-item" style="background-image: url({{ asset('img/slide/vision.JPG') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Our vision</h2>
                <p>To decrease illiterate poverty and unemployment rate which attack the vulnerable people in the world through technology.</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                </div>
            </div>
            </div>
            <div class="carousel-item" style="background-image: url({{ asset('img/slide/values.JPG') }});">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Our values</h2>
                <p>Adai Circle is guided by the following values: Integrity, Reliability, Responsability, Transparency, Dedication, Unity.</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                </div>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        </div>
    </section>
    <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">
        <div class="section-title">
          <h2>About Us</strong></h2>
        </div>
        <div class="row content">
          <div class="col-lg-6" style="padding-right: 20px;">
            <h2>Adai Circle</h2>
            <h3>Africa Deep Artificial Intelligence Circle</h3>
			Adai Circle was established on Sunday 2nd February, 2020 in Dzaleka Camp – Malawi by Mr. Byamasu Patrick Paul and Amisi Hassan Jospin out of the heart of <i>"We are the change that we want to see"</i> to change the lives of people living with vulnerability.
			Positive change in human life is our delight. As members of Adai Circle we believe in the motto <i>"Build to change"</i>
			<!--<img src="assets/img/logo_two.PNG" alt="" width="250" height="150" />-->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Adai Circle is a technological organization devoted to teach, empower and equip young people, and those who do not have access to education with skills in Hardware design and development, Software design and development, data science,
			  and Artificial Intelligence. We work with vulnerable people around the world like refugees. The goal of Adai Circle is to improve technology access
			  and economic standard of marginalized people in order to foster development in different communities through adavancement of technolgy. 
			  By so doing, we make sure that;
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Every orphan have access to the skills like digital literacy, computer programming, and robotics for the development of our community</li>
              <li><i class="ri-check-double-line"></i> Women and men build a strong knowledge in hardware and software design to help them get a job anywhere in the world and be able to support their families.</li>
              <li><i class="ri-check-double-line"></i> Every handicap and orphan should be in school, safe and attend classes every day through our foundation.</li>
            </ul>
            <p class="font-italic">
              Adai Circle is guided by the following values: Integrity, Reliability, Responsability, Transparency, Dedication, Unity.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Services</strong></h2>
          <p>We provide education and workspace for entrepreneurs and professional who need to get their work done. <br>
          <br><span>The workspace include: </span> <br> <br>
              <ol class="list-group" style="text-align: center; font-weight: bold;">
                <li class="list-item">Design Studio for hardware and software designer who are able to create solution and bring new innovation for the adavancement of technology in Africa. </li> <br>
                <li class="list-item">Ours education servirces are based on the standard level of education, where by we build people from beginner level to expert level in the following programs: </li>
              </ol>
            </p>     
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box" style="padding: 0px;">
              <div class="c-image">
                <img src="{{ asset('img/slide/slide_five.jpeg') }}" width="100%" height="100%" alt="" srcset="">               
              </div>
              <div style="margin: 10px; padding: 10px;">
                <h4 class="c-text-align"><a href="">Digital Literacy</a></h4>
                <p class="c-text-align">We give access to everyone to learn basics of computer, this package range from understanding how computer works to
                    understanding of the how to use Microsoft 365 Office Package(Microsoft Word, Speadsheet, PowerPoint and Publisher). Student who take this 
                    class are given time to face different challenges to help them master basic knolwdege of computer. <br><br> The topics ranges from Typing, Microsoft Windows, 
                    Microsoft 365 Office to Internet.</p>
                    <div class="text-center"><a href="" class=" read-more">Read More</a></div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" style="padding: 0px;">
                <div class="c-image">
                    <img src="{{ asset('img/computer scicence.jpg') }}" width="100%" height="100%" alt="" srcset="">               
                </div>
                <div style="margin: 10px; padding: 10px;">
                    <h4 class="c-text-align"><a href="">Fundamentals of CS</a></h4>
                    <p class="c-text-align">In this course we introduce the Fundamentals of Computer Science, students will be introduced into basic computer programming concepts in C and C++, they will even go beyond the basics to some advanced concept
                        of Object Oriented Programming. After that, they they will then be introduced into some more advanced concept of Data Structures and Algorithms to help them become professional in writing programs 
                        and to be able to win any programming interview in any company in the world. </p>
                    <div class="text-center"><a href="" class="read-more">Read More</a></div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box" style="padding: 0px; padding-bottom: 20px !important;">
              <div class="c-image">
                <img src="{{ asset('img/web dev.png') }}" width="100%" height="100%" alt="" srcset="">               
              </div>
              <div style="margin: 10px; padding: 10px;">
                <h4 class="c-text-align"><a href="">Web Development</a></h4>
                <p class="c-text-align">This course is a career path course, student who have taken fudamentals of computer science can then take this course to start their 
                    career in web development. This course teaches how to design and develop a web application using Python, Django and Relational Databases. Student will will learn how to also 
                    integrate APIs in their web application, and after completion of this course student will be able to design, build and debug software product and send them to production using
                    Heroku.</p>
                <div class="text-center"><a href="" class=" read-more">Read More</a></div>
             </div>
             </div>
            </div> 
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">  
                <div class="icon-box" style="padding: 0px; padding-bottom: 20px !important;" >
                    <div class="c-image">
                        <img src="{{ asset('img/girls.JPG') }}" width="100%" height="100%" alt="" srcset="">               
                    </div>
                    <div style="margin: 10px; padding: 10px;">
                        <h4 class="c-text-align"><a href="">Girls and Kids In Technology</a></h4>
                        <p class="c-text-align"> 
                            We advocate and give special access to women, girls and children to get into technology. This program was specifically
                            designed to help and encourage girls to get into technolgy and be able to build technological solutions that matters. 
                            <br>In this course, girls will learn basic programming and robotics in Scratch and MIT App Invetor where by they can be able
                            to design software to control their designed Robots. <br>After completion of this course Girls are then given access to also help others into building technolgy of the future.   </p>
                        <div class="text-center"><a href="" class="read-more">Read More</a></div>
                    </div>
                </div>  
            </div>  
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" style="padding: 0px; padding-bottom: 20px !important;">
              <div class="c-image">
                <img src="{{ asset('img/robotics.JPG') }}" width="100%" height="100%" alt="" srcset="">               
              </div>
              <div style="margin: 10px; padding: 10px;">
                <h4 class="c-text-align"><a href="">Embedded Robotics</a></h4>
                <p class="c-text-align">In this course, student will get hands-on experience working with Arduino, Raspbery Pi and other microcontroller devices. They will even go beyond using 
                a microcontroller like Arduino to designing their own Hardware starting with Schematic design, Printed Circuit Board design, to writing firmware for their own designed hardware. 
                This course was specifically designed to those students who are aspired in Embedded Systems design and Robotics. And by the end of this course, student will be able to Design, Build and Debug real-time embedded systems.</p>
                <div class="text-center"><a href="" class="read-more">Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box" style="padding: 0px; padding-bottom: 20px !important;">
                    <div class="c-image">
                        <img src="{{ asset('img/data science.jpg') }}" width="100%" height="100%" alt="" srcset="">               
                    </div>
                    <div style="margin: 10px; padding: 10px;">
                        <h4 class="c-text-align">ML and Data Science</a></h4>
                        <p class="c-text-align">
                            Machine Learning and Data Science are the most growing field in today's world. This course is being designed 
                            to help students who are aspired in applying Machine Learning to solve complicated problems.
                            This course covers different topics from Data Science to Machine Learning; it start with Data Analysis libraries to ML 
                            algorithms like Linear Regression, Logistic Regression, Neural Network, Support Vector Machine, K-Mean Clustering etc. After completion of this course, student will be able to 
                            design and apply ML algortihm in Computer Vision and Natural Language Processing.
                            <div class="text-center"><a href="" class="read-more">Read More</a></div>
                        </p>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@include("app.footer")
