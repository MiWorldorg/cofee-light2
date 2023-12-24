@extends('admin.layouts.master')

@section('main')
    <div class="flex flex-col flex-1 py-4">
        <main class="h-full pb-16 overflow-y-auto p-50">
            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                <form method="post" action="{{ route('admin.product.store') }}"  enctype="multipart/form-data">
                    @csrf
                        <div class="grid grid-cols-3 gap-4">
                            <div class="w-full">
                                <label for="name" class="text-green-50">
                                    نام محصول
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}">
                            </div>
                            <!-- ... -->
                            <div class="w-full">
                                <label for="price" class="text-green-50">
                                     قیمت
                                </label>
                                <input type="text" id="name" name="price" value="{{ old('price') }}">
                            </div>
                            <!-- ... -->
                            <div class="w-full">
                                <label for="image_location" class="text-green-50">
                                    عکس محصول
                                </label>
                                <input type="file" id="name" name="image_location" value="{{ old('image_location') }}">
                            </div>
                            <div class="w-full">
                                <label for="description" class="text-green-50">
                                    عکس محصول
                                </label>
                                <textarea class="form-control mb-2" placeholder="توضیحات را وارد کنید ..." name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    <button type="submit" class="text-green-50">
                        ثبت
                    </button>
                </form>
            </div>
            <!-- Cards with title -->

        </main>
    </div>

@endsection
