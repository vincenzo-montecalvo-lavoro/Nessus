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
    <div class="size-full grid place-content-center bg-gradient-to-br from-blue-700 to-green-700">
        <form class="grid place-items-center border-2 rounded border-white" action="{{route('search_post')}}"
            enctype="multipart/form-data" method="post">
            @csrf
            <label class="text-xl text-white" for="name">Name</label>
            <input class="m-2 border-2 rounded border-white" type="text" name="name" id="name" placeholder="Name">
            <input class="m-2 px-2 text-xl text-white border-2 rounded border-white" type="submit" value="Submit">
        </form>
    </div>
</body>

</html>