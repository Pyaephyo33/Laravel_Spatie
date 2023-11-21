<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-end p-2">
                    <a href="{{ route('admin.roles.create')}}" class="px-4 py-2 text-white bg-green-700 hover:bg-green-500 rounded-md">Create Role</a>
                </div>
            <div class="px-4 sm:px-6 lg:px-8">
                {{-- <div class="sm:flex sm:items-center">
                  <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
                  </div>
                  <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add user</button>
                  </div>
                </div> --}}
                <div class="-mx-4 mt-8 sm:-mx-0">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                      <tr>
                        <th scope="col" class="py-3.5 p-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">ID</th>
                        <th scope="col" class="py-3.5 p-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">Role</th>
                        {{-- <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                          <span class="sr-only">Edit</span>
                        </th> --}}
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($roles as $role)
                            <tr>
                                <td class="whitespace-nowrap py-4 p-4 text-sm font-medium text-gray-900 sm:pl-0">
                                    {{ $role->id }}
                                </td>
                                <td class="whitespace-nowrap py-4 p-4 text-sm font-medium text-gray-900 sm:pl-0">
                                    {{ $role->name }}
                                </td>
                                <td class="whitespace-nowrap py-4 p-4 text-sm font-medium text-gray-900 sm:pl-0">
                                    <a href="">Edit</a>
                                    <a href="">Delete</a>
                                </td>
                                {{-- <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                </td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>

        </div>
    </div>
</x-admin-layout>
