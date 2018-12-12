<div class="popup" id="shipping{{ $r_id }}">
        <div class="popup__content">
            <div class="popup__left">
                <div class="row ">
                    <div class="offset-md-6 mt-md-3">
                        <div class="profile">
                            <figure class="profile__shape">
                                <img src="{{ asset('images/'.$shipping_address->image) }}" alt="person on a tour" class="profile__img">
                                <figcaption class="profile__caption">{{ $shipping_address->fname }} {{ $shipping_address->lname }}</figcaption>
                             </figure>
                         </div>
                    </div>
                </div>
            </div>



            <div class="popup__right">
                <h2 class="heading-secondary u-margin-bottom-small tab_port">Shipping Address</h2> 
                <small class="offset-md-3">
                    @if (isset($contact_status))
                        @if ($contact_status == 'accept')
                            <a href="{{ route('accept-contacts', ['id'=>$shipping_address->user_id]) }}" class="ml-md-2 contact">Accept</a>
                        @elseif($contact_status == 'ReqSent')
                            <a>Request sent</a>
                        @elseif($contact_status == 'contact')
                            <a>Contact</a>
                        @else
                            <a href="{{ route('send-req-contacts', ['id'=>$shipping_address->user_id]) }}" class="contact">Add to contacts</a>
                        @endif                             
                    @endif
                
                </small>  
                <table>
                    <tr>
                        <th style="width:50px">Name</th>
                        <th>{{ $shipping_address->fname }} {{ $shipping_address->lname }}</th>
                    </tr>
                    <tr>
                        <th style="width:50px">Email</th>
                        <th>{{ $shipping_address->email }}</th>
                    </tr>
                    <tr>
                        <th style="width:50px">Cell no:</th>
                        <th>{{ $shipping_address->phone_no }}</th>
                    </tr>
                    <tr>
                        <th style="width:50px">Address</th>
                        <th>{{ $shipping_address->address }}</th>
                    </tr>
                    <tr>
                        <th style="width:50px">Postal Code</th>
                        <th>{{ $shipping_address->postal_code }}</th>
                    </tr>
                    <tr>
                        <th style="width:50px">City</th>
                        <th>{{ $shipping_address->city }}</th>
                    </tr>
                    <tr>
                        <th style="width:50px">District</th>
                        <th>{{ $shipping_address->district }}</th>
                    </tr>
                    <tr>
                        <th style="width:50px">Country</th>
                        <th>{{ $shipping_address->country }}</th>
                    </tr>                                  
                 </table>                  
            </div>
        </div>
    </div>