@extends('admin.layouts.master')

@section('main')
    <div class="flex flex-col flex-1 py-4">
        <main class="h-full pb-16 overflow-y-auto p-50">

            <h1 class="font-black text-4xl pt-2 dark:text-amber-200">
                ویرایش محصول
            </h1>


            <div class="container px-6 mx-auto grid pt-10 ">
                <form method="post" action="{{ route('admin.profile.update',auth()->user()->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div
                        class=" px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 border-amber-400 border-solid border-x-4">
                        <label class="block text-sm m-6">
                            <span class="text-gray-700 dark:text-gray-400 pb-6">نام کامل</span>
                            <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name)   }}"
                                   class="p-4 rounded-2xl block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                   placeholder="متن را وارد کنید" />
                        </label>
                        <label class="block text-sm m-6">
                            <span class="text-gray-700 dark:text-gray-400 pb-6">نام کاربری </span>
                            <input type="text" id="name" name="username" value="{{ old('username', auth()->user()->username)   }}"
                                   class="p-4 rounded-2xl block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                   placeholder="متن را وارد کنید" />
                        </label>
                        <label class="block text-sm m-6">
                            <span class="text-gray-700 dark:text-gray-400 pb-6"> رمز قبلی </span>
                            <input type="text" id="name" name="tekpassword" value="{{ old('tekpassword' )  }}"
                                   class="p-4 rounded-2xl block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                   placeholder="متن را وارد کنید" />
                        </label>
                <label class="block text-sm m-6">
                            <span class="text-gray-700 dark:text-gray-400 pb-6"> رمز جدید </span>
                            <input type="text" id="name" name="password" value="{{ old('password' )  }}"
                                   class="p-4 rounded-2xl block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                   placeholder="متن را وارد کنید" />
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
