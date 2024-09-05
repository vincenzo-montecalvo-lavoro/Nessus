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
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="size-full grid place-content-center place-items-center bg-gradient-to-br from-blue-700 to-green-700">
        <h1 class="m-2 p-2 text-5xl text-white">Nessus</h1>
        @auth
            <div>
                <a class="m-2 p-2 text-xl text-white border-2 rounded border-white" href="search">Search</a>
                <a class="m-2 p-2 text-xl text-white border-2 rounded border-white" href="albums/create">Create</a>
            </div>
        @endauth
        @guest
            <div>
                <a class="m-2 p-2 text-xl text-white border-2 rounded border-white" href="/users/login">Login</a>
                <a class="m-2 p-2 text-xl text-white border-2 rounded border-white" href="/users/create">Create</a>
            </div>
        @endguest
    </div>
</body>

</html>