<div class="si-ver" id="menu">
  <!--
  <a id="toggle-menu"><img src="catalog/view/theme/gobantes/image/menu-icon.png" alt=""></a>-->
  <div class="clearfix2"></div>
    <ul id="nav">
    @foreach( App\Models\Category::take(6)->get() as $category )
        <li>
          <a href="/categoria/{{$category->name}}">{{$category->name}}</a>
          <ul class="subs">
          @foreach( App\Models\Group::where('category_id', $category->id)->get() as $group )
            <li>
              <a href="/categoria/{{$category->name}}/grupo/{{ $group->name }}">{{ $group->name }}</a>
              <ul style="display:block !important">
                @foreach(App\Models\SubGroup::where('category_id', $category->id)->where('group_id', $group->id)->take(4)->get() as $subgroups )
                  <li><a href="/categoria/{{$category->name}}/grupo/{{ $group->name }}/subgrupo/{{ $subgroups->name }}">{{ $subgroups->name }}</a></li>
                @endforeach
                  <li><a href="/categoria/{{ $category->name }}">Ver Mas...</a></li>
              </ul>
            </li>
          @endforeach
        </ul>
      </li>
    @endforeach
  </ul>
</div>