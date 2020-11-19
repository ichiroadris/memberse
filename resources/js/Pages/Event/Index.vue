<template>
    <div class="relative min-h-screen  bg-gray-100 dark:bg-gray-900 sm:pt-0">
        <div class="block">
            <div class="top-0 -ml-1 left-0 px-6 py-4 flex items-center">
                <a href="/" class="flex">
                    <svg
                        class="w-6 h-6 mr-2"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                        ></path>
                    </svg>
                    <h1 class="text-lg font-bold">Memberse</h1>
                </a>
            </div>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a
                    href="/events"
                    class="px-4 py-2 font-medium leading-5 text-black transition-colors duration-150 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-purple ml-4"
                    >Events</a
                >
                <a
                    href="/posts"
                    class="px-4 py-2 font-medium leading-5 text-black transition-colors duration-150 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-purple ml-4"
                    >Latest Posts</a
                >
            </div>
        </div>
        <div class="px-5 font-bold text-xl">Available Events</div>
        <div class="grid grid-cols-4 p-4 gap-4">
            <div
                v-for="event in events"
                :key="event.index"
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 h-56 flex flex-col justify-between"
            >
                <div>
                    <p class="text-purple-600 text-sm font-semibold">Public</p>
                    <a :href="'/event/'+event.id" class="mb-2 font-semibold text-blue-500 hover:text-blue-600 text-lg dark:text-gray-300">
                        {{ event.title }}
                    </a>
                    <p class="text-base">{{event.date}}</p>
                    <p class="text-gray-600 h-full dark:text-gray-400">
                        {{ event.description }}
                    </p>
                </div>
                <button class="self-end px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                  Learn More
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["events"]
};
</script>

<style lang="scss" scoped></style>
