<template>
    <dashboard-layout>
        <template #content>
            <div class="container px-6 mx-auto grid">
                <div class="flex justify-between items-center">
                    <h2
                        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                    >
                        Events
                    </h2>
                    <div>
                        <button
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            @click="showModal = true"
                        >
                            Create Events
                        </button>
                        <div
                            class="fixed z-50 inset-0 overflow-y-auto"
                            v-show="showModal"
                        >
                            <div
                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 w-full"
                            >
                                <transition
                                    enter-active-class="ease-out duration-300"
                                    enter-class="opacity-0"
                                    enter-to-class="opacity-100"
                                    leave-active-class="ease-in duration-300"
                                    leave-class="opacity-100"
                                    leave-to-class="opacity-0"
                                >
                                    <div
                                        class="fixed inset-0 transition-opacity"
                                        aria-hidden="true"
                                        @click="showModal = false"
                                        v-show="showModal"
                                    >
                                        <div
                                            class="absolute inset-0 bg-gray-500 opacity-75"
                                        ></div>
                                    </div>
                                </transition>

                                <!-- This element is to trick the browser into centering the modal contents. -->
                                <span
                                    class="hidden sm:inline-block sm:align-middle sm:h-screen "
                                    aria-hidden="true"
                                    >&#8203;</span
                                >

                                <transition
                                    enter-active-class="ease-out duration-300"
                                    enter-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                                    leave-active-class="ease-in duration-200"
                                    leave-class="opacity-100 translate-y-0 sm:scale-100"
                                    leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                >
                                    <div
                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full"
                                        role="dialog"
                                        aria-modal="true"
                                        v-show="showModal"
                                        aria-labelledby="modal-headline"
                                    >
                                        <div
                                            class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"
                                        >
                                            <div class="sm:flex md:-ml-5 sm:items-start">
                                                <div
                                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full"
                                                >
                                                    <h3
                                                        class="text-lg leading-6 font-medium text-gray-900"
                                                        id="modal-headline"
                                                    >
                                                        Create Event
                                                    </h3>
                                                    <div>
                                                        <p
                                                            class="text-sm text-gray-500"
                                                        >
                                                            Create an Event for
                                                            your members
                                                        </p>
                                                    </div>
                                                    <div class="mt-2 w-full">
                                                        <h4
                                                            class="text-lg mb-1"
                                                        >
                                                            Title
                                                        </h4>
                                                        <input
                                                            name="title"
                                                            id="title"
                                                            type="text"
                                                            placeholder="Enter title"
                                                            class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                        />
                                                    </div>
                                                    <div class="mt-2 w-full">
                                                        <h4
                                                            class="text-lg mb-1"
                                                        >
                                                            Description
                                                        </h4>
                                                        <input
                                                            name="description"
                                                            id="description"
                                                            type="text"
                                                            placeholder="Enter description"
                                                            class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                        />
                                                    </div>

                                                    <div class="mt-2 w-full">
                                                        <h4
                                                            class="text-lg mb-1"
                                                        >
                                                            Location
                                                        </h4>
                                                        <input
                                                            name="location"
                                                            id="location"
                                                            type="text"
                                                            placeholder="Enter location"
                                                            class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                        />
                                                    </div>
                                                    <div class="flex">
                                                        <div class="mt-2 w-full mr-2">
                                                            <h4
                                                                class="text-lg mb-1"
                                                            >
                                                                Date
                                                            </h4>
                                                            <input
                                                                name="date"
                                                                id="date"
                                                                type="datetime-local"
                                                                class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                            />
                                                        </div>
                                                        <div class="mt-2 w-full">
                                                            <h4
                                                                class="text-lg mb-1"
                                                            >
                                                                Price
                                                            </h4>
                                                            <input
                                                                name="price"
                                                                id="price"
                                                                type="number"
                                                                placeholder="Enter price"
                                                                class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                            />
                                                        </div>
                                                    </div>
                                                    <!-- <div class="mt-2 w-full">
                                                        <h4
                                                            class="text-lg mb-1"
                                                        >
                                                            Title
                                                        </h4>
                                                        <input
                                                            name="title"
                                                            id="title"
                                                            type="text"
                                                            placeholder="Enter title"
                                                            class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                        />
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                                        >
                                            <button
                                                type="button"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm"
                                            >
                                                Submit
                                            </button>
                                            <button
                                                type="button"
                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                                                @click="showModal = false"
                                            >
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </transition>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                                >
                                    <th class="px-4 py-3">Client</th>
                                    <th class="px-4 py-3">Amount</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Date</th>
                                </tr>
                            </thead>
                            <tbody
                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div
                                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                            >
                                                <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                />
                                                <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                ></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">
                                                    Hans Burger
                                                </p>
                                                <p
                                                    class="text-xs text-gray-600 dark:text-gray-400"
                                                >
                                                    10x Developer
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        $ 863.45
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                        >
                                            Approved
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        6/10/2020
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <span class="flex items-center col-span-3">
                            Showing 21-30 of 100
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span
                            class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end"
                        >
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                            aria-label="Previous"
                                        >
                                            <svg
                                                aria-hidden="true"
                                                class="w-4 h-4 fill-current"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"
                                                    fill-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            1
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            2
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            3
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            4
                                        </button>
                                    </li>
                                    <li>
                                        <span class="px-3 py-1">...</span>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            8
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                        >
                                            9
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                            aria-label="Next"
                                        >
                                            <svg
                                                class="w-4 h-4 fill-current"
                                                aria-hidden="true"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"
                                                    fill-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </span>
                    </div>
                </div>
            </div>
        </template>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "../../../Layouts/DashboardLayout.vue";
// import Welcome from '@/Jetstream/Welcome'

export default {
    components: { DashboardLayout },
    data() {
        return {
            showModal: true
        };
    }
};
</script>
