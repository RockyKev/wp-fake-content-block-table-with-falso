<?php

// do_action( 'qm/debug', $block );


?>




<div class="fake-content">
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>

  <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" id="fillTable">Populate the Table</button>
  
  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium bg-sky-400">
              <tr>
                <th scope="col" class="px-6 py-4">Avatar</th>
                <th scope="col" class="px-6 py-4">Comp ID</th>
                <th scope="col" class="px-6 py-4">Full Name</th>
                <th scope="col" class="px-6 py-4">Time Zone</th>
                <th scope="col" class="px-6 py-4">Team</th>
                <th scope="col" class="px-6 py-4">Contact</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b">
                <td class="whitespace-nowrap px-6 py-4"><img src="https://i.pravatar.cc/100"></td>
                <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                <td class="whitespace-nowrap px-6 py-4">Mark Otto</td>
                <td class="whitespace-nowrap px-6 py-4">West Coast</td>
                <td class="whitespace-nowrap px-6 py-4">Team Name</td>

                <td class="whitespace-nowrap px-6 py-4 flex items-center h-20 min-h-full">


                  <!-- // CHAT -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>

                  <!-- MAIL -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                  </svg>


                  <!-- INFO -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>


                </td>


              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</div>