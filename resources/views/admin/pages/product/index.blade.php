@extends('admin.layouts.master')

@section('main')
    <div class="flex flex-col flex-1 py-4">
        <main class="h-full pb-16 overflow-y-auto p-50">

            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                <table class="w-full table-fixed mb-6">
                    <thead>
                        <tr class="bg-grey-600 ">
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase text-center font-peyda">
                                ایدی</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase  text-center ">نام محصول
                            </th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase  text-center"> توضیحات
                            </th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase text-center">قیمت</th>

                        </tr>
                    </thead>
                    <tbody class="bg-slate-700 ">
                        @foreach ($products as $product)
                            <tr class="rounded-xl">
                                <td class="py-4 px-6 border-b border-amber-200 text-center">{{ $product->id }}</td>

                                <td class="py-4 px-6 border-b border-amber-200 text-center">{{ $product->name }}</td>
                                <td class="py-4 px-6 border-b border-amber-200 text-center">
                                    {{ Illuminate\Support\Str::limit($product->description, 15, ' ...') }}</td>
                                <td class="py-4 px-6 border-b border-amber-200 text-center">
                                    <form id="deleteButton" class=""
                                        action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="deleteButton" id="deleteButton">حذف</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                        <!-- Add more rows here -->
                    </tbody>
                </table>
            </div>

            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach ($products as $product)
                    <div
                        class="rounded overflow-hidden shadow-lg  transition-all bg-slate-800 rounded-2xl p-6 hover:bg-gradient-to-tl from-slate-600 transition-opacity hover:border-solid hover:border-t-4 hover:border-amber-300 ">
                        <img class="max-w-80 maxh-80 rounded-xl shadow-lg" src="{{ $product->image_location }}"
                            alt=" {{ $product->name }}">
                        <div class="px-6 py-4 pt-6">
                            <div class="font-bold text-xl mb-2">{{ $product->id }}</div>
                            <div class="font-bold text-xl mb-2  text-amber-600"">{{ $product->name }}</div>

                            <h4 class="text-slate-200 text-base">
                                {{ Illuminate\Support\Str::limit($product->description, 30, ' ...') }}
                            </h4>
                            <div class="grid grid-cols-2 items-end place-items-center">
                                <form id="deleteButton" class="pt-6 "
                                    action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="deleteButton bg-red-600 rounded-md p-2 text-slate-200 transition-colors hover:drop-shadow-2xl hover:shadow-red-500"
                                        id="deleteButton">
                                        حذف</button>
                                </form>
                                <h4 class="text-slate-200 text-base ">
                                    قیمت ثبت شده:
                                    {{ Illuminate\Support\Str::limit($product->price, 30, ' ...') }}
                                </h4>
                            </div>



                        </div>

                    </div>
                @endforeach


            </div>
    </div>
    </div>
    </main>
    </div>
@endsection
