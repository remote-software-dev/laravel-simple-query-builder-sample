<!DOCTYPE html>
<html>

<head>
    <title>Countries Producer</title>
</head>

<body>
    <table style="text-align: left; width:100%;">
        <tr>
            <th>Country Producer</th>
        </tr>
        @foreach($countries as $country)
        <tr>
            <td>
                <a href="{{route('show', $country->id)}}">
                    {{$country->name}}
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>