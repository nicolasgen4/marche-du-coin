@if (session()->has('message'))

<p class="message">
    {{session('message')}}
</p>
    
@endif