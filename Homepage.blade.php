<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Bowlingbaan Golden Gate') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <div
        x-data="{ cookies: localStorage.getItem('cookies') !== 'ok', voorwaarden: false }"
        class="min-h-screen"
    >
        <header class="bg-red-700 text-white">
            <div class="mx-auto flex max-w-5xl flex-col gap-3 px-4 py-5 sm:flex-row sm:items-center sm:justify-between">
                <h1 class="text-2xl font-bold">Bowlingbaan Golden Gate</h1>

                <nav class="flex flex-wrap gap-4 text-sm font-semibold">
                    <a href="#prijzen" class="hover:underline">Prijzen</a>
                    <a href="#openingstijden" class="hover:underline">Openingstijden</a>
                    <a href="#contact" class="hover:underline">Contact</a>
                    <button type="button" class="hover:underline" x-on:click="voorwaarden = true">
                        Voorwaarden
                    </button>
                </nav>
            </div>
        </header>

        <main>
            <section class="bg-white">
                <div class="mx-auto grid max-w-5xl gap-8 px-4 py-12 md:grid-cols-2 md:items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-red-700 sm:text-4xl">
                            Kom gezellig bowlen
                        </h2>
                        <p class="mt-4 text-lg text-gray-700">
                            Reserveer een baan voor vrienden, familie of een schooluitje.
                            Wij hebben bowlingbanen, snacks en drankjes.
                        </p>
                        <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                            <a href="#contact" class="rounded bg-red-700 px-5 py-3 text-center font-semibold text-white hover:bg-red-800">
                                Reserveer nu
                            </a>
                            <a href="#prijzen" class="rounded border border-gray-400 px-5 py-3 text-center font-semibold text-gray-900 hover:bg-gray-100">
                                Bekijk prijzen
                            </a>
                        </div>
                    </div>

                    <div class="rounded border border-gray-300 bg-gray-100 p-6">
                        <h3 class="text-xl font-bold text-red-700">Vandaag open</h3>
                        <p class="mt-2 text-3xl font-bold">14:00 - 23:00</p>
                        <p class="mt-4 text-gray-700">Schoenhuur is inbegrepen bij elke reservering.</p>
                    </div>
                </div>
            </section>

            <section class="mx-auto max-w-5xl px-4 py-10">
                <h2 class="text-2xl font-bold text-red-700">Wat bieden wij?</h2>

                <div class="mt-6 grid gap-4 md:grid-cols-3">
                    <div class="rounded border border-gray-300 bg-white p-5">
                        <h3 class="font-bold">Bowlingbanen</h3>
                        <p class="mt-2 text-gray-700">Moderne banen met automatische score.</p>
                    </div>
                    <div class="rounded border border-gray-300 bg-white p-5">
                        <h3 class="font-bold">Snacks</h3>
                        <p class="mt-2 text-gray-700">Friet, bitterballen, nachos en frisdrank.</p>
                    </div>
                    <div class="rounded border border-gray-300 bg-white p-5">
                        <h3 class="font-bold">Groepen</h3>
                        <p class="mt-2 text-gray-700">Geschikt voor verjaardagen en schoolgroepen.</p>
                    </div>
                </div>
            </section>

            <section id="prijzen" class="bg-white">
                <div class="mx-auto max-w-5xl px-4 py-10">
                    <h2 class="text-2xl font-bold text-red-700">Prijzen</h2>

                    <div class="mt-6 overflow-x-auto">
                        <table class="w-full border border-gray-300 text-left">
                            <thead class="bg-red-700 text-white">
                                <tr>
                                    <th class="p-3">Dag</th>
                                    <th class="p-3">Tijd</th>
                                    <th class="p-3">Prijs</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="border-t border-gray-300">
                                    <td class="p-3">Maandag t/m donderdag</td>
                                    <td class="p-3">1 uur</td>
                                    <td class="p-3">€22</td>
                                </tr>
                                <tr class="border-t border-gray-300 bg-gray-100">
                                    <td class="p-3">Vrijdag t/m zondag</td>
                                    <td class="p-3">1 uur</td>
                                    <td class="p-3">€29</td>
                                </tr>
                                <tr class="border-t border-gray-300">
                                    <td class="p-3">Studenten</td>
                                    <td class="p-3">1 uur</td>
                                    <td class="p-3">€19</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="openingstijden" class="mx-auto max-w-5xl px-4 py-10">
                <h2 class="text-2xl font-bold text-red-700">Openingstijden</h2>
                <div class="mt-4 rounded border border-gray-300 bg-white p-5">
                    <p>Maandag t/m zondag: <strong>14:00 - 23:00</strong></p>
                    <p class="mt-2 text-gray-700">Op feestdagen kunnen de tijden anders zijn.</p>
                </div>
            </section>

            <section id="contact" class="bg-white">
                <div class="mx-auto max-w-5xl px-4 py-10">
                    <h2 class="text-2xl font-bold text-red-700">Contact</h2>
                    <div class="mt-4 grid gap-4 md:grid-cols-3">
                        <div class="rounded border border-gray-300 p-5">
                            <h3 class="font-bold">Telefoon</h3>
                            <p class="mt-2 text-gray-700">0123 456 789</p>
                        </div>
                        <div class="rounded border border-gray-300 p-5">
                            <h3 class="font-bold">Adres</h3>
                            <p class="mt-2 text-gray-700">Baanstraat 12, Bowlingstad</p>
                        </div>
                        <div class="rounded border border-gray-300 p-5">
                            <h3 class="font-bold">Reserveren</h3>
                            <p class="mt-2 text-gray-700">Bel ons om een baan te reserveren.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-800 px-4 py-6 text-white">
            <div class="mx-auto flex max-w-5xl flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <p>&copy; {{ date('Y') }} Bowlingbaan Golden Gate</p>
                <button type="button" class="text-left underline" x-on:click="voorwaarden = true">
                    Voorwaarden bekijken
                </button>
            </div>
        </footer>

        <div
            x-cloak
            x-show="cookies"
            class="fixed bottom-0 left-0 right-0 border-t border-gray-300 bg-white p-4"
        >
            <div class="mx-auto flex max-w-5xl flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="font-bold text-red-700">Cookies</h2>
                    <p class="text-sm text-gray-700">
                        Deze website gebruikt cookies om de website goed te laten werken.
                    </p>
                </div>
                <button
                    type="button"
                    class="rounded bg-red-700 px-4 py-2 font-semibold text-white hover:bg-red-800"
                    x-on:click="localStorage.setItem('cookies', 'ok'); cookies = false"
                >
                    Accepteren
                </button>
            </div>
        </div>

        <div
            x-cloak
            x-show="voorwaarden"
            class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 p-4"
            x-on:keydown.escape.window="voorwaarden = false"
        >
            <div class="w-full max-w-xl rounded bg-white p-6 text-gray-900">
                <div class="flex items-start justify-between gap-4">
                    <h2 class="text-2xl font-bold text-red-700">Voorwaarden</h2>
                    <button
                        type="button"
                        class="rounded border border-gray-400 px-3 py-1 font-semibold hover:bg-gray-100"
                        x-on:click="voorwaarden = false"
                    >
                        Sluiten
                    </button>
                </div>

                <div class="mt-5 space-y-3 text-gray-700">
                    <p>Reserveringen blijven 10 minuten geldig na de afgesproken tijd.</p>
                    <p>Bowling schoenen zijn verplicht op de banen.</p>
                    <p>Betalen kan aan de balie voor het bowlen begint.</p>
                    <p>Bij drukte kan de wachttijd langer zijn.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>