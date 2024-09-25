<div>
    <h2>Editar Vacuna</h2>

    <form wire:submit.prevent='actualizar'>
        <label>
            Nombre de la vacuna:
            <input type="text" wire:model="nombre_de_vacuna">
            @error('nombre_de_vacuna') <span>{{ $message }}</span> @enderror
        </label>
        <br>

        <label>
            Descripción:
            <textarea wire:model="Descripción"></textarea>
            @error('Descripción') <span>{{ $message }}</span> @enderror
        </label>
        <br>

        <label>
            Estado:
            <input type="checkbox" wire:model="Estado"> Activo
        </label>
        <br>

        <button type="submit">Actualizar</button>
    </form>
</div>
