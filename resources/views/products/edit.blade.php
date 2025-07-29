<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f9fafb;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }

        h1 {
            color: #1d4ed8;
            margin-bottom: 20px;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #374151;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #1d4ed8;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2563eb;
        }

        .error-messages {
            background-color: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fca5a5;
            padding: 10px 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .error-messages ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <h1>Edit a Product</h1>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('product.update', ['product' => $product->id]) }}">
        @csrf
        @method('put')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Product Name" value="{{ $product->name }}" required>
        </div>

        <div>
            <label for="qty">Qty:</label>
            <input type="text" id="qty" name="qty" placeholder="Quantity" value="{{ $product->qty }}" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" placeholder="Price" value="{{ $product->price }}" required>
        </div>

        <div>
            <label for="desc">Description:</label>
            <input type="text" id="desc" name="description" placeholder="Product Description" value="{{ $product->description }}" required>
        </div>

        <div>
            <input type="submit" value="Update Product">
        </div>
    </form>

</body>
</html>
