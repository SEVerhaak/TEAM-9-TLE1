<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @foreach($vacancies as $vacancy)
                        <div>
                           <p> {{$vacancy}}</p>
                            <p> {{$vacancy->vacancy->name}}</p>
                            <p> {{$vacancy->vacancy->salary}}</p>
                            <p> {{$vacancy->vacancy->time_hours}}</p>
                            <p> {{$vacancy->vacancy->image}}</p>
                            <button class="btn">cancel</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
