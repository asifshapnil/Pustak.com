<div class="popup" id="popup{{ $r_id }}">
        <div class="popup__content">
            <div class="popup__right">
                    <a href="{{ route('exchange-log') }}" class="popup__close">&times;</a>

                <h2 class="heading-secondary u-margin-bottom-small tab_port"> Available Friends</h2> 
                <table>
                    <form action="{{ route('store-decission') }}" class="form" method="post">
                            {{ csrf_field() }}
                           
                    @foreach ($request as $exg)
                    <tr>
                        <th style="width:50px;">
                            <input type="hidden" name="exchange_id" value="{{ $exg->exchange_id }}">
                        </th>
                        <th><a target="_blank" href="{{ route('front-book-details',['id'=>$exg->id, 'exchange_id'=>$exg->exchange_id ]) }}">{{ $exg->title }}</a> </th>
                        <th style="width:50px;">{{ $exg->qty }}</th>
                    </tr>
                    @endforeach
                   
                </table>
                <div class="popup__close p-5 offset-md-5">
                    
                    </div>                   
                </form>
            </div>
        </div>
    </div>