<div class="d-flex flex-wrap gap-2">
    @if($orders)
        @foreach($orders as $order)
            <div class="card @if($order->shipped_at) bg-primary text-white @else bg-warning @endif" style="width: 18rem;">
                <div class="card-header">ref : {{ $order->order_number  }}</div>
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center">{{ number_format($order->total_price/100, 2)  }} €</h5>
                    <div class="card-text">
                        <p>Commandé le : {{ $order->created_at }}</p>
                        <p>Livré le : {{ $order->shipped_at }}</p>
                    </div>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        @endforeach
    @endif
</div>
