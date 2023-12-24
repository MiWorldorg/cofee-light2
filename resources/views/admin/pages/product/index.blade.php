@extends('admin.layouts.master')

@section('main')
    <div class="flex flex-col flex-1 py-4">
        <main class="h-full pb-16 overflow-y-auto p-50">


            <h1 class="font-black text-4xl dark:text-amber-200">
                لیست محصولات
            </h1>
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach ($products as $product)
                    <div
                        class="  overflow-hidden shadow-lg  transition-all bg-slate-800 rounded-2xl p-6 hover:bg-gradient-to-tl from-slate-600 transition-opacity hover:border-solid hover:border-t-4 hover:border-amber-300 ">

                        <div class="items-center w-80 h-64 relative">
                            <img class="absolute inset-0 w-full h-full object-cover rounded-xl shadow-lg"
                                src="{{ $product->image_location }}" alt="{{ $product->name }}">
                        </div>

                        <div class="px-6 py-4 pt-6">
                            <div class="font-bold text-xl mb-2">{{ $product->id }}</div>
                            <div class="font-bold text-xl mb-2  text-amber-600">{{ $product->name }}</div>

                            <h4 class="text-slate-200 text-base">
                                {{ Illuminate\Support\Str::limit($product->description, 30, ' ...') }}
                            </h4>
                            <h4 class="text-slate-200 text-base ">
                                قیمت ثبت شده:
                                {{ Illuminate\Support\Str::limit($product->price, 30, ' ...') }}
                            </h4>
                            <div class="grid grid-cols-2 items-end place-items-center">
                                <form id="deleteButton" class="pt-6 "
                                    action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class="flex">
                                        <button type="submit" id="deleteButton"
                                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">حذف</button>
                                    </div>
                                </form>
                                <a href="{{ route('admin.product.edit', $product->id) }}">
                                    <button type="submit"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ویرایش</button>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </main>
    </div>
@endsection
