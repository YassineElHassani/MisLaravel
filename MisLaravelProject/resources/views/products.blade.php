<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td><button onclick="dd(event)" data-id="{{$product->id}}">Delete</button></td>
                </tr>
            @endforeach
    </table>
    {{ $products->links() }}

    <script>
        async function dd(event) {
            const check = confirm("Are you sure you want to delete this product?");
            if(check) {
                let id = event.target.getAttribute('data-id');
                let url = 'http://127.0.0.1:8000/delete/'+id;
                console.log(url);
                const res = await fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
               
        }
    </script>
</body>
</html>