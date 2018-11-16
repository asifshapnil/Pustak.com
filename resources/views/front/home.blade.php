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
        <div class="col-1-of-3">
             <div class="my_card">
                 <div class="card__side card__side--front">
                     <div class="card__picture card__picture--1" style="background-image:url({{url('images/paul-schafer.jpg')}})">
                         &nbsp;

                     </div>
                     <h4 class="card__heading">
                         <span class="card__heading-span card__heading-span--1">
                               BUY
                         </span>


                     </h4>
                     <div class="card__details">
                         <ul>
                           <li> Book Name</li>
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
                         <a href="{{ route('front-book-details',['id' => 1] ) }}" class="btn btn--white">See now! </a>
                     </div>
                 </div>
             </div>
           </div>
           <!-- card 2 -->
       <div class="col-1-of-3">
               <div class="card">
                       <div class="card__side card__side--front">
                           <div class="card__picture card__picture--2" style="background-image:url({{url('images/paul-schafer.jpg')}})">
                               &nbsp;

                           </div>
                           <h4 class="card__heading">
                               <span class="card__heading-span card__heading-span--2">
                                     Share
                               </span>


                           </h4>
                           <div class="card__details">
                               <ul>
                                   <li> Book Name</li>
                                   <li>Author Name</li>
                                   <li>Edition</li>
                                   <li>Condition</li>
                                   <li>ISBN No.</li>
                               </ul>

                           </div>
                       </div>
                       <div class="card__side card__side--back card__side--back-2">
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
                               {{-- <a href="{{ route('front-book-details', ['id' => 1]) }}" class="btn btn--white">See now! </a> --}}
                           </div>
                       </div>
                   </div>
          </div>

          <!-- card 3 -->
       <div class="col-1-of-3">
               <div class="card">
                       <div class="card__side card__side--front">
                           <div class="card__picture card__picture--3" style="background-image:url({{url('images/paul-schafer.jpg')}})">
                               &nbsp;

                           </div>
                           <h4 class="card__heading">
                               <span class="card__heading-span card__heading-span--3">
                                     Buy
                               </span>


                           </h4>
                           <div class="card__details">
                               <ul>
                                   <li> Book Name</li>
                                   <li>Author Name</li>
                                   <li>Edition</li>
                                   <li>Condition</li>
                                   <li>ISBN No.</li>
                               </ul>

                           </div>
                       </div>
                       <div class="card__side card__side--back card__side--back-3">
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
                               {{-- <a href="{{ route('front-book-details', ['id' => 1]) }}" class="btn btn--white">See now! </a> --}}
                           </div>
                       </div>
                   </div>
            </div>
       </div>

       <div class="u-center-text u-margin-top-huge">
               <!-- <a href="#" class="btn btn--green">Discover all tours</a> -->
          </div>


</section>
        <!-- section books ends 1st  -->


             <!-- section books starts 2nd  -->
             <section class="section-tours" id="section-tours">
              <div class="row">
                <div class="col-1-of-3">
                     <div class="card">
                         <div class="card__side card__side--front">
                             <div class="card__picture card__picture--1">
                                 &nbsp;

                             </div>
                             <h4 class="card__heading">
                                 <span class="card__heading-span card__heading-span--1">
                                       BUY
                                 </span>


                             </h4>
                             <div class="card__details">
                                 <ul>
                                   <li> Book Name</li>
                                   <li>Author Name</li>
                                   <li>Edition</li>
                                   <li>Condition</li>
                                   <li>ISBN No.</li>
                                 </ul>

                             </div>
                         </div>
                         <div class="card__side card__side--back card__side--back-1">
                             <div class="card__cta">
                                 <!-- <div class="card__price-box">
                                     <p class="card__price-only">Only</p>
                                     <p class="card__price-value">$297</p>
                                 </div> -->
                                 <div class="card__details">
                                   <ul>
                                     <li> Book Name</li>
                                     <li>Author Name</li>
                                     <li>Edition</li>
                                     <li>Condition</li>
                                     <li>ISBN No.</li>
                                   </ul>

                               </div>
                                 {{-- <a href="{{ route('front-book-details', ['id' => 1]) }}" class="btn btn--white">See now! </a> --}}
                             </div>
                         </div>
                     </div>
                   </div>
                   <!-- card 2 -->
               <div class="col-1-of-3">
                       <div class="card">
                               <div class="card__side card__side--front">
                                   <div class="card__picture card__picture--2">
                                       &nbsp;

                                   </div>
                                   <h4 class="card__heading">
                                       <span class="card__heading-span card__heading-span--2">
                                             Share
                                       </span>


                                   </h4>
                                   <div class="card__details">
                                       <ul>
                                           <li> Book Name</li>
                                           <li>Author Name</li>
                                           <li>Edition</li>
                                           <li>Condition</li>
                                           <li>ISBN No.</li>
                                       </ul>

                                   </div>
                               </div>
                               <div class="card__side card__side--back card__side--back-2">
                                   <div class="card__cta">
                                       <div class="card__details">
                                           <ul>
                                             <li> Book Name</li>
                                             <li>Author Name</li>
                                             <li>Edition</li>
                                             <li>Condition</li>
                                             <li>ISBN No.</li>
                                           </ul>

                                       </div>
                                       {{-- <a href="{{ route('front-book-details', ['id' => 1]) }}" class="btn btn--white">See now! </a> --}}
                                   </div>
                               </div>
                           </div>
                  </div>

                  <!-- card 3 -->
               <div class="col-1-of-3">
                       <div class="card">
                               <div class="card__side card__side--front">
                                   <div class="card__picture card__picture--3">
                                       &nbsp;

                                   </div>
                                   <h4 class="card__heading">
                                       <span class="card__heading-span card__heading-span--3">
                                             Buy
                                       </span>


                                   </h4>
                                   <div class="card__details">
                                       <ul>
                                           <li> Book Name</li>
                                           <li>Author Name</li>
                                           <li>Edition</li>
                                           <li>Condition</li>
                                           <li>ISBN No.</li>
                                       </ul>

                                   </div>
                               </div>
                               <div class="card__side card__side--back card__side--back-3">
                                   <div class="card__cta">
                                       <div class="card__details">
                                           <ul>
                                             <li> Book Name</li>
                                             <li>Author Name</li>
                                             <li>Edition</li>
                                             <li>Condition</li>
                                             <li>ISBN No.</li>
                                           </ul>

                                       </div>
                                       {{-- <a href="{{ route('front-book-details', ['id' => 1]) }}" class="btn btn--white">See now! </a> --}}
                                   </div>
                               </div>
                           </div>
                    </div>
               </div>

               <div class="u-center-text u-margin-top-huge">
                       <!-- <a href="#" class="btn btn--green">Discover all tours</a> -->
                  </div>


       </section>
                  <!-- section books ends 2nd  -->
                       <!-- section books ends  -->





 <!-- pagination start -->
       <div class="u-center-text u-margin-top-huge">
           <div class="pagination">
               <a href="#">&laquo;</a>
               <a href="#">1</a>
               <a class="active" href="#">2</a>
               <a href="#">3</a>
               <a href="#">4</a>
               <a href="#">5</a>
               <a href="#">6</a>
               <a href="#">&raquo;</a>
             </div>

           </div>
@endsection

@section('custom_js')
    
@endsection
