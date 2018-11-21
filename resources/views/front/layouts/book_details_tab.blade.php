
    <div class="primary-nav">
        <div class="col-11">
                <div class="logo">
                        <a href="{{ route('front-home') }}"><img class="logoimg ml-md-5" src="{{ asset('images/logo.png') }}" alt="logo"></a>
                        </div>
                       <div class=" primary-nav__search-input  usersearch">
                               <input class="search-input__text" type="text" placeholder="Type to search">
                               <a class="search-input__btn" href=""><i class="icon fas fa-search"></i></a>
                       </div>
                       <div class="primary-nav__button">
                           <ul> 
                               <li><a class="btn1 btn2--header userbtn" href="{{ route('front-signUp') }}">Sign Up</a></li>
                               <li><a class="btn1 btn2--header userbtn" href="{{ route('front-signIn') }}">Sign In</a></li>
                           </ul>
                       </div>
        </div>

    </div>