<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/all.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />

</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index" class="brand-logo">BA1R</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index">Home</a></li>
        @if (Auth::check())
        <!-- <li><a href="forums">Forums</a></li> -->
        <li><a href="application">Application</a></li>
        @if (Auth::user()->role == 'Admin')
        <li><a href="admin/dashboard">Admin Panel</a></li>
        @endif
        <li><a href="logout">Logout</a></li>
        @else
        <li><a href="#login">Login</a></li>
        <li><a href="#register">Register</a></li>
        @endif


      </ul>

      <ul id="nav-mobile" class="side-nav">
        @if (Auth::check())
        <li><a href="profile">Profile</a></li>
        <!-- <li><a href="forums">Forums</a></li> -->
        <li><a href="apply">Apply</a></li>
        @if (Auth::user()->role == 'Admin')
        <li><a href="admin/dashboard">Admin Panel</a></li>
        @endif
        <li><a href="logout">Logout</a></li>
        @else
        <li><a href="login">Login</a></li>
        <li><a href="register">Register</a></li>
        @endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  @yield('body')




  <!-- Modals -->
  <div id="login" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <div class="col s12 ">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">perm_identity</i></h2>
            <h5 class="center">Login</h5>
            <div class="row">
              <form method="POST" action="login" class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input type="email" class="validate" name="email">
                    <label >Email</label>
                  </div>
                  <div class="input-field col s6">
                    <input type="password" class="validate" name="password">
                    <label > Password</label>
                  </div>
                </div>
                <input class="btn blue-grey lighten-3" name="login" type="submit" value="Login" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
              </div>
          </div>
        </div>
          <!-- <a href="request">Forgot password?</a> -->
    </div>
    </div>

    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>


  <div id="register" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <form method="POST" action="register" class="col s12">
        <div class="col s12 ">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">person_add</i></h2>
            <h5 class="center">Register</h5>
            <div class="row">
            <div class="row">
              <div class="input-field col s6">
                <input required type="text" class="validate" name="steam_username">
                <label >Steam username</label>
              </div>
              <div class="input-field col s6">
                <input required type="text" class="validate" maxlength="50" name="username">
                <label> In-game username (Surname) </label>
              </div>
            </div>
          </div>
          <div class="row">
                <div class="row">
                  <div class="input-field col s6">
                    <input required type="email" class="validate" name="email">
                    <label for="email" data-error="Please enter a valid email address" data-success="right">Email</label>
                    <label >Email</label>
                  </div>
                  <div class="input-field col s6">
                    <input required id="icon_telephone" type="password" class="validate" name="password">
                    <label > Password</label>
                  </div>
                </div>
                <input class="btn blue-grey lighten-3" type="submit" name="register" value="Register" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
              </div>
          </div>
        </div>
    </div>
    </div>

    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
  <script>

  $(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('.parallax').parallax();

  });


</script>

  </body>
</html>
