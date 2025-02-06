<?php
include("service/function.php");

$reports = get_data("SELECT * FROM laporan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>

  <?php include "layout/navbar.php" ?>

<div id="popup-modal-<?= $laporan['id'] ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full z-50">
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button data-modal-hide="popup-modal-<?= $laporan['id'] ?>" type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only" data-modal-hide="popup-modal-<?= $laporan['id'] ?>" type="button">Close modal</span>

                    </button>
                    <div class="p-4 md:p-5 text-center">

                      <form class="max-w-sm mx-auto" method="post" action="/service/function.php" enctype="multipart/form-data">
                        <div class="mb-5">
                          <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                          <input type="text" name="judul" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                          <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripsi</label>
                          <input type="text" name="descripsi" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div class="mb-5">
                          <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                          <input type="file" name="photo" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <h3 class="mb-5 mt-5 text-lg font-normal text-gray-500 dark:text-gray-400">Upload file anda</h3>
                        <button name="submit-report" data-modal-hide="popup-modal-<?= $laporan['id'] ?>" type="submit" class="text-white bg-green-600 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-white-300 dark:focus:ring-white-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                          Upload file
                        </button>
                        <button data-modal-hide="popup-modal-<?= $laporan['id'] ?>" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>

                      </form>

                    </div>
                  </div>
                </div>
              </div>

             
            </div>
          </div>
        </div>
    </div>

  </div>









  
  <!-- Scrip -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

<script src="./node_modules/preline/dist/preline.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
</div>


</body>

</html>