<header x-data="{MobileNavOpen: false}">
<nav x-data="navigation" x-effect="changeNavBg" class="w-full fixed z-20  border-gray-200 px-2 sm:px-4  rounded "
:class="scrollBg ? 'bg-light-primary dark:bg-dark-primary': 'bg-white dark:bg-gray-900'">
<div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="#" class="flex items-center">
        <img src="/img/pyke.jfif" class="h-6 mr-3 sm:h-10" alt="pyke" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">megapyke</span>
    </a>
    <button @click="MobileNavOpen = ! MobileNavOpen"  type="button"
    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false"> 
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="w-full md:block md:w-auto" :class="MobileNavOpen || 'hidden'" >
      <ul class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100   md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  dark:bg-gray-800  dark:border-gray-700">
        <template x-for="nav in navigations">
        <li>
          <a :href="nav.link" 
          class="block py-2 pl-3 pr-4 text-light-tail-500 hover:text-light-tail-100 dark:hover:text-dark- dark:text-white  rounded  md:p-0  " 
          aria-current="page" x-text="nav.name"></a>
        </li>
        </template>
      </ul>
    </div>
  </div>
</nav>


</header>
