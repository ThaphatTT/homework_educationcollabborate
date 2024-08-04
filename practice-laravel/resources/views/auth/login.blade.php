<x-layout>
    @auth
        <h1>You're logined.</h1>
    @endauth
    @guest
        <h1 class="title">Welcome back to login</h1>

        <div class="mx-auto max-w-creen-sm crad">
            @csrf
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="input">
                    <p class="error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="input">
                    <p class="error">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                @error('failed')
                    <p class="error">{{ $message }}</p>
                @enderror
                <button class="btn">Login</button>
            </form>
        </div>
    @endguest
</x-layout>
