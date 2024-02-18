@include('layouts.partials.header')
<body>
        <nav class="flex justify-between bg-[#215CAE] p-3">
            <div class="flex px-5">
                <button class="mx-5 flex flex-wrap text-white items-center"><svg fill="#FFF" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 3 9 A 1.0001 1.0001 0 1 0 3 11 L 47 11 A 1.0001 1.0001 0 1 0 47 9 L 3 9 z M 3 24 A 1.0001 1.0001 0 1 0 3 26 L 47 26 A 1.0001 1.0001 0 1 0 47 24 L 3 24 z M 3 39 A 1.0001 1.0001 0 1 0 3 41 L 47 41 A 1.0001 1.0001 0 1 0 47 39 L 3 39 z"></path>
                    </svg>
                </button>
                <div class="flex flex-wrap items-center text-white font-bold">Data</div>
            </div>
            <div class="flex">
            <div class="flex items-center text-center font-bold text-white mx-8">Admin1</div>
            </div>           
        </nav>
    @yield('content')
</body>
</html>