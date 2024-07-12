{{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg"> --}}
<div
    class="relative overflow-x-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4">
    <div class="prose lg:prose-xl mb-8">
        <h2>{{ $tableTitle }}</h2>
    </div>
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
                                <x-crud-button action="show"
                                    route="{{ route($cellVal['route'], [$cellVal['param'] => $row['id']]) }}">
                                    {{ $cellVal['name'] }}
                                </x-crud-button>
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
