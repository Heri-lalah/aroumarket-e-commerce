@props(['products' => $products,'productsPromo' => $productsPromo])
<div>
    @foreach ($products as $product)

        <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card shadow-sm animate__animated animate__fadeIn">
                <img src="{{$product->photo_principal}}" alt="{{$product->name}}" class="img-fluid">

                <div class="card-body">
                    <p class="card-text d-none d-md-block">
                        {{strtoupper(Str::substr($product->name, 0, 15))}} <br>
                        <span class="fw-bold text-primary">Prix TTC : {{$product->prixTTC()}} €</span>
                    </p>

                    <div class="btn-group d-flex">
                        {{--<a href="{{route('showproduct',['id'=>$product->id,'category_id'=>$product->category_id])}}" class="btn btn-sm btn-outline-info">View</a>--}}
                        <a href="{{ route('product.show',[$product]) }}" class="btn btn-sm btn-outline-info">View</a>
                        <div class="d-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group d-flex input-group-sm">
                                <input type="number" name="quantity" value="1" class="d-none form-control bg-light border-0"
                                       aria-label="quantity" aria-describedby="basic-addon2">
                                <button  type="submit" class="btn btn-primary h-100">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
