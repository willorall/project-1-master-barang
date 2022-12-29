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
        <h1>PROSES</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-end">
                <button><a href="/proses/create"> add</a></button>
                <button><a href="/master"> back</a></button>
            </div>
        </div>
    </div>
    <div>
        <table class=" container table table-dark table-striped p-5">
            <tr>
                <th>id</th>
                <th>process</th>
                <th>raw item</th>
                <th>quantity</th>
                <th>tanggal dibuat</th>
                <th colspan="2">action</th>

            </tr>
            @foreach ($data['master'] as $one)
                <tr>
                    <td>{{ $one->link_process1[0]->id }}</td>
                    <td>{{ $one->link_process[0]->process }}</td>
                    <td>{{ $one->link_item[0]->item_name }}</td>
                    <td>{{ $one->quantity }}</td>
                    <td>{{ $one->created_at }}</td>
                    <td><button type="button" class="btn btn-outline-success"><a
                                href="/proses/{{ $one->id }}/edit"> edit</a></button></td>
                    <td><button type="button" class="btn btn-outline-success"><a href="/master/{{ $one->id }}">
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
