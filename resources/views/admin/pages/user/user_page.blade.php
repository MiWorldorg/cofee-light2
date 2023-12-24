@extends('admin.layouts.master')

@section('main')
    <div class="flex flex-col flex-1 py-4  pt-10">
        <h1 class="font-black text-4xl dark:text-amber-200">
            لیست کاربران
        </h1>
        <main class="h-full pb-16 overflow-y-auto p-50  pt-10">
            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                <table class="w-full table-fixed mb-6">
                    <thead>
                        <tr class="bg-grey-600 ">
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase text-center font-peyda">
                                ایدی</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase  text-center ">نام</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase  text-center">شماره تماس
                            </th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase text-center">حذف</th>

                        </tr>
                    </thead>
                    <tbody class="bg-slate-700 text-amber-200">
                        @foreach ($users as $user)
                            <tr>
                                <td class="py-4 px-6 border-b border-amber-200 text-center">{{ $user->id }}</td>
                                <td class="py-4 px-6 border-b border-amber-200 truncate text-center">{{ $user->name }}
                                </td>
                                <td class="py-4 px-6 border-b border-amber-200 text-center">{{ $user->phone_number }}</td>
                                <td class="py-4 px-6 border-b border-amber-200 text-center">
                                    <form id="deleteButton" class=""
                                        action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="deleteButton hover:text-red-500 bg-slate-900 border-slate-900 hover:border-x-red-500 hover:shadow-red-500 hover:shadow-lg border-solid border-2 p-2 rounded-lg hover:bg-slate-700"
                                            id="deleteButton">حذف</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                        <!-- Add more rows here -->
                    </tbody>
                </table>
            </div>

    </div>
    </main>
    </div>
@endsection
