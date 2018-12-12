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
                       <figcaption class="profile__caption">{{ $profile->fname }} {{ $profile->lname }}</figcaption>
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
        @foreach ($book_data as $bookData)
             @php  
                $book = $bookData[0]; 
                $bookImage = $bookData[1];

            @endphp
            
        {{-- {{ $book->id }}
        {{ $bookImage }} --}}
        <div class="books" >
            <div class="mybook">
                <img class="book-image" src="{{ asset('images/'.$bookImage) }}" alt="">
                <div class="description">
                    <a href="#" class="u-margin-btn right "> <i class=" textred icon fas fa-heart"> &nbsp;favourite</i></a>
                    <h3 class="heading-tertiary u-margin-bottom-small "> <a href="{{ route('front-book-details', ['id'=>$book->id]) }}"> {{ $book->title }}</a>
                        <sub><a href="{{ route('front-home', ['writer'=> $book->writers_name]) }}" style="color:#6B1717;">{{ $book->writers_name }}</a>  -  <a href="{{ route('front-home', ['cat'=> $book->category_name]) }}" style="color:#6B1717;">{{ $book->category_name }}</a> </sub>
                    </h3>
                    

                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae libero a atque laborum tempore, eum ipsa tempora aspernatur omnis, repellendus quos harum blanditiis praesentium. Repudiandae tempore doloremque fugit maiores doloribus!            
                    </p> 
                    <div class="buttons">
                        {{-- <a href="{{ route('user-edit-book', ['title'=>$book->title, 'id'=>$book->id]) }}" class="btn-items .u-margin-btn  "> <i class=" icon fas fa-edit"> &nbsp;</i>edit book</a> --}}
                        {{-- <a href="{{ route('book-delete', ['book' => $book->id]) }}" class=""> <i class="icontrash icon fa fa-trash-alt" style="font-size:18px;"> &nbsp;</i></a> --}}
            
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach

    </div>

</section>
 

  @include('users.layouts.profileUpdate')
@endsection

@section('custom_js')


@endsection
