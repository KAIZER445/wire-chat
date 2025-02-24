<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>HELLO</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <a href="{{ route('logout') }}">Logout</a>
    <div class="container">
        <div class="row">
            <div class="col-3">
                @livewire('chat-connections')
            </div>
            <div class="col-9">
                @livewire('chat')
            </div>
        </div>
    </div>
</div>