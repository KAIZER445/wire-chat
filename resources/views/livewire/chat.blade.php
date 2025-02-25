<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h1>{{$id}}</h1>

    <div class="chat-box">
        @foreach ($messages as $message)
            <p>{{ $message->sender == auth()->id() ? 'You' : 'User' }}:{{ $message->chat }}</p>
        @endforeach
    </div>
    <form wire:submit.prevent='send'>
        <label for="chat">Chat:</label><br>
        <input type="text" wire:model="chat" class="form-control"><br>
        <button type="submit" class="btn btn-dark">Send</button>
    </form>
</div>
