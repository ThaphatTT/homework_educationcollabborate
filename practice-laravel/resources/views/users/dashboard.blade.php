<x-layout>
    @auth
        <h1>Hi, {{ auth()->user()->username }}</h1>
    @endauth
    @guest
        <h1>Please, get back to login</h1>
    @endguest
</x-layout>
