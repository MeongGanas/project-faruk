<template lang="">
    <v-app>
        <v-app-bar elevation="0" style="border-bottom: 1px solid #d9d9d9">
            <template v-slot:prepend>
                <v-app-bar-nav-icon
                    @click.stop="drawer = !drawer"
                ></v-app-bar-nav-icon>
            </template>

            <v-app-bar-title>
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold text-[#2C6BAC]">
                        Present
                    </h1>
                    <span class="mx-2"
                        ><v-icon icon="mdi:mdi-chevron-right"></v-icon
                    ></span>
                    <h1 class="text-lg font-semibold">{{ page }}</h1>
                </div>
            </v-app-bar-title>
            <template v-slot:append>
                <v-btn icon="mdi:mdi-plus"></v-btn>
                <v-btn icon>
                    <img width="24" src="storage/icons/member.svg" alt="" />
                </v-btn>
            </template>
        </v-app-bar>
        <v-navigation-drawer :width="220" v-model="drawer" class="py-3">
            <v-list-item
                link
                @click="goToRoute('/home')"
                title="Home"
                class="mb-3 px-6"
            >
                <template v-slot:prepend>
                    <img
                        src="storage/icons/home.svg"
                        width="24"
                        alt=""
                        class="mr-5"
                    />
                </template>
            </v-list-item>
            <v-list-item link title="History" class="mb-3 px-6">
                <template v-slot:prepend>
                    <img
                        src="storage/icons/history.svg"
                        width="24"
                        alt=""
                        class="mr-5"
                    />
                </template>
            </v-list-item>
            <v-divider
                style="border-bottom: 1px solid gray"
                class="mb-3"
            ></v-divider>
            <v-list-item
                link
                @click="goToRoute('/lists')"
                title="Lists"
                class="px-6 mb-3"
            >
                <template v-slot:prepend>
                    <img
                        src="storage/icons/list.svg"
                        width="24"
                        alt=""
                        class="mr-5"
                    />
                </template>
                <template v-slot:append>
                    <v-icon icon="mdi:mdi-chevron-right"></v-icon>
                </template>
            </v-list-item>
            <v-divider
                class="mb-3"
                style="border-bottom: 1px solid gray"
            ></v-divider>
            <v-list-item
                link
                @click="goToRoute('/setting')"
                title="Settings"
                class="px-6"
            >
                <template v-slot:prepend>
                    <img
                        src="storage/icons/setting.svg"
                        width="24"
                        alt=""
                        class="mr-5"
                    />
                </template>
            </v-list-item>
        </v-navigation-drawer>

        <!-- <v-layout> -->
        <v-main>
            <v-layout class="h-100">
                <slot></slot>
            </v-layout>
        </v-main>
        <!-- </v-layout> -->
    </v-app>
</template>
<script>
import { usePage } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";
import { ref, onMounted, watchEffect } from "vue";

export default {
    setup() {
        function goToRoute(route) {
            window.location.pathname = route;
        }

        const page = ref("Home");
        const pageName = ref(page);

        onMounted(() => {
            // Set initial page value based on the current URL
            updatePageFromUrl();
        });

        watchEffect(() => {
            // Watch for changes in the URL and update the page accordingly
            updatePageFromUrl();
        });

        function updatePageFromUrl() {
            const route = window.location.pathname;
            if (route === "/home") {
                pageName.value = "Home";
            } else if (route === "/lists") {
                pageName.value = "Lists";
            } else if (route === "/setting") {
                pageName.value = "Settings";
            }
        }

        return { page, goToRoute };
    },
    data() {
        return {
            drawer: null,
        };
    },
};
</script>
<style lang=""></style>
