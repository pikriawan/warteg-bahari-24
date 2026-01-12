<x-admin-layout>
    @push('styles')
        @vite('resources/css/admin-menu.css')
    @endpush
    <h1>Edit menu</h1>
    <form action="/admin/menu/{{ $menu->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label for="name">Nama menu</label>
            <input name="name" id="name" value="{{ $menu->name }}" required>
        </div>
        <div>
            <img class="preview" id="preview" src="{{ $menu->image === null ? '/images/menu-no-image.png' : asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="128" height="128">
            <br>
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" accept="image/jpeg, image/png">
            <br>
            <button type="button" id="menuImageDelete">Hapus gambar</button>
        </div>
        <div>
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" value="{{ $menu->price }}" required>
        </div>
        <div>
            <label for="category">Kategori</label>
            <input name="category" id="category" value="{{ $menu->category }}">
        </div>
        <div>
            <span>Tersedia?</span>
            <br>
            <input type="radio" name="is_available" id="available" value="true" {{ $menu->is_available ? 'checked' : '' }} required>
            <label for="available">Ya</label>
            <br>
            <input type="radio" name="is_available" id="unavailable" value="false" {{ !$menu->is_available ? 'checked' : '' }} required>
            <label for="unavailable">Tidak</label>
        </div>
        <div>
            <a href="/admin/menus">Batal</a>
            <button>Edit menu</button>
        </div>
    </form>
    <form action="/admin/menu/{{ $menu->id }}" method="post">
        @csrf
        @method('delete')
        <button>Hapus menu</button>
    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <script>
        const preview = document.getElementById("preview");
        const image = document.getElementById("image");

        image.addEventListener("input", (event) => {
            const file = event.currentTarget.files[0];
            preview.src = URL.createObjectURL(file);

            preview.addEventListener("load", () => {
                URL.revokeObjectURL(preview.src);
            });
        });

        async function fetchImage() {
            try {
                const response = await fetch("{{ asset('storage/' . $menu->image) }}");

                if (!response.ok) {
                    throw new Error("Image fetch failed");
                }

                const blob = await response.blob();

                preview.src = URL.createObjectURL(blob);

                preview.addEventListener("load", () => {
                    URL.revokeObjectURL(preview.src);
                });

                const fileName = "{{ basename($menu->image) }}";
                const file = new File([blob], fileName, { type: blob.type });

                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                image.files = dataTransfer.files;
            } catch (error) {
                console.error('Error loading image:', error);
            }
        }

        @isset($menu->image)
            fetchImage();
        @endisset

        const menuImageDelete = document.getElementById("menuImageDelete");

        menuImageDelete.addEventListener("click", () => {
            preview.src = "/images/menu-no-image.png";
            image.value = "";
        });
    </script>
</x-admin-layout>
