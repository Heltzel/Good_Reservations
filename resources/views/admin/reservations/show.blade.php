<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <span>Details for reservation: <strong>{{ $reservation->first_name }}</strong>&nbsp;
        <strong>{{ $reservation->last_name }}</strong></span>
    <div class="flex justify-center">
        <x-detail-card-reservations :firstName="$reservation->first_name" :lastName="$reservation->last_name" :phone="$reservation->tel_number" :email="$reservation->email"
            :resDate="$reservation->res_date" :tableNum="$reservation->table_id" :groupSize="$reservation->guest_number" :editRoute="route('admin.reservations.edit', [$reservation->id])" :indexRoute="route('admin.reservations.index')" />
    </div>
</x-admin-layout>
