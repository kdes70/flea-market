<aside>
    <header>
        <h1><a href="/">Flea Market</a></h1>
        <h2>Adverts board</h2>
    </header>

    <nav>
        <ul>
            @foreach($category as $item)
            <li class="nav-item"><a href="/category/{{$item->slug}}">{{$item->name}}</a></li>
            @endforeach
        </ul>
    </nav>

    <div class="social-nav">
        <a href="https://facebook.com/" target="_blank" >@include('svg.facebook')</a>
        <a href="https://vk.com/" target="_blank" >@include('svg.vk')</a>
        <a href="https://ok.com/" target="_blank" >@include('svg.ok')</a>
    </div>
</aside>