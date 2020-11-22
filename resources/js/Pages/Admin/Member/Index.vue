<template>
    <dashboard-layout>
        <template #content>
            <div class="container px-6 mx-auto grid">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Members
                </h2>

                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                                >
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Level</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Date Registered</th>
                                </tr>
                            </thead>
                            <tbody
                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                                <tr
                                    v-for="member in members"
                                    :key="member.index"
                                    class="text-gray-700 dark:text-gray-400"
                                >
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">
                                                    {{ member.name }}
                                                </p>
                                                <p
                                                    class="text-xs text-gray-600 dark:text-gray-400"
                                                >
                                                    {{ member.email }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{
                                            member.roles[0].name
                                                .charAt(0)
                                                .toUpperCase() +
                                                member.roles[0].name.slice(1)
                                        }}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            v-if="member.roles[0].name == 'free'"
                                            class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100"
                                        >
                                            Forever
                                        </span>
                                        <span
                                            v-else
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                        >
                                            Ongoing
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $luxon(member.created_at, "short") }}
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

export default {
    components: { DashboardLayout },
    props: ["members", "currentDate"],
    data() {
        return {
            datetime: ""
        };
    },
    created() {
        console.log(this.members[1].created_at);
        // console.log(Instant.now());
    }
};
</script>
