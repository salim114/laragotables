<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Haleetables') }}
        </h2>
    </x-slot>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img src="{{ asset('images/datatables-logo.png') }}">
                    <a href="{{ url('examples') }}">Welcome to your DataTables examples tutorial </a>
                    <a href="{{ url('examples') }}" class="btn btn-primary" role="button">enter</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
