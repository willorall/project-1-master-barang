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
        <h1>MASTER</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-end">
                <button><a href="/master/add"> add</a></button>
                <button><a href="/"> back</a></button>
            </div>
        </div>
    </div>
    <div>
        <table class=" container table table-dark table-striped p-5">
            <tr>
                <th>id</th>
                <th>item</th>
                <th>tanggal dibuat</th>
                <th colspan="2">action</th>


            </tr>
            @foreach ($data['item'] as $one)
                <tr>
                    @if ($one->status_master == 1)
                        <td>{{ $one->id }}</td>
                        <td>{{ $one->item_name }}</td>
                        <td>{{ $one->created_at }}</td>
                        <td><button type="button" class="btn btn-outline-success"><a
                                    href="/master/destroy/{{ $one->id }}">delete</a></button></td>
                        {{-- <td>
                            <form action="/master/{{ $one->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                            </form>
                        </td> --}}
                        <td><button type="button" class="btn btn-outline-success"><a
                                    href="/master/{{ $one->id }}">
                                    detail</a></button></td>
                    @endif
                </tr>
            @endforeach
        </table>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
