<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/boostrap.min.css">
    <title>Add products</title>
</head>
<body>
<div class="container mt-5">
    <h2>Add Product Form</h2>
    <form method="post" action="enctype-mulipart">
        @csrf
        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" placeholder="Enter product name">
        </div>

        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea class="form-control" id="productDescription" name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="productPrice">Image</label>
            <input type="file" class="form-control" id="productPrice" name="image">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.1/dist/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>