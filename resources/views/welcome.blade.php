<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }
        .counter {
            font-size: 3rem;
            margin: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 8px;
            border: none;
            background-color: #3490dc;
            color: white;
        }
        button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <livewire:search-component/>
    <h1>Simple Counter</h1>

    <div>
        <livewire:new-component/>
        <livewire:posts/>
{{-- @livewire('new-component') --}}
    </div>
     @livewireScripts
</body>
</html>
