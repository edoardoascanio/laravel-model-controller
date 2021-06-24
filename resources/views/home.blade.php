<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>

    <section>

        @foreach($movies as $movie){

            <div class="card">
                <ul>
                    <li><h1>{{ $movie['title']}}</h1></li>
                    <li><h3>{{ $movie['original_title']}}</h3></li>
                    <li>{{$movie['nationality']}}</li>
                    <li>{{$movie['date']}}</li>
                    <li>{{$movie['vote']}}</li>
                </ul>
            </div>
        }

        @endforeach
    </section>

</body>
</html>
