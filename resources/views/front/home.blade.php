@extends('front.layouts.main')

@section('content')
    @include('front.layouts.hero')
    @include('front.layouts.tab')
    @include('front.layouts.modal')


    <section class="section-new" id="section-new">
       <div class="u-center-text u-margin-bottom-big">
               <h2 class="heading-secondary">
                New Arrival Books
               </h2>
          </div>

      <div class="row">
          @php
              $getImage = '';
          @endphp
          @foreach ($allBooks as $book)
            @foreach ($book->image as $key=>$image)
                @if ($key == 0)
                    @php
                        $getImage = $image->image
                    @endphp
                  
                @endif
            @endforeach
            
          <div class="col-1-of-3">
               <div class="my_card">
                   <div class="card__side card__side--front">
                       <div class="card__picture card__picture--1" style="background-image:url({{url('images/'.$getImage)}}); background-size:contain;">
                           &nbsp;
  
                       </div>
                       <h4 class="card__heading">
                           <span class="card__heading-span card__heading-span--1">
                                 BUY
                           </span>
  
  
                       </h4>
                       <div class="card__details">
                           <ul>
                             <li>{{ $book->title }}</li>
                             <li>Author Name</li>
                             <li>Edition</li>
                             <li>Condition</li>
                             <li>ISBN No.</li>
                           </ul>
  
                       </div>
                   </div>
                   <div class="card__side card__side--back card__side--back-1">
                       <div class="card__cta">
                           <div class="card__detail">
                             <ul>
                               <li> Book Name</li>
                               <li>Author Name</li>
                               <li>Edition</li>
                               <li>Condition</li>
                               <li>ISBN No.</li>
                             </ul>
  
                         </div>
                           <a href="{{ route('front-book-details',['id' => $book->id] ) }}" class="btnc btn--white">See now! </a>
                       </div>
                   </div>
               </div>
             </div>
              
          @endforeach
        </div>
        
        


      

  
</section>
<div class="row justify-content-center">
        <h1 class="text-center">
            {{ $allBooks->render() }}
        </h1>
</div>

@endsection

@section('custom_js')
    
@endsection
