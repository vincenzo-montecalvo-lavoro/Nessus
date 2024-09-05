<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nessus</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }

        input[type="file"] {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="size-full grid grid-cols-2 bg-gradient-to-br from-blue-700 to-green-700">
        <div class="grid place-content-center place-items-center">
            @foreach ($covers as $file)
                <img class="size-11/12 rounded" src="{{asset('storage/' . $file->path)}}" alt="">
            @endforeach
        </div>
        <div class="grid place-content-center place-items-center">
            <h1 class="text-5xl text-white">{{$album->name}}</h1>
            <h1 class="text-xl text-white">{{$album->artist}}</h1>
            <div class="grid grid-cols-2 place-content-center place-items-center">
                @foreach ($tracks as $file)
                    <h1 class="text-xl text-white">{{$file->name}}</h1>
                    <audio controls>
                        <source src="{{asset('storage/' . $file->path)}}" type="audio/mp3">
                        <source src="{{asset('storage/' . $file->path)}}" type="audio/wav">
                    </audio>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>