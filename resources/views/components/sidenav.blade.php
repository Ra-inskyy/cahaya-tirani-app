<div id="sidebar" class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out" x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform">
    <div class="space-y-6 md:space-y-8 mt-10">
      <h1 class="hidden md:block font-bold text-sm md:text-xl text-center">
        CV. Cahaya Tirani<span class="text-teal-600"></span>
      </h1>
      <div id="profile" class="flex flex-col items-center justify-center space-y-3">
        <svg class="w-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>
        <div>
          <p class="text-xs text-gray-500 text-center">Administrator</p>
        </div>
      </div>
      <div id="menu" class="flex flex-col space-y-2">
        <a href="/dashboard" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
          <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"></path>
          </svg>
          <span class="">Dashboard</span>
        </a>
        <a href="#" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" @click.prevent="dropdownOpen = !dropdownOpen">
          <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"></path>
          </svg>
          <span class="">Master Data</span>
        </a>
        <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100 transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="bg-white shadow-lg rounded-lg mt-2">
          <a href="/users" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Data User</a>
          <a href="/karyawan" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Data Karyawan</a>
          <a href="{{ route('jabatan.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Data Jabatan</a>
        </div>
        <a href="/transaksi" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" @click.prevent="dropdownOpen2 = !dropdownOpen2">
          <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
          </svg>
          <span class="">Transaksi</span>
        </a>
        <div x-show="dropdownOpen2" x-transition:enter="transition ease-out duration-100 transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="bg-white shadow-lg rounded-lg mt-2">
          <a href="/absens" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rekap Absen</a>
          <a href="/datagaji" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Data Gaji</a>
        </div>
        <a href="/laporan" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" @click.prevent="dropdownOpen3 = !dropdownOpen3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline-block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
          </svg>
          <span class="">Laporan</span>
        </a>
        <div x-show="dropdownOpen3" x-transition:enter="transition ease-out duration-100 transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="bg-white shadow-lg rounded-lg mt-2">
          <a href="/laporan/gaji" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Laporan Gaji</a>
          <a href="/slip-gaji" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Slip Gaji</a>
        </div>
        <a href="/laporan" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" @click.prevent="dropdownOpen4 = !dropdownOpen4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline-block" @click.prevent="dropdownOpen4 = !dropdownOpen4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
          <span class="">Utility</span>
        </a>
        <div x-show="dropdownOpen4" x-transition:enter="transition ease-out duration-100 transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="bg-white shadow-lg rounded-lg mt-2">
          <a href="/utility/ubah-password" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ubah Password</a>
          <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a> 
        </form>
        </div>
      </div>
    </div>
  </div>