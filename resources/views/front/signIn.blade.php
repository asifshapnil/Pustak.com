@extends('front.layouts.main')

@section('content')
  <section class="section-book">
            <div class="row">
                <div class="book" style="background-image:linear-gradient(105deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.9) 50%, transparent 50%),url({{url('images/paul-schafer.jpg')}})">
                    <div class="book__form">
                        @if (isset($bookId))
                            <form action="{{ route('store-front-signIn', ['bookId'=>$bookId]) }}" class="form" method="post">
                        @else
                            <form action="{{ route('store-front-signIn') }}" class="form" method="post">
                        @endif
                          {{ csrf_field() }}
                            <div class=" u-margin-bottom-medium">
                                 <h2 class="heading-secondary">
                                 Start sign in now
                                 </h2>
                            </div>

                            <div class="form__group">
                                    <a href="#" class=" btn-text">Sign In with FaceBook &rarr;</a>
                                    <a href="#" class=" btn-text">Sign In with Google &rarr;</a>
                                </div>
                                @if (session('error'))
                                  <h3 class="text-danger">{{ session('error') }}</h3>
                                @endif

                            <div class="form__group">
                                <input type="email" class="form__input" name="email" placeholder="Email Address" id="email" required>
                                <label for="email" class="form__label" >Email Address</label>

                            </div>
                            <div class="form__group">
                                <input type="password" class="form__input" name="password" placeholder="Password" id="password" required>
                                <label for="password" class="form__label" >Password</label>

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
