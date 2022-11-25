<ul class="categoryItems container py-2 d-flex position-sticky top-0 bg-light shadow-sm h6">
    <li class="nav-item active"><a href="{{route('products')}}" class="nav-link">Tous</a></li>
    @foreach($categories as $category)
    <li class="nav-item"><a href="{{ route('viewproductbycategory',['id'=>$category->id])}}" class="nav-link">{{ucfirst($category->name)}}</a></li>
    @endforeach
    <span class="ms-auto">
        <x-layouts.input-search></x-layouts.input-search>
    </span>
</ul>
