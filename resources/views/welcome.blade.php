<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-200 py-10">
        <div class="max-w-lg bg-white mx-auto p-5  rounded shadow">
            <form action="tags" method="POST" class="flex mb-4">
                @csrf
                <input type="text" name="name" placeholder="Nombre de la etiqueta" class="rounded-l bg-gray-200 p-4 w-full outline-none">
                <button type="submit" class="rounder-r px-8 bg-blue-500 text-white outline-none">Crear etiqueta</button>
            </form>
            <h4 class="text-lg text-center mb-4">Listado de etiquetas</h4>
            <table>
                @forelse( $tags as $tag )
                    <tr>
                        <td class="border px-4 py-2">{{ $tag->name }}</td>
                        <td class="border px-4 py-2">{{ $tag->slug }}</td>
                        <td class="border px-4 py-2">
                            <form action="tags/{{ $tag->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 rounded bg-red-500 text-white">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="3">
                       <p>No hay etiquetas</p>
                    </td>
                </tr>
                @endforelse
            </table>
        </div>
    </body>
</html>
