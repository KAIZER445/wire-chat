<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>HELLO</h1>
    @if(auth()->check())
    <p>Welcome, {{ auth()->user()->name }}</p>
    @else
    <p>Please log in.</p>
    @endif
</div>