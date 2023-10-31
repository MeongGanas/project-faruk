<template lang="">
    <v-card class="w-100" flat style="border: 1.5px solid #d9d9d9">
        <v-img
            class="align-end text-white pa-3"
            height="200"
            src="storage/background.png"
            cover
        >
            <v-card-actions
                class="w-100 flex justify-end"
                style="position: absolute; top: 10px; right: 10px"
            >
                <v-btn
                    class="text-none px-3"
                    style="background: #fff; color: black; font-weight: 600"
                >
                    <v-icon class="mr-2">
                        <v-img src="storage/icons/edit.svg" width="30">
                        </v-img> </v-icon
                    >Customize</v-btn
                >
            </v-card-actions>
            <v-card-title><h1 class="text-3xl">List 1</h1></v-card-title>
        </v-img>
    </v-card>
    <div class="flex mt-5 flex-wrap">
        <div class="w-full mb-5 md:w-1/3 md:pr-5 md:mb-0">
            <div class="w-full rounded-md" style="border: 1.5px solid #d9d9d9">
                <v-card-title class="d-flex align-center justify-space-between">
                    <h1 class="font-semibold">List code</h1>
                    <v-btn icon flat>
                        <img width="24" src="storage/icons/more.svg" />
                    </v-btn>
                </v-card-title>
                <v-card-title>
                    <h1 class="text-3xl font-bold">A9B58Z</h1>
                </v-card-title>
            </div>
        </div>
        <div
            class="w-full md:w-2/3 rounded-md"
            style="border: 1.5px solid #d9d9d9"
        >
            <div
                class="flex align-center justify-between p-5"
                style="border-bottom: 1.5px solid #d9d9d9"
            >
                <div>
                    <h1 class="font-semibold text-2xl mb-1">Attendance Log</h1>
                    <h4 class="font-semibold text-[16px]">Fri, 28 aug 2023</h4>
                </div>
                <v-btn icon="mdi:mdi-arrow-right" flat></v-btn>
            </div>
            <v-card-text>
                <div class="flex flex-col justify-center items-center py-10">
                    <v-img src="storage/icons/shape_2.svg" width="300"></v-img>
                    <h4 class="font-semibold text-[16px]">
                        No absentee hour listed,
                        <span
                            @click="createDialog = true"
                            class="text-[#2C6BAC] underline cursor-pointer"
                            >make one</span
                        >
                    </h4>
                </div>
            </v-card-text>
        </div>
    </div>

    <v-dialog v-model="createDialog">
        <div class="w-100 flex justify-center">
            <v-card class="w-[400px] pa-5">
                <v-card-title>
                    <h1 class="font-semibold text-lg">Add an absentee hour</h1>
                </v-card-title>
                <v-card-text class="mt-3">
                    <v-form>
                        <label for="name" class="block font-semibold mb-1"
                            >Absentee name</label
                        >
                        <input
                            class="w-full px-4 py-3 rounded-lg mb-4"
                            style="border: 1.5px solid black"
                            type="text"
                            name="name"
                            id="name"
                            v-model="absenteeData.name"
                        />
                        <div class="flex gap-5">
                            <div class="w-1/2">
                                <label
                                    for="date"
                                    class="block font-semibold mb-1"
                                    >Date</label
                                >
                                <input
                                    class="w-full px-4 py-3 rounded-lg mb-4"
                                    style="border: 1.5px solid black"
                                    type="date"
                                    name="date"
                                    id="date"
                                    v-model="absenteeData.date"
                                />
                            </div>
                            <div class="w-1/2">
                                <label
                                    for="time"
                                    class="block font-semibold mb-1"
                                    >Time</label
                                >
                                <input
                                    class="w-full px-4 py-3 rounded-lg mb-4"
                                    style="border: 1.5px solid black"
                                    type="time"
                                    name="time"
                                    id="time"
                                    v-model="absenteeData.time"
                                />
                            </div>
                        </div>
                        <v-menu>
                            <template v-slot:activator="{ props }">
                                <v-btn
                                    class="text-none"
                                    flat
                                    v-bind="props"
                                    append-icon="mdi:mdi-chevron-right"
                                    style="
                                        border-bottom: 1.5px solid black;
                                        font-weight: 600;
                                    "
                                >
                                    {{ isRepeat }}
                                </v-btn>
                            </template>

                            <v-list>
                                <v-list-item @click="isRepeat = 'No repeat'">
                                    <v-list-item-title>
                                        No repeat
                                    </v-list-item-title>
                                </v-list-item>
                                <v-list-item @click="isRepeat = 'Repeat'">
                                    <v-list-item-title>
                                        Repeat
                                    </v-list-item-title>
                                </v-list-item>
                            </v-list>
                        </v-menu>
                        <label
                            for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only"
                            >Search</label
                        >
                        <div class="relative mt-5">
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <rect
                                        width="24"
                                        height="24"
                                        fill="url(#pattern0)"
                                    />
                                    <defs>
                                        <pattern
                                            id="pattern0"
                                            patternContentUnits="objectBoundingBox"
                                            width="1"
                                            height="1"
                                        >
                                            <use
                                                xlink:href="#image0_17_233"
                                                transform="scale(0.00390625)"
                                            />
                                        </pattern>
                                        <image
                                            id="image0_17_233"
                                            width="256"
                                            height="256"
                                            xlink:href="data:image/png;base64,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"
                                        />
                                    </defs>
                                </svg>
                            </div>
                            <input
                                type="search"
                                id="default-search"
                                class="block w-full p-[14px] pl-10 text-sm text-gray-900 border border-black rounded-lg bg-gray-50"
                                placeholder="Location"
                                required
                            />
                        </div>
                        <div class="w-100 mt-5 flex justify-end">
                            <div class="flex gap-3">
                                <v-btn
                                    flat
                                    class="text-none"
                                    style="
                                        border: 1.5px solid black;
                                        font-weight: 600;
                                    "
                                    @click="createDialog = false"
                                    >Cancel</v-btn
                                >
                                <v-btn
                                    flat
                                    class="text-none px-4"
                                    style="
                                        background: #2c6bac;
                                        border: 1.5px solid black;
                                        color: white;
                                        font-weight: 600;
                                    "
                                    >Create</v-btn
                                >
                            </div>
                        </div>
                    </v-form>
                </v-card-text>
            </v-card>
        </div>
    </v-dialog>
</template>
<script>
import { reactive, ref } from "vue";

export default {
    setup() {
        const createDialog = ref(false);

        const absenteeData = reactive({
            name: "",
            date: "",
            time: "",
            location: "",
        });

        const isRepeat = ref("No repeat");
        return { createDialog, absenteeData, isRepeat };
    },
};
</script>
<style lang=""></style>
