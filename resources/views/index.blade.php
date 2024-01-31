<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    <div class="">
        <div class="nav bg-border p-3">
            <span class="font-bold text-xl font-inter text-secondary">Fakename Generator</span>
        </div>
        {{--  --}}
        <div class="m-3 p-1 tooltip tooltip-right" data-tip="Copy Text">
                <span class="p-1 px-2 hover:bg-border hover:rounded hover:cursor-pointer">{{ $data['firstName'] . ' '. $data['lastName'] }}</span>
        </div>
        {{--  --}}
    </div>
</body>

</html>
