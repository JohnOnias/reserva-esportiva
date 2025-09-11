@extends('layouts.app')
@section('content')
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-green-600 text-white p-4">
                        <h2 class="text-xl font-semibold">Menu de Controle</h2>
                    </div>
                    <nav class="p-4">
                        <ul class="space-y-2">
                            <li>
                                <a href="dashboard.html" class="w-full text-left px-4 py-3 rounded-lg font-medium flex items-center justify-between hover:bg-gray-100">
                                    <span><i class="fas fa-tachometer-alt mr-3"></i> Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="reservations.html" class="w-full text-left px-4 py-3 rounded-lg font-medium flex items-center justify-between hover:bg-gray-100">
                                    <span><i class="fas fa-calendar-check mr-3"></i> Reservas</span>
                                </a>
                            </li>
                            <li>
                                <a href="history.html" class="w-full text-left px-4 py-3 rounded-lg font-medium flex items-center justify-between bg-green-100 text-green-800">
                                    <span><i class="fas fa-history mr-3"></i> Histórico</span>
                                </a>
                            </li>
                            <li>
                                <a href="penalties.html" class="w-full text-left px-4 py-3 rounded-lg font-medium flex items-center justify-between hover:bg-gray-100">
                                    <span><i class="fas fa-ban mr-3"></i> Penalidades</span>
                                </a>
                            </li>
                            <li>
                                <a href="users.html" class="w-full text-left px-4 py-3 rounded-lg font-medium flex items-center justify-between hover:bg-gray-100">
                                    <span><i class="fas fa-users mr-3"></i> Usuários</span>
                                </a>
                            </li>
                            <li>
                                <a href="settings.html" class="w-full text-left px-4 py-3 rounded-lg font-medium flex items-center justify-between hover:bg-gray-100">
                                    <span><i class="fas fa-cog mr-3"></i> Configurações</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Quick Stats -->
                <div class="mt-6 bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">Estatísticas do Histórico</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-gray-500 text-sm">Total de Registros</p>
                            <p class="text-2xl font-bold">247</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Reservas Concluídas</p>
                            <p class="text-2xl font-bold">198</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Não Comparecimentos</p>
                            <p class="text-2xl font-bold">12</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Panel -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Histórico Completo de Reservas</h2>
                        <div class="flex space-x-3">
                            <div class="relative">
                                <input type="text" placeholder="Buscar histórico..." class="border border-gray-300 rounded px-4 py-2 pl-10 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            </div>
                            <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-download mr-2"></i> Exportar
                            </button>
                        </div>
                    </div>

                    <!-- Filters -->
                    <div class="bg-gray-50 rounded-lg p-4 mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Aluno</label>
                                <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                                    <option>Todos</option>
                                    <option>João Silva</option>
                                    <option>Maria Oliveira</option>
                                    <option>Carlos Mendes</option>
                                    <option>Ana Souza</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Equipamento</label>
                                <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                                    <option>Todos</option>
                                    <option>Bola de Futsal</option>
                                    <option>Raquete de Ping Pong</option>
                                    <option>Rede de Vôlei</option>
                                    <option>Bola de Basquete</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Período Inicial</label>
                                <input type="date" class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Período Final</label>
                                <input type="date" class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- History Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aluno</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Matrícula</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Equipamento</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="history-row">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/07/2023 14:00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">João Silva</div>
                                                <div class="text-sm text-gray-500">Sist. de Informações</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2020123456</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bola de Futsal (2 unidades)</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full status-completed">Devolvido</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-eye"></i></button>
                                        <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-print"></i></button>
                                    </td>
                                </tr>
                                <tr class="history-row">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14/07/2023 16:00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/2" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Maria Oliveira</div>
                                                <div class="text-sm text-gray-500">Lic.  Física</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2020234567</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Raquete de Ping Pong</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full status-no-show">Não compareceu</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-eye"></i></button>
                                        <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-print"></i></button>
                                    </td>
                                </tr>
                                <tr class="history-row">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13/07/2023 18:00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/3" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Carlos Mendes</div>
                                                <div class="text-sm text-gray-500">Eng. Mecânica</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2020345678</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rede de Vôlei</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full status-returned">Devolvido com atraso</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-eye"></i></button>
                                        <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-print"></i></button>
                                    </td>
                                </tr>
                                <tr class="history-row">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/07/2023 09:00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/4" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Ana Souza</div>
                                                <div class="text-sm text-gray-500">Lic. Matemática</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2020456789</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bola de Basquete</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full status-completed">Devolvido</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-eye"></i></button>
                                        <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-print"></i></button>
                                    </td>
                                </tr>
                                <tr class="history-row">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10/07/2023 15:00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/5" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Pedro Costa</div>
                                                <div class="text-sm text-gray-500">Eng. Elétrica</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2020567890</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Conjunto de Mesa de Ping Pong</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full status-late">Devolução pendente</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-eye"></i></button>
                                        <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-print"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="flex items-center justify-between mt-6">
                        <div class="text-sm text-gray-500">
                            Mostrando 1 a 5 de 247 registros
                        </div>
                        <div class="flex space-x-1">
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-100">Anterior</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm bg-green-600 text-white">1</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-100">2</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-100">3</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-100">4</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-100">5</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-100">Próximo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // User menu toggle
        document.getElementById('user-menu-button').addEventListener('click', function() {
            document.getElementById('user-menu').classList.toggle('hidden');
        });

        // Close user menu when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('user-menu');
            const userMenuButton = document.getElementById('user-menu-button');
            
            if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });
    </script>
</body>

@endsection