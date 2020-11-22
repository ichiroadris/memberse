<template>
    <div class="relative  min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">
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
        <!-- <div class="bg-white">
            <div class="flex h-full">
                <img
                    src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F117883041%2F193040739936%2F1%2Foriginal.20201116-230953?w=800&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C1920%2C960&s=1c2fc10f55f20017c639eebb14709a5e"
                    alt="photo"
                    class="w-2/4 border-black rounded shadow"
                />
                <div class="flex flex-col justify-between p-4 w-full">
                    <div class="flex flex-col w-full h-full">
                        <p class="text-purple-500 text-sm font-semibold">
                            Public
                        </p>
                        <h1 class="font-bold text-2xl">{{ event.title }}</h1>
                        <p>{{ event.description }}</p>
                        <p>{{ event.date }}</p>
                    </div>
                    <button
                        class="px-4 py-2 w-1/3 self-end text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" v-if="$page.user"
                    >
                        Participate
                    </button>
                    <button
                        class="px-4 py-2 w-1/3 self-end text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" v-else
                    >
                        Login/Sign Up
                    </button>
                </div>
            </div>
            <div></div>
            <div></div>
        </div> -->
    </div>
</template>

<script>
export default {
    props: ["event"],
    created() {
        console.log(this.event);
    }
};
</script>

<style lang="scss" scoped></style>
