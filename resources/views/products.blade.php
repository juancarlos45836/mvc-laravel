<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="relative overflow-x-auto ">
        <div class="flex flex-row justify-center">
            <div class="w-20 h-auto bg-gray-600 m-5 rounded-lg flex justify-center "> <a href='{{ route('insert') }}'>Insertar</a></div>
            <div class="w-20 h-auto bg-gray-600 m-5 rounded-lg flex justify-center "> <a href='{{ route('delete') }}'>Eliminar</a></div>
            <div class="w-20 h-auto bg-gray-600 m-5 rounded-lg flex justify-center "> <a href='{{ route('update') }}'>Actualizar</a></div>
            <form action="{{ route('product.filter') }}" method="POST">
                  @csrf
                <label class="w-20 h-auto bg-gray-600 m-5 rounded-lg flex justify-center " for="nombre">Filtrar por nombre</label>
                <input class="w-[200px] h-10 m-5 border-solid border-gray-700 border-[3px]" type="text" name="nombre" id="nombre">
                <button type="submit">Filtrar</button>
            </form>

        </div>



        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        price
                    </th>
                </tr>
            </thead>
                @foreach($products as $product)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $product->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $product->name }}
                            </td>
                            <td class="px-6 py-4">
                              ${{ $product->price }}
                            </td>

                        </tr>
                    </tbody>
                @endforeach
        </table>
    </div>
</body>
</html>
