<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8  border-b-2 border-gray-400">
                    <h1 class="text-4xl">
                        <img alt="Assets SPA" src="">
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5 border-r-2 border-gray-200">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">Stuff</h5>

                            <ul class="list-reset">
                               <li class="text-sm leading-loose"><router-link class="text-black"  to="/" exact>APGW</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"  to="/about">CO<sub>2</sub></router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"  to="/aaa">Hot</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"  to="/bbb">Ice Age</router-link></li>
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-3">Nonsense</h5>

                            <ul class="list-reset">
                               <li class="text-sm leading-loose"><router-link class="text-black"  to="/ccc">Lies</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"  to="/ddd">Doom</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'users.index' }">Users</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"  to="/references">References</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1 px-3">
                       <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
