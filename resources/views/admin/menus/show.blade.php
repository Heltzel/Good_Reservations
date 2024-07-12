<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <span>Details for menu: <strong>{{ $menu->name }}</strong></span>
    <div class="flex justify-center">
        <x-detail-card-menu :image="$menu->image" :name="$menu->name" :description="$menu->description" :price="$menu->price" :editRoute="route('admin.menus.edit', [$menu->id])"
            :indexRoute="route('admin.menus.index')" />
    </div>
</x-admin-layout>
