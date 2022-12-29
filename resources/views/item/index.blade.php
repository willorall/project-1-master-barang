<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>ITEMS</h1>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-end">
                    <button><a href="/master"> master</a></button>
                    <button><a href="/items/create"> add</a></button>
                    <button><a href="/"> back</a></button>
                </div>
            </div>
        </div>
        <table class=" container table table-dark table-striped p-5">
            <tr>
                <th>id</th>
                <th>code</th>
                <th>items</th>
                <th>unit</th>
                <th>price</th>
                <th>status</th>
                <th>type</th>
                <th>description</th>
                <th>tanggal dibuat</th>
                <th colspan="2">action</th>
            </tr>
            @foreach ($data['item'] as $one)
                <tr>
                    <td>{{ $one->id }}</td>
                    <td>{{ $one->code }}</td>
                    <td>{{ $one->item_name }}</td>
                    <td>{{ $one->unit }}</td>
                    <td>{{ $one->link_price_list[0]->price ?? null }}</td>
                    @if ($one->status == 1)
                        <td>aktif</td>
                    @else
                        <td>tidak aktif</td>
                    @endif
                    @if ($one->type == 1)
                        <td>bahan</td>
                    @elseif($one->type == 2)
                        <td>barang 1/2 jadi</td>
                    @elseif($one->type == 3)
                        <td>barang</td>
                    @endif
                    <td>{{ $one->description }}</td>
                    <td>{{ $one->created_at }}</td>
                    <td><button type="button" class="btn btn-outline-success"><a
                                href="/items/{{ $one->id }}/edit"> edit</a></button></td>
                    <td><button type="button" class="btn btn-outline-success"><a href="/items/{{ $one->id }}">
                                detail</a></button></td>
                </tr>
            @endforeach
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
