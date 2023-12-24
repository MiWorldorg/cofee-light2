@extends('admin.layouts.master')

@section('main')
    <div class="flex flex-col flex-1 py-4">
        <main class="h-full pb-16 overflow-y-auto p-50">

            <h1 class="font-black text-4xl pt-2 dark:text-amber-200">
                 ویرایش محصول
            </h1>


            <div class="container px-6 mx-auto grid pt-10 ">
                <form method="post" action="{{ route('admin.product.update',$product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div
                        class=" px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 border-amber-400 border-solid border-x-4">
                        <label class="block text-sm m-6">
                            <span class="text-gray-700 dark:text-gray-400 pb-6">نام محصول</span>
                            <input type="text" id="name" name="name" value="{{ old('name', $product->name)   }}"
                                class="p-4 rounded-2xl block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="متن را وارد کنید" />
                        </label>

                        <label class="block text-sm m-6">
                            <span class="text-gray-700 dark:text-gray-400 pb-6">قیمت</span>
                            <input type="text" id="price" name="price"
                                class="p-4 rounded-2xl block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="متن را وارد کنید" value="{{ old('price' , $product->price) }}" />
                        </label>

                        <label class="block text-sm m-6">
                            <span class="text-gray-700 dark:text-gray-400 pb-6">تصویر محصول</span>
                            <input
                                class="p-4 rounded-2xl block w-full mb-5 text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="image_location" name="image_location" type="file">
                        </label>



                        <label class="block mt-4 text-sm m-6">
                            <span class=" text-gray-700 dark:text-gray-400">توضیحات محصول</span>
                            <textarea
                                class="p-4 rounded-2xl block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                placeholder="توضیحات را وارد کنید ..." name="description" id="description" cols="30" rows="10">{{ old('description' , $product->description) }}</textarea>
                        </label>

                        <button type="submit"
                            class="font-black hover:shadow-2xl hover:shadow-green-400 transition-all text-white bg-gradient-to-r from-green-300 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 text-lg rounded-lg px-5 py-2.5 text-center me-2 mb-2">ویرایش</button>
                    </div>
                </form>
            </div>

    {{-- ---------------------- --}}




</main>
    </div>
@endsection
