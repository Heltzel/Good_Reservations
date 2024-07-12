<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <span>Details for catagory: <strong>{{ $category->name }}</strong></span>
    <div class="flex justify-center">
        <x-detail-card-category :image="$category->image" :name="$category->name" :description="$category->description" :editRoute="route('admin.categories.edit', [$category->id])"
            :indexRoute="route('admin.categories.index')" />
    </div>
</x-admin-layout>
