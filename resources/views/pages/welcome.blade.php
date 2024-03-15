<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orario dei treni</title>
</head>
<body>
    <h1>
        Today's trains
    </h1>

    @if(count($trains) > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Train Code</th>
                    <th>Carriages Number</th>
                    <th>On Time</th>
                    <th>Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>
                        {{$train->company}}
                    </td>
                    <td>
                        {{$train->departure_station}}
                    </td>
                    <td>
                        {{$train->arrival_station}}
                    </td>
                    <td>
                        {{$train->departure_time}}
                    </td>
                    <td>
                        {{$train->arrival_time}}
                    </td>
                    <td>
                        {{$train->train_code}}
                    </td>
                    <td>
                        {{$train->num_carriages}}
                    </td>
                    <td>
                        {{$train->on_time ? 'On Time' : 'Delayed'}}
                    </td>
                    <td>
                        {{$train->cancelled ? 'Yes' : 'No'}}
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>