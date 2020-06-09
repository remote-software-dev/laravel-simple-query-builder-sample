<style>
    table {
        text-align: left;
        width: 30%;
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid black;
    }
</style>

<table>
    <tr>
        <th>Origin</th>
        <th>Car Maker</th>
    </tr>
    @foreach($country as $c)
    <tr>
        <td>{{$c->origin_name}}</td>
        <td>{{$c->car_manufacturer}}</td>
    </tr>
    @endforeach
</table>
<h3><a href="{{route('index')}}">Back</a></h3>