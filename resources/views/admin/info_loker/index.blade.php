<x-app-layout>
    <div class="mx-5 pt-28">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-x-1">
                <a href="{{ route('dashboard') }}" class="transition-all duration-150 ease-in-out bg-transparent border-0 shadow-none btn btn-sm icon hover:bg-transparent hover:border-0">
                    <i class="text-2xl text-indigo-500 ri-arrow-left-circle-line"></i>
                    <i class="hidden text-2xl text-indigo-500 ri-arrow-left-circle-fill"></i>
                </a>
                <h1 class="text-xl font-bold text-gray-800">Kelola Lowongan Pekerjaan</h1>
            </div>
            <button id="openCreateModal" type="button" class="flex items-center gap-2 px-4 py-2 text-white transition-colors duration-300 bg-green-600 rounded-lg hover:bg-green-700">
                <i class="text-lg ri-add-fill"></i>
                <span>Tambah Lowongan</span>
            </button>
        </div>

        <!-- Job Vacancies Table -->
        <div class="overflow-hidden bg-white shadow-md rounded-xl">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">ID</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Posisi</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Lokasi</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Jumlah</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="jobVacanciesTable">
                        @forelse ($pekerjaanByKota as $city => $jobs)
                            <tr class="bg-gray-100">
                                <td colspan="6" class="px-6 py-3 text-sm font-medium text-gray-900 capitalize">
                                    <i class="mr-2 ri-map-pin-line"></i> {{ $city }}
                                </td>
                            </tr>
                            @foreach ($jobs as $jobVacancy)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $loop->index + 1 }}.</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $jobVacancy->position }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $jobVacancy->province }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $jobVacancy->count }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $jobVacancy->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $jobVacancy->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <div class="flex justify-end space-x-2">
                                            <button class="text-indigo-600 hover:text-indigo-900 edit-btn" data-id="{{ $jobVacancy->id }}">
                                                <i class="text-lg ri-edit-line"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900 delete-btn" data-id="{{ $jobVacancy->id }}">
                                                <i class="text-lg ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-sm text-center text-gray-500">
                                    Tidak ada data lowongan pekerjaan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div id="createModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 py-3 bg-gradient-to-r from-green-500 to-emerald-500 sm:px-6 sm:py-4">
                    <h3 class="text-lg font-medium leading-6 text-white" id="modal-title">
                        Tambah Lowongan Pekerjaan Baru
                    </h3>
                </div>
                <form action="{{ route('info_loker.store') }}" method="POST" enctype="multipart/form-data" class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    @csrf
                    @method('POST')
                    <div class="space-y-4">
                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700">Posisi (Cleaning service, security, dll)</label>
                            <input type="text" name="position" id="position" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="city" class="block text-sm font-medium text-gray-700">Kota</label>
                                <input type="text" name="city" id="city" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="province" class="block text-sm font-medium text-gray-700">Provinsi</label>
                                <input type="text" name="province" id="province" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="count" class="block text-sm font-medium text-gray-700">Jumlah Posisi</label>
                            <input type="number" name="count" id="count" min="1" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                        </div>

                        <div class="flex items-center">
                            <!-- Hidden input that sends false when checkbox is unchecked -->
                            <input type="hidden" name="is_active" value="0">

                            <!-- Checkbox that sends true when checked -->
                            <input type="checkbox" name="is_active" id="is_active" value="1" checked class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">

                            <label for="is_active" class="block ml-2 text-sm text-gray-900">Aktif</label>
                        </div>
                    </div>

                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:flow-row-dense">
                        <button type="button" id="closeCreateModal" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:col-start-1">
                            Batal
                        </button>
                        <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:col-start-2">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 sm:px-6 sm:py-4">
                    <h3 class="text-lg font-medium leading-6 text-white" id="modal-title">
                        Edit Lowongan Pekerjaan
                    </h3>
                </div>
                <form id="editForm" method="POST" enctype="multipart/form-data" class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    @csrf
                    @method('PATCH')
                    <div class="space-y-4">
                        <input type="hidden" name="id" id="editId">

                        <div>
                            <label for="editPosition" class="block text-sm font-medium text-gray-700">Posisi</label>
                            <input type="text" name="position" id="editPosition" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="editCity" class="block text-sm font-medium text-gray-700">Kota</label>
                                <input type="text" name="city" id="editCity" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="editProvince" class="block text-sm font-medium text-gray-700">Provinsi</label>
                                <input type="text" name="province" id="editProvince" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="editCount" class="block text-sm font-medium text-gray-700">Jumlah Posisi</label>
                            <input type="number" name="count" id="editCount" min="1" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>

                        <div class="flex items-center">
                            <!-- Hidden input that sends false when checkbox is unchecked -->
                            <input type="hidden" name="is_active" value="0">

                            <!-- Checkbox that sends true when checked -->
                            <input type="checkbox" name="is_active" id="editIsActive" value="1" checked class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">

                            <label for="editIsActive" class="block ml-2 text-sm text-gray-900">Aktif</label>
                        </div>
                    </div>

                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:flow-row-dense">
                        <button type="button" id="closeEditModal" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:col-start-1">
                            Batal
                        </button>
                        <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:col-start-2">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 py-3 bg-gradient-to-r from-red-500 to-red-600 sm:px-6 sm:py-4">
                    <h3 class="text-lg font-medium leading-6 text-white" id="modal-title">
                        Hapus Lowongan Pekerjaan
                    </h3>
                </div>
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 mx-auto text-red-500"><path d="M4.00001 20V14C4.00001 9.58172 7.58173 6 12 6C16.4183 6 20 9.58172 20 14V20H21V22H3.00001V20H4.00001ZM6.00001 20H18V14C18 10.6863 15.3137 8 12 8C8.6863 8 6.00001 10.6863 6.00001 14V20ZM11 2H13V5H11V2ZM19.7782 4.80761L21.1924 6.22183L19.0711 8.34315L17.6569 6.92893L19.7782 4.80761ZM2.80762 6.22183L4.22183 4.80761L6.34315 6.92893L4.92894 8.34315L2.80762 6.22183ZM7.00001 14C7.00001 11.2386 9.23858 9 12 9V11C10.3432 11 9.00001 12.3431 9.00001 14H7.00001Z"></path></svg>
                        <h3 class="mt-2 text-lg font-medium text-gray-900">Apakah Anda yakin ingin menghapus lowongan ini?</h3>
                        <p class="mt-1 text-sm text-gray-500">Tindakan ini tidak dapat dibatalkan.</p>
                    </div>

                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:flow-row-dense">
                        <button type="button" id="closeDeleteModal" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:col-start-1">
                            Batal
                        </button>
                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" id="deleteId">
                            <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:col-start-2">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Modal elements
            const modals = {
                create: document.getElementById('createModal'),
                edit: document.getElementById('editModal'),
                delete: document.getElementById('deleteModal')
            };

            // Form elements
            const editForm = document.getElementById('editForm');
            const deleteForm = document.getElementById('deleteForm');

            // Open modal function
            function openModal(modalName) {
                modals[modalName].classList.remove('hidden');
            }

            // Close modal function
            function closeModal(modalName) {
                modals[modalName].classList.add('hidden');
            }

            // Event listeners for opening modals
            document.getElementById('openCreateModal').addEventListener('click', () => openModal('create'));

            // Event listeners for closing modals
            document.getElementById('closeCreateModal').addEventListener('click', () => closeModal('create'));
            document.getElementById('closeEditModal').addEventListener('click', () => closeModal('edit'));
            document.getElementById('closeDeleteModal').addEventListener('click', () => closeModal('delete'));

            // Event delegation for edit and delete buttons
            document.getElementById('jobVacanciesTable').addEventListener('click', function(e) {
                const editBtn = e.target.closest('.edit-btn');
                const deleteBtn = e.target.closest('.delete-btn');

                if (editBtn) {
                    const jobId = editBtn.getAttribute('data-id');

                    // Fetch job vacancy data
                    fetch(`/admin/info_loker/${jobId}`)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('editId').value = data.id;
                            document.getElementById('editPosition').value = data.position;
                            document.getElementById('editCity').value = data.city;
                            document.getElementById('editProvince').value = data.province;
                            document.getElementById('editCount').value = data.count;
                            document.getElementById('editIsActive').checked = data.is_active;

                            editForm.action = `/admin/info_loker/${jobId}`;
                            openModal('edit');
                        })
                        .catch(error => {
                            console.error('Error fetching job vacancy data:', error);
                            alert('Terjadi kesalahan saat mengambil data lowongan pekerjaan');
                        });
                }

                if (deleteBtn) {
                    const jobId = deleteBtn.getAttribute('data-id');
                    document.getElementById('deleteId').value = jobId;
                    deleteForm.action = `info_loker/${jobId}`;
                    openModal('delete');
                }
            });

            // Close modals when clicking outside
            window.addEventListener('click', function(event) {
                Object.keys(modals).forEach(key => {
                    if (event.target === modals[key]) {
                        closeModal(key);
                    }
                });
            });
        });
    </script>
</x-app-layout>
