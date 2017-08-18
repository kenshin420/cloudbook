<!DOCTYPE html>
<html>
<title>Cloud BookShelf</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('css/w3.css')}}"/>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">    
<!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BOOKS</a>
    @if(Auth::guest())<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>@endif
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
      </div>

    <div class="w3-right w3-padding-large">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <!--a class="w3-button" href="{{ route('login') }}">LOGIN</a-->
                            <a class="w3-right w3-bar-item w3-button w3-padding-large w3-hide-small" href="{{ route('register') }}">New?  Register Here</a>
                        @else
                        <a href="#" class="w3-bar-item"></a> 
                        <div class="w3-dropdown-hover" style="padding-right: 48px" >
    <button class="w3-button w3-black">{{ Auth::user()->name }}</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
                <div><a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                    class="w3-bar-item w3-button">
                    Logout
                      </a> 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                </form>
                      </div>
                      <a href="/profile/{{ Auth::user()->username }}" class="w3-bar-item w3-button">My Profile</a>
                       <a href="/books/create" class="w3-bar-item w3-button">Upload Books</a>
                       <a href="/books" class="w3-bar-item w3-button">Browse Books</a>
                </div>
              </div>
                            </div>
                                </div>

                        @endif
                    </div>  
                      
    <!--a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a-->
  </div>
</div>

<!-- Navbar on small screens -->
<!--div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div-->

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- show Images -->
  <div class="w3-display-container w3-center">
    <img src="{{asset('images/library.jpg')}}" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Cloud BookShelf</h3>
      <p><b>Your very own online library</b></p>   
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">About Cloud BookShelf</h2>
    <p class="w3-opacity"><i>Books stored on the cloud</i></p>
    <p class="w3-justify">Upload your books, share them with others. Write reviews. Download the one's you want to read
    offline. Build your personal library and read your pdfs wherever you like. Everything's possible here in CloudBookShelf.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p></p>
        <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="" style="width:60%">
      </div>
      <div class="w3-third">
        <p></p>
        <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="" style="width:60%">
      </div>
      <div class="w3-third">
        <p></p>
        <img src="/w3images/bandmember.jpg" class="w3-round" alt="" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">BOOKS</h2>
      <p class="w3-opacity w3-center"><i>You may like:</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Treasure Island <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">The adventures of Tom Sawyer <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">Pinoccio <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="{{asset('images/library3.jpg')}}" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal>
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div-->

  <!-- The login Section -->
  @if (Auth::guest())
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide">LOGIN</h2>
    <!--p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p-->

    <div class="w3-row w3-padding-32">
      
      <div class="w3-container">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            </div>
            <div class="w3-row-padding form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
             @endif
            </div>
          </div>
           <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
          
          <button class="w3-button w3-black w3-section w3-center" type="submit">LOGIN</button>
        </form>
      </div>
      <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
    </div>
  </div>
  @endif
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<!--footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer-->

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
