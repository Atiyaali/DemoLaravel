<div class="search-container" style="display: flex; align-items: center; gap: 8px; max-width: 400px;">
    <label for="search">Search:</label>

    <input
        type="text"
        id="search"
        name="search"
        wire:model.live="search"
        placeholder="Search..."
        style="flex: 1; padding: 8px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"
    >

    <p class="mt-2 text-gray-700" style="margin-left: 10px;">
        {{ $user }}
    </p>
</div>
