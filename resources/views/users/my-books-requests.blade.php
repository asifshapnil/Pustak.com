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
            <h1 class="pt-5 mr-md-5">Requests for my books </h1>

        @foreach ($book as $bookData)
             @php  
                $book = $bookData[0]; 
                $bookImage = $bookData[1];
                $request = $bookData[2];
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
                        
                        <a href="#popup{{ $r_id }}" class="btn-items .u-margin-btn"> <i class=" icon fab fa-angellist"> &nbsp;</i> offers</a>
                        <a href="#" class="btn-items .u-margin-btn  "> <i class=" icon fab fa-angellist"> &nbsp;</i>suggest book</a>
                        <a href="{{ route('user-edit-book', ['title'=>$book->title, 'id'=>$book->id]) }}" class="btn-items .u-margin-btn  "> <i class=" icon fas fa-edit"> &nbsp;</i>edit book</a>               
                    </div>
                </div>
            </div>
        </div>
        {{-- popup --}}
        <div class="popup" id="popup{{ $r_id }}">
                <div class="popup__content">
                    <div class="popup__right">
                        <h2 class="heading-secondary u-margin-bottom-small tab_port"> Available Friends</h2> 
                        <table>
                            <form action="{{ route('store-decission') }}" class="form" method="post">
                                    {{ csrf_field() }}
                                   
                            @foreach ($request as $exg)
                            <tr>
                                <th style="width:50px;">
                                    <input type="hidden" name="from_id" value="{{ $exg->from_id }}">
                                    <input type="hidden" name="exchange_id" value="{{ $exg->exchange_id }}">
                                </th>
                                <th><a target="_blank" href="{{ route('front-book-details',['id'=>$exg->id, 'exchange_id'=>$exg->exchange_id ]) }}">{{ $exg->title }}</a> </th>
                                <th style="width:50px;">{{ $exg->qty }}</th>
                            </tr>
                            @endforeach
                           
                        </table>
                        <div class="popup__close p-5 offset-md-5">
                                <button type="submit" class="btn btn-md btn-text .u-margin-btn">Accept</button>
                            
                            </div>                   
                        </form>
                    </div>
                </div>
            </div>
            {{-- popup --}}
        @endforeach
 
                            
                                
                


    </div>

</section>
        

            


   



    
     
  

  @include('users.layouts.exchangable-offers')
@endsection
