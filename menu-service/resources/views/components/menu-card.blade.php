@vite([
    "resources/css/components/menu-card.sass"
])

<article class="menu-item">
    <img src="{{Vite::asset($menu["image"])}}" class="photo" alt="{{$menu["title"]}}">
    <div class="item-info">
        <header>
            <h4>{{$menu['title']}}</h4>
            <h4 class="price">{{$menu["price"]}}$</h4>
        </header>
        <p class="item-text">
            {{$menu["description"]}}
        </p>
    </div>
</article>