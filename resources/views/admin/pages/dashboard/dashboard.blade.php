@extends('admin.layouts.master')

@section('main')
    <div class="flex flex-col flex-1 py-4">
        <main class="h-full pb-16 overflow-y-auto p-50">

            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">

              <p>Dashboard testing</p>
{{--                <table class="w-full table-fixed mb-6">--}}
{{--                    <thead>--}}
{{--                        <tr class="bg-purple-600 ">--}}
{{--                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase text-center font-peyda">--}}
{{--                                ایدی</th>--}}
{{--                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase  text-center ">نام</th>--}}
{{--                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase  text-center">شماره تماس--}}
{{--                            </th>--}}
{{--                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase text-center">حذف</th>--}}

{{--                        </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody class="bg-white">--}}
{{--                    --}}
{{--                            <tr>--}}
{{--                                <td class="py-4 px-6 border-b border-gray-200 text-center"></td>--}}
{{--                                <td class="py-4 px-6 border-b border-gray-200 truncate text-center"></td>--}}
{{--                                <td class="py-4 px-6 border-b border-gray-200 text-center"></td>--}}
{{--                                <td class="py-4 px-6 border-b border-gray-200 text-center">--}}
{{--                           --}}
{{--                                </td>--}}

{{--                            </tr>--}}
{{--                        --}}


{{--                        <!-- Add more rows here -->--}}
{{--                    </tbody>--}}
{{--                </table>--}}
            </div>
            <!-- Cards with title -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Cards with title
            </h4>
            <div class="grid gap-6 mb-8 md:grid-cols-2">
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                        Revenue
                    </h4>
                    <p class=" text-gray-600 dark:text-gray-400">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                        quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                        nihil dolorum.
                    </p>
                </div>
                <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
                    <h4 class="mb-4 font-semibold">
                        Colored card
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                        quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                        nihil dolorum.
                    </p>
                </div>
            </div>
        </main>
    </div>

@endsection

