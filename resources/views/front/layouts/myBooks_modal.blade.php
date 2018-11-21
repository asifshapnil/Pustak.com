<div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__right">
                <h2 class="heading-secondary u-margin-bottom-small tab_port"> Available Friends</h2>
                <form action="{{ route('store-exchange') }}" class="form" method="post">
                        {{ csrf_field() }}

                <table>
                    @if (Auth::check())
                    @foreach ($my_books as $myBook)
                        <tr>
                            <th style="width:50px;">
                                <input type="hidden" name="bookId" value="{{ $details->id }}">
                                <input type="hidden" name="userId" value="{{ $details->user_id }}">

                                <input type="checkbox" name="exchangableBookId[]" value="{{ $myBook->id }}">
                            </th>
                            <th>{{ $myBook->title }}</th>
                            <th style="width:50px;">
                                <input type="number" name="qty[]">
                            </th>

                        </tr>
                    @endforeach
                        
                    @endif
                </table>
                <div class="popup__close p-5 offset-md-5">
                    <button type="submit" class="btn btn-md btn-text .u-margin-btn">Send Offer</button>
                </div>
            </form>

                

            </div>
        </div>
    </div>