<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-container h1 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #2563eb;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1d4ed8;
        }

        .error-list {
            background-color: #ffe5e5;
            border: 1px solid #ff5f5f;
            color: #b91c1c;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .error-list ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div>
          <a target="_blank"; href="https://www.8queens.com/">  <img src="{{ asset('build\assets\8queens_white_logo.png') }}" alt="Logo" 
            style="display: block;margin:auto;margin-top:10px; width: 100px;background-color: gray;padding: 10px; border-radius: 8px;margin-bottom:0px; 
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></a>
        </div>
        <h1 style="margin: 0px;">Create a Product</h1>

        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('product.store') }}">
            @csrf
            @method('post')

            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Product Name" required>
            </div>

            <div>
                <label for="qty">Qty:</label>
                <input type="text" id="qty" name="qty" placeholder="Quantity" required>
            </div>

            <div>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" placeholder="Price" required>
            </div>

            <div>
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" placeholder="Description" required>
            </div>

            <div>
                <input type="submit" value="Save Product">
            </div>
        </form>
    </div>
</body>
</html>
