@extends('front.layouts.main')

@section('content')
@include('front.layouts.book_details_tab')
<section class="section-about">
        <div class="row">
             <div class="col-1-of-2 ">
                 <div class="details">
                    <h3 class="heading-tertiary u-margin-bottom-small u-padding-top">Book Name &rarr;</h3>
                    <p class="paragraph">
                        The True story 
                    </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">Author Name &rarr;</h3>
                        <p class="paragraph">
                            Mahmud Al Saeed
                        </p> 
                        <h3 class="heading-tertiary u-margin-bottom-small">Edition &rarr;</h3>
                        <p class="paragraph">
                            The True story  2018
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">Condition &rarr;</h3>
                        <p class="paragraph">
                           Good 
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">ISBN No. &rarr;</h3>
                        <p class="paragraph">
                           123456789 
                        </p>

                        <a href="#" class="btn-text">Contact Now &rarr;</a>
                 </div>

                     
             </div>
             <div class="col-1-of-2">
                 <div class="composition">

                     <img 
                     srcset="{{ asset('images/paul-schafer.jpg') }} 300w, {{ asset('images/paul-schafer.jpg') }} 1000w,"
                     sizes="(max-width:65.25em) 20vw,(max-width:37.5em) 30vw,300px"
                     class="composition__photo composition__photo--p1"
                     src="{{ asset('images/paul-schafer.jpg') }}" 
                     alt="photo 1"
                     >

                     <img 
                     srcset="{{ asset('images/paul-schafer.jpg') }} 300w, {{ asset('images/paul-schafer.jpg') }} 1000w,"
                     sizes="(max-width:65.25em) 20vw,(max-width:37.5em) 30vw,300px"
                     class="composition__photo composition__photo--p2"
                     src="{{ asset('images/paul-schafer.jpg') }}" 
                     alt="photo 2"
                     >

                     <img 
                     srcset="{{ asset('images/paul-schafer.jpg') }} 300w, {{ asset('images/paul-schafer.jpg') }} 1000w,"
                     sizes="(max-width:65.25em) 20vw,(max-width:37.5em) 30vw,300px"
                     class="composition__photo composition__photo--p3"
                     src="{{ asset('images/paul-schafer.jpg') }}" 
                     alt="photo 3"
                     > 
                         
                 </div>
             </div>
         </div>


     
     <div class="book-about">
                 
            
            <div class="row">
                    <div class="col-2-of-3">
                            <h3 class="heading-tertiary u-margin-bottom-small storyname">Author Name </h3>

                            <div class="text-area u-margin-bottom-small">
                                <textarea rows="8" cols="50" class="text-details">
                                    I HAD THE BEST WEEK EVER WITH MY FAMILY
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laborum explicabo impedit optio tempore voluptas earum eum, soluta eveniet dolorum ullam officiis nobis unde repellendus. Culpa suscipit officiis voluptatum qui.                                         </textarea>
                            </div>
                           <div class="save-button u-margin-bottom-medium">
                            <a class="save " href="">save</a>
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
                        <h3 class="heading-tertiary u-margin-bottom-small why-should-i">Why Should  You Take From Me </h3>

                        <div class="text-area u-margin-bottom-small">
                            <textarea rows="8" cols="50" class="text-details">
                                I HAD THE BEST WEEK EVER WITH MY FAMILY
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laborum explicabo impedit optio tempore voluptas earum eum, soluta eveniet dolorum ullam officiis nobis unde repellendus. Culpa suscipit officiis voluptatum qui.                                     </textarea>
                        </div>
                        <div class="save-button u-margin-bottom-medium">
                            <a class="save " href="">save</a>
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
@endsection

@section('custom_js')
    
@endsection