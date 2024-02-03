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
            <div class="container mx-auto">
                <span class="font-bold text-xl font-inter text-secondary">Fakename Generator</span>
            </div>
        </div>
        {{--  --}}
        <div class="container w-2/3 mx-auto my-3 p-3 border-border border">
            <h1 class="underline text-xl font-inter font-light px-2">Free Tools for Random Generate Credientials</h1>
            <form action="">
                <div class="flex justify-items-center gap-4 px-2 my-3">
                    <div class="">
                        <span>Choose Gender</span>
                        <select name="" id=""
                            class="select select-sm rounded border border-border focus:outline-none">
                            <option value="" selected>Gender</option>
                            <option value="">Male</option>
                            <option value="">Male</option>
                        </select>
                    </div>
                    <div class="">
                        <span>Choose Country</span>
                        <select name="" id=""
                            class="select select-sm rounded border border-border focus:outline-none">
                            <option value="" selected>Country</option>
                            <option value="">Indonesia</option>
                            <option value="">Malaysia</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm rounded bg-border">Submit</button>
                </div>
            </form>
            <div class="my-6">
                <div class="">
                    <img src="{{ storage }}" alt="">
                </div>
                <div class="tooltip tooltip-right" data-tip="Copy Text"
                    data-copy="{{ $data['firstName'] . ' ' . $data['lastName'] }}" id="copy">
                    <span
                        class="p-1 px-2 hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                        data-text="{{ $data['firstName'] . ' ' . $data['lastName'] }}">{{ $data['firstName'] . ' ' . $data['lastName'] }}</span>
                </div>
            </div>
        </div>
        {{--  --}}
    </div>
</body>
<script>
    const $ = document.querySelectorAll('#copy')
    $.forEach(x => {
        x.addEventListener('click', () => {
            let att = x.getAttribute('data-copy'),
                t = document.querySelector(`[data-text="${att}"]`),
                c = navigator.clipboard.writeText(t.textContent) ? x.setAttribute('data-tip',
                    'Copied') : console.log('not')
            setTimeout(() => {
                x.setAttribute('data-tip', 'Copy Text')
            }, 500);
        })
    });
</script>

</html>
