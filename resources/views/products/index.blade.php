<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Products</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8fafc;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #2563eb;
            margin-bottom: 20px;
        }

        .success-message {
            background-color: #d1fae5;
            border: 1px solid #10b981;
            padding: 10px 20px;
            color: #065f46;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .create-link {
            background-color: #2563eb;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        .create-link:hover {
            background-color: #1d4ed8;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            max-width: 1000px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #2563eb;
            color: white;
        }

        tr:hover {
            background-color: #f1f5f9;
        }

        .btn-edit,
        .btn-delete {
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #3b82f6;
            color: white;
        }

        .btn-edit:hover {
            background-color: #1d4ed8;
        }

        .btn-delete {
            background-color: #ef4444;
            color: white;
        }

        .btn-delete:hover {
            background-color: #dc2626;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>

    <h1>Product List</h1>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('product.create') }}" class="create-link">+ Create Product</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('product.edit', ['product'=>$product->id]) }}" class="btn-edit">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('product.destroy', ['product' => $product->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn-delete"
                               onclick="return confirm('Are you sure you want to delete this product?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
