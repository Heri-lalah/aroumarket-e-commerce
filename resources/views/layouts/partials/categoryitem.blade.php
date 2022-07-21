<ul class="nav position-sticky top-0 justify-content-center shadow-sm bg-light" style="z-index: 2500">
    @foreach($categorys as $category)
    <li class="nav-item"><a href="{{ route('viewproductbycategory',['id'=>$category->id])}}" class="nav-link">{{ucfirst($category->name)}}</a></li>
    @endforeach
</ul>
