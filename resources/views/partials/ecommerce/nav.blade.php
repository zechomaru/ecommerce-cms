<!-- mega nav -->
<nav class="nav hidden-xs hidden-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul>
          @foreach( App\Models\Nav::where('status', 1)->get() as $nav )
          <li>
            <a href="#">{{$nav->name}}</a>
            <ul class="subs">

              @foreach( $nav->categories as $category )
              <li>
                <a href="/categoria/{{ $category->id }}">{{ $category->name }}</a>
                <ul style="">
                  @foreach(App\Models\Product::where('category_id', $category->id)->get() as $product )
                    <li><a href="/producto/{{ $product->id }}">{{ $product->name }}</a></li>
                  @endforeach
                    <li><a href="/categoria/{{ $category->id }}">Ver Mas...</a></li>
                </ul>       
              </li>
            @endforeach
            </ul>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- end mega nav -->