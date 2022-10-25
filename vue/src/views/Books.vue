<template>
  <PageComponents title="Books">
    <div class="flex flex-col shadow">
    <input
      type="search"
      name="search"
      id="search"
      @change="fetch"
      v-model="search"
      placeholder="Search Book Name"
      class="w-full sm:w-2/12 my-2 self-end py-2 px-4 border text-sm font-medium rounded-md focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700"
    />
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
                1
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                Java
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              Platform Independent Unlike many other programming languages including C and C++, when Java is compiled, it is not compiled into platform specific machine, rather into platform independent byte code
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                Programming
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                50$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                2
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                Python
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              Python is a computer programming language often used to build websites and software, automate tasks, and conduct data analysis. Python is a general-purpose language, meaning it can be used to create a variety of different programs and isn't specialized for any specific problems.              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                Programming
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                10$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                3
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              KING MICHAEL
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              king of Romania
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                Folk Story
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                5$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                4
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              I FOUND A FROG
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              Something magical was happening in the fish bowl  and he wasn’t  quite ready for what lay in store.  Read this captivating free illustrated book for kids that encourages them to explore and be awed by the many wonders of nature. 
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                Kids
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                3$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                5
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              To Kill a Mockingbird by Harper Lee
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
              Harper Lee’s To Kill a Mockingbird upends the quiet solitude of a segregated Southern town with a story of innocence and virtue, bigotry and hate, love and forgiveness. Eight-year-old Scout Finch and her father, Atticus, find themselves enmeshed in the trial of a Black man accused of raping a White woman.              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                Kill Story
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                150$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                6
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              The Shining by Stephen King
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              The master of suspense must be included in any list of books you should read in a lifetime. That’s why you’ll find Stephen King’s The Shining here. Brought to life in cinematic perfection by Jack Nicholson, Jack Torrance is a middle-aged man looking for a fresh start.</td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Science
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                20$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                7
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
                8
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              The Fellowship of the Ring
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              In The Fellowship of the Ring, the first book in the Lord of the Rings trilogy, journey to Middle-earth and into the world of Frodo Baggins, Samwise Gamgee, Gandalf the Grey, the dark lord Sauron, and the entire assemblage of Tolkien’s most famous characters and story lines.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Folk
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                250$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                9
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              A Wrinkle in Time
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              While this book may have seen an uptick in interest thanks to the 2018 film starring Oprah Winfrey, Mindy Kaling, and Reese Witherspoon, Madeleine L’Engle’s A Wrinkle in Time has long been held as a must-read for its fantastical telling of splitting the fabric of time and space.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Kids
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                40$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                10
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Pride and Prejudice
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
                11
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
                12
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Man's Search for Meaning
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Viktor Frankl labored in four Nazi death camps. His parents, brother, and pregnant wife perished.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Psychiatrist 
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                250$
              </td>
            </tr>
            <tr>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-center text-m leading-4 font-medium text-gray-700 tracking-wider"              >
                13
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Beloved
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
              Toni Morrison’s Beloved stares down the horrors of slavery and transforms a narrative you think you’ve read a hundred times into a towering tale of pain, agony, triumph, and freedom.
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                Love
              </td>
              <td
              class="px-6 py-3 border-b border-blue-900 bg-gray-35 text-left text-m leading-4 font-medium text-gray-700 tracking-wider">
                45$
              </td>
            </tr>            
          </tbody>

          <!-- <tbody class="bg-white cursor-pointer">
              <tr>
                <td
                class="px-6 py-3 border-b text-center text-l leading-4 font-large text-black-900">
                    <h1>{{books.id}}</h1>
              </td>
              <td
                class="px-6 py-3 border-b text-center text-l leading-4 font-large text-black-900">
                    <h1>{{books.title}}</h1>
              </td>
              <td
                class="px-6 py-3 border-b text-center text-l leading-4 font-large text-black-900">
                    <h1>{{books.description}}</h1>
              </td>
              <td
                class="px-6 py-3 border-b text-center text-l leading-4 font-large text-black-900">
                    <h1>{{books.type}}</h1>
              </td>
              <td
                class="px-6 py-3 border-b text-center text-l leading-4 font-large text-black-900">
                    <h1>{{books.price}}</h1>
              </td>
              </tr>
            
          </tbody> -->
        </table>
        <div class="flex rounded justify-center items-center">
          <a
            :href="links.prev"
            :total-rows="rows"
            v-show="links.current_page !== 1"
            @click.prevent="fetch(--links.current_page)"
            class="px-4 py-2 m-2 border rounded bg-indigo-500 text-white cursor-pointer"
            >Previous</a
          >
          <a
            :href="links.next"
            v-show="links.last_page != links.current_page"
            @click.prevent="fetch(++links.current_page)"
            class="px-4 py-2 m-2 border rounded bg-indigo-500 text-white cursor-pointer"
            >Next</a
          >
        </div>
      </div>
    </div>
  </div>
  </PageComponents>
</template>

<script>
import PageComponents from '../components/PageComponents.vue';
export default {
    data() {
        return {
            books: {},
            links: {},
            search: "",
        };
    },
    // created() {
    //   this.fetch();
    // },

    // methods: {
    //   fetch(page) {
    //     axiosClient.get(this.url(page)).then(this.refresh);
    //   },
    //   url(page) {
    //     if (!page || isNaN(page)) {
    //       let query = location.search.match(/page=(\d+)/);
    //       page = query ? query[1] : 1;
    //     }
    //     if (this.search) {
    //       return "/api/dashboards?page=" + page + "&search=" + this.search; 
    //     }
    //     return "/api/dashboards/books?page" + page;
    //   },
    //   refresh({ data }) {
    //   this.books = data.data;
    //   this.links = data.meta;
    // },

    // },
    
    components: { PageComponents }
};
</script>

<style>
</style>