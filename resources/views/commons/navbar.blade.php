<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">Food Shop</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form method="GET" action="/">
            <input type="text" name="keyword">
            <input type="submit" value="商品検索">
        </form>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item"><a href="/" class="nav-link">商品一覧</a></li>
                    <li class="nav-item"><a href="/likeitem" class="nav-link">気になる</a></li>
                    <li class="nav-item"><a href="/cartitem" class="nav-link">カート</a></li>
                    <li class="nav-item">{!! link_to_route('logout.get', 'Logout',[], ['class' => 'nav-link']) !!}</li>
                    
                 
                @else
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
        
            <!-- ここまで -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</header>