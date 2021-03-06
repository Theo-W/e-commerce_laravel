@extends('admin.layout.app')

@section('content')
    <div class="flex items-center justify-between">
        <h3 class="text-gray-700 text-3xl font-medium">Mes Cétegories</h3>
        <a href="{{ route('admin.category.create') }}"
           class="bg-blue-800 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
            <i class="fas fa-plus fa-fw"></i> {{__('Crée une categorie')}}</a>
    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Ajouter
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    @foreach($categorires as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        {{ $category->name }}
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $category->created_at->format('d M Y') }}
                            </td>

                            <td
                                class=" flex items-center px-6 py-6 whitespace-no-wrap border-b border-gray-200">
                                <a href="{{ route('admin.category.edit', ['id' => $category->id ]) }}" class="text-blue-500  hover:text-blue-400"><i
                                        class="far fa-edit text-2xl"></i>
                                </a>
                                @include('admin.category.modal._delete')
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
