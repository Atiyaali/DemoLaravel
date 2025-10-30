<div>
    @if (session()->has('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="save">
        <label>Title:</label>
        <input type="text" wire:model="post.title" />

        <label>Content:</label>
        <textarea wire:model="post.content"></textarea>

        <button type="submit">Save</button>
    </form>
</div>
