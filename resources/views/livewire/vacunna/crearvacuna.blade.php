<div>
    <h1>111111111111111111111
        1111111111111111
        111111111111
        111111111
    </h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="guardar">
        <div>
            <label for="nombre_de_vacuna">Nombre de la Vacuna:</label>
            <input type="text" id="nombre_de_vacuna" wire:model="nombre_de_vacuna">
            @error('nombre_de_vacuna') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="Descripción">Descripción:</label>
            <input type="text" id="Descripción" wire:model="Descripción">
            @error('Descripción') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="Estado">Estado:</label>
            <input type="checkbox" id="Estado" wire:model="Estado">
        </div>

        <button type="submit">Guardar Vacuna</button>
    </form>
</div>
