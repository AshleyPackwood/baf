@extends('layouts.main')
@section('title', 'BA1P')

@section('body')
<div id="index-banner" class="parallax-container" style="height: 550px">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center white-text">BA 1 RIFLES Military Simulation Unit</h1>
      <div class="row center">
        <h5 class="header col s12 light"> A new Arma 3 community aiming to offer a high quality realistic military simulation experience </h5>
      </div>
      <div class="row center">
        <a href="#register" class="btn-large waves-effect waves-light  blue-grey lighten-3">Join now!</a>
      </div>
      <br><br>

    </div>
  </div>
  <div class="parallax"><img class="parallax-image" src="images/parallaximage1.png" alt="An in-game picture"></div>
</div>


<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m6">
        <div class="icon-block">
          <h2 class="center black-text"><i class="material-icons">recent_actors</i></h2>
          <h5 class="center">About Us</h5>

          <p class="light"> BA1R MilSim Unit is a new ARMA 3 realism unit based off of the British Army's historic 1st Battalion Rifles. The Rifles Regiment of the British Army is expected to be deployed worldwide in short notice, hence the MilSim Unit will demand high quality professionalism and soldiery when deployed on operations of varying circumstances. Demonstrating exemplary teamwork and communication as well as skill when on tasks. </p>
          <p class="light"> That being said, you do not need to have any military or ARMA experience to join this Unit; however knowing the basics is essential. Our aim is to offer an oppurtunity for individuals to be exposed to a military atmosphere at the comfort of your own homes. However, the Unit is not for those who are not ready to break out of their comfort zone. </p>
          <p class="light"> Our Unit is open to all those above the age of 16; and our applicants are expected to be prepared to take on criticism and have a will to learn as they progress through their careers with us. </p>
        </div>
      </div>

      <div class="col s12 m6">
        <div class="icon-block">
          <h2 class="center black-text"><i class="material-icons">info_outline</i></h2>
          <h5 class="center">How We Operate</h5>

          <p class="light"> Upon joining the Unit, you will go through a 3 stage training course followed by an Exercise which is considered as an assessment. During the training period, we will teach you how your role within the Unit will play out. The basics of weapon handling and communication as well as overall teamwork and simple strategy. </p>
          <p class="light"> We aim to make sure everyone is exposed to experience that helps them develop as better individuals, tacticians and soldiers. </p>
          <p class="light"> Upon completion of the training course, you are officially considered apart of the BA1R; and are allowed to attend major events. This does not mean that those undergoing the training phase are excluded from operations. Throughout the week we will offer small scale tasks and exercises that is open to those undertaking the training phase.  </p>
          <p class="light"> The unit operates under a strict regimental regime when on-duty and in an informal manner when off-duty. </p>
        </div>
      </div>

  </div>
</div>
</div>


<div class="parallax-container valign-wrapper" style="height: 550px">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light"> “Never discourage anyone who continually makes progress, no matter how slow.” ― Plato </h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img class="parallax-image" src="images/parallaximage2.png" alt="An in-game picture"></div>
</div>

<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s16">
        <div class="icon-block">
          <h2 class="center black-text"><i class="material-icons">contact_mail</i></h2>
          <h5 class="center">Contact us</h5>
          <p class="light"> If you can offer more towards the development of the Unit please message <a href="http://steamcommunity.com/id/herratik/">[BA1R] Cpt.Z.Hayes </a> via Steam directly, all other enquires should be sent via the provided system. </p>
          <div class="row">
            <div class="col s12 ">
              <div class="icon-block">
                <h6 >Contact the web master</h6>
                <div class="row">
                  <form method="POST" action="contact" class="col s12">
                    <div class="row">
                      <div class="input-field col s6">
                        <input type="email" class="validate" name="email" required="required">
                        <label >Email</label>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input type="text" class="validate" name="subject" required="required">
                          <label >Subject</label>
                        </div>
                      <div class="input-field col s12">
                        <textarea id="icon_prefix2" class="materialize-textarea" required="required" name="message"></textarea>
                        <label > Message</label>
                      </div>
                    </div>
                    <input class="center-align btn blue-grey lighten-3" name="contact" type="submit" value="Contact" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="parallax-container valign-wrapper" style="height: 550px">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light"></h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img class="parallax-image" src="images/parallaximage3.png" alt="An in-game picture"></div>
</div>


@endsection
