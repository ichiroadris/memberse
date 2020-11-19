<template>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900">
        <!-- Desktop sidebar -->
        <aside
            class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
        >
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a
                    class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                    href="#"
                >
                    Memberse
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <!-- <span
                            class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                            aria-hidden="true"
                        ></span> -->
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                            href="/dashboard"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                ></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="/admin/members"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                                ></path>
                            </svg>
                            <span class="ml-4">Members</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="/admin/events"
                        >
                            <svg
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                ></path>
                            </svg>
                            <span class="ml-4">Events</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="/admin/posts"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                                ></path>
                            </svg>
                            <span class="ml-4">Posts</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <transition
            enter-active-class="transition ease-in-out duration-150"
            enter-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition ease-in-out duration-150"
            leave-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-show="isSideMenuOpen"
                @click="isSideMenuOpen = false"
                class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
            ></div>
        </transition>
        <transition
            enter-active-class="transition ease-in-out duration-100"
            enter-class="opacity-0 transform -translate-x-20"
            enter-to-class="opacity-100"
            leave-active-class="transition ease-in-out duration-150"
            leave-class="opacity-100"
            leave-to-class="opacity-0 transform -translate-x-20"
        >
            <aside
                class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
                v-show="isSideMenuOpen"
            >
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <a
                        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                        href="#"
                    >
                        Memberse
                    </a>
                    <ul class="mt-6">
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="/dashboard"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                    ></path>
                                </svg>
                                <span class="ml-4">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href=""
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                                    ></path>
                                </svg>
                                <span class="ml-4">Forms</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </transition>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
                >
                    <!-- Mobile hamburger -->
                    <button
                        class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                        aria-label="Menu"
                        @click="isSideMenuOpen = !isSideMenuOpen"
                    >
                        <svg
                            class="w-6 h-6"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32"></div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Notifications menu -->
                        <li class="relative">
                            <button
                                class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                                aria-label="Notifications"
                                aria-haspopup="true"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                                    ></path>
                                </svg>
                                <!-- Notification badge -->
                                <span
                                    aria-hidden="true"
                                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                                ></span>
                            </button>
                        </li>
                        <!-- Settings Dropdown -->
                        <div class=" sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">
                                <jet-dropdown align="right" width="48">
                                    <template #trigger>
                                        <button
                                            v-if="
                                                $page.jetstream
                                                    .managesProfilePhotos
                                            "
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out"
                                        >
                                            <img
                                                class="h-8 w-8 rounded-full object-cover"
                                                :src="
                                                    $page.user.profile_photo_url
                                                "
                                                :alt="$page.user.name"
                                            />
                                        </button>

                                        <button
                                            v-else
                                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"
                                        >
                                            <div>{{ $page.user.name }}</div>

                                            <div class="ml-1">
                                                <svg
                                                    class="fill-current h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div
                                            class="block px-4 py-2 text-xs text-gray-400"
                                        >
                                            Manage Account
                                        </div>

                                        <jet-dropdown-link
                                            :href="route('profile.show')"
                                        >
                                            Profile
                                        </jet-dropdown-link>

                                        <jet-dropdown-link
                                            :href="route('api-tokens.index')"
                                            v-if="
                                                $page.jetstream.hasApiFeatures
                                            "
                                        >
                                            API Tokens
                                        </jet-dropdown-link>

                                        <div
                                            class="border-t border-gray-100"
                                        ></div>

                                        <!-- Team Management -->
                                        <template
                                            v-if="
                                                $page.jetstream.hasTeamFeatures
                                            "
                                        >
                                            <div
                                                class="block px-4 py-2 text-xs text-gray-400"
                                            >
                                                Manage Team
                                            </div>

                                            <!-- Team Settings -->
                                            <jet-dropdown-link
                                                :href="
                                                    route(
                                                        'teams.show',
                                                        $page.user.current_team
                                                    )
                                                "
                                            >
                                                Team Settings
                                            </jet-dropdown-link>

                                            <jet-dropdown-link
                                                :href="route('teams.create')"
                                                v-if="
                                                    $page.jetstream
                                                        .canCreateTeams
                                                "
                                            >
                                                Create New Team
                                            </jet-dropdown-link>

                                            <div
                                                class="border-t border-gray-100"
                                            ></div>

                                            <!-- Team Switcher -->
                                            <div
                                                class="block px-4 py-2 text-xs text-gray-400"
                                            >
                                                Switch Teams
                                            </div>

                                            <template
                                                v-for="team in $page.user
                                                    .all_teams"
                                            >
                                                <form
                                                    @submit.prevent="
                                                        switchToTeam(team)
                                                    "
                                                    :key="team.id"
                                                >
                                                    <jet-dropdown-link
                                                        as="button"
                                                    >
                                                        <div
                                                            class="flex items-center"
                                                        >
                                                            <svg
                                                                v-if="
                                                                    team.id ==
                                                                        $page
                                                                            .user
                                                                            .current_team_id
                                                                "
                                                                class="mr-2 h-5 w-5 text-green-400"
                                                                fill="none"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2"
                                                                stroke="currentColor"
                                                                viewBox="0 0 24 24"
                                                            >
                                                                <path
                                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                                                ></path>
                                                            </svg>
                                                            <div>
                                                                {{ team.name }}
                                                            </div>
                                                        </div>
                                                    </jet-dropdown-link>
                                                </form>
                                            </template>

                                            <div
                                                class="border-t border-gray-100"
                                            ></div>
                                        </template>

                                        <!-- Authentication -->
                                        <form
                                            method="POST"
                                            @submit.prevent="logout"
                                        >
                                            <jet-dropdown-link as="button">
                                                Logout
                                            </jet-dropdown-link>
                                        </form>

                                    </template>
                                </jet-dropdown>
                            </div>
                        </div>
                    </ul>
                </div>
            </header>
            <main class="h-full overflow-y-auto">
                <slot name="content"></slot>
            </main>
        </div>
    </div>
</template>

<script>
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
export default {
    components: {
        JetDropdown,
        JetDropdownLink
    },
    data() {
        return {
            isSideMenuOpen: false
        };
    },
    methods: {
        logout() {
            axios.post(route("logout").url()).then(response => {
                window.location = "/";
            });
        }
    }
};
</script>

<style lang="scss" scoped></style>
