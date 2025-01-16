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
        <div class="row p-5 m-5 shadow bg-body rounded">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Receipt no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Order no.</th>
                        <th scope="col">Total per item</th>
                        <th scope="col">Total</th>
                        <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderList as $list)
                        <tr>
                            <td>{{ $list['id'] }}</td>
                            <td>{{ $list['receipt_number'] }}</td>
                            <td>{{ $list['item_name'] }}</td>
                            <td>{{ $list['price'] }}</td>
                            <td>{{ $list['order_number'] }}</td>
                            <td>{{ $list['total_per_item'] }}</td>
                            <td>{{ $list['total'] }}</td>
                            <td>{{ \Carbon\Carbon::parse( $list['created_at' ])->format('Y-m-d') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ url('/menu/cuisine/dashboard') }}" type="button" class="btn btn-success ps-4 pe-4 mt-1">OK</a>
            </div>
        </div>
    </div>
</body>
</html>