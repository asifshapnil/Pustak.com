@extends('front.layouts.main')

@section('content')
@if (Auth::check())
    @include('users.layouts.nav')
@else
    @include('front.layouts.book_details_tab')
@endif


<section class="section-about">
<div class="row">
<div class="col-1-of-2 ">
    <div class="details">
        {{-- <a href="#" class=" u-margin-btn right "> <i class="textred icon fas fa-heart"> &nbsp;favourite</i></a> --}}

        <h3 class="heading-tertiary u-margin-bottom-small u-padding-top">Book Name &rarr;      
            <a href="#" class=" u-margin-btn right "> <i class="textred icon fas fa-heart"> &nbsp;favourite</i></a>
        </h3>
        <p class="paragraph">
           {{ $details->title }}
        </p>

        <h3 class="heading-tertiary u-margin-bottom-small">Author Name &rarr;   {{ $details->writers_name }}</h3>
        
        <h3 class="heading-tertiary u-margin-bottom-small">Edition &rarr;  The True story  2018</h3>
        

        <h3 class="heading-tertiary u-margin-bottom-small">Condition &rarr;  Good </h3>
        
        <h3 class="heading-tertiary u-margin-bottom-medium ">ISBN No. &rarr; {{ $details->isbn_no }} </h3>
    
        <a href="#popup" class="btn-text">request Now &rarr;</a>
        <a href="#popup" class="btn-text .u-margin-btn  "> <i class=" icon fab fa-angellist"> &nbsp;</i>suggest book</a>

        <div class="star u-margin-bottom-small">
                 {{-- rating start --}}
            <fieldset class="rating ">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
    {{-- rating end --}}
        </div>

        </div>                
        </div>
        <div class="col-1-of-2">
            <div class="composition">

            @if(isset($image1))
            
                <img 
                srcset="images/{{ $image1 }} 300w, images/{{ $image1 }} 1000w,"
                sizes="(max-width:65.25em) 20vw,(max-width:37.5em) 30vw,300px"
                class="composition__photo composition__photo--p1"
                src="images/{{ $image1 }}" 
                alt="photo 1"
                >
                @endif
                @if(isset($image2))
            
                <img 
                srcset="images/{{ $image2 }} 300w, images/{{ $image2 }} 1000w,"
                sizes="(max-width:65.25em) 20vw,(max-width:37.5em) 30vw,300px"
                class="composition__photo composition__photo--p2"
                src="images/{{ $image2 }}" 
                alt="photo 2"
                >
                @endif
            @if(isset($image3))
                <img 
                srcset="images/{{ $image3 }} 300w, images/{{ $image3 }} 1000w,"
                sizes="(max-width:65.25em) 20vw,(max-width:37.5em) 30vw,300px"
                class="composition__photo composition__photo--p3"
                src="images/{{ $image3 }}" 
                alt="photo 3"
                > 
                @endif    
            </div>
        </div>
    </div>


         
<div class="book-about">
            
    
    <div class="row">
            <div class="col-2-of-3">
                    <h3 class="heading-tertiary u-margin-bottom-small why-should-i"> A summery of the book on my point of view </h3>

                    <div class="text-area u-margin-bottom-small">
                        {{ $details->summery }}
                    </div>
                    <div class="save-button u-margin-bottom-medium">
                 
                    </div> 

            </div>
            
            <div class="col-1-of-3">
                <div class="public">
                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                                <img src="img/nat-8.jpg" alt="person on a tour" class="story__img">
                                <figcaption class="story__caption">Jack Wilson </figcaption>
                            </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small"> completely different now</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>

                    </div>
                </div>
                </div>
            </div>
            
        </div>
        <!-- why you need me -->
        <div class="row">
            <div class="col-2-of-3">
                <h3 class="heading-tertiary u-margin-bottom-small why-should-i">A short description of the hard copy</h3>

                <div class="text-area u-margin-bottom-small">
                    {{ $details->description }}
                </div>
             
            </div>
            
            <div class="col-1-of-3">
                <div class="public">
                    <div class="row">
                        <div class="story">
                            <figure class="story__shape">
                                    <img src="img/nat-9.jpg" alt="person on a tour" class="story__img">
                                    <figcaption class="story__caption">Jack Wilson </figcaption>
                                </figure>
                            <div class="story__text">
                                <h3 class="heading-tertiary u-margin-bottom-small"> completely different now</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

                            </div>
    
                        </div>
                    </div>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-2-of-3">
                <h3 class="heading-tertiary u-margin-bottom-small why-should-i">My conditions for you</h3>

                <div class="text-area u-margin-bottom-small">
                    {{ $details->condition }}
                </div>
             
            </div>
            
            <div class="col-1-of-3">
                <div class="public">
                    <div class="row">
                        <div class="story">
                            <figure class="story__shape">
                                    <img src="img/nat-9.jpg" alt="person on a tour" class="story__img">
                                    <figcaption class="story__caption">Jack Wilson </figcaption>
                                </figure>
                            <div class="story__text">
                                <h3 class="heading-tertiary u-margin-bottom-small"> completely different now</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

                            </div>
    
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        

                    
                
                

    </div> 
    <div class="comment">
            <h3 class="heading-tertiary u-margin-bottom-small u-padding-top storyname">Your Comment &rarr;</h3>

        <textarea class="comment__details  u-margin-bottom-small" name="comment" id="" cols="65" rows="7">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </textarea>
        <div class="save-button u-margin-bottom-medium">
            <a class="save " href="">save</a>
        </div>
    </div>
                            
    
</section>

        
        
<!-- footer    -->
<footer class="footer">
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                     </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Built by saeedsami and my gmail is
                     <a href="#" class="footer__link">saeedsami333@gmail.com</a>
                     .Copyright &copy; by <a href="#" class="footer__link">Saeed Sami</a>. You are 100% allowed to use this website for the both personal and commercial use, but not to claim it as your own design. A credit to the orginal author, saeedsami, is highly appreciated!.
                </p>
            </div>
        </div>
    </footer>


    <!-- popup  -->
    <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <!-- <img src="img/nat-8.jpg"  alt="Tour photo" class="popup__img">
                    <img src="img/nat-9.jpg"  alt="Tour photo" class="popup__img"> -->
        
                    <div class=" popup-nav">
                        <input class="popup-nav__text" type="text" placeholder="Type to search">
                        <a class="popup-nav__btn" href=""><i class="icon fas fa-search"></i></a>
                    </div>
        
                    <h4 class="heading-tertiary u-margin-bottom-small search-text" >Search Book and AUthor!!!</h4>
                      <div class="search-content">
                          <h3 class="heading-tertiary ">Book Name</h3>
                          <p class="u-margin-bottom-small">Love Story</p>
                          <h3 class="heading-tertiary ">Uploaded by</h3>
                          <p class="u-margin-bottom-small"><a class="uploadedby" href="">Mahmud al saeed</a> </p>
                      </div>
                </div>
                <div class="popup__right">
                    <a href="bookdetails.html" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small tab_port"> Available Friends</h2>
                    <table>
                        <tr>
                          <th>MY Friends</th>
                          <th>address</th>
                        </tr>
                        <tr>
                          <td> <a href="">Md. Ariful</a> </td>
                          <td> <a href="">Maria Anders</a> </td>
                        </tr>
                        <tr>
                            <td> <a href="">rijvi</a> </td>
                            <td> <a href="">Maria Anders</a> </td>
                          </tr>
                          <tr>
                            <td> <a href="">shapnil</a> </td>
                            <td> <a href="">Maria Anders</a> </td>
                          </tr>
                    </table>
                </div>
            </div>
        </div>        
     
    </section>
@endsection

@section('custom_js')
    
@endsection