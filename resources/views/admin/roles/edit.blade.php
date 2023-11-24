<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.roles.index') }}"
                        class="px-4 py-2 text-white bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Role
                        Index</a>
                </div>
                <div class="p-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md">
                    <div class="-mx-4 mt-8 sm:-mx-0">
                        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                            <form method="post" action="{{ route('admin.roles.update', $role) }}">
                                @csrf
                                @method('PUT')
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Role name
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="name" name="name"
                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5"
                                            value="{{ $role->name }}" />
                                    </div>
                                    @error('name')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <button type="submit"
                                        class="px-4 py-2 bg-cyan-500 hover:bg-cyan-700 rounded-md text-white">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-6 p-2 bg-slate-100 rounded-md">
                    <h2 class="text-lg font-semibold">Role Permissions</h2>
                    <div class="flex space-x-2 p-2">
                        @if ($role->permissions)
                            @foreach ($role->permissions as $role_permission)
                                <form method="POST" action="{{ route('admin.roles.permissions.revoke', [$role->id, $role_permission->id]) }}" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 mt-2 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">{{$role_permission->name}}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl mt-6">
                        <form method="post" action="{{ route('admin.roles.permissions', $role) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="permission"
                                    class="block text-sm font-medium text-gray-700">Permission</label>
                                <select id="permission" name="permission" autocomplete="permission-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-cyan-500 hover:bg-cyan-700 rounded-md text-white">Assign</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
</x-admin-layout>
