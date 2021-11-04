@include("app.header")
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 entries">
            @for($i = 0; $i < count($posts); $i++)
            <article class="entry" >
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">                        
                        <img src="{{ asset('posts/'. $posts[$i]['post_image'] .'') }}" width="100%" height="100%">                       
                    </div>
                    <div class="col-lg-8 col-md-4 col-sm-12" style="padding-left: 30px !important;">
                        <h2 class="entry-title">
                            <a href="#">{{ $posts[$i]['post_title'] }}</a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">Jospin Amisi</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2021-01-26">Jan 26, 2021</time></a></li>
                            <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="#">2 Comments</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{ $posts[$i]['post_description'] }}</p>
                            <div class="read-more">
                            <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            @endfor
            <p style="float: right;"> {{ $posts->links() }}</p>
          </div>
        </div>
      </div>
    </section>
  </main>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
@include("app.footer")