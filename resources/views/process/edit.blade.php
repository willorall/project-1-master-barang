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
    <form action="/proses/{{ $data['proses']->id }}" method="post" class="container text-white">
        @method('put')
        @csrf
            
            <div class="row">
                <div class="col-sm-8">
                    <div>
                        <h4>item:</h4>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <button><a href="{{ URL::previous() }}"> Back </a></button>
                </div>
            </div>
            {{-- {{dd($data['proses']);}} --}}
            <select id="id_item" name="id_item">
                @foreach ($data['item'] as $item)
            {{-- {{dd($item);}} --}}
                    <option value="{{$item->id}}">{{ $item->item_name }}</option>
                @endforeach
            </select>
            <div class="">
                <h4>process</h4>
            </div>
            <input type="text" name="process" value="{{ $data['proses']->process }}">
            <button type="submit" class="">update</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
