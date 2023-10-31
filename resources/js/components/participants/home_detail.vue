<template lang="">
    <v-card class="mx-auto w-100">
        <v-img
            class="text-white pa-4"
            src="storage/background.png"
            max-height="700"
            cover
        >
            <v-card-title
                ><h1 class="text-4xl font-semibold tracking-wider">
                    List 1
                </h1></v-card-title
            >
            <div class="h-full justify-center items-center">
                <v-card-text class="text-center py-16">
                    <h1 class="text-6xl font-semibold tracking-wider">08:30</h1>
                    <p class="font-semibold text-lg mt-4 tracking-wider">
                        Fri, 18 sep 2023
                    </p>
                </v-card-text>
                <v-card-text>
                    <v-card>
                        <div
                            class="text-center py-5 border-b-[1.5px] border-[#D9D9D9]"
                        >
                            <h4
                                class="font-semibold text-lg mb-5 tracking-wider"
                            >
                                Friday's schedule
                            </h4>
                            <h2 class="text-2xl font-semibold tracking-wider">
                                08:30 - 09:00
                            </h2>
                        </div>
                        <div class="pa-5 flex flex-wrap gap-5 justify-center">
                            <v-btn
                                flat
                                class="text-none"
                                size="x-large"
                                style="
                                    width: 200px;
                                    border: 1.5px solid black;
                                    background: #0e2a47;
                                    color: white;
                                    border-radius: 8px;
                                "
                                @click="CheckinDialog = true"
                                >Check-In</v-btn
                            >
                            <v-btn
                                flat
                                class="text-none"
                                size="x-large"
                                style="
                                    width: 200px;
                                    border: 1.5px solid black;
                                    font-weight: 600;
                                    border-radius: 8px;
                                "
                                >Permission</v-btn
                            >
                        </div>
                    </v-card>
                </v-card-text>
            </div>
        </v-img>
    </v-card>

    <v-dialog v-model="CheckinDialog">
        <div class="w-full flex justify-center">
            <v-card class="w-[40%] min-w-[350px]">
                <div
                    class="flex items-center p-2 border-b-[1.5px] border-[#D9D9D9]"
                >
                    <v-btn
                        icon="mdi:mdi-close"
                        class="font-weight-medium"
                        flat
                        @click="CheckinDialog = false"
                    ></v-btn>
                    <h1 class="font-semibold">Check-In</h1>
                </div>
                <v-img src="storage/background.png" height="200" cover></v-img>
                <div class="border-t-[1.5px] border-[#D9D9D9] px-5">
                    <v-tabs v-model="selection" class="mb-5">
                        <v-tab
                            value="location"
                            class="text-none"
                            style="font-weight: 600"
                            >Location</v-tab
                        >
                        <v-tab
                            value="shift"
                            class="text-none"
                            style="font-weight: 600"
                            >Shift</v-tab
                        >
                    </v-tabs>
                    <v-window>
                        <v-window-item class="pb-5">
                            <div>
                                <div
                                    class="flex items-center pr-4 border-[1.5px] border-black rounded-[8px] mb-4"
                                >
                                    <label
                                        for="bordered-radio-1"
                                        class="w-full py-4 ml-4 text-sm font-medium text-gray-900"
                                    >
                                        <div class="flex items-center">
                                            <img
                                                src="../../../../public/storage/icons/location_2.svg"
                                                width="30"
                                                alt=""
                                                class="mr-3"
                                            />
                                            <div>
                                                <h1 class="font-semibold">
                                                    Main
                                                </h1>
                                                <p class="font-semibold">
                                                    Btp Blok A 235
                                                </p>
                                            </div>
                                        </div>
                                    </label>
                                    <input
                                        id="bordered-radio-1"
                                        type="radio"
                                        value=""
                                        name="bordered-radio"
                                        class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                    />
                                </div>
                                <v-btn
                                    flat
                                    class="text-none mr-5"
                                    size="x-large"
                                    style="
                                        width: 100%;
                                        border: 1.5px solid black;
                                        background: #2c6bac;
                                        color: white;
                                        border-radius: 8px;
                                    "
                                    @click="CheckinDialog = true"
                                    >Check-In</v-btn
                                >
                            </div>
                        </v-window-item>
                    </v-window>
                </div>
            </v-card>
        </div>
    </v-dialog>
</template>
<script>
import { reactive, ref } from "vue";

export default {
    setup() {
        const CheckinDialog = ref(false);

        const checkinData = reactive({
            location: "",
            shift: "",
        });

        return { CheckinDialog, checkinData };
    },
    data: () => ({
        selection: null,
    }),
};
</script>
<style></style>
