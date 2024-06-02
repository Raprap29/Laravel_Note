<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("Title")</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans">
        <nav class="navbar bg-base-100 border">
            <div class="container mx-auto max-width-[920px]">
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl">Notes</a>
                </div>
                <div class="flex-none gap-2">
                    <div class="dropdown dropdown-end">
                    <div class="flex items-center gap-x-[20px]">
                        <div>
                            <p>Ralph Maglaya</p>
                        </div>
                        <div tabindex="0" role="button" class="border border-solid border-[#ccc] flex items-center justify-center btn btn-ghost btn-circle avatar">
                            <i class="fa-solid fa-caret-down text-[22px]"></i>
                        </div>
                    </div>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            @yield("content")
        </main>
    </body>
</html>
