<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://rsms.me/">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    <div class="">
        <div class="nav bg-border p-3">
            <div class="container mx-auto font-inter">
                <span class="font-semibold text-xl italic text-secondary">Faker Generator</span>
            </div>
        </div>
        {{--  --}}
        <div class="container lg:w-2/3 md:w-2/3 w-11/12 mx-auto my-3 px-3 border-2 border-border rounded relative">
            <div class="flex flex-wrap justify-center gap-2 p-2">
                <label class="swap">
                    <input type="checkbox" id="buttonui" />
                    <div class="btn btn-sm bg-border rounded flex swap-on">
                        <span>Enable Button</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    <div class="btn btn-sm bg-border rounded flex swap-off">
                        <span>Disable Button</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </div>
                </label>
                <button class="btn btn-sm bg-border rounded flex gap-1" disabled>
                    <span>Custom Person</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                </button>
            </div>
            <div class="my-6 flex lg:flex-row flex-col px-6 w-full h-full py-2 gap-9 line-clamp-1" id="sc">
                <div class="my-2 flex flex-col items-center text-sm gap-2 lg:w-56 w-full">
                    @livewire('upload-image')
                    <hr>
                    <form action="{{ route('faker') }}" method="GET" class="lg:w-full w-1/2 mt-3 transition"
                        id="ui">
                        <div class="flex flex-col">
                            <span>Set Gender</span>
                            <select name="gender" id=""
                                class="select select-sm bg-border rounded hover:bg-opacity-80 focus:outline-none focus:bg-primary transition my-2">
                                <option value="" @if (request()->has('gender') && request()->input('gender') === '') selected @endif>Gender</option>
                                <option value="male" @if (request()->has('gender') && request()->input('gender') === 'male') selected @endif>Male</option>
                                <option value="female" @if (request()->has('gender') && request()->input('gender') === 'female') selected @endif>Female</option>
                            </select>
                            <span>Set Country</span>
                            <select name="country" id=""
                                class="select select-sm bg-border rounded hover:bg-opacity-80 focus:outline-none focus:bg-primary transition my-2">
                                <option value="" @if (request()->has('country') && request()->input('country') === '') selected @endif>Country
                                </option>
                                <option value="id_ID" @if (request()->has('country') && request()->input('country') === 'id_ID') selected @endif>Indonesia
                                </option>
                            </select>
                            <button type="submit"
                                class="btn btn-sm rounded bg-border hover:bg-opacity-80 hover:bg-border ">Submit</button>
                        </div>
                        <div class="text-center mt-3">
                            <span>Found Some Bug ?</span>
                            <a href="https://wa.me/6283895886895/" class="text-border">Contact Me</a>
                        </div>
                    </form>
                </div>
                <div class="font-inter flex flex-col gap-1 text-sm w-full">
                    {{-- User Details --}}
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Personal Information</span>
                        <div class="tooltip tooltip-left text-end " data-tip="Personal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span class="text-sm">Full Name</span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['firstName'] . ' ' . $data['u']['lastName'] }}" id="copy">
                            <span
                                class="p-1 px-2  text-md hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['firstName'] . ' ' . $data['u']['lastName'] }}">{{ $data['u']['firstName'] . ' ' . $data['u']['lastName'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Email </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['email'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['email'] }}">{{ $data['i']['email'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <div class="flex flex-col">
                            <span>Birth Day </span>
                            <span class="text-xs">(day - month - year)</span>
                        </div>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['birthDay']['day'] . ' - ' . $data['u']['birthDay']['month'] . ' - ' . $data['u']['birthDay']['year'] }}"
                            id="copy">
                            <span
                                class="p-1 px-2 hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['birthDay']['day'] . ' - ' . $data['u']['birthDay']['month'] . ' - ' . $data['u']['birthDay']['year'] }}">{{ $data['u']['birthDay']['day'] . ' - ' . $data['u']['birthDay']['month'] . ' - ' . $data['u']['birthDay']['year'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Phone Number </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['phoneNumber'] }}" id="copy">
                            <span
                                class="p-1 px-2 hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['phoneNumber'] }}">{{ $data['u']['phoneNumber'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Address </span>
                        <div class="tooltip tooltip-left text-end line-clamp-1" data-tip="Copy Text"
                            data-copy="{{ $data['u']['address'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['address'] }}">{{ $data['u']['address'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Username </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['username'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['username'] }}">{{ $data['i']['username'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Password </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['password'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['password'] }}">{{ $data['i']['password'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>NIK </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['nik'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['nik'] }}">{{ $data['u']['nik'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Fav Color </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['color'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['color'] }}">{{ $data['u']['color'] }}</span>
                        </div>
                    </div>
                    {{-- Company Details --}}
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Company Information</span>
                        <div class="tooltip tooltip-left text-end" data-tip="Company">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>

                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Company </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy All About Company Information"
                            data-copy="{{ $data['c']['company'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['c']['company'] }}">{{ $data['c']['company'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>JobTitle </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['c']['jobTitle'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['c']['jobTitle'] }}">{{ $data['c']['jobTitle'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>companyEmail </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['c']['companyEmail'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['c']['companyEmail'] }}">{{ $data['c']['companyEmail'] }}</span>
                        </div>
                    </div>
                    {{-- Internet Information --}}
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Internet Information</span>
                        <div class="tooltip tooltip-left text-end" data-tip="Internet">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.893 13.393-1.135-1.135a2.252 2.252 0 0 1-.421-.585l-1.08-2.16a.414.414 0 0 0-.663-.107.827.827 0 0 1-.812.21l-1.273-.363a.89.89 0 0 0-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 0 1-1.81 1.025 1.055 1.055 0 0 1-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 0 1-1.383-2.46l.007-.042a2.25 2.25 0 0 1 .29-.787l.09-.15a2.25 2.25 0 0 1 2.37-1.048l1.178.236a1.125 1.125 0 0 0 1.302-.795l.208-.73a1.125 1.125 0 0 0-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 0 1-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 0 1-1.458-1.137l1.411-2.353a2.25 2.25 0 0 0 .286-.76m11.928 9.869A9 9 0 0 0 8.965 3.525m11.928 9.868A9 9 0 1 1 8.965 3.525" />
                            </svg>

                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>domainName </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['domainName'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['domainName'] }}">{{ $data['i']['domainName'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Safe Email </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['safeEmail'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['safeEmail'] }}">{{ $data['i']['safeEmail'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Ipv4 </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['ipv4'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['ipv4'] }}">{{ $data['i']['ipv4'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>TimeZone </span>
                        <div class="tooltip tooltip-left text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['timeZone'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['timeZone'] }}">{{ $data['i']['timeZone'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Useragent </span>
                        <div class="tooltip tooltip-left text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['i']['useragent'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['useragent'] }}">{{ $data['i']['useragent'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Payment Information</span>
                        <div class="tooltip tooltip-left text-end" data-tip="Payment">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                            </svg>

                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Type Card </span>
                        <div class="tooltip tooltip-left text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['type'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['type'] }}">{{ $data['cardDetails']['type'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Name </span>
                        <div class="tooltip tooltip-left text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['name'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['name'] }}">{{ $data['cardDetails']['name'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Number Card </span>
                        <div class="tooltip tooltip-left text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['number'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['number'] }}">{{ $data['cardDetails']['number'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Exp Date </span>
                        <div class="tooltip tooltip-left text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['expirationDate'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['expirationDate'] }}">{{ $data['cardDetails']['expirationDate'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center mb-1 mt-3 font-inter">
                <span class="text-sm font-semibold">Faker Generator</span><br>
                <span class="text-xs">Made by <a href="https://instagram.com/kangyann.tsx"
                        class="hover:text-border transition">Kangyann</a> With &#128150; 2024</span>
            </div>
        </div>
        {{--  --}}
    </div>
</body>
<script>
    const $ = document.querySelectorAll('#copy'),
        $u = document.querySelector('[id="buttonui"]')
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
    let _c = true

    function ui() {
        _c = _c === true ? _c = false : _c = true
        let ui = document.querySelectorAll('[id="ui"]'),
            sc = document.querySelector('[id="sc"]')
        ui.forEach(x => {
            _c == false ? [x.classList.add('opacity-0')] : [x.classList.remove('opacity-0')]
            setTimeout(() => {
                _c == false ? x.classList.add('hidden') : x.classList.remove('hidden')
            }, 300);
        })
    }

    $u.addEventListener('click', ui)
</script>

</html>
