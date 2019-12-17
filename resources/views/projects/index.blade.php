<!doctype html>
<html lang="en">
  <head>
    <title>Birdboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      
    <h1>Birdboard</h1>

    <ul>
        @foreach ($projects as $project)
    <li>{{$project->title}}</li>   
        @endforeach
    </ul>
 
  </body>
</html>