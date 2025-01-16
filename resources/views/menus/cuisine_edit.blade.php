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
                <!-- Success Message -->
                @if (session('success'))
                    <div style="color: green; margin-bottom: 10px;">
                        {{ session('success') }}
                    </div>
                @endif
                    <!-- Error Message for duplicate input -->
                    @if (session('error'))
                    <div style="color: red; margin-bottom: 10px;">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="row p-1 me-3">
                    <form action="{{ url('/menu/cuisine/update') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="id" value="{{ $editData['id'] }}">
                            <label class="form-label">Cuisine category</label>
                            <select class="form-select" name="category">
                                <option value="rice" 
                                {{ isset($editData['category']) && $editData['category'] == "rice" ? 'selected' : '' }}>Rice</option>
                                <option value="cuisine" 
                                {{ isset($editData['category']) && $editData['category'] == "cuisine" ? 'selected' : '' }}>Cuisine</option>
                                <option value="salad" 
                                {{ isset($editData['category']) && $editData['category'] == "salad" ? 'selected' : '' }}>Salad</option>
                                <option value="noodle" 
                                {{ isset($editData['category']) && $editData['category'] == "noodle" ? 'selected' : '' }}>Noodle</option>
                                <option value="juice" 
                                {{ isset($editData['category']) && $editData['category'] == "juice" ? 'selected' : '' }}>Juice</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cuisine name</label>
                            <input type="text" class="form-control" name="item_name" value="{{ $editData['item_name'] }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $editData['price'] }}">
                        </div>
                        <button type="submit" class="btn btn-warning rounded-pill shadow-sm mt-3 ps-5 pe-5 pt-2 pb-2">Update</button><br>
                        <a type="button" href="{{ url('/menu/cuisine/dashboard') }}" class="btn btn-success rounded-pill shadow-sm mt-4 ps-4 pe-4 pt-2 pb-2">See the menu</a>
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