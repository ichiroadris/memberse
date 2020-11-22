<template>
    <dashboard-layout>
        <template #content>
            <div class="container px-6 mx-auto grid">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Dashboard
                </h2>
                <!-- Cards -->
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                                ></path>
                            </svg>
                        </div>
                        <div>
                            <p
                                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                            >
                                Total Members
                            </p>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                6389
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <div>
                            <p
                                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                            >
                                Account
                            </p>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                RM 46,760.89
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <div>
                            <p
                                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                            >
                                Active Events
                            </p>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                6
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div
                        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <div
                            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <div>
                            <p
                                class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                            >
                                Membership Type
                            </p>
                            <p
                                class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                            >
                                4
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Chart -->
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <!-- Doughnut/Pie chart -->
                    <div
                        class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <h4
                            class="mb-4 font-semibold text-gray-800 dark:text-gray-300"
                        >
                            Doughnut/Pie
                        </h4>
                        <canvas id="pie"></canvas>
                        <div
                            class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                        >
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span
                                    class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"
                                ></span>
                                <span>Shirts</span>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
                                ></span>
                                <span>Shoes</span>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                                ></span>
                                <span>Bags</span>
                            </div>
                        </div>
                    </div>
                    <!-- Lines chart -->
                    <div
                        class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                        <h4
                            class="mb-4 font-semibold text-gray-800 dark:text-gray-300"
                        >
                            Lines
                        </h4>
                        <canvas id="line"></canvas>
                        <div
                            class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                        >
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span
                                    class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
                                ></span>
                                <span>Organic</span>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                                ></span>
                                <span>Paid</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </dashboard-layout>
</template>

<script>
import DashboardLayout from "../../Layouts/DashboardLayout.vue";
// import Welcome from '@/Jetstream/Welcome'

export default {
    components: { DashboardLayout }
};
</script>
