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
                                        <form @submit.prevent="submit()">
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
                                                            required
                                                                name="title"
                                                                id="title"
                                                                type="text"
                                                                placeholder="Enter title"
                                                                v-model="form.title"
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
                                                            required
                                                                name="description"
                                                                id="description"
                                                                type="text"
                                                                v-model="form.description"
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
                                                            required
                                                                name="location"
                                                                id="location"
                                                                type="text"
                                                                placeholder="Enter location"
                                                                v-model="form.location"
                                                                class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                            />
                                                        </div>
                                                        <div class="flex">
                                                            <div class="mt-2 w-full mr-4">
                                                                <h4
                                                                    class="text-lg mb-1"
                                                                >
                                                                    Date
                                                                </h4>
                                                                <input
                                                                required
                                                                    name="date"
                                                                    id="date"
                                                                    type="datetime-local"
                                                                    v-model="form.date"
                                                                    class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                                />
                                                            </div>
                                                            <div class="mt-2 w-full">
                                                                <h4
                                                                    class="text-lg mb-1"
                                                                >
                                                                    Price
                                                                </h4>
                                                                <div class="flex items-center">
                                                                    <span class="mr-2">RM</span>
                                                                    <input
                                                                    required
                                                                        name="price"
                                                                        id="price"
                                                                        type="number"
                                                                        placeholder="Enter price"
                                                                        v-model="form.price"
                                                                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="mt-2 w-full">
                                                            <h4
                                                                class="text-lg mb-1"
                                                            >
                                                                Title
                                                            </h4>
                                                            <input
                                                            required
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
                                                    type="submit"
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
                                        </form>
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
                                    <th class="px-4 py-3">Title</th>
                                    <th class="px-4 py-3">Location</th>
                                    <th class="px-4 py-3">Visibility</th>
                                    <th class="px-4 py-3">Participants</th>
                                    <th class="px-4 py-3">Date</th>

                                </tr>
                            </thead>
                            <tbody
                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                                <tr v-for="event in events" :key="event.index" class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <a class="font-semibold text-blue-500" :href="'/admin/event/show/'+event.id">
                                                    {{event.title}}
                                                </a>
                                                <p
                                                    class="text-xs text-gray-600 dark:text-gray-400"
                                                >
                                                    {{event.description}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{event.location}}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        Public
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        0
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{event.date}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
    props: ['events'],
    data() {
        return {
            showModal: false,
            form: {
                title: null,
                description: null,
                location: null,
                date: null,
                price: null
            }
        };
    },
    methods: {
        submit() {
            console.log('triggered')
            this.$inertia.post('/admin/create/event', this.form);
            this.showModal = false;
            this.form =  {
                title: null,
                description: null,
                location: null,
                date: null,
                price: null
            }
        }
    }
};
</script>
