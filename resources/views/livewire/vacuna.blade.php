
<div>

<section class="bg-white py-20 lg:py-[120px] text-" style="margin-top: 100px;margin-right: 40px;">

    <div>
        <section class="bg-white py-20 lg:py-[120px]" style="margin-top: 100px; margin-right: 40px;">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="max-w-full overflow-x-auto">
                            <div class="mb-4">
                                <h2 class="text-2xl font-semibold text-gray-800">Tabla Vacunas</h2>
                                <div class="mt-4 mb-6">
                                    <button onclick="showModal()" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition-colors duration-200">
                                        Nuevo
                                    </button>
                                </div>

                                <table class="table-auto w-full "  >
                                    <thead>
                                        <tr class="bg-yellow-500 text-center">
                                            <th class="w-1/6 min-w-[200px] text-lg font-semibold text-black py-1 lg:py-2 px-3 lg:px-4">ID_Vacuna</th>
                                            <th class="w-1/6 min-w-[200px] text-lg font-semibold text-black py-1 lg:py-2 px-3 lg:px-4">Nombre Vacuna</th>
                                            <th class="w-1/6 min-w-[200px] text-lg font-semibold text-black py-1 lg:py-2 px-3 lg:px-4">Descripción Vacuna</th>
                                            <th class="w-1/6 min-w-[200px] text-lg font-semibold text-black py-1 lg:py-2 px-3 lg:px-4">Estado</th>
                                            <th class="w-1/6 min-w-[200px] text-lg font-semibold text-black py-1 lg:py-2 px-3 lg:px-4">Interacción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vacunas as $Vacunas)
                                        <tr>
                                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">
                                                {{ $Vacunas->Id_vacuna }}
                                            </td>
                                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                {{ $Vacunas->nombre_de_vacuna }}
                                            </td>
                                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">
                                                {{ $Vacunas->Descripción }}
                                            </td>
                                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                {{ $Vacunas->Estado == 1 ? 'Activo' : 'Inactivo' }}
                                            </td>
                                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg- border-b border-r border-[#E8E8E8]">
                                                <div class="flex">
                                                    <button class="bg-yellow-500 text-white px-2 py-1 text-sm rounded-md hover:bg-yellow-600 transition-colors duration-200" style="margin-right: 10px;">editar</button>
                                                    <button class="bg-red-700 text-white px-2 py-1 text-sm rounded-md hover:bg-red-600 transition-colors duration-200">eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal --}}
<!-- Modal HTML -->


<div id="notificationModal" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <h1>Crear nueva vacuna</h1>
        </div>
        <div class="modal-body">
            <form id="vacunaForm" method="POST" action="{{ route('vacunas.store') }}" onsubmit="submitForm(event)">  <!-- Agregar onsubmit aquí -->
                @csrf  <!-- Incluye el token CSRF -->
                <div class="form-group">
                    <label for="nombreVacuna">Nombre de la Vacuna</label>
                    <input type="text" id="nombreVacuna" name="nombre_de_vacuna" placeholder="Agregar nombre de vacuna" class="input-field" required>
                </div>
                <div class="form-group">
                    <label for="descripcionVacuna">Descripción de la Vacuna</label>
                    <input type="text" id="descripcionVacuna" name="Descripción" placeholder="Agregar descripción" class="input-field" required>
                </div>
                <div class="form-group">
                    <label for="estadoVacuna">Estado de la Vacuna</label>
                    <select id="estadoVacuna" name="Estado" class="input-field" required>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-allow">Crear Vacuna</button>
            <button type="button" onclick="hideModal()" class="btn btn-skip">Cancelar</button>
        </div>
            </form>
    </div>
</div>




<script>

 function submitForm(event) {
        event.preventDefault(); // Evitar que la página se recargue
        const form = document.getElementById('vacunaForm');
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Agregar la nueva fila a la tabla
                const tableBody = document.querySelector('tbody');
                const newRow = `<tr>
                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">${data.vacuna.Id_vacuna}</td>
                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">${data.vacuna.nombre_de_vacuna}</td>
                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">${data.vacuna.Descripción}</td>
                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">${data.vacuna.Estado === '1' ? 'Activo' : 'Inactivo'}</td>
                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg- border-b border-r border-[#E8E8E8]">
                        <div class="flex">
                            <button class="bg-yellow-500 text-white px-2 py-1 text-sm rounded-md hover:bg-yellow-600 transition-colors duration-200" style="margin-right: 10px;">editar</button>
                            <button class="bg-red-700 text-white px-2 py-1 text-sm rounded-md hover:bg-red-600 transition-colors duration-200">eliminar</button>
                        </div>
                    </td>
                </tr>`;
                tableBody.insertAdjacentHTML('beforeend', newRow);
                hideModal(); // Ocultar el modal
                form.reset(); // Limpiar el formulario
            } else {
                // Manejo de errores
                alert('Error al guardar la vacuna');
            }
        })
        .catch(error => console.error('Error:', error));
    }


    // Mostrar el modal
    function showModal() {
        document.getElementById('notificationModal').style.display = 'flex';
    }

    // Ocultar el modal
    function hideModal() {
    document.getElementById('notificationModal').style.display = 'none';
    // Limpiar los campos del formulario
    document.getElementById('vacunaForm').reset();
}

    function hideModal() {
        document.getElementById('notificationModal').style.display = 'none';
        document.getElementById('nombreVacuna').value = '';
        document.getElementById('descripcionVacuna').value = '';
        document.getElementById('estadoVacuna').value = '';
    }
</script>

<style>
    /* Estilos generales */
    .modal {
        display: none; /* Oculto por defecto */
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

    .modal-content {
        background-color: white;
        padding: 30px; /* Aumentar padding para un mejor espaciado */
        border-radius: 10px;
        width: 600px; /* Aumentar el ancho del modal */
        max-width: 90%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .modal-header h1 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .modal-body {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .modal-footer {
        display: flex;
        justify-content: space-between; /* Alinea los botones en una fila */
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 48%; /* Ajusta el ancho para que los botones estén a la par */
    }

    .btn-allow {
        background-color: black;
        color: white;
    }

    .btn-skip {
        background-color: white;
        color: black;
        border: 1px solid #ccc;
    }

    .btn:hover {
        opacity: 0.9;
    }
</style>

<!-- JavaScript para controlar la visibilidad del modal -->




</script>



<!-- Estilos CSS -->




 </section>
 <!-- ====== Table Section End -->

</div>
