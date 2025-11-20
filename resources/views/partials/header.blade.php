<header class="header-fixed shadow-lg" style="background:#5a3e1b; color:white;">
   <div class="container mx-auto px-6 py-4">
      <div class="flex items-center justify-between">

         {{-- Logo --}}
         <div class="flex items-center space-x-2">
             <span class="text-2xl font-bold text-white">Universe</span>
         </div>

         {{-- Menu --}}
         <nav class="hidden md:flex items-center space-x-8">
            <a href="#utama" class="font-medium text-white hover:text-[#f4d7b5]">Utama</a>
            <a href="#barang-hilang" class="font-medium text-white hover:text-[#f4d7b5]">Barang Hilang</a>
         </nav>

         {{-- User Info --}}
         <div class="flex items-center space-x-4">

            <div class="flex items-center space-x-3 px-4 py-2 rounded-lg" style="background:#b56f2d;">
               <div class="text-left">
                    <div class="text-sm font-semibold text-white">{{ Auth::user()->username }}</div>
                    <div class="text-xs flex items-center text-white">
                        <span>{{ Auth::user()->role ?? 'User' }}</span>
                        <span class="status-online"></span>
                    </div>
               </div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="px-4 py-2 rounded-lg font-medium transition flex items-center space-x-2"
                        style="background:#8c501d; color:white;">
                    <span>Logout</span>
                </button>
            </form>

         </div>

      </div>
   </div>
</header>
