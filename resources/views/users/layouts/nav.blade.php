
    <div class="primary-nav ">
        <div class="col-11">
            <div class="logo">
               <a href="{{ route('front-home') }}"><img class="logoimg ml-md-5" src="{{ asset('images/logo.png') }}" alt="logo"></a>
            </div>
           <div class="primary-nav__button">
               <ul > 
                   <li><a class="btn1 btn2--header" href="{{ route('user-my-page') }}">{{ Auth::user()->fname }}{{ Auth::user()->lname }}</a></li>
                   <li><a class="btn1 btn2--header" href="{{ route('user-logout') }}">Sign Out</a></li>
               </ul>
           </div>

        </div>


    </div>
