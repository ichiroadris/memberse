<template>
    <dashboard-layout>
        <template #content>
            <div class="container px-6 mx-auto grid">
                <div class="flex justify-between items-center">
                    <h2
                        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                    >
                        Event - {{event.title}}
                    </h2>

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
    props: ['event'],
    data() {
        return {

        };
    },
    methods: {

    }
};
</script>
