
<template>
  
  <Disclosure as="nav" class="bg-blue-800" v-slot="{ open }">
    <PageComponents title="Latest Books" class="bg-black-900 "></PageComponents>
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div
        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200"
      >
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-black-45 text-left text-l leading-4 font-large text-black-700 uppercase tracking-wider"
              >
                book id
              </th>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-black-45 text-left text-l leading-4 font-large text-black-700 uppercase tracking-wider"
              >
                title
              </th>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-black-45 text-left text-l leading-4 font-large text-black-700 uppercase tracking-wider"
              >
                description
              </th>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-black-45 text-left text-l leading-4 font-large text-black-700 uppercase tracking-wider"
              >
                type
              </th>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-black-45 text-left text-l leading-4 font-large text-black-700 uppercase tracking-wider"
              >
                price
              </th>
            </tr>
          </thead>

          <tbody class="bg-white cursor-pointer">
            
            
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                15
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              The Little Prince by Antoine de Saint-Exupéry
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              The Little Prince is a timeless tale of a prince’s journey from planet to planet in search of adventure. What he finds, however, are interactions with adults who leave him frustrated or dismayed.
            </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Folk
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                100$
              </td>
            </tr>
            
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                19
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              The Wrinkle in Time
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              While this book may have seen an uptick in interest thanks to the 2018 film starring Oprah Winfrey, Mindy Kaling, and Reese Witherspoon, Madeleine L’Engle’s A Wrinkle in Time has long been held as a must-read for its fantastical telling of splitting the fabric of time and space.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Aero
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                400$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                25
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Pride
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Jane Austen’s classic Pride and Prejudice adorned shelves of many a learned reader in the 1800s and 1900s, but its timeless story and lessons earn it.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Love
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                250$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                41
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              All the President’s Men
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Political junkies of all stripes will relish the words of Washington Post reporters Bob Woodward and Carl Bernstein as they recount the experiences and events of Watergate.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Political
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                500$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                72
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              In Cold Blood
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              the small town of Holcomb, Kansas, was turned on end by the savage murder of four members of the Clutter family. The police had no suspects and almost no evidence. 
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Story 
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                1250$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                23
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              A Long Way Gone: Memoirs of a Boy Soldier
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              It’s a story so painful, you’d prefer to think it is fiction. But Ishmael Beah’s A Long Way Gone is an entirely true recounting of his years as a child soldier in Sierra Leone, West Africa.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Story
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                450$
              </td>
            </tr>            
          </tbody>

         </table>
        
      </div>
    </div>
    

  </Disclosure>
  <div>
</div>
  </template>
    
    <script setup>
    import PageComponents from '../components/PageComponents.vue';
    import { Disclosure } from '@headlessui/vue';
    </script>