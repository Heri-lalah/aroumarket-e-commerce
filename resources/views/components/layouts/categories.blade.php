<ul class="categoryItems nav justify-content-center position-sticky top-0 bg-light shadow-sm h6">
    <li class="nav-item active"><a href="{{route('products')}}" class="nav-link">Tous</a></li>
    @foreach($categories as $category)
    <li class="nav-item"><a href="{{ route('viewproductbycategory',['id'=>$category->id])}}" class="nav-link">{{ucfirst($category->name)}}</a></li>
    @endforeach
</ul>
