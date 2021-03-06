@extends('layouts.dashboard')
@section('title', __('Order list'))
@section('content')
    <div class="card bg-white dark:bg-dark-eval-1">
        <div class="p-6 rounded-t rounded-r mb-0 border-b border-blueGray-200">
            <div class="card-header-container flex flex-wrap">
                <h6 class="text-xl font-bold mb-4 text-gray-700 dark:text-gray-300">
                    {{ __('Order list') }}
                </h6>
                <a class="leading-4 md:text-sm sm:text-xs bg-blue-900 text-white hover:text-blue-800 hover:bg-blue-100 active:bg-blue-200 focus:ring-blue-300 font-medium uppercase px-6 py-2 rounded-md shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" 
                        href="{{ route('admin.orders.create') }}">
                        {{ __('Create order') }}
                    </a>
            </div>
        </div>
        <div x-data="{
                        openTab: 1,
                        activeClasses: 'border rounded-t text-blue-500',
                        inactiveClasses: 'text-blue-600 hover:text-blue-800'}" class="p-4">
            <ul class="flex mb-0 list-none flex-wrap pt-3 flex-row border-b">
                <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }"
                    class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                    <a :class="openTab === 1 ? activeClasses : inactiveClasses"
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">
                        {{ __('All Orders') }}</a>
                </li>
                <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }"
                    class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                    <a :class="openTab === 2 ? activeClasses : inactiveClasses"
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">
                        {{ __('Paid Orders') }}</a>
                </li>
                <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }"
                    class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                    <a :class="openTab === 3 ? activeClasses : inactiveClasses"
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">
                        {{ __('In Paid Orders') }}</a>
                </li>
                {{-- <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                    <a :class="openTab === 4 ? activeClasses : inactiveClasses"
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        href="#">
                        {{ __('Coming soon') }}</a>
                </li> --}}
            </ul>
            <div class="w-full pt-4">
                <div x-show="openTab === 1">
                    @livewire('admin.order.index')
                </div>
                <div x-show="openTab === 2">
                    @livewire('admin.order.paid')
                </div>
                <div x-show="openTab === 3">
                    @livewire('admin.order.in-paid')
                </div>
                {{-- <div x-show="openTab === 4">

                </div> --}}
            </div>
        </div>
    </div>
@endsection
