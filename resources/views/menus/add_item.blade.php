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
                <!-- Success Message for adding new item-->
                @if (session('success'))
                    <div style="color: green; margin-bottom: 10px;">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Error Message for duplicate item input -->
                @if (session('error'))
                    <div style="color: red; margin-bottom: 10px;">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Success Message for adding new category -->
                @if (session('success-category'))
                    <div style="color: green; margin-bottom: 10px;">
                        {{ session('success-category') }}
                    </div>
                @endif
                    <!-- Error Message for duplicate category input -->
                    @if (session('error-category'))
                    <div style="color: red; margin-bottom: 10px;">
                        {{ session('error-category') }}
                    </div>
                @endif

                <div class="row p-1 me-3">            
                    <form action="{{ url('/menu/items/add') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Cuisine category</label>
                            <select class="form-select" name="category">
                                @foreach( $category as $item)
                                <option value="{{ $item->category_name }}"> {{ $item->category_name }} </option>
                                @endforeach
                                <!-- <option selected value="rice">Rice</option>
                                <option value="cuisine">Cuisine</option>
                                <option value="salad">Salad</option>
                                <option value="noodle">Noodle</option>
                                <option value="juice">Juice</option> -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cuisine name</label>
                            <input type="text" class="form-control" name="item_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <button type="submit" class="btn btn-warning rounded-pill shadow-sm mt-3 ps-4 pe-4 pt-2 pb-2">Add to menu</button><br>
                        <a type="button" href="{{ url('/menu/cuisine/dashboard') }}" class="btn btn-success rounded-pill shadow-sm mt-3 ps-4 pe-4 pt-2 pb-2">See the menu</a>
                    </form>

                    <!-- modal box for adding new category -->
                    <div class="col-6 mt-3">
                        <a type="button" class="btn btn-primary rounded-pill ps-4 pe-4 pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#addCategory">Add category</a>
                        <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addCategory">Add new category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('/menus/cuisine/category/add') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="category_name" class="col-form-label">Category:</label>
                                                    <input type="text" class="form-control" name="category_name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="note" class="col-form-label">Note:</label>
                                                    <textarea class="form-control" name="note"></textarea>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add category</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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