<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <span>Details for Table: <strong>{{ $table->name }}</strong></span>
    <div class="flex justify-center">
        <x-detail-card-tables :name="$table->name" :guestNumber="$table->guest_number" :status="$table->status" :location="$table->location" :editRoute="route('admin.tables.edit', [$table->id])"
            :indexRoute="route('admin.tables.index')" />
    </div>
</x-admin-layout>
