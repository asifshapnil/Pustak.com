@extends('users.layouts.main')

@section('content')
   @include('users.layouts.nav')     


   

  <section class="section-profile" >
   @include('users.layouts.profile-tab')
   <div class="row"> 
       <div class="col-1-of-3">
                   
           <div class="row">
               <div class="profile">
                   <figure class="profile__shape">
                       <img src="{{ asset('images/'.$profile->image) }}" alt="person on a tour" class="profile__img">
                       <figcaption class="profile__caption">{{ $profile->fname }} {{ $profile->fname }} </figcaption>
                    </figure>
                </div>
            </div> 
            <div class="pro">
               <a href="{{ route('add-new-book') }}" class="profile-button .u-margin-btn  "> <i class=" icon fas fa-upload"> &nbsp;</i>upload Book</a>

               <a href="#" class="profile-button .u-margin-btn"><i class=" icon fas fa-upload"> &nbsp;</i>profile</a>

               <a href="#" class="profile-button .u-margin-btn"><i class=" icon fas fa-upload"> &nbsp;</i>upload book</a>
                
               <a href="#" class="profile-button .u-margin-btn"><i class=" icon fas fa-upload"> &nbsp;</i>upload book</a>

           </div> 
   

        </div>
<!-- right side -->
    <div class="col-2-of-3" >
            <h1 class="pt-5 mr-md-5"> Accepted offers I requested </h1>

        @foreach ($book as $bookData)
             @php  
                $book = $bookData[0]; 
                $bookImage = $bookData[1];
                $request = $bookData[2];
                $shipping_address = $bookData[3];

            @endphp
                
            
        {{-- {{ $book->id }}
        {{ $bookImage }} --}}

        <div class="books">
            <div class="mybook">
                <img class="book-image" src="{{ asset('images/'.$bookImage) }}" alt="">
                <div class="description">
                    <a href="#" class="u-margin-btn right "> <i class=" textred icon fas fa-heart"> &nbsp;favourite</i></a>
                    <h3 class="heading-tertiary u-margin-bottom-small ">{{ $book->title }}
                        <sub><a href="{{ route('front-home', ['writer'=> $book->writers_name]) }}" style="color:#6B1717;">{{ $book->writers_name }}</a>  -  <a href="{{ route('front-home', ['cat'=> $book->category_name]) }}" style="color:#6B1717;">{{ $book->category_name }}</a> </sub>
                    </h3>
                    

                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae libero a atque laborum tempore, eum ipsa tempora aspernatur omnis, repellendus quos harum blanditiis praesentium. Repudiandae tempore doloremque fugit maiores doloribus!            
                    </p> 
                    <div class="buttons">
                        @foreach ($request as $key => $item)
                           @if ($key == 0)
                            @php
                                $r_id = '';
                                $r_id = $item->exchange_id;
                            @endphp
                        
                           @endif
                        @endforeach
                        
                        <a href="#popup{{ $r_id }}" class="btn-items .u-margin-btn"> <i class=" icon fab fa-angellist"> &nbsp;</i>my offers was</a>
                        <a href="#shipping{{ $r_id }}" class="btn-items .u-margin-btn  "> <i class=" icon fas fa-edit"> &nbsp;</i>shipping</a>
                        <a href="#ratebook{{ $r_id }}" class="btn-items .u-margin-btn  "> <i class=" icon fas fa-edit"> &nbsp;</i>rate book</a>
                        {{-- <a href="{{ route('book-delete', ['book' => $book->id]) }}" class=""> <i class="icontrash icon fas fa-trash-alt" style="font-size:18px;"> &nbsp;</i></a> --}}
                    </div>
                </div>
            </div>
        </div>
                @include('users.layouts.offer-popup')
                @include('users.layouts.shipping-popup')
                @include('users.layouts.rating-popup')
        @endforeach
          
    </div>

</section>
        

  @include('users.layouts.exchangable-offers')
@endsection

@section('custom_js')
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click', '.rateBtn', function(){
                var getValue = $(this).attr('data-value');
                $(this).parent('.btnParent').parent('.parentCard').children('.parent-form').find('.rateValue').val(getValue);
            })
        })
    </script>
@endsection