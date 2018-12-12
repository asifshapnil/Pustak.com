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
    
        <a href="#contacts_{{ $details->id }}" class="btn-items .u-margin-btn  "> <i class=" icon fab fa-angellist text-white"> &nbsp;</i>suggest book</a>
        @if (isset($exchangeId))
            <a href="" disabled='disabled' class="btn-text .u-margin-btn disabled"> <i class=" icon fab fa-angellist text-white"> &nbsp;</i>Pending</a>
        @else 
            @if (session('requested'))
                <a href="" disabled class="btn-text .u-margin-btn"> <i class=" icon fab fa-angellist text-white"> &nbsp;</i>Requested</a>
            @else
                @if (Auth::check())
                <a href="#popup" class="btn-text .u-margin-btn"> <i class=" icon fab fa-angellist text-white"> &nbsp;</i>Request book</a>
                @else
                    <a href="{{ route('front-signIn', ['id'=>$details->id]) }}" class="btn-text .u-margin-btn text-white"> <i class=" icon fab fa-angellist"> &nbsp;</i>Request book</a>
                @endif
            @endif
        @endif
       
        @if (isset($avg))
         @php
             $avg = $avg
         @endphp
         
        @else
        @php
             $avg = 0
         @endphp
           
        @endif
        <div class="star u-margin-bottom-small">
                {{-- rating start --}}
                <span class="fa fa-star {{ $avg > 0 ? 'checked':'' }}"></span>
                <span class="fa fa-star {{ $avg > 1 ? 'checked':'' }}"></span>
                <span class="fa fa-star {{ $avg > 2 ? 'checked':'' }}"></span>
                <span class="fa fa-star {{ $avg > 3 ? 'checked':'' }}"></span>
                <span class="fa fa-star {{ $avg > 4 ? 'checked':'' }}"></span>
                {{-- rating end --}}
        </div>
        {{--  --}}
        <div id="share"></div>


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
                                        <img src="{{ asset('images/book2.jpg') }}" alt="person on a tour" class="story__img">
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
                                        <img src="{{ asset('images/book2.jpg') }}" alt="person on a tour" class="story__img">
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
                                        <img src="{{ asset('images/book2.jpg') }}" alt="person on a tour" class="story__img">
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
                                    <img src="{{ asset('images/book2.jpg') }}" alt="person on a tour" class="story__img">
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
    
    {{-- popup --}}
    <div class="popup" id="contacts_{{ $details->id }}">
        <div class="popup__content">
            <div class="popup__right">
                    <a href="{{ route('front-book-details', ['id' =>  $details->id ]) }}" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small tab_port"> Offer to you for the book </h2> 
                <table>
                    <form action="{{ route('store-suggestion') }}" class="form" method="post">
                            {{ csrf_field() }}
                    @if (isset($contacts))           
                    @foreach ($contacts as $contact)
                    <tr>
                        <th style="width:50px;">
                            <input type="checkbox" name="suggest_id[]" value="{{ $contact->user_id }}" required>
                            <input type="hidden" name="book_id" value="{{ $details->id }}">
                        </th>
                        <th>
                            <p>{{ $contact->fname }} {{ $contact->lname }}</p>
                        </th>
                        <th>
                            <p>{{ $contact->email }}</p>
                        </th>
                    </tr>
                    @endforeach
                    @endif
                   
                </table>
                <div class="popup__close p-5 offset-md-5">
                        <button type="submit" class="btn btn-md btn-text .u-margin-btn">Suggest</button>
                    
                    </div>                   
                </form>
            </div>
        </div>
    </div>
    {{-- popup --}}
    
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
      <script type="text/javascript">
            $(function(){
                var linkurl = "http://127.0.0.1:8000";
                $("#share").jsSocials({
                    url : linkurl,
                    text : "from pustak",
                    showLabel : false,
                    showCount : false,
                    shareIn : 'popup',
                    shares: ["email", "twitter", "facebook"]
                });
            });
        
    </script>
@endsection