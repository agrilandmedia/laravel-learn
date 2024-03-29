<x-layout>
    <div class="flex">
        <x-widget />

        <x-form.form-wrapper name="Manage Users">
            {{-- Tailwind UI Table modified --}}
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Is Admin
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $user->id }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 max-w-md">
                                            <span class="inline-flex text-xs leading-5">
                                                {{ $user->name }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 max-w-md">
                                            <span class="inline-flex text-xs leading-5">
                                                {{ $user->is_admin }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 max-w-md">
                                            <span class="inline-flex text-xs leading-5">
                                                {{ $user->email }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/users/{{ $user->id }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-red-700">
                                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button>Delete</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </x-form.form-wrapper>
    </div>
</x-layout>