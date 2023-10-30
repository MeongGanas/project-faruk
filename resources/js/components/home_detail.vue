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
                        <span class="text-[#2C6BAC] underline cursor-pointer"
                            >make one</span
                        >
                    </h4>
                </div>
            </v-card-text>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style lang=""></style>
