@push('styles')
    @vite('resources/css/admin-menu-create.css')
@endpush
@push('scripts')
    <script>
        const preview = document.getElementById("preview");
        const imageInput = document.getElementById("imageInput");

        imageInput.addEventListener("input", (event) => {
            const file = event.currentTarget.files[0];
            preview.src = URL.createObjectURL(file);
        });

        const deleteImageButton = document.getElementById("deleteImageButton");

        deleteImageButton.addEventListener("click", () => {
            preview.src = "/images/menu-no-image.png";
            imageInput.value = "";
        });
    </script>
@endpush
<x-admin-layout>
    <div class="menu-create-container">
        <a class="back-link" href="/admin/menus">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left-icon lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
        </a>
        <h1 class="menu-create-title">Buat Menu Baru</h1>
        <form class="menu-create-form" action="/admin/menu/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-field">
                <label class="label" for="name">Nama menu</label>
                <input class="text-field" name="name" id="name" placeholder="Nama menu">
            </div>
            <div class="form-field">
                <img class="preview" id="preview" src="/images/menu-no-image.png" alt="" width="128" height="128">
                <label class="label" for="image">Gambar</label>
                <div class="button-group">
                    <input class="image-input" type="file" name="image" id="imageInput" accept="image/jpeg, image/png">
                    <button class="button button-outlined" id="deleteImageButton" type="button">Hapus gambar</button>
                </div>
            </div>
            <div class="form-field">
                <label class="label" for="price">Harga</label>
                <input class="text-field" type="number" name="price" id="price" placeholder="10000">
            </div>
            <div>
                <label class="label" for="category">Kategori</label>
                <input class="text-field" name="category" id="category">
            </div>
            <div>
                <span class="label">Tersedia?</span>
                <div class="radio-item">
                    <input type="radio" name="is_available" id="available" value="true" checked>
                    <label for="available">Ya</label>
                </div>
                <div class="radio-item">
                    <input type="radio" name="is_available" id="unavailable" value="false">
                    <label for="unavailable">Tidak</label>
                </div>
            </div>
            <div class="button-group">
                <a class="button button-outlined" href="/admin/menus">Batal</a>
                <button class="button button-primary">Buat menu baru</button>
            </div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
</x-admin-layout>
