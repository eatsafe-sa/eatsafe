@extends('layouts.main')

@section('topscript')
<style>
  body {
    background-image: url('/img/denim-texture.jpg');
  }

  .entry {
    background: radial-gradient(#EFF, #DEE);
    color: #222;
    padding: 20px !important;
    border-radius: 10px;
    font-size: 14pt;
    border: 4px solid #222;
    box-shadow: 4px 4px 10px #222;
  }

</style>

@stop

@include('layouts.nav')
@section('content')

<div class="container marketing">
	<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-sm-4">
          <img class="img-circle profile-pic" src="/img/travis.jpg" alt="Generic placeholder image">
          <h2 class="text-center">Travis</h2>
          <div class="entry">
            <p class="text-justify">Travis is a web programmer, musician, respiratory therapist, writer, and artist.  He probably saw 'Buckaroo Banzai' too many times as a kid.  He is a lifelong Seattle Seahawks fan, and isn't sure how to handle their recent success.  Codeup has provided an opportunity to fill gaps in his self-taught knowledge, and has been an excellent networking opportunity.</p>
            <a class="btn btn-social-icon btn-lg btn-github" href="https://github.com/travtex" target="_blank"><i class="fa fa-github-alt"></i></a>
            <a class="btn btn-social-icon btn-lg btn-linkedin" href="https://www.linkedin.com/in/travisflatt" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a class="btn btn-social-icon btn-lg btn-twitter" href="https://twitter.com/StudioQuixotic" target="_blank"><i class="fa fa-twitter"></i></a><br />
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <img class="img-circle profile-pic" src="/img/mario.jpg" alt="Generic placeholder image">
          <h2 class="text-center">Mario</h2>
          <div class="entry">
            <p class="text-justify">Mario is an MBA professional, former Marine, certified personal trainer, Arsenal FC fan, long-suffering New York Knicks fan, lover of all things hard rock and heavy metal, and an avid reader. He considers Codeup a reboot of his life, although when choosing an actor to portray him, Ben Affleck would definitely not be on that list.</p>
            <a class="btn btn-social-icon btn-lg btn-github" href="https://github.com/mariom1231" target="_blank"><i class="fa fa-github-alt"></i></a>
            <a class="btn btn-social-icon btn-lg btn-linkedin" href="http://www.linkedin.com/in/mariom1231/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a class="btn btn-social-icon btn-lg btn-twitter" href="https://twitter.com/MarioM_1231" target="_blank"><i class="fa fa-twitter"></i></a><br />
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4 ">
          <img class="img-circle profile-pic" src="/img/chris.jpg" alt="Generic placeholder image">
          <br/><h2 class="text-center">Chris</h2>
            <div class="entry">
            <p class="text-justify">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a class="btn btn-social-icon btn-lg btn-github" href="https://github.com/Chris-Reyna" target="_blank" ><i class="fa fa-github-alt"></i></a>
            <a class="btn btn-social-icon btn-lg btn-linkedin" href="https://www.linkedin.com/in/christopherreyna" target="_blank"><i class="fa fa-linkedin"></i></a><br />
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <br/> 
</div>

@stop