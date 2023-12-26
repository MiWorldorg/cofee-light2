@extends('admin.layouts.master')

@section('script')
    <script>
        const amounts = @json($amounts);
        const saleDates = @json($saleDates);
    </script>
    <script src="public\admin-asset\js\charts-bars.js"></script>
    <script src="public\admin-asset\js\charts-lines.js"></script>
    <script src="public\admin-asset\js\charts-fetch.js"></script>
@endsection


@section('main')
    <div class="flex flex-col flex-1 py-4  pt-10">
        <h1 class="font-black text-4xl dark:text-amber-200">
            آمار
        </h1>
        <main class="h-full pb-16 overflow-y-auto p-50  pt-10">

            {{-- <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                <table class="w-full whitespace-no-wrap ">

                    <tr
                        class="text-xs font-semibold text-center text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3"> تاریخ فروش </th>
                        <th class="px-4 py-3">تعداد</th>

                    </tr>

                    @foreach ($sales as $sale)
                        <tbody class=" bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 w-full text-center">
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div>
                                        <p class="font-semibold">{{ jdate($sale->sale_date) }}</p>
                                    </div>

                                </td>
                                <td class="px-4 py-3 text-sm text-cyan-50">
                                    <p> {{ $sale->amount }}</p>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div> --}}

            {{-- charts --}}

            <div class="grid gap-6 mb-8 md:grid-cols-2">
                <div
                    class="border-x-2 transition-all border-amber-200 border-opacity-0  hover:border-opacity-100 min-w-0 p-4 rounded-lg shadow-xs bg-gray-800 bg-opacity-30 backdrop-blur-sm">
                    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                        نمودار تنوع اجناس
                    </h4>
                    <canvas id="bar"></canvas>
                    <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                        <!-- Chart legend -->

                    </div>
                </div>
                <!-- Lines chart -->
                <div
                    class="border-x-2 transition-all border-amber-200 border-opacity-0  hover:border-opacity-100 min-w-0 p-4 rounded-lg shadow-xs bg-gray-800 bg-opacity-30 backdrop-blur-sm">
                    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                        نمودار فروش
                    </h4>
                    <canvas id="line"></canvas>
                    <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                        <!-- Chart legend -->

                    </div>
                </div>
            </div>
            {{--  --}}

        </main>
    </div>
    </div>
@endsection
