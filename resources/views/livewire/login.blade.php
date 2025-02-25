<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <form wire:submit.prevent='authenticate'>
        @error('email')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <label for="email">email:</label><br>
        <input type="text" class="form-control" wire:model="email"><br>
        @error('password')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <label for="password">password:</label><br>
        <input type="text" class="form-control" wire:model="password"><br>
        @error('login')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">Login</button>
    </form>
</div>
