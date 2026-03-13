<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayStaiHome - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50 text-gray-800 min-h-screen">

    <div class="flex flex-col md:flex-row min-h-screen">
        
        <aside class="w-full md:w-64 bg-white border-r shadow-sm p-6 space-y-8">
            <div class="flex items-center gap-2">
                <i class="fas fa-gamepad text-2xl text-blue-600"></i>
                <h1 class="text-xl font-black text-blue-600">PLAYSTAI<span class="text-gray-900">HOME</span></h1>
            </div>
            
            <nav class="space-y-2">
                <a href="#" class="flex items-center p-3 bg-blue-600 text-white rounded-xl font-bold shadow-sm hover:bg-blue-700 transition">
                    Dashboard
                </a>
                <a href="#" class="flex items-center p-3 text-gray-600 hover:bg-blue-50 rounded-xl transition font-semibold">
                    Mes Locations
                </a>
                <a href="#" class="flex items-center p-3 text-gray-600 hover:bg-blue-50 rounded-xl transition font-semibold">
                    Mes Coupons
                </a>
                <a href="#" class="flex items-center p-3 text-gray-600 hover:bg-blue-50 rounded-xl transition font-semibold">
                    Profil
                </a>
            </nav>

            <div class="pt-10 border-t">
                <button class="flex items-center text-red-500 p-3 hover:bg-red-50 w-full rounded-xl transition font-bold">
                    Déconnexion
                </button>
            </div>
        </aside>

        <main class="flex-1 p-10">
            <header class="flex justify-between items-center mb-10">
                <div>
                    <h2 class="text-3xl font-black text-gray-900">Bonjour, Mouad !</h2>
                    <p class="text-gray-500 text-sm mt-2">Gérez vos locations et vos réservations ici.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="bg-white px-5 py-3 rounded-full shadow-sm border text-sm font-bold text-blue-600">
                        Niveau : Gamer Pro
                    </span>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition">
                    <p class="text-gray-500 text-sm mb-3 font-semibold">Locations en cours</p>
                    <h3 class="text-4xl font-black text-blue-600">1</h3>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition">
                    <p class="text-gray-500 text-sm mb-3 font-semibold">Dépense Totale</p>
                    <h3 class="text-4xl font-black text-gray-900">145.00 €</h3>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition">
                    <p class="text-gray-500 text-sm mb-3 font-semibold">Coupons Actifs</p>
                    <h3 class="text-4xl font-black text-green-600">2</h3>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
                <div class="p-6 border-b bg-gradient-to-r from-white to-blue-50 flex justify-between items-center">
                    <h3 class="font-black text-xl text-gray-800">Historique des locations</h3>
                    <button class="text-blue-600 text-sm font-bold hover:underline">
                        Voir tout
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-500 font-bold">
                            <tr>
                                <th class="px-6 py-4">Article</th>
                                <th class="px-6 py-4">Dates</th>
                                <th class="px-6 py-4">Montant</th>
                                <th class="px-6 py-4">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr class="hover:bg-blue-50 transition">
                                <td class="px-6 py-5 font-bold text-gray-800 flex items-center gap-3">
                                    <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center">
                                        <img src="https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$" alt="PS5" class="w-10 h-10 object-contain">
                                    </div>
                                    PlayStation 5
                                </td>
                                <td class="px-6 py-5 text-sm text-gray-600">10 Mar - 13 Mar 2026</td>
                                <td class="px-6 py-5 font-black text-gray-800">90.00 €</td>
                                <td class="px-6 py-5 text-xs">
                                    <span class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full font-bold">
                                        EN ATTENTE
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-blue-50 transition">
                                <td class="px-6 py-5 font-bold text-gray-400 italic flex items-center gap-3">
                                    <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center">
                                        <img src="https://i.imgur.com/8QJVX5L.png" alt="Xbox" class="w-10 h-10 object-contain">
                                    </div>
                                    Xbox Series X
                                </td>
                                <td class="px-6 py-5 text-sm text-gray-400">01 Feb - 03 Feb 2026</td>
                                <td class="px-6 py-5 font-black text-gray-400">55.00 €</td>
                                <td class="px-6 py-5 text-xs">
                                    <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-full font-bold">
                                        TERMINÉ
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>