<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.users.index') }}"
                        class="px-4 py-2 text-white bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">User
                        Index</a>
                </div>
                <div class="flex flex-col p-2 bg-slate-100 rounded-md">
                    <div>User Name: {{ $user->name }}</div>
                    <div>User Email: {{ $user->email }}</div>
                </div>

                <div class="mt-6 p-2 bg-slate-100 rounded-md">
                    <h2 class="text-lg font-semibold">Roles</h2>
                    <div class="flex space-x-2 p-2">
                        @if ($user->roles)
                            @foreach ($user->roles as $user_role)
                                <form method="POST"
                                    action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">{{ $user_role->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl mt-6 p-2">
                        <form method="post" action="{{ route('admin.users.roles', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                                <select id="role" name="role" autocomplete="role-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-cyan-500 hover:bg-cyan-700 rounded-md text-white">Assign</button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-6 p-2 bg-slate-100 rounded-md">
                        <h2 class="text-lg font-semibold">Permissions</h2>
                        <div class="flex space-x-2 p-2">
                            @if ($user->permissions)
                                @foreach ($user->permissions as $user_permission)
                                    <form
                                        method="POST"
                                        action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">{{ $user_permission->name }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                    </div>
                        <div class="max-w-xl mt-6 p-2">
                            <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
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
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 bg-cyan-500 hover:bg-cyan-700 rounded-md text-white">Assign</button>
                        </div>
                        </form>

                </div>
            </div>
        </div>
</x-admin-layout>
