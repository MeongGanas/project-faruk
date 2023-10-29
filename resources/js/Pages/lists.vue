<template lang="">
    <div class="w-full pa-5 flex flex-wrap gap-4">
        <v-card class="pb-5" width="240" height="240">
            <v-img
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="150px"
                cover
            ></v-img>

            <v-card-title
                link
                @click="detail"
                class="underline cursor-pointer"
                style="font-weight: 600"
                >List 1</v-card-title
            >

            <div class="flex items-center justify-end px-4">
                <button>
                    <img
                        src="../../../public/storage/icons/setting.svg"
                        alt=""
                        width="24"
                    />
                </button>
            </div>
        </v-card>
        <v-card class="pb-5" width="240" height="240">
            <v-img
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="150px"
                cover
            ></v-img>

            <v-card-title
                link
                class="underline cursor-pointer"
                style="font-weight: 600"
            >
                <div class="flex items-center justify-between">
                    <h1>List 2</h1>
                    <button>
                        <img
                            src="../../../public/storage/icons/more.svg"
                            alt=""
                            width="24"
                        />
                    </button>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="pb-5" width="240" height="240">
            <v-img
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="150px"
                cover
            ></v-img>

            <v-card-title
                link
                class="underline cursor-pointer"
                style="font-weight: 600"
            >
                <div class="flex items-center justify-between">
                    <h1>List 2</h1>
                    <button>
                        <img
                            src="../../../public/storage/icons/more.svg"
                            alt=""
                            width="24"
                        />
                    </button>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="pb-5" width="240" height="240">
            <v-img
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="150px"
                cover
            ></v-img>

            <v-card-title
                link
                class="underline cursor-pointer"
                style="font-weight: 600"
            >
                <div class="flex items-center justify-between">
                    <h1>List 2</h1>
                    <button>
                        <img
                            src="../../../public/storage/icons/more.svg"
                            alt=""
                            width="24"
                        />
                    </button>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="pb-5" width="240" height="240">
            <v-img
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="150px"
                cover
            ></v-img>

            <v-card-title
                link
                class="underline cursor-pointer"
                style="font-weight: 600"
            >
                <div class="flex items-center justify-between">
                    <h1>List 2</h1>
                    <button>
                        <img
                            src="../../../public/storage/icons/more.svg"
                            alt=""
                            width="24"
                        />
                    </button>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="pb-5" width="240" height="240">
            <v-img
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="150px"
                cover
            ></v-img>

            <v-card-title
                link
                class="underline cursor-pointer"
                style="font-weight: 600"
            >
                <div class="flex items-center justify-between">
                    <h1>List 2</h1>
                    <button>
                        <img
                            src="../../../public/storage/icons/more.svg"
                            alt=""
                            width="24"
                        />
                    </button>
                </div>
            </v-card-title>
        </v-card>
    </div>
</template>
<script>
import layout from "@/layout/layout.vue";
import { router } from "@inertiajs/vue3";
export default {
    layout: layout,
    setup() {
        function detail() {
            router.visit("/detailList");
        }

        return { detail };
    },
};
</script>
<style lang=""></style>
