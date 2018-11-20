
    <div class="primary-nav ">

     <div class="logo">
     <a href="{{ route('front-home') }}"><img class="logoimg" src="{{ asset('images/logo.png') }}" alt="logo"></a>
     </div>
        <div class=" primary-nav__search-input usersearch2">
                <input class="search-input__text" type="text" placeholder="Type to search">
                <a class="search-input__btn" href=""><i class="icon fas fa-search"></i></a>
        </div>
        <div class="primary-nav__button">
                <ul > 
                    <li><a class="btn1 btn2--header" href="{{ route('user-my-page') }}">{{ Auth::user()->fname }}{{ Auth::user()->lname }}</a></li>
                    <li><a class="btn1 btn2--header" href="{{ route('user-logout') }}">Sign Out</a></li>

                </ul>
        </div>
    </div>
