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
                <div class="row p-1 me-3">
                    @error('checked_id')
                        <div class="text-danger bg-light p-2 m-3">{{ $message }}</div>
                    @enderror
                    <form action="{{ url('/menu/cuisines/pickup') }}" method="post">
                        @csrf
                        <table class="table">
                            <tbody>
                                @foreach($item as $items)
                                    <tr>
                                        @if( isset($items) && $items['category'] == "cuisine")
                                            <td>{{ $items['item_name'] }}</td>
                                            <td>{{ $items['price'] }}</td>
                                            <td class="text-center">
                                                <input type="checkbox" name="checked_id[]" value="{{ $items['id'] }}">
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('/home') }}" class="btn btn-info rounded-pill mt-5 ps-3 pe-3"><i class="bi bi-house"></i>Home</a>
                        <button type="submit" class="btn btn-warning rounded-pill mt-5 ms-1 ps-3 pe-3">Pick up</button>
                    </form>
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