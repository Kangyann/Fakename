<!DOCTYPE HTML>
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
            {{-- <h1 class="underline text-xl font-inter font-light px-2">Free Tools for Random Generate Credientials</h1> --}}
            <form action="{{ route('faker') }}" method="GET">
                <div class="flex px-6 items-end gap-5">
                    <div class="flex flex-col">
                        <span>Set Gender</span>
                        <select name="gender" id=""
                            class="select select-sm bg-border rounded hover:bg-opacity-80 focus:outline-none focus:bg-primary transition ">
                            <option value="" @if (request()->has('gender') && request()->input('gender') === '') selected @endif>Gender</option>
                            <option value="male" @if (request()->has('gender') && request()->input('gender') === 'male') selected @endif>Male</option>
                            <option value="female" @if (request()->has('gender') && request()->input('gender') === 'female') selected @endif>Female</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <span>Set Country</span>
                        <select name="country" id=""
                            class="select select-sm bg-border rounded hover:bg-opacity-80 focus:outline-none focus:bg-primary transition ">
                            <option value="" @if (request()->has('country') && request()->input('country') === '') selected @endif>Country</option>
                            <option value="id_ID" @if (request()->has('country') && request()->input('country') === 'id_ID') selected @endif>Indonesia</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="btn btn-sm rounded bg-border hover:bg-opacity-80 hover:bg-border ">Submit</button>
                </div>
            </form>
            <div class="my-6 flex lg:flex-row flex-col gap-9 px-6">
                <div class="w-48 h-32 my-2 flex flex-col text-sm text-center gap-2">
                    <img src="{{ asset('storage/images/profile-male.png') }}" alt="">
                    <div class="">
                        <span>Found Some Bug ?</span>
                        <a href="https://wa.me/6283895886895/" class="text-border">Contact Me</a>
                    </div>
                </div>
                <div class="font-inter flex flex-col gap-1 text-sm w-full">
                    {{-- User Details --}}
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Personal Information</span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy All About Personal Information">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span class="text-sm">Full Name</span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['firstName'] . ' ' . $data['u']['lastName'] }}" id="copy">
                            <span
                                class="p-1 px-2  text-md hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['firstName'] . ' ' . $data['u']['lastName'] }}">{{ $data['u']['firstName'] . ' ' . $data['u']['lastName'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Email </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
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
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['birthDay']['day'] . ' - ' . $data['u']['birthDay']['month'] . ' - ' . $data['u']['birthDay']['year'] }}"
                            id="copy">
                            <span
                                class="p-1 px-2 hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['birthDay']['day'] . ' - ' . $data['u']['birthDay']['month'] . ' - ' . $data['u']['birthDay']['year'] }}">{{ $data['u']['birthDay']['day'] . ' - ' . $data['u']['birthDay']['month'] . ' - ' . $data['u']['birthDay']['year'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Phone Number </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['phoneNumber'] }}" id="copy">
                            <span
                                class="p-1 px-2 hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['phoneNumber'] }}">{{ $data['u']['phoneNumber'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Address </span>
                        <div class="tooltip tooltip-right text-end line-clamp-1" data-tip="Copy Text"
                            data-copy="{{ $data['u']['address'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['address'] }}">{{ $data['u']['address'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Username </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['username'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['username'] }}">{{ $data['i']['username'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Password </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['password'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['password'] }}">{{ $data['i']['password'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>NIK </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['nik'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['nik'] }}">{{ $data['u']['nik'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Fav Color </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['u']['color'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['u']['color'] }}">{{ $data['u']['color'] }}</span>
                        </div>
                    </div>
                    {{-- Company Details --}}
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Company Information</span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy All About Address Information">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Company </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy All About Company Information"
                            data-copy="{{ $data['c']['company'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['c']['company'] }}">{{ $data['c']['company'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>JobTitle </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['c']['jobTitle'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['c']['jobTitle'] }}">{{ $data['c']['jobTitle'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>companyEmail </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['c']['companyEmail'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['c']['companyEmail'] }}">{{ $data['c']['companyEmail'] }}</span>
                        </div>
                    </div>
                    {{-- Internet Information --}}
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Internet Information</span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy All About Internet Information">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>domainName </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['domainName'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['domainName'] }}">{{ $data['i']['domainName'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Safe Email </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['safeEmail'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['safeEmail'] }}">{{ $data['i']['safeEmail'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>Ipv4 </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['ipv4'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['ipv4'] }}">{{ $data['i']['ipv4'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end gap-3 border-b border-border py-1">
                        <span>TimeZone </span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy Text"
                            data-copy="{{ $data['i']['timeZone'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['timeZone'] }}">{{ $data['i']['timeZone'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Useragent </span>
                        <div class="tooltip tooltip-right text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['i']['useragent'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['i']['useragent'] }}">{{ $data['i']['useragent'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between my-1">
                        <span class="font-medium text-lg">Payment Information</span>
                        <div class="tooltip tooltip-right text-end" data-tip="Copy All About Payment Information">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Type Card </span>
                        <div class="tooltip tooltip-right text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['type'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['type'] }}">{{ $data['cardDetails']['type'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Name </span>
                        <div class="tooltip tooltip-right text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['name'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['name'] }}">{{ $data['cardDetails']['name'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Number Card </span>
                        <div class="tooltip tooltip-right text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['number'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['number'] }}">{{ $data['cardDetails']['number'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-3 border-b border-border py-1">
                        <span>Exp Date </span>
                        <div class="tooltip tooltip-right text-end line-clamp-2" data-tip="Copy Text"
                            data-copy="{{ $data['cardDetails']['expirationDate'] }}" id="copy">
                            <span
                                class="p-1 px-2  hover:bg-border hover:rounded hover:cursor-pointer active:bg-opacity-75 transition-all"
                                data-text="{{ $data['cardDetails']['expirationDate'] }}">{{ $data['cardDetails']['expirationDate'] }}</span>
                        </div>
                    </div>
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
