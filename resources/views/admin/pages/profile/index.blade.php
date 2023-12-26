@extends('admin.layouts.master')

@section('main')
    <div class="w-full mb-8 overflow-hidden rounded-2xl shadow-xs pt-10">
        <h1 class="font-black text-4xl dark:text-amber-200">
            حساب کاربری
        </h1>

    </div>

    {{-- ProfilePage --}}
    <div class="flex space-x-6">
        <div class="flex-2 m-6 self-center">
            <div
                class="w-full border-b-0 bg-gray-800 bg-opacity-20 backdrop-blur-sm overflow-hidden sm:rounded-lg mt-8 pt-8 lg:rounded-3xl shadow-xl flex items-center justify-center">
                <div class="flex flex-col items-center border-x-2">
                    <dl class="p-4">
                        <a href="">
                            <button type="submit"
                                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ویرایش</button>
                        </a>
                    </dl>
                    <dl class="p-4">
                        <a href="">
                            <button type="submit"
                                class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">خروج</button>
                        </a>
                    </dl>
                </div>
            </div>



        </div>
        <div class="flex-1">
            <div
                class="w-full border-amber-300 border-y-2 border-b-0 bg-gray-800 bg-opacity-20 backdrop-blur-sm overflow-hidden sm:rounded-lg mt-8 pt-8 lg:rounded-3xl shadow-xl">
                <div class=" px-4 py-5 sm:px-6">
                    <h3 class=" text-lg leading-6 font-medium  text-amber-200 mb-8">
                        اطلاعات حساب
                    </h3>

                </div>
                <div class="border-x-2 border-amber-300">
                    <dl class="p-4">
                        <div
                            class=" bg-gray-800 border-2 border-amber-100 border-opacity-5 rounded-2xl px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-lg font-black text-amber-200">
                                شناسه شما
                            </dt>
                            <dd class="mb-2 mt-1 text-md text-amber-100 sm:mt-0 sm:col-span-2">
                                110
                            </dd>
                        </div>
                    </dl>
                    <dl class="p-4">
                        <div
                            class=" bg-gray-800 border-2 border-amber-100 border-opacity-5 rounded-2xl px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-lg font-black text-amber-200">
                                نام کاربری
                            </dt>
                            <dd class="mb-2 mt-1 text-md text-amber-100 sm:mt-0 sm:col-span-2">
                                Mahdiizadi
                            </dd>
                        </div>
                    </dl>
                    <dl class="p-4">
                        <div
                            class=" bg-gray-800 border-2 border-amber-100 border-opacity-5 rounded-2xl px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-lg font-black text-amber-200">
                                سطح دسترسی
                            </dt>
                            <dd class="mb-2 mt-1 text-md text-amber-100 sm:mt-0 sm:col-span-2">
                                مهدی ایزدی
                            </dd>
                        </div>
                    </dl>
                    <dl class="p-4 mb-4">
                        <div
                            class=" bg-gray-800 border-2 border-amber-100 border-opacity-5 rounded-2xl px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-lg font-black text-amber-200">
                                نام کامل
                            </dt>
                            <dd class="mb-2 mt-1 text-md text-amber-100 sm:mt-0 sm:col-span-2">
                                مهدی ایزدی
                            </dd>
                        </div>
                    </dl>
                </div>


            </div>


        </div>

    </div>

    {{--  --}}
    </main>
@endsection
