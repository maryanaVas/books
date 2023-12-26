<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($book->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="text-gray-900 dark:text-gray-100">
                    <strong class="text-gray-900 dark:text-gray-100">title</strong> - <span class="text-gray-900 dark:text-gray-100">{{$book->title}}</span> <br>
                    <strong class="text-gray-900 dark:text-gray-100">author</strong> - <span class="text-gray-900 dark:text-gray-100">{{$book->author}}</span> <br>
                    <strong class="text-gray-900 dark:text-gray-100">publication_year</strong> - <span class="text-gray-900 dark:text-gray-100">{{$book->publication_year}}</span> <br>
                    <strong class="text-gray-900 dark:text-gray-100">publisher</strong> - <span class="text-gray-900 dark:text-gray-100">{{$book->publisher}}</span> <br>
                    <strong class="text-gray-900 dark:text-gray-100">isbn</strong> - <span class="text-gray-900 dark:text-gray-100">{{$book->isbn}}</span> <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
