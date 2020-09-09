  <ul class="cat_menu">
    
    @foreach($categories as $category)
    <li class="hassubs">
        <a href="{{url('category/'.$category->slug)}}">{{$category->category_name}} @if($category->subcategories->count() >= 1) <i class="fas fa-chevron-right"></i> @endif
        </a>
        <ul>
            @foreach($category->subcategories as $subcategory)
            <li><a href="{{url('subcategory/'.$subcategory->slug)}}">{{$subcategory->subcategory_name}}<i class="fas fa-chevron-right"></i></a></li>
            @endforeach
        </ul>
    </li>
    @endforeach

</ul>