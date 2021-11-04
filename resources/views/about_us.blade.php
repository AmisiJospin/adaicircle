@include("app.header")
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section>
    <section id="about-us" class="about-us">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6">
            <h2>Adai Circle</h2>
            <h3>Africa Deep Artificial Intelligence Circle</h3>
			Adai Circle was established on Sunday 2nd February, 2020 in Dzaleka Camp – Malawi by Mr. Byamasu Patrick Paul and Amisi Hassan Jospin out of the heart of <i>"We are the change that we want to see"</i> to change the lives of people living with vulnerability.
			Positive change in human life is our delight. As members of Adai Circle we believe in the motto <i>"Build to change"</i>
			<!--<img src="assets/img/logo_two.PNG" alt="" width="250" height="150" />-->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Adai Circle is a technological non-profit organization devoted to teach, empower and equip vulnerable people (orphans, handicaps),
			  students’ dropouts, and those who do not have access to education with skills in computer programming, data science,
			  and artificial intelligence. We work with vulnerable people around the world. The goals of Adai Circle organization are to improve social
			  and economic standard of people in order to foster development in different communities. 
			  By so doing, we make sure that;
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Every orphan should have access to digital literacy in data science and artificial intelligence for the development of our community</li>
              <li><i class="ri-check-double-line"></i> Women and men should get education in technology and have some skills and work in order to provide for their families.</li>
              <li><i class="ri-check-double-line"></i> Every handicap and orphan should be in school, safe and attend classes every day</li>
            </ul>
            <p class="font-italic">
              Adai Circle is guided by the following values: Integrity, Reliability, Responsability, Transparency, Dedication, Unity.
            </p>
          </div>
		</div>
      </div>
    </section>
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Our <strong>Team</strong></h2>
          <p>Adai Circle organization works in the fiducially system to protect it legal responsibility.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('img/team/patrickp.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href="https://wwww.twitter.com/adaicircle"><i class="icofont-twitter"></i></a>
                    <a href="https://wwww.facebook.com/adaicircle"><i class="icofont-facebook"></i></a>
                    <a href="https://wwww.instagram.com/adaicircle"><i class="icofont-instagram"></i></a>
                    <a href="https://wwww.linkedin.com/adaicircle"><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Byamasu Paul Patrick</h4>
                  <span>Co-Founder</span>
                </div>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('img/team/jospin 1.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
            <a href="https://wwww.twitter.com/adaicircle"><i class="icofont-twitter"></i></a>
                    <a href="https://wwww.facebook.com/adaicircle"><i class="icofont-facebook"></i></a>
                    <a href="https://wwww.instagram.com/adaicircle"><i class="icofont-instagram"></i></a>
                    <a href="https://wwww.linkedin.com/adaicircle"><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Amisi Jospin Hassan</h4>
                  <span>Co-Founder</span>
                </div>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('img/team/Imagec.jpeg') }}" width="100%" height="200" class="img-fluid" alt="">
                  <div class="social">
                    <a href="https://wwww.twitter.com/adaicircle"><i class="icofont-twitter"></i></a>
                    <a href="https://wwww.facebook.com/adaicircle"><i class="icofont-facebook"></i></a>
                    <a href="https://wwww.instagram.com/adaicircle"><i class="icofont-instagram"></i></a>
                    <a href="https://wwww.linkedin.com/adaicircle"><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Jack Buyol</h4>
                  <span>Chief Technology Officer</span>
                </div>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('img/team/ramadhan 1.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href="https://wwww.twitter.com/adaicircle"><i class="icofont-twitter"></i></a>
                    <a href="https://wwww.facebook.com/adaicircle"><i class="icofont-facebook"></i></a>
                    <a href="https://wwww.instagram.com/adaicircle"><i class="icofont-instagram"></i></a>
                    <a href="https://wwww.linkedin.com/adaicircle"><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Ramazani Hassan Boateng</h4>
                  <span>Chief Finance Officer</span>
                </div>
              </div>
            </div>  
          </div>
      </div>
    </section>
   
  </main><!-- End #main -->
@include("app.footer")