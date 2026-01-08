<x-root-layout>
    <h1>Login</h1>
    <form action="/admin/login" method="post">
        @csrf
        <div>
            <label for="username">Username</label>
            <input id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button>Login</button>
        @error('login')
            <p>Username atau password salah</p>
        @enderror
    </form>
</x-root-layout>
