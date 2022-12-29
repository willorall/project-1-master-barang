<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="p-3 mb-2 bg-dark">
    <div class="bg-dark">
        <div class="container p-5 bg-secondary text-white text-center">
            <h1>CREATE MASTER</h1>
        </div>
        <form action="/master" method="post" class="container text-white">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="">
                            <h4>item:</h4>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <button><a href="/proses/create"> add proses</a></button>
                        <button><a href="{{ URL::previous() }}"> Back </a></button>
                    </div>
                </div>
                {{-- {{dd($data['proses'])}} --}}
                <select id="id_items" name="id_items" class="">
                    @foreach ($data['item'] as $item)
                        <option value="{{ $item->id }}">{{ $item->item_name }}</option>
                    @endforeach
                </select>
                <div class="">
                    <h4>process</h4>
                </div>
                <select id="id_proses" name="id_proses">
                    @foreach ($data['proses'] as $item)
                        <option value="{{ $item->id }}">{{ $item->process }}</option>
                    @endforeach
                </select>
                
                <br>
                <div class="">
                    <h4>raw item:</h4>
                </div>
                <select id="id_raw_items" name="id_raw_items">
                    @foreach ($data['item'] as $item)
                        <option value="{{ $item->id }}">{{ $item->item_name }}</option>
                    @endforeach
                </select>
                <div class="">
                    <h4>quantity</h4>
                </div>
                <input type="text" name="quantity">
                <button type="submit">save</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
