<div class=" profile_nav">
    <div class=" nav_items">
        <a href="{{ route('user-my-page') }}" class="items {{ $tabActive == 'index' ? 'active':'' }}">MyPage</a>
        <a href="{{ route('book-requests') }}" class="items {{ $tabActive == 'myBookRequest' ? 'active':'' }}">My Exchange Offers</a>
        <a href="{{ route('exchange-log') }}" class="items {{ $tabActive == 'myExchangeLog' ? 'active':'' }}">My Exchange Requests</a>
        <a href="{{ route('book-on-exchange') }}" class="items {{ $tabActive == 'myBookOnExchange' ? 'active':'' }}">My Books On Exchange</a>
        <a href="{{ route('my-suggestions') }}" class="items {{ $tabActive == 'suggestion' ? 'active':'' }}">Suggestions</a>
    </div>
</div>