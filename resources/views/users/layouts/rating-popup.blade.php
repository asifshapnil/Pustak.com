<div class="popup" id="ratebook{{ $r_id }}">
        <div class="popup__content">
                <h2 class="heading-secondary u-margin-bottom-small tab_port center-text">Rate the book</h2> 
                <div class="row">
                    <div class=" parentCard">
                        <div class="row btnParent">
                            <button type="button" class="rateBtn one btn btn-md text-white p-3 "  data-value = "1">1 <i class="fa fa-star "></i></button>
                            <button type="button" class="rateBtn two btn btn-md text-white p-3"   data-value = "2">2 <i class="fa fa-star "></i></button>
                            <button type="button" class="rateBtn three  btn btn-md text-white p-3"  data-value = "3">3 <i class="fa fa-star "></i></button>
                            <button type="button" class="rateBtn four  btn btn-md text-white p-3"  data-value = "4">4 <i class="fa fa-star "></i></button>
                            <button type="button" class="rateBtn five  btn btn-md text-white p-3"  data-value = "5">5 <i class="fa fa-star "></i></button>
                        </div>
                         <form action="{{ route('store-rating') }}" class="form parent-form" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="rateValue" class="rateValue">
                            <input type="hidden" name="bookId" class="bookId" value="{{ $book->id }}">

                            <div class="popsubmit">
                                <button type="submit" class="btn-text .u-margin-btn ratesubmit">Submit</button>
                                <button type="submit" class="btn-text .u-margin-btn ratesubmit">Cencel</button>

                            </div>
                                      
                        </form>
                </div>
               
            </div>
        </div>
    </div>