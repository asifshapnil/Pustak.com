@extends('front.layouts.main')

@section('content')
  <section class="section-book">
            <div class="row">
                <div class="book" style="background-image:linear-gradient(105deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.9) 50%, transparent 50%),url({{url('images/paul-schafer.jpg')}})">
                    <div class="book__form">
                        <form action="{{ route('store-front-signUp') }}" class="form" method="post">
                           {{ csrf_field() }}
                            <div class=" u-margin-bottom-medium">
                                 <h2 class="heading-secondary">
                                 Start sign up now
                                 </h2>
                            </div>

                            <!-- <div class="form__group u-margin-bottom-medium">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" name="size" id="small">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Sign In with Facbook
                                        </label>
                                    </div>

                                    <div class="form__radio-group">
                                            <input type="radio" class="form__radio-input" name="size" id="large">
                                            <label for="large" class="form__radio-label">
                                                <span class="form__radio-button"></span>
                                                Sign In with Google
                                            </label>
                                        </div>
                                </div> -->
                                 <div class="form__group">
                                       <a href="#" class=" btn-text">Sign In with FaceBook &rarr;</a>
                                       <a href="#" class=" btn-text">Sign In with Google &rarr;</a>
                                   </div>


                            <div class="form__group">
                                <input type="text" class="form__input" name="fname" placeholder="First Name" id="fname" required>
                                <label for="name" class="form__label" >First Name</label>

                            </div>
                            <div class="form__group">
                                <input type="text" class="form__input" name="lname" placeholder="Last Name" id="lname" required>
                                <label for="name" class="form__label" >Last Name</label>

                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" name="email" placeholder="Email Address" id="email" required>
                                <label for="email" class="form__label" >Email Address</label>

                            </div>
                            <div class="form__group">
                                <input type="password" class="form__input" name="password" placeholder="Password" id="password" required>
                                <label for="password" class="form__label" >Password</label>

                            </div>
                            <div class="form__group">
                                <input type="password" class="form__input" placeholder="Confirm Password" id="password" required>
                                <label for="password" class="form__label" > Confirm Password</label>

                            </div>

                            <div class="form__group">
                                <button class="btn btn--green" type="submit">Log in  &rarr;</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </section>
@endsection
