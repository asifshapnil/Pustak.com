
    <div class="primary-nav ">
        <div class=" primary-nav__search-input">
                <input class="search-input__text" type="text" placeholder="Type to search">
                <a class="search-input__btn" href=""><i class="icon fas fa-search"></i></a>
        </div>
        <div class="primary-nav__button">
                <ul > 
                    <li><a class="btn1 btn2--header" href="#">{{ Auth::user()->fname }}{{ Auth::user()->lname }}</a></li>
                    <li><a class="btn1 btn2--header" href="{{ route('user-logout') }}">Sign Out</a></li>

                </ul>
        </div>
    </div>
