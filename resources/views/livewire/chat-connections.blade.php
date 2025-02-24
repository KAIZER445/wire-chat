<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <ul>
        @foreach($users as $user)
            <li class="text-danger"><button wire:click="startChat({{ $user->id }})">{{ $user->name }}</button></li>
        @endforeach
    </ul>
</div>
