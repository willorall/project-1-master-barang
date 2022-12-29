<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body class="p-3 mb-2 bg-dark">
    <div class="container p-5 bg-secondary text-white text-center">
        <h1>PRICE LIST</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-end">
                <button><a href="/items"> back</a></button>
            </div>
        </div>
    </div>
    <div>
        <table class=" container table table-dark table-striped p-5">
            <tr>
                <th>id</th>
                <th>price</th>
                <th>tanggal dibuat</th>

            </tr>
            @foreach ($data->link_price_list as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->created_at }}</td>

                </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
