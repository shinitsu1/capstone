<!DOCTYPE html>
<html lang>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Messages | Fleetlink</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>   
    <nav class="fixed top-2 z-50 mx-3 w-full bg-blue-200 rounded-2xl border-blue-200 dark:bg-blue-200">
   <div class="py-2 lg:px-5 lg:pl-5">
          <div class="flex items-center justify-between">
              <div class="flex items-center justify-start">
                  <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                      <span class="sr-only">Open sidebar</span>
                      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                      </svg>

                  </button>
                  <a href="#" class="flex ml-2 md:mr-24">
                      <img src="{{ asset('images/Logo.png') }}" class="h-10 mr-3" alt="Fleetlink Logo" />
                  </a>
              </div>
 <!-- Notification-->
              <div class="flex items-center">
               <a href="#" class="flex items-center ml-0 mr-0 p-1 0 text-blue-900  dark:text-black dark:hover:text- group">
                   <svg class="flex-shrink-0 w-7 h-7 text-blue-500 transition duration-75   dark:group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 21">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3.464V1.1m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C15 15.4 15 16 14.462 16H1.538C1 16 1 15.4 1 14.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 8 3.464ZM4.54 16a3.48 3.48 0 0 0 6.92 0H4.54Z"/>
                   </svg>
               </a>
<!-- Username-->
               <span class="flex mr-1 whitespace-nowrap">Leah Oquindo</span>
                  <div>
<!--Profile-->  
                      <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                          <span class="sr-only">Open user menu</span>
                          <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                      </button>
                  </div>
                        <a href="#" class="flex-shrink-0 w-7 h-7 text-blue-500 transition duration-75   dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 21">
                           <svg class="flex-shrink-0 w-7 h-5 mt-3 text-blue-500 transition duration-75   dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 10">
                           <path d="M15.434 1.235A2 2 0 0 0 13.586 0H2.414A2 2 0 0 0 1 3.414L6.586 9a2 2 0 0 0 2.828 0L15 3.414a2 2 0 0 0 .434-2.179Z"/>
                           </svg>
                        </a>
<!--Logout-->
                  <a href="#" class="block px-4 py-2 text-sm text-white bg-black hover:bg-white-100 dark:text-white-300 dark:bg-blue-600 dark:hover:bg-blue-500 no-underline" role="menuitem">Logout</a>            
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                          <p class="text-sm text-gray-900 dark:text-white" role="none">
                            Neil Sims
                          </p>
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                            neil.sims@flowbite.com
                          </p>
                        </div>
                        <ul class="py-1" role="none">
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                          </li>
                          
                        </ul>
                  </div>
              </div>
          </div>
      </div>
  </nav>
  <aside id="logo-sidebar" class="fixed top-0 left-3 z-40 w-60 h-screen  pt-20 transition-transform -translate-x-full border-white-200 sm:translate-x-0 dark:bg-white-800 dark:border-white-700" aria-label="Sidebar">
     <div class="h-15 min-h-0 md:min-h-full pb-4 overflow-y-auto rounded-2xl bg-blue dark:bg-blue-200">
        <ul class=" mt-10 px-none font-large">
            <li>
                <a href="#" class="flex items-center mr-0 p-2 text-blue-900  dark:text-black dark:hover:text-white hover:bg-blue-100 dark:hover:bg-blue-400 group">
                   <svg class="flex-shrink-0 w-7 h-7 ms-8 text-blue-500 transition duration-75 dark:text-blue-700 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M13.5 9V4H20v5h-6.5ZM4 12V4h6.5v8H4Zm9.5 8v-8H20v8h-6.5ZM4 20v-5h6.5v5H4Zm1-9h4.5V5H5v6Zm9.5 8H19v-6h-4.5v6Zm0-11H19V5h-4.5v3ZM5 19h4.5v-3H5v3Zm4.5-8Zm5-3Zm0 5Zm-5 3Z"/></svg>
                  
                   <span class="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
                </a>
             </li>
             <li>
                <a href="#" class="flex items-center p-2 text-gray-900 dark:text-black dark:hover:text-white hover:bg-gray-100 dark:hover:bg-blue-400 group">
                    <svg class="flex-shrink-0 w-7 h-7 ms-8 text-blue-500 transition duration-75 dark:text-blue-700 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1Z"/></svg>
                
                   <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                </a>
             </li>
           <li>
            <a href="tracking" class="flex items-center p-2 text-gray-900  dark:text-black dark:hover:text-white hover:bg-gray-100 dark:hover:bg-blue-400 group">
                  <svg class="flex-shrink-0 w-7 h-8 ms-8 text-gray-500 transition duration-75 dark:text-blue-700 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path fill="currentColor" fill-rule="evenodd" d="M10.832 2.688A4.056 4.056 0 0 0 8.02 1.5h-.04a4.056 4.056 0 0 0-4 4c-.013.75.198 1.487.606 2.117L7.734 14h.533l3.147-6.383c.409-.63.62-1.367.606-2.117a4.056 4.056 0 0 0-1.188-2.812zM7.925 2.5l.082.01l.074-.01a3.075 3.075 0 0 1 2.941 3.037a2.74 2.74 0 0 1-.467 1.568l-.02.034l-.017.035L8 12.279l-2.517-5.1l-.017-.039l-.02-.034a2.74 2.74 0 0 1-.467-1.568A3.074 3.074 0 0 1 7.924 2.5zm.612 2.169a1 1 0 1 0-1.112 1.663a1 1 0 0 0 1.112-1.663zM6.87 3.837a2 2 0 1 1 2.22 3.326a2 2 0 0 1-2.22-3.326z" clip-rule="evenodd"/></svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Tracking</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900  dark:text-black dark:hover:text-white hover:bg-blue-100 dark:hover:bg-blue-400 group">
                 <svg class="flex-shrink-0 w-7 h-7 ms-8 text-gray-500 transition duration-75 dark:text-blue-700 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"></path>
                  </svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Calendar</span>
              </a>
           </li>
           <li>
            <a href="#" class="flex items-center p-2 text-gray-900 dark:text-black dark:hover:text-white hover:bg-blue-100 dark:hover:bg-blue-400 group">
                <svg class="flex-shrink-0 w-7 h-7 ms-8 text-gray-500 transition duration-75 dark:text-blue-700 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                  </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Messages</span>
            </a>
         </li>
        </ul>
     </div>
  </aside>
</div>
</div>
</div>    
<body>
    <div class="p-7 sm:ml-64">
        <div class="p-4 border-2 h-[38rem] border-neutral-900 rounded-2xl dark:border-neutral-300 mt-14">
                <span class="flex-1 ml-5 text-3xl font-semibold whitespace-nowrap">Chats</span> 
    <div class="relative">
        <div class="absolute inset-y-0 left-0 mt-3 flex  pl-2 pointer-events-none">
            <svg class="w-5 h-5 ml-5 text-blue-700 dark:text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-[20rem] ml-3 mt-2 p-2 pl-20 text-xl text-gray-900 border border-neutral-500 rounded-full bg-neutral-200 focus:ring-blue-500 focus:border-nuetral-200 dark:bg-neutral-200 dark:border-neutral-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Message" required>
    </div> 
    
    <div class="relative w-full max-w-sm mt-5 ml-3 overflow-y-scroll bg-white  dark:bg-white-700  h-96">
       <ul>
           <li class="">
               <a href="#" class="flex items-center justify-center w-full px-4 py-3 hover:bg-blue-50 dark:hover:bg-gray-800">
                <img class="mr-3 rounded-full w-11 h-11" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                   <div>
                    <span class="font-medium text-black-900 dark:text-black hover:text-white-800 dark:hover:text-white-800">Kurt Axel Nanalis</span>
                       <p class="text-sm text-gray-500 dark:text-black-400">Kurt: I have a arrived at the target........ <span class="text-sm text-gray-500 dark:text-black-400">2:10pm</span></p>
                      
                   </div>
               </a>
           </li>
           <li class="">
               <a href="#" class="flex items-center justify-center w-full px-4 py-3 hover:bg-blue-50 dark:hover:bg-gray-800">
                <img class="mr-3 rounded-full w-11 h-11" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                <div>
                    <span class="font-medium text-black-900 dark:text-black hover:text-white-800 dark:hover:text-white-800">Kurt Axel Nanalis</span>
                       <p class="text-sm text-gray-500 dark:text-black-400">Kurt: I have a arrived at the target........ <span class="text-sm text-gray-500 dark:text-black-400">2:10pm</span></p>
                      
                       
                   </div>
               </a>
           </li>
       </ul>
    </div>
         
       
      

   
</body>
</html>
  