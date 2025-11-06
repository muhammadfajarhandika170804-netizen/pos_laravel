<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Of Sales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/reza.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
</head>

<body>

    <!-- container fluid -->
    <div class="container-fluid container-pos">

        <div id="card">
            <!-- <h3>Product Name</h3> -->
            <!-- <P>Description Product</P> -->
        </div>

        <div class="row h-100">
            <div class="col-md-7 product-section">
                <div class="mb-4">
                    <h4 class="mb-3" id="product-title"><i class="fas fa-store"></i>The Products
                    </h4>
                    <input type="text" id="searchProduct" class="form-control search-box" placeholder="Find Product here...">
                </div>
                <div class="mb-4">
                    <button class="btn btn-primary category-btn active" onclick="filterCategory('all', this)">Menu</button>
                    @foreach ($categories as $cat): ?>
                        <button class=" btn btn-outline-primary category-btn"
                            onclick="filterCategory('{{ $cat->category_name }}', this)">{{ $cat->category_name }}</button>
                @endforeach
                </div>
                <div class="row" id="productGrid">
                    <!-- <div class="col-md-4 col-sm-6"-->
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="../assets/uploads/banglad.jpg" width="100%">
                        </div>
                        <div class="card-body">
                            <span class="badge bg-secondary badge-category">Snack</span>
                            <h6 class="card-title mt-2 mb-2">Mie Bangladesh</h6>
                            <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-4 col-sm-6"-->
                <div class="card product-card">
                    <div class="product-img">
                        <img src="../assets/uploads/jawa.jpg" width="100%">
                    </div>
                    <div class="card-body">
                        <span class="badge bg-secondary badge-category">Snack</span>
                        <h6 class="card-title mt-2 mb-2">Mie Jawa</h6>
                        <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                    </div>
                </div>
            </div>

            <!-- ORD date-001 -->
             <small>Order #<span class="orderNumber>{{ $order_code ?? '' }};</span></small>
                    </div>
            <!-- <div class="col-md-4 col-sm-6"-->
            <div class="card product-card">
                <div class="product-img">
                    <img src="../assets/uploads/aceh.jpg" width="100%">
                </div>
                <div class="card-body">
                    <span class="badge bg-secondary badge-category">Snack</span>
                    <h6 class="card-title mt-2 mb-2">Mie Aceh</h6>
                    <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row" id="productGrid"></div><br>

    </div>
    <div class="col-md-5 cart-section">
        <div class="cart-header">
            <h4>Shopping Cart <i class="bi bi-cart-check"></i></h4>
            <small>Order #<span class="orderNumber">001</span></small>
        </div>
        <div class="cart-items" id="cartItems">
            <div class="text-center text-muted mt-5">
                <i class="bi bi-basket"></i>
                <p>Empty Cart</p>
            </div>
        </div><br>



        <div class="cart-footer">
            <div class="total-section">
                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal :</span>
                    <span id="subtotal">Rp. 0.0,-</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Tax (10%) :</span>
                    <span id="tax">Rp. 0.0,-</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Total :</span>
                    <span id="total">Rp. 0.0,-</span>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md-6">
                    <button class="btn btn-outline-danger w-100" id=" clearCart">
                        <i class="bi bi-trash-fill"> Clear Cart</i>
                    </button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-checkout btn-outline-success w-100">
                        <i class="bi bi-cash-stack"> Process Payment</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>

    <script>
        const products = echo ($fetchProducts)
    </script>

    <script src="{{ asset('assets/js/reza.js') }}"></script>

</body>
</html>
