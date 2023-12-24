@extends('admin.layouts.master')

@section('main')
    {{-- <div class="flex flex-col flex-1 py-4">
        <main class="h-full pb-16 overflow-y-auto p-50"> --}}

    {{-- <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                <table class="w-full table-fixed mb-6">
                    <thead>

                    </thead>
                    <tbody class="bg-white">
                        @foreach ($orders as $order)
                            <tr>
                                <td class="py-4 px-6 border-b border-gray-200 text-center">{{ $order->id }}</td>
                                <td class="py-4 px-6 border-b border-gray-200 truncate text-center">

                                    @if ($order->status == 0)
                                        <button>
                                            <a class="text-red-600"
                                                href="{{ route('admin.order.changeStatus', $order->id) }}"> تایید نشده</a>
                                        </button>
                                    @elseif($order->status == 1)
                                        <button>
                                            <a class="text-green-500"
                                                href="{{ route('admin.order.changeStatus', $order->id) }}"> تایید شده</a>
                                        </button>
                                    @endif
                                </td>
                                <td class="py-4 px-6 border-b border-gray-200 text-center">{{ $order->user->name }}</td>
                                <td class="py-4 px-6 border-b border-gray-200 text-center">
                                    <form id="deleteButton" class=""
                                        action="{{ route('admin.order.destroy', $order->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="deleteButton" id="deleteButton">حذف</button>
                                    </form>
                                </td>

                            </tr> --}}



    <div class="w-full mb-8 overflow-hidden rounded-2xl shadow-xs pt-10">
        <h1 class="font-black text-4xl dark:text-amber-200">
            لیست سفارشات
        </h1>
        <div class="overflow-x-auto pt-10">
            <table class="w-full whitespace-no-wrap ">

                <tr
                    class="text-xs font-semibold text-center text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">نام خریدار</th>
                    <th class="px-4 py-3">مبلغ</th>
                    <th class="px-4 py-3">وضعیت</th>
                    <th class="px-4 py-3">تاریخ</th>
                </tr>

                @foreach ($orders as $order)
                    <tbody class=" bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 w-full text-center">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div>
                                    <p class="font-semibold">{{ $order->user->name }}</p>
                                </div>

                            </td>
                            <td class="px-4 py-3 text-sm text-cyan-50">
                                <p> {{ $order->total_price }}</p>
                            </td>
                            <td class="px-4 py-3 text-xs">

                                @if ($order->status == 0)
                                    <a href="{{ route('admin.order.changeStatus', $order->id) }}">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            تایید شده
                                        </span>
                                    </a>
                                @elseif($order->status == 1)
                                    <a href="{{ route('admin.order.changeStatus', $order->id) }}">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight  bg-green-100 rounded-full dark:bg-red-700 dark:text-green-100">
                                            تایید نشده
                                        </span>
                                    </a>
                                @endif


                            </td>
                            <td class="px-4 py-3 text-sm text-slate-100">

                                <p> {{ jdate($order->created_at)  }}</p>
                            </td>
                        </tr>

                    </tbody>
                @endforeach
            </table>
        </div>

        <div
            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                صفحه 21-30 از 100
            </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Previous">
                                <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                1
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                2
                            </button>
                        </li>
                        <li>
                            <button
                                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                3
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                4
                            </button>
                        </li>
                        <li>
                            <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                8
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                9
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next">
                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </nav>
            </span>
        </div>
    </div>

    </div>
    <!-- Add more rows here -->



    </div>
    </main>
    </div>
@endsection
