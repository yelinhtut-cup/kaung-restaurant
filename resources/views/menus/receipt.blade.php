<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Kaung Restaurant</title>
    <!-- title icon logo -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/chef.png') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5 justify-content-center">
          <div class="col-4 p-3">
          <form action="{{ url('/menu/cuisine/receipt/create') }}" method="post">
            @csrf
            <div class="card shadow bg-body mb-3 ms-3 me-3 rounded" style="width:500px">
                    <h2 class="m-3 text-center">RECEIPT</h2>
                    <hr class="custom-hr-style">
                    <div class="card-body">
                      <div class="row">
                        @foreach($receipt as $index => $receiptData)
                          <div class="col-6 mb-3">
                            <h6>{{ $receiptData['item_name'] }}</h6>
                            <input type="hidden" name="item_name[]" value="{{ $receiptData['item_name'] }}">
                          </div>
                          <div class="col-1">
                            <h6>{{ $receiptData['order_number'] }}</h6>
                            <input type="hidden" name="order_number[]" value="{{ $receiptData['order_number'] }}">
                          </div>
                          <div class="col-2 mb-3 text-center">
                            <h6>{{ $receiptData['price'] }} Ks</h6>
                            <input type="hidden" name="price[]" value="{{ $receiptData['price'] }}">
                          </div>
                          <div class="col-3 mb-3 text-center">
                            <h6>{{ $itemTotal[$index] }} Ks</h6>
                            <input type="hidden" name="total_per_item[]" value="{{ $itemTotal[$index] }}">
                          </div>
                        @endforeach
                        <hr class="custom-hr-style">
                      </div>
                      <div class="row">
                        <div class="col-8">
                          <h5>TOTAL</h5>
                        </div>
                        <div class="col-4 text-center">
                          <h5>{{ $total }} Ks</h5>
                          <input type="hidden" name="total" value="{{ $total }}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-pill ms-3 ps-4 pe-4 shadow">OK</button>
              </form>
          </div>
      </div>
    </div>
</body>
</html>