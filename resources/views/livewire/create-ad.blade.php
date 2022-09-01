<div>
    <h1>Create new Ad</h1>
    <div class="mb-3">
        <label for="title" class="form-label">Titulo:</label>
        <input wire:model="title" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Precio:</label>
        <input wire:model="price" type="number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Descripción:</label>
        <textarea wire:model="body" cols="30" rows="15" class="form-control"></textarea>
    </div>
    <div class="my-3">
        <button type="submit" class="btn btn-info">Crear</button>
    </div>
    </form>
</div>
</div>
