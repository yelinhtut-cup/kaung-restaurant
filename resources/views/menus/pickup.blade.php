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
        <div class="row p-5 m-5 shadow  mb-5 bg-body rounded justify-content-center">
            <div class="col-8">
                <form action="{{ url('/menu/cuisines/pickup/comfirm') }}" method="post">
                    @csrf 
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">No.Orders</th>
                            <th scope="col">Action / Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pickItem as $item)
                                <input type="hidden" name="id[]" value="{{ $item['id'] }}">
                                <tr>
                                    <td>{{ $item['item_name'] }}</td>
                                    <td>{{ $item['price'] }}</td>
                                    <td>
                                        <input id="numberBox{{ $item['id'] }}" type="text" name="order_number[]" maxlength="2" size="2" value="1" readonly>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success rounded-pill" onclick="addNumber('numberBox{{ $item['id'] }}')"><i class="bi bi-plus"></i></button>
                                        <button type="button" class="btn btn-danger rounded-pill" onclick="subtractNumber('numberBox{{ $item['id'] }}')"><i class="bi bi-dash"></i></button>
                                        <a href="{{ url("/menu/cuisine/pickup/specific/delete/" .$item['id']) }}" class="ps-2"><i class="bi bi-trash3 text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-warning rounded-pill mt-5 ps-3 pe-3">Comfirm</button>
                    <a href="{{ url('/menu/cuisine/pickup/all/delete') }}" class="btn btn-danger rounded-pill mt-5 ps-3 pe-3">Cancel</a>
                </form>
            </div>
            <div class="col-4 text-center">
                <img src="{{ asset('images/delivery.png') }}" alt="#" width="70%">
            </div>
    </div>
    <!-- JavaScript here -->
    <script>
        function addNumber(textboxNumber) {
            // Get the current value of the textbox
            let currentNumber = parseInt(document.getElementById(textboxNumber).value);
            // Increment the number by 1
            currentNumber += 1;
            // Set the new value in the textbox
            document.getElementById(textboxNumber).value = currentNumber;
        }

        function subtractNumber(textboxNumber) {
            // Get the current value of the textbox
            let currentNumber = parseInt(document.getElementById(textboxNumber).value);
            // Decrement the number by 1
            newNumber = currentNumber -= 1;
            if(newNumber >= 1){
             // Set the new value in the textbox
            document.getElementById(textboxNumber).value = currentNumber;
            }
        }
    </script>
</body>
</html>