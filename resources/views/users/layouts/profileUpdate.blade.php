<div class="popup" id="profile">
        <div class="popup__content profilepopup">
            <div class="popup__left">
                <div style="">
                    <img src="" class="">
                </div> 
            </div>
            <div class="popup__right">
                <h2 class="heading-secondary u-margin-bottom-small tab_port"> Available Friends</h2> 
                <form action="{{ route('store-profile') }}" class="form" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form__group">
                        <input type="text" value="{{ $profile->fname }}" class="form__input_other form-control" name="fname" placeholder="First Name" id="fname" required>
                        <label for="fname" class="form__label" >First Name</label>
                    </div>
                    <div class="form__group">
                        <input type="text" value="{{ $profile->lname }}" class="form__input_other form-control" name="lname" placeholder="Last Name" id="lname" required>
                        <label for="lname" class="form__label" >Last Name</label>
                    </div>
                    <div class="form__group">
                        <input type="file" value="{{ $profile->image }}" class="form__input_other form-control" name="image" placeholder="" id="image" required>
                        <label for="image" class="form__label" >Profile Image</label>
                    </div>
                    <div class="form__group">
                        <input type="text" value="{{ $profile->phone_no }}" class="form__input_other form-control" name="phone_no" placeholder="Cell Number" id="phone_no" required>
                        <label for="phone_no" class="form__label" >Cell No</label>
                    </div>
                    <div class="form__group">
                        <input type="text" value="{{ $profile->address }}" class="form__input_other form-control" name="address" placeholder="Address" id="address" required>
                        <label for="address" class="form__label" >Address</label>
                    </div>
                    <div class="form__group">
                        <input type="text" value="{{ $profile->postal_code }}" class="form__input_other form-control" name="postal_code" placeholder="Postal Code" id="postal_code" required>
                        <label for="postal_code" class="form__label" >Postal Code</label>
                    </div>
                    <div class="form__group">
                        <input type="text" value="{{ $profile->city }}" class="form__input_other form-control" name="city" placeholder="City" id="city" required>
                        <label for="city" class="form__label" >City</label>
                    </div>
                    <div class="form__group">
                        <input type="text" value="{{ $profile->district }}" class="form__input_other form-control" name="district" placeholder="District" id="district" required>
                        <label for="district" class="form__label" >district</label>
                    </div>
                    <div class="form__group">
                        <input type="text" value="{{ $profile->country }}" class="form__input_other form-control" name="country" placeholder="Country" id="country" required>
                        <label for="country" class="form__label" >Country</label>
                    </div>
                    <div class="popup__close p-5 offset-md-5">
                        <button type="submit" class="btn btn-md btn-text .u-margin-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- popup --}}