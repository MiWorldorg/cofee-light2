<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    @include('admin.layouts.headtag')
</head>

<body dir="rtl" class="font-peyda">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('admin.layouts.sidebar')
        <div class="flex flex-col flex-1 w-full">
            {{-- @include('admin.layouts.header') --}}
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    @yield('main')
                </div>
            </main>
        </div>
    </div>
</body>

</html>
@yield('script')
