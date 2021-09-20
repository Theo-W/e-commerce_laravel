@extends('admin.layout.app')

@section('content')
    <div class="flex items-center justify-between">
        <h3 class="text-gray-700 text-3xl font-medium">Les Status</h3>
        <a href="{{ route('admin.status.create') }}"
           class="bg-blue-800 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
            <i class="fas fa-plus fa-fw"></i> {{__('Crée un Status')}}</a>
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
                            Color
                        </th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Background
                        </th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Ajouter
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    @foreach($status as $statu)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-7 w-10">
                                        {{ $statu->name }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-7 w-10">
                                        <div class="text-{{ $statu->color }}-500">
                                            {{ $statu->color }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex justify-start">
                                    <div
                                        class="bg-{{ $statu->background }}-500 flex-shrink-0 h-5 w-5 rounded-full"></div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $statu->created_at->format('d M Y') }}
                            </td>

                            <td
                                class=" flex items-center px-6 py-6 whitespace-no-wrap border-b border-gray-200">
                                <a href="{{ route('admin.status.edit', ['id' => $statu->id ]) }}"
                                   class="text-blue-500  hover:text-blue-400"><i
                                        class="far fa-edit text-2xl"></i>
                                </a>
                                @include('admin.status.modal._delete')
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
