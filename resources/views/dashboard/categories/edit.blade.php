@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Category</h1>
    </div>

    <div class="col-lg-8">

        <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Title</label>
                <input type="text"
                    class="form-control @error('nama')
                    is-invalid
                @enderror"
                    id="nama" name="nama" required autofocus value="{{ old('nama', $category->name) }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text"
                    class="form-control @error('slug')
                    is-invalid
                @enderror"
                    id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <button type="submit" class="btn btn-primary">Edit Category</button>
        </form>

    </div>
    {{-- 
    <script>
        const title = document.querySelector(#title);
        const slug = document.querySelector(#slug);

        // title.addEventListener('change', Slugs);

        // async function Slug() {
        //     const response= await fetch("/dashboard/posts/checkSlug?title="+title.value);
        //     const dats= await response.json();
        //     const ends=await dats

        // }

        // title.addEventListener('change', nSlug);

        // function nSlug() {
        //     fetch('/dashboard/posts/checkSlug?title=' + title.value).then(response => response: json()).then(
        //         data => slug.value = data
        //         .slug)
        // }
        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value).then(response => response: json()).then(
                data => slug.value = data
                .slug)

        });
    </script> --}}
    {{-- //harus pake script ajax di header/main --}}
    <script>
        // $('#nama').change(function(e) {
        //     $.get('{{ route('categories.checkSlug') }}', {
        //             'nama': $(this).val()
        //         },
        //         function(data) {
        //             $('#slug').val(data.slug);
        //         }
        //     );
        // });

        const title = document.querySelector("#nama");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });


        // const title = document.querySelector(['#nama']);
        // const slug = document.querySelector(['#slug']);
        // console.log(`Download ttf: ${title.value}`);
        // console.log(`Download ttf: ${slug.value}`);

        // title.addEventListener('change', async () => {

        //     try {
        //         console.log(`Download ttfasddsdsdd: ${title.value}`);

        //         const response = await fetch('/dashboard/categories/checkSlug?nama=' + title.value);
        //         const datas = await response.json();
        //         slug.value = datas.slug;
        //         console.log(`Download asdsd: ${response.value}`);

        //         return slug;

        //     } catch (error) {
        //         console.error(`Download error: ${error.message}`);
        //         console.log(`Download ttf: ${title.value}`);

        //     }
        // });


        // $('#title').change(function(e) {
        //     $.get('/dashboard/posts/checkSlug?title=' + title.value, {
        //             'title': $(this).val()
        //         },
        //         function(data) {
        //             $('#slug').val(data.slug);
        //         }
        //     );
        // });

        // document.addEventListener('trix-file-accept', function(e) {
        //     e.preventDefault();
        // });
    </script>
@endsection
