<div
    class="prose lg:prose-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4">
    <h2>Category Card</h2>
    <div class="mx-auto max-w-2xl md:text-center">
        <p class="flex justify-center">
            <img class=" w-2/3" src="{{ $image }}" alt="{{ $name }}">
        </p>
    </div>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $name }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $description }}</p>
        <div class="actions mt-8">
            <x-crud-button action="edit" :route="$editRoute">
                Edit
            </x-crud-button>
            <x-crud-button action="page-nav" :route="$indexRoute">
                Index
            </x-crud-button>
        </div>
    </div>
</div>
