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
        <main class="h-full pb-16 overflow-y-auto p-50  pt-10">
            <div
                class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10
        border-x-2 transition-all border-amber-200 border-opacity-0  hover:border-opacity-100 min-w-0 p-4 shadow-xs bg-gray-800 bg-opacity-30 backdrop-blur-sm">
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

                                    <p> {{ jdate($order->created_at) }}</p>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </main>



    </div>

    </div>
    <!-- Add more rows here -->



    </div>

    </div>
@endsection
