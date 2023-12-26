<style>
    table {
        width: 100%;
        border-collapse: collapse;
        overflow-x: scroll;
    }
    th,tr,td{
        text-align: left;
    }
    @media screen and (max-width: 600px) {
        table {
            display: block;
            overflow-x: auto;
        }
    }
</style>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">

                <table class="border-collapse table-auto w-full whitespace-no-wrap table-striped relative">
                    <thead>
                        <tr>
                            <th class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200 text-center">Book ID</th>
                            <th class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200">Title</th>
                            <th class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200 text-center">Author</th>
                            <th class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200 text-center">Image</th>
                            <th class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200 text-center">Action</th>
                        </tr>
                    </thead>
                    @foreach ($books as $book)
                        <tr class="hover:bg-gray-300">
                            <td class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200">
                                <p class="text-lg p-2 whitespace-nowrap overflow-hidden text-gray-300 max-w-[9rem]">
                                    <a href="/books/{{ $book->id }}">
                                        {{$book->id}}
                                    </a>
                                </p>
                            </td>
                            <td class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200">
                                <p class="text-lg p-2 whitespace-nowrap overflow-hidden text-white-100text-gray-300 max-w-[9rem]">
                                    <a href="/books/{{ $book->id }}">
                                        {{$book->title}}
                                    </a>
                                </p>
                            </td>
                            <td class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200">
                                <p class="text-lg p-2  whitespace-nowrap overflow-hidden text-gray-300 max-w-[9rem]">
                                    <a href="/books/{{ $book->id }}">
                                        {{$book->author}}
                                    </a>
                                </p>
                            </td>
                            <td class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200">
                                <img src="https://picsum.photos/140/100" alt="bybyby">
                            </td>
                            <td class="p-2 text-gray-900 dark:text-gray-100 border border-gray-200">
                                <a href="/books/delete/{{ $book->id }}">
                                    DELETE
                                </a>
                            </td>
                        </tr>
                @endforeach
                </table>
                <div class="flex justify-end mt-4 gap-4">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <form method="POST" action="{{ route('books.add') }}">
                    @csrf
                    @method('post')
                    <div class="flex flex-col items-center justify-between mt-4">
                        <x-text-input
                            id="title"
                            name="title"
                            type="text"
                            class="mt-1 block w-full"
                            value=""
                            placeholder="title"
                        />
                        <x-text-input
                            id="author"
                            name="author"
                            type="text"
                            class="mt-1 block w-full"
                            value=""
                            placeholder="author"
                        />
                        <x-text-input
                            id="publication_year"
                            name="publication_year"
                            type="number"
                            min="1488"
                            max="3024"
                            pattern="/0-9/"
                            class="mt-1 block w-full"
                            value=""
                            placeholder="publication_year"
                        />
                        <x-text-input
                            id="publisher"
                            name="publisher"
                            type="text"
                            class="mt-1 block w-full"
                            value=""
                            placeholder="publisher"
                        />
                        <x-text-input
                            id="isbn"
                            name="isbn"
                            type="number"
                            class="mt-1 block w-full"
                            pattern="/0-9/"
                            value=""
                            placeholder="isbn"
                        />
                        <x-primary-button class="ml-3">
                            {{ __('Add') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
