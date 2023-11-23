<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-2">
                    <a href="{{route('admin.permissions.create')}}" class="px-4 py-2 text-white bg-green-700 hover:bg-green-500 rounded-md">Create Permission</a>
                </div>
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="-mx-4 mt-8 sm:-mx-0">
                      <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                          <tr>
                            <th scope="col" class="py-3.5 p-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">ID</th>
                            <th scope="col" class="py-3.5 p-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">Role</th>
                          </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td class="whitespace-nowrap py-4 p-4 text-sm font-medium text-gray-900 sm:pl-0">
                                        {{ $permission->id }}
                                    </td>
                                    <td class="whitespace-nowrap py-4 p-4 text-sm font-medium text-gray-900 sm:pl-0">
                                        {{ $permission->name }}
                                    </td>
                                    <td class="whitespace-nowrap py-4 p-4 text-sm font-medium text-gray-900 sm:pl-0">
                                        <div class="flex justify-end">
                                            <div class="space-x-2">
                                                <form method="POST" action="{{ route('admin.permissions.destroy', $permission->id) }}" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                    <a href="{{ route('admin.permissions.edit', $permission->id)}}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                                                <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md">Delete</button>
                                            </form>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-admin-layout>
