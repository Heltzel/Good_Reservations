<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <h2 class="text-3xl font-extrabold p-2">{{ $tableTitle }}</h2>
    <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400">
        <thead class=" text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($headers as $header)
                    <th scope="col" class="px-6 py-3">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    @foreach ($row as $cellKey => $cellVal)
                        @if ($cellKey == 'image')
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{ $cellVal }}" alt="" class="max-w-12">
                            </td>
                        @elseif ($cellKey == 'action')
                            <td class="text-center ">
                                <a href="{{ route($cellVal['route'], [$cellVal['param'] => $row['id']]) }}">
                                    <button class="bg-gray-100 hover:bg-gray-200 px-6 py-2 rounded-lg ">
                                        {{ $cellVal['name'] }}
                                    </button>
                                </a>
                            </td>
                        @else
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $cellVal }}
                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
