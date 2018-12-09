@extends('users.layouts.main')

@section('content')
   @include('users.layouts.nav')     


   

  <section class="section-profile" >
      <input type="hidden" id="fname" value="{{ $profile->fname ? 1:0 }}">
      <input type="hidden" id="lname" value="{{ $profile->lname ? 1:0 }}">
      <input type="hidden" id="image" value="{{ $profile->image ? 1:0 }}">
      <input type="hidden" id="phone_no" value="{{ $profile->phone_no ? 1:0 }}">
      <input type="hidden" id="address" value="{{ $profile->address ? 1:0 }}">
      <input type="hidden" id="postal_code" value="{{ $profile->postal_code ? 1:0 }}">
      <input type="hidden" id="city" value="{{ $profile->city ? 1:0 }}">
      <input type="hidden" id="district" value="{{ $profile->district ? 1:0 }}">
      <input type="hidden" id="country" value="{{ $profile->country ? 1:0 }}">

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
                $request = $bookData[2];

            @endphp
            
        {{-- {{ $book->id }}
        {{ $bookImage }} --}}
        <div class="books" >
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
                        <a href="{{ $request!=0 ? '/user/my-books-requests#'.$book->id:'' }}" class="btn-items .u-margin-btn {{ $request!=0 ? 'activeLink' : '' }}"> <i class=" icon fab fa-angellist"> &nbsp;</i>{{ $request }} requests</a>
                        <a href="#" class="btn-items .u-margin-btn  "> <i class=" icon fab fa-angellist"> &nbsp;</i>suggest book</a>
                        <a href="{{ route('user-edit-book', ['title'=>$book->title, 'id'=>$book->id]) }}" class="btn-items .u-margin-btn  "> <i class=" icon fas fa-edit"> &nbsp;</i>edit book</a>
                        <a href="{{ route('book-delete', ['book' => $book->id]) }}" class=""> <i class="icontrash icon fa fa-trash-alt" style="font-size:18px;"> &nbsp;</i></a>
            
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
<script type="text/javascript">
    $(window).on('load',function(){
        var check = 1;
        if ($('#image').val() == 0) {
            var check = 0;
        }
        if ($('#phone_no').val() == 0) {
            var check = 0;
        }
        if ($('#address').val() == 0) {
            var check = 0;
        }
        if ($('#postal_code').val() == 0) {
            var check = 0;
        }
        if ($('#city').val() == 0) {
            var check = 0;
        }
        if ($('#district').val() == 0) {
            var check = 0;
        }
        if ($('#country').val() == 0) {
            var check = 0;
        }
        if (check == 0) {
            document.location.replace('/user/my-page/#profile');
        }
            
    });
</script>

@endsection
