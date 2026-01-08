<x-admin-layout>
    <h1>Dashboard</h1>
    <form action="/admin/logout" method="post">
        @csrf
        <button>Logout</button>
    </form>
</x-admin-layout>
