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
        <div class="row p-5 m-5 shadow  mb-5 bg-body rounded">
            <div class="col border-end border-dark">
                <!-- add cuisine  -->
                 <a href="{{ url('/menu/items/add/index') }}" type="button" class="btn btn-success rounded-pill shadow-sm mb-2"><i class="bi bi-plus-lg"></i></a>
                 <span>Add cuisine</span>
                 <a href="{{ url('/menu/cuisines') }}" class="text-primary ms-3 disable-underline">View as user >></a>
                 <a href="{{ url('/menu/cuisines/admin/order/list') }}" class="text-primary ms-3 disable-underline">See order list >></a>
                <div class="row p-1 me-3">
                    <table class="table">
                        <tbody>
                            @foreach($item as $items)
                                <tr>
                                    <td>{{ $items['item_name'] }}</td>
                                    <td>{{ $items['price'] }}</td>
                                    <td class="text-center">
                                        <a href="{{ url("/menu/cuisine/edit/" .$items['id']) }}" class="pe-3"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url("/menu/cuisine/delete/" .$items['id']) }}"><i class="bi bi-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                <div class="row p-1">
                    
                    <img src="{{ asset('images/chef.png') }}" alt="chef" style="width: 300px; margin-left: 30%;">
                </div>
            </div>
    </div>
</body>
</html>