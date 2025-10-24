<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Padre - PDV</title>
    <!-- Inclua o CDN do Tailwind CSS para prototipagem rápida -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Você pode definir cores customizadas no tailwind.config.js se estiver usando o CLI -->
    <style>
        /* Cores customizadas para o projeto, se não estiver usando tailwind.config.js */
        :root {
            --color-primary-green: #228B22; /* Forest Green */
            --color-dark-text: #1A1A1A;
            --color-light-bg: #FFFFFF;
            --color-alert-red: #DC2626;
            --color-alert-yellow: #EAB308;
            --color-info-blue: #2563EB;
        }
        .bg-primary-green { background-color: var(--color-primary-green); }
        .text-primary-green { color: var(--color-primary-green); }
        .border-primary-green { border-color: var(--color-primary-green); }
        .bg-dark-header { background-color: var(--color-dark-text); } /* Usando o dark-text para o header */
        .text-dark-text { color: var(--color-dark-text); }
        .bg-alert-yellow { background-color: var(--color-alert-yellow); }
        .text-alert-red { color: var(--color-alert-red); }

        /* Estilos para ícones SVG básicos (apenas exemplo) */
        .icon {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-dark-header text-white p-4 flex justify-between items-center shadow-md">
            <div class="flex items-center space-x-2">
                <!-- Logo Farmácia Padre -->
                <span class="text-2xl font-bold text-primary-green">F</span><span class="text-2xl font-bold">armácia Padre</span>
            </div>
            <nav class="flex items-center space-x-6">
                <a href="#" class="flex items-center space-x-1 text-gray-300 hover:text-white">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-1 text-gray-300 hover:text-white">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M16 11V3H8v8H2v10h20V11h-6zm-6-6h4v6h-4V5zM4 13h2v2H4v-2zm0 4h2v2H4v-2zm0 4h2v2H4v-2zm16 0h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2v-2h2v2z"/></svg>
                    <span>Reports</span>
                </a>
                <a href="#" class="flex items-center space-x-1 text-gray-300 hover:text-white">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.48-7-7.93h2c0 3.87 3.13 7 7 7v-2l4 3-4 3v-2zM13 4.07c3.95.49 7 3.48 7 7.93h-2c0-3.87-3.13-7-7-7V2l-4 3 4 3V4.07z"/></svg>
                    <span>Settings</span>
                </a>
                <span class="text-gray-400">Usuário: Caixa 1</span>
            </nav>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 flex p-4 space-x-4">

            <!-- Left Sidebar - Product Search & Categories -->
            <div class="w-1/4 bg-white rounded-lg shadow p-4 flex flex-col space-y-4">
                <h2 class="text-lg font-semibold text-dark-text mb-2">Produtos</h2>
                <div class="relative">
                    <input type="text" placeholder="Buscar Produto..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-green">
                    <svg class="icon absolute left-3 top-2.5 text-gray-400" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                </div>

                <div class="grid grid-cols-2 gap-2 mt-4">
                    <button class="bg-primary-green text-white py-2 px-3 rounded-lg hover:opacity-90">Medicamentos</button>
                    <button class="bg-primary-green text-white py-2 px-3 rounded-lg hover:opacity-90">Higiene</button>
                    <button class="bg-primary-green text-white py-2 px-3 rounded-lg hover:opacity-90">Beleza</button>
                    <button class="bg-primary-green text-white py-2 px-3 rounded-lg hover:opacity-90">Suplementos</button>
                </div>

                <h3 class="text-md font-semibold text-dark-text mt-6 mb-2">Produtos Recomendados</h3>
                <div class="space-y-3">
                    <!-- Item de Produto - Exemplo 1 -->
                    <div class="flex items-center space-x-3 p-2 bg-gray-50 rounded-lg border border-gray-200">
                        <img src="https://via.placeholder.com/60" alt="Produto 1" class="w-16 h-16 rounded object-cover">
                        <div class="flex-1">
                            <p class="font-medium text-dark-text">Paracetamol 500mg</p>
                            <p class="text-sm text-gray-600">Lote: 12345 | Val: 12/2023</p>
                            <p class="font-bold text-lg text-primary-green">R$ 8.50</p>
                        </div>
                        <button class="bg-primary-green text-white px-3 py-1 rounded-full text-sm hover:opacity-90">Add</button>
                    </div>
                    <!-- Item de Produto - Exemplo 2 -->
                    <div class="flex items-center space-x-3 p-2 bg-gray-50 rounded-lg border border-gray-200">
                        <img src="https://via.placeholder.com/60" alt="Produto 2" class="w-16 h-16 rounded object-cover">
                        <div class="flex-1">
                            <p class="font-medium text-dark-text">Vitamina C Efervescente</p>
                            <p class="text-sm text-gray-600">Lote: 67890 | Val: 01/2024</p>
                            <p class="font-bold text-lg text-primary-green">R$ 12.90</p>
                        </div>
                        <button class="bg-primary-green text-white px-3 py-1 rounded-full text-sm hover:opacity-90">Add</button>
                    </div>
                </div>
            </div>

            <!-- Central Area - Cart/Order Items -->
            <div class="w-2/4 bg-white rounded-lg shadow p-4 flex flex-col">
                <h2 class="text-lg font-semibold text-dark-text mb-4">Itens do Pedido</h2>
                <div class="flex-1 overflow-y-auto space-y-3 pr-2">
                    <!-- Item do Carrinho - Exemplo 1 -->
                    <div class="flex items-center justify-between p-3 border-b border-gray-200 last:border-b-0">
                        <div class="flex items-center space-x-3">
                            <span class="font-bold text-dark-text">1x</span>
                            <div>
                                <p class="font-medium text-dark-text">Paracetamol 500mg (10 Comprimidos)</p>
                                <p class="text-sm text-gray-500">Lote: 12345 | Val: 12/2023</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="font-bold text-dark-text">R$ 8.30</span>
                            <button class="text-gray-600 hover:text-red-500">
                                <svg class="icon" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5L13.5 3h-5L7.5 4H4v2h16V4z"/></svg>
                            </button>
                        </div>
                    </div>
                    <!-- Item do Carrinho - Exemplo 2 -->
                    <div class="flex items-center justify-between p-3 border-b border-gray-200 last:border-b-0">
                        <div class="flex items-center space-x-3">
                            <span class="font-bold text-dark-text">2x</span>
                            <div>
                                <p class="font-medium text-dark-text">Creme Hidratante Facial</p>
                                <p class="text-sm text-gray-500">Lote: 67890 | Val: 03/2024</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="font-bold text-dark-text">R$ 60.00</span>
                            <button class="text-gray-600 hover:text-red-500">
                                <svg class="icon" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5L13.5 3h-5L7.5 4H4v2h16V4z"/></svg>
                            </button>
                        </div>
                    </div>
                    <!-- Mais itens podem ser adicionados aqui -->
                </div>

                <div class="mt-4 pt-4 border-t border-gray-200 space-y-2">
                    <div class="flex justify-between text-lg font-medium text-dark-text">
                        <span>Subtotal:</span>
                        <span>R$ 68.30</span>
                    </div>
                    <div class="flex justify-between text-lg font-medium text-red-600">
                        <span>Desconto:</span>
                        <span>-R$ 5.00</span>
                    </div>
                    <div class="flex justify-between items-center text-3xl font-bold text-primary-green mt-4">
                        <span>Total a Pagar:</span>
                        <span>R$ 63.30</span>
                    </div>
                    <button class="w-full bg-primary-green text-white py-3 mt-6 rounded-lg text-xl font-semibold hover:opacity-90">FINALIZAR VENDA</button>
                </div>
            </div>

            <!-- Right Sidebar - Client Info, Payments, Alerts -->
            <div class="w-1/4 bg-white rounded-lg shadow p-4 flex flex-col space-y-4">
                <h2 class="text-lg font-semibold text-dark-text mb-2">Informações do Cliente</h2>
                <div class="relative">
                    <input type="text" placeholder="Buscar Cliente..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-green">
                    <svg class="icon absolute left-3 top-2.5 text-gray-400" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </div>
                <div class="mt-2 p-3 bg-gray-50 rounded-lg border border-gray-200">
                    <p class="font-medium text-dark-text">Cliente: Maria Silva</p>
                    <p class="text-sm text-gray-600">CPF: ***.123.456-**</p>
                </div>

                <h2 class="text-lg font-semibold text-dark-text mt-4 mb-2">Pagamentos</h2>
                <div class="grid grid-cols-2 gap-2">
                    <button class="border border-gray-300 py-2 rounded-lg text-dark-text hover:bg-gray-100">Cartão</button>
                    <button class="border border-gray-300 py-2 rounded-lg text-dark-text hover:bg-gray-100">Dinheiro</button>
                    <button class="border border-gray-300 py-2 rounded-lg text-dark-text hover:bg-gray-100">PIX</button>
                </div>

                <!-- Alert Box -->
                <div class="bg-alert-yellow border border-yellow-500 text-dark-text p-4 rounded-lg mt-6 flex items-start space-x-3">
                    <svg class="icon text-dark-text flex-shrink-0" viewBox="0 0 24 24"><path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/></svg>
                    <div>
                        <p class="font-semibold">ATENÇÃO:</p>
                        <p class="text-sm">2 itens próximos ou vencimento no estoque da loja.</p>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>