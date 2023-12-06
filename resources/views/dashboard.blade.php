
<style>
    h2 a{
        margin-left: 7%;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}  
            <a href="/admin">Admin</a>
            <a href="/">Home</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hello") }} <b>{{ Auth::user()->name }}</b>   {{ __("bienvenue dans le dashboard de BubbleMyTea ! ") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
