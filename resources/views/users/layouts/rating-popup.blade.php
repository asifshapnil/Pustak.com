<div class="popup" id="ratebook{{ $r_id }}">
        <div class="popup__content">
            <div class="popup__right">
                <h2 class="heading-secondary u-margin-bottom-small tab_port"> Available Friends</h2> 
                <div class="row">
                    <div class="col-6 offset-3 card bg-faded parentCard">
                        <div class="row btnParent">
                            <button type="button" class="rateBtn col btn btn-md text-white p-3" style=" background-color:#6B1717;" data-value = "1">1</button>
                            <button type="button" class="rateBtn col btn btn-md text-white p-3" style=" background-color:#6B1717;" data-value = "2">2</button>
                            <button type="button" class="rateBtn col btn btn-md text-white p-3" style=" background-color:#6B1717;" data-value = "3">3</button>
                            <button type="button" class="rateBtn col btn btn-md text-white p-3" style=" background-color:#6B1717;" data-value = "4">4</button>
                            <button type="button" class="rateBtn col btn btn-md text-white p-3" style=" background-color:#6B1717;" data-value = "5">5</button>
                        </div>
                         <form action="" class="form parent-form" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="rateValue" class="rateValue">
                            <input type="text" name="bookId" class="bookId" value="{{ $book->id }}">

                            <div class="popup__close p-5 offset-md-5">
                                <button type="submit" class="btnc btn-md btn-text .u-margin-btn">Send Offer</button>
                            </div>
                                      
                        </form>


                    </div>
                </div>
               
            </div>
        </div>
    </div>