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
        @if (isset($exchangeId))
            <a href="" disabled='disabled' class="btn-text .u-margin-btn disabled"> <i class=" icon fab fa-angellist"> &nbsp;</i>Pending</a>
        @else 
            @if (session('requested'))
                <a href="" disabled class="btn-text .u-margin-btn"> <i class=" icon fab fa-angellist"> &nbsp;</i>Requested</a>
            @else
                @if (Auth::check())
                <a href="#popup" class="btn-text .u-margin-btn"> <i class=" icon fab fa-angellist"> &nbsp;</i>Request book</a>
                @else
                    <a href="{{ route('front-signIn', ['id'=>$details->id]) }}" class="btn-text .u-margin-btn"> <i class=" icon fab fa-angellist"> &nbsp;</i>Request book</a>
                @endif
            @endif
        @endif
       

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
            
    
    <div class="row"style="width:100% !important;">
        <div class="col-md-7 p-0">
            <div class="row" style="width:100% !important;">
                <div class="col-12">
                        <h3 class="heading-tertiary u-margin-bottom-small why-should-i"> A summery of the book on my point of view </h3>

                        <div class="text-area u-margin-bottom-small">
                            {{ $details->summery }}
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus et dicta, distinctio voluptate neque obcaecati ut repudiandae accusantium, eos, accusamus alias vero laboriosam officiis labore laborum mollitia recusandae facere enim.
                        </div>
                </div>
                <div class="col-12">
                        <h3 class="heading-tertiary u-margin-bottom-small why-should-i">A short description of the hard copy</h3>

                        <div class="text-area u-margin-bottom-small">
                            {{ $details->description }}
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0">
            <div class="row"  style="width:100% !important;">
                <div class="col-12">
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
                <div class="col-12">
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
                <div class="col-12">
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
            {{-- <div class="col-2-of-3">
                    <h3 class="heading-tertiary u-margin-bottom-small why-should-i"> A summery of the book on my point of view </h3>

                    <div class="text-area u-margin-bottom-small">
                        {{ $details->summery }}
                    </div>

            </div> --}}
            
            {{-- <div class="col-1-of-3">
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
            </div> --}}
            
        </div>
        <!-- why you need me -->
        {{-- <div class="row">
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
         --}}

                    
                
                

    </div>                 
    
</section>

      @include('front.layouts.myBooks_modal')  
   
@endsection

@section('custom_js')
<script type="text/javascript">
    $(document).ready(function(){
        $(".checkbox").on('change',function() {
            $(this).parent('.s-p').parent('.f-p').children('.g-p').find('.qtyDiv').removeClass('hidden');
        
        });
    });

    $('.decrease_btn').on('click', function(){
        var qty = parseInt($(this).parent('.qtyDiv').find('.qtyValue').val());
        if(qty > 1){
            $(this).parent('.qtyDiv').find('.qtyValue').val(qty-1);
        }
    });

     $('.increase_btn').on('click', function(){
        var qty = parseInt($(this).parent('.qtyDiv').find('.qtyValue').val());
            $(this).parent('.qtyDiv').find('.qtyValue').val(qty+1);
    
    });
    </script>
@endsection