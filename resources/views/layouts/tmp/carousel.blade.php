<div class="myCarousel">
    <div class="carousel slide" data-bs-ride="carousel" id="productCarousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/coding.jpg') }}" alt="coding" class="d-block w-100 img-fluid">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/mixing.jpg') }}" alt="mixing" class="d-block w-auto img-fluid">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/teaching.jpg') }}" alt="teaching" class="d-block w-auto img-fluid">
            </div>
        </div>
        <button type="button" class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#productCarousel">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button type="button" class="carousel-control-next" data-bs-slide="next" data-bs-target="#productCarousel">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
