<?php

// do_action( 'qm/debug', $block );


?>




<div class="fake-content">
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>

  <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" id="fill-table">Populate the Table</button>

  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table id="fake-content-table" class="min-w-full text-left text-sm font-light">
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
                <td class="whitespace-nowrap px-6 py-4"><img src="https://i.pravatar.cc/50"></td>
                <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                <td class="whitespace-nowrap px-6 py-4">Mark Otto (He/him)</td>
                <td class="whitespace-nowrap px-6 py-4">West Coast</td>
                <td class="whitespace-nowrap px-6 py-4">Team Name</td>

                <td class="whitespace-nowrap px-6 py-4 flex items-center h-20 min-h-full">

                <a href="mailto:test@example.com"><div class="icon-email h-4 w-4"></div></a>
                <a href="#2"><div class="icon-chat h-4 w-4"></div></a>
                <a href="#3"><div class="icon-info h-4 w-4"></div></a>    

                </td>


              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</div>