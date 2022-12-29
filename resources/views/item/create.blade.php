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

<body class="p-3 mb-2  bg-dark">
    <div class="bg-dark">
        <div class="container p-5 bg-secondary text-white text-center">
            <h1>CREATE ITEM</h1>
        </div>
        <form action="/items" method="post" class="container text-white">
            @csrf

            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="">
                            <h4>name</h4>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <button><a href="/items"> back</a></button>
                    </div>
                </div>
            <input type="text" name="name">
            <div class="">
                <h4>code</h4>
            </div>
            <input type="text" name="code">
            <div class="">
                <h4>description</h4>
            </div>
            <div class="">
                <textarea name="description" rows="7"></textarea>
            </div>

            <div class="">
                <h4>choose a type:</h4>
            </div>
            <select id="type" name="type">
                <option value="3">barang</option>
                <option value="1">bahan</option>
                <option value="2">barang 1/2 jadi</option>
            </select>
            <div class="">
                <h4>price</h4>
            </div>
            <input type="number" name="price">
            <div class="">
                <h4>unit</h4>
            </div>
            <input type="text" name="unit">
            <div class="">
                <h4>Choose status:</h4>
            </div>
            <select id="status" name="status">
                <option value="1">aktif</option>
                <option value="0">tidak aktif</option>
            </select>
            <button type="submit">save</button>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
