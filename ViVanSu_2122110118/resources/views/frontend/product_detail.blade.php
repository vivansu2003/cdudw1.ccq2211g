@section('title', 'Product_Detail')
@section('header')
    <link rel="stylesheet" href="product.css">

@endsection
@section('content')
    <section class="product-detail">
        <div class="product-image">
            <img src="duong-dan-hinh-anh.jpg" alt="Ảnh sản phẩm">
        </div>
        <div class="product-info">
            <h2>Tên sản phẩm</h2>
            <p>Giá: $100</p>
            <p>Mô tả: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nunc id aliquam ultricies,
                nisl nunc tincidunt nunc, id lacinia nunc nisl id nunc.</p>
            <button class="add-to-cart">Thêm vào giỏ hàng</button>
        </div>
    </section>

@endsection
