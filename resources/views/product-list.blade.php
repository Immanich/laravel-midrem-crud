<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .row {
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Category</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
            @php $count=0; @endphp
                @foreach ($product as $p)
                    @if ($count < 100)
                        <div style='page-break-after: always;'>&nbsp;</div>
                        @php $count=0; @endphp
                    @endif
                    <tr class="row border border-black">
                        <td>{{ $p->name}}</td>
                        <td>{{ $p->description}}</td>
                        <td>{{ $p->category}}</td>
                        <td>{{ $p->price}}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>