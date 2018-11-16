@extends('users.layouts.main')

@section('content')
   @include('users.layouts.nav')     


   

  <section class="section-profile">
    <div class=" profile_nav">
        <div class=" nav_items">
        <a href="" class="items">books</a>
        <a href="" class="items">books</a>
        <a href="" class="items">books</a>
        <a href="" class="items">books</a>
        </div>
    </div>
   <div class="row"> 
       <div class="col-1-of-3">
                   
           <div class="row">
               <div class="profile">
                   <figure class="profile__shape">
                       <img src="{{ asset('images/paul-schafer.jpg') }}" alt="person on a tour" class="profile__img">
                       <figcaption class="profile__caption">Jack Wilson </figcaption>
                    </figure>
                </div>
            </div> 
            <div class="pro">
               <a href="{{ route('add-new-book') }}" class="profile-button .u-margin-btn  "> <i class=" icon fas fa-upload"> &nbsp;</i>upload image</a>

               <a href="#" class="profile-button .u-margin-btn"><i class=" icon fas fa-upload"> &nbsp;</i>upload book</a>

               <a href="#" class="profile-button .u-margin-btn"><i class=" icon fas fa-upload"> &nbsp;</i>upload book</a>
                
               <a href="#" class="profile-button .u-margin-btn"><i class=" icon fas fa-upload"> &nbsp;</i>upload book</a>

           </div> 
   

        </div>
<!-- right side -->
<div class="col-2-of-3" >
    <div class="books">
<div class="mybook">
        <img class="book-image" src="{{ asset('images/paul-schafer.jpg') }}" alt="">
        <div class="description">
                <a href="#" class=" .u-margin-btn right "> <i class=" icon fas fa-heart"> &nbsp;favourite</i></a>
                <h3 class="heading-tertiary u-margin-bottom-small ">Book Title </h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae libero a atque laborum tempore, eum ipsa tempora aspernatur omnis, repellendus quos harum blanditiis praesentium. Repudiandae tempore doloremque fugit maiores doloribus!            
                </p> 
                    <div class="buttons">
        <a href="#" class="btn-items .u-margin-btn  "> <i class=" icon fab fa-angellist"> &nbsp;</i>request book</a>
        <a href="#" class="btn-items .u-margin-btn  "> <i class=" icon fab fa-angellist"> &nbsp;</i>suggest book</a>
        <a href="#" class="btn-items .u-margin-btn  "> <i class=" icon fas fa-edit"> &nbsp;</i>edit book</a>
        <a href="#" class=" .u-margin-btn right"> <i class=" icon fas fa-trash-alt"> &nbsp;</i></a>

</div>
        

            
    </div>
</div>
   </div>
   </div>

    
     
  </section>
  

  
@endsection
