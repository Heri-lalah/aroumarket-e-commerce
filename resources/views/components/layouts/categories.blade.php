<div class="categoryItems position-sticky top-0 bg-light shadow-sm">
    <ul class="py-1 d-flex container h6">
        <li class="nav-item nav-link fw-bold">Catégories : </li>
        <li class="nav-item underline">
            <a href="{{route('products')}}" class="nav-link">Tous</a>
        </li>
        @foreach($categories as $category)
        <li class="nav-item">
            <a href="{{ route('viewproductbycategory',['id'=>$category->id])}}" class="nav-link">
                {{ucfirst($category->name)}}
            </a>
        </li>
        @endforeach
        <span class="ms-auto">
            <x-layouts.input-search></x-layouts.input-search>
        </span>
    </ul>
</div>
<style scoped>

</style>
