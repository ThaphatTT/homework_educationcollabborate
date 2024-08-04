<x-layout>
    <h1 class="title">Register a new account</h1>

    <div class="mx-auto max-w-creen-sm crad">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="input ring-red-400">
                <p class="error">
                    @error('username')
                        {{ $message }}
                    @enderror
                </p>
            </div>
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
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input">
                <p class="error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <button class="btn">Register</button>
        </form>
    </div>
</x-layout>
