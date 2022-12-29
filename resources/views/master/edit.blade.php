<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-dark">
    <div class="container p-5 bg-secondary text-white text-center">
        <h1>EDIT PROCESS DATA</h1>
    </div>
    <form action="/proses/{{ $data->id }}/edit" method="post" class="container text-white">
        @method('put')
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-start">
                        <h4>name</h4>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <button><a href="/items"> back</a></button>
                </div>
            </div>
        <input type="text" name="name" value="{{ $data->item_name }}">
        <div class="">
            <h4>code</h4>
        </div>
        <input type="text" name="code" value="{{ $data->code }}">
        <div class="">
            <h4>description</h4>
        </div>
        <div class="">
            <textarea name="description" rows="7">{{ $data->description }}</textarea>
        </div>
        <div class="">
            <h4>choose a type</h4>
        </div>

        <select id="type" name="type">
            <option value="3" {{ $data->type == '3' ? 'selected' : '' }}>barang</option>
            <option value="1" {{ $data->type == '1' ? 'selected' : '' }}>bahan</option>
            <option value="2" {{ $data->type == '2' ? 'selected' : '' }}>barang 1/2 jadi</option>
        </select>
        <div class="">
            <h4>price</h4>
        </div>

        <input type="number" name="price" value="{{ $data->link_price_list[0]->price }}">

        <div class="">
            <h4>unit</h4>
        </div>
        <input type="text" name="unit" value="{{ $data->unit }}">
        <div class="">
            <h4>choose a status</h4>
        </div>

        <select id="status" name="status">
            <option value="1"{{ $data->status == '1' ? 'selected' : '' }}>aktif</option>
            <option value="0"{{ $data->status == '0' ? 'selected' : '' }}>tidak aktif</option>
        </select>
        <br>
        <div class="">
            <h4>choose status master</h4>
        </div>

        <select id="status_master" name="status_master">
            <option value="1"{{ $data->status_master == '1' ? 'selected' : '' }}>master</option>
            <option value="0"{{ $data->status_master == '0' ? 'selected' : '' }}>0</option>
        </select>
        <button type="submit" class="">save</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
