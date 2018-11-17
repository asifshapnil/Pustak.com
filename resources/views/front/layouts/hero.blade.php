<header class="header" style="background-image:url({{url('images/paul-schafer.jpg')}})">
   <div class="header__search-box">
       <input class="search-box-text" type="text" placeholder="Type to search">
       <a class="search-box-btn" href=""><i class="icon fas fa-search"></i></a>
   </div>
   <div class="header__main-nav">
       <ul >
            @if (Auth::check())
                <li><a class="btn1 btn2--header" href="{{ route('user-my-page') }}">{{ Auth::user()->fname }}{{ Auth::user()->lname }}</a></li>
                <li><a class="btn1 btn2--header" href="{{ route('user-logout') }}">Sign Out</a></li>
            @else
                <li><a class="btn1 btn2--header" href="{{ route('front-signUp') }}">Sign Up</a></li>
                 <li><a class="btn1 btn2--header" href="{{ route('front-signIn') }}">Sign In</a></li>

            @endif
       </ul>
   </div>

   <div class="header__text-box">

       <div class="heading-text">"A room without books is like a body without a soul".</div>
       <div class="heading-text__sub">― Marcus Tullius Cicero</div>

   </div>


</header>
