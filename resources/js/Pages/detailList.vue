<template lang="">
    <div class="w-full">
        <v-tabs
            v-model="tab"
            class="px-5"
            style="border-bottom: 1px solid #d9d9d9; height: 49px"
        >
            <div class="w-full flex justify-between">
                <div>
                    <v-tab
                        value="home"
                        class="text-none"
                        style="font-weight: 600"
                        >Home</v-tab
                    >
                    <v-tab
                        value="attendance"
                        class="text-none"
                        style="font-weight: 600"
                        >Attendance</v-tab
                    >
                    <v-tab
                        value="people"
                        class="text-none"
                        style="font-weight: 600"
                        >People</v-tab
                    >
                </div>
                <v-btn icon flat>
                    <img width="24" src="storage/icons/setting.svg" />
                </v-btn>
            </div>
        </v-tabs>
        <v-window v-model="tab">
            <v-window-item value="home" class="pa-5">
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
                                style="
                                    background: #fff;
                                    color: black;
                                    font-weight: 600;
                                "
                            >
                                <v-icon class="mr-2">
                                    <v-img
                                        src="storage/icons/edit.svg"
                                        width="30"
                                    >
                                    </v-img> </v-icon
                                >Customize</v-btn
                            >
                        </v-card-actions>
                        <v-card-title
                            ><h1 class="text-3xl">List 1</h1></v-card-title
                        >
                    </v-img>
                </v-card>
                <div class="flex mt-5 flex-wrap">
                    <div class="w-full mb-5 md:w-1/3 md:pr-5 md:mb-0">
                        <div
                            class="w-full rounded-md"
                            style="border: 1.5px solid #d9d9d9"
                        >
                            <v-card-title
                                class="d-flex align-center justify-space-between"
                            >
                                <h1 class="font-semibold">List code</h1>
                                <v-btn icon flat>
                                    <img
                                        width="24"
                                        src="storage/icons/more.svg"
                                    />
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
                                <h1 class="font-semibold text-2xl mb-1">
                                    Attendance Log
                                </h1>
                                <h4 class="font-semibold text-[16px]">
                                    Fri, 28 aug 2023
                                </h4>
                            </div>
                            <v-btn icon="mdi:mdi-arrow-right" flat></v-btn>
                        </div>
                        <v-card-text>
                            <div
                                class="flex flex-col justify-center items-center py-10"
                            >
                                <v-img
                                    src="storage/icons/shape_2.svg"
                                    width="300"
                                ></v-img>
                                <h4 class="font-semibold text-[16px]">
                                    No absentee hour listed,
                                    <span
                                        class="text-[#2C6BAC] underline cursor-pointer"
                                        >make one</span
                                    >
                                </h4>
                            </div>
                        </v-card-text>
                    </div>
                </div>
            </v-window-item>
            <v-window-item value="attendance" class="pa-10">
                <h1 class="text-3xl font-semibold mb-8">Attendance Log</h1>
                <v-tabs
                    v-model="attendance"
                    class="mb-5"
                    style="border-bottom: 1px solid #d9d9d9; height: 49px"
                >
                    <div class="w-full flex justify-between items-center">
                        <div>
                            <v-tab
                                value="daily"
                                class="text-none"
                                style="font-weight: 600"
                                >Daily</v-tab
                            >
                            <v-tab
                                value="monthly"
                                class="text-none"
                                style="font-weight: 600"
                                >Monthly</v-tab
                            >
                        </div>
                        <v-btn
                            append-icon="mdi:mdi-chevron-down"
                            class="text-none"
                            style="font-weight: 600"
                            flat
                        >
                            Shift 1
                        </v-btn>
                    </div>
                </v-tabs>
                <v-window v-model="attendance">
                    <v-window-item value="daily">
                        <div
                            class="flex justify-between items-center flex-wrap"
                        >
                            <div class="md:flex items-center flex-wrap">
                                <div
                                    class="rounded-md flex w-fit"
                                    style="border: 1.5px solid black"
                                >
                                    <v-btn
                                        flat
                                        icon="mdi:mdi-arrow-left"
                                    ></v-btn>
                                    <div
                                        class="h-full border-x-[1.5px] border-black py-3 px-2 font-semibold"
                                    >
                                        08/10/2023
                                    </div>
                                    <v-btn
                                        flat
                                        icon="mdi:mdi-arrow-right"
                                    ></v-btn>
                                </div>

                                <form
                                    class="my-3 sm:mt-3 sm:my-0 md:my-0 md:mx-5 flex"
                                >
                                    <label
                                        for="default-search"
                                        class="mb-2 text-sm font-medium text-gray-900 sr-only"
                                        >Search</label
                                    >
                                    <div class="relative mr-5">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                                        >
                                            <svg
                                                class="w-4 h-4 text-black"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                                                />
                                            </svg>
                                        </div>
                                        <input
                                            type="search"
                                            id="default-search"
                                            class="block w-full p-[14px] pl-10 text-sm text-gray-900 border border-black rounded-lg bg-gray-50"
                                            placeholder="Search Name"
                                            required
                                        />
                                    </div>
                                    <button
                                        class="rounded-md text-white p-2"
                                        style="
                                            background: #2c6bac;
                                            border: 1.5px solid black;
                                        "
                                    >
                                        <img
                                            src="storage/icons/filter.svg"
                                            width="30"
                                            alt=""
                                        />
                                    </button>
                                </form>
                            </div>
                            <div>
                                <button
                                    class="rounded-md text-white py-3 px-5"
                                    style="
                                        background: #2c6bac;
                                        border: 1.5px solid black;
                                    "
                                >
                                    Export to Excel
                                </button>
                            </div>
                        </div>
                        <v-table
                            class="mt-2"
                            style="
                                border: 1.5px solid #c4c4c4;
                                border-radius: 6px;
                            "
                        >
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Name</th>
                                    <th class="text-center">Check-in</th>
                                    <th class="text-center">Check-out</th>
                                    <th class="text-center">Actual time</th>
                                    <th class="text-center">Total Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Farrel Giovanni</td>
                                    <td class="text-center">08:30</td>
                                    <td class="text-center">10:00</td>
                                    <td class="text-center">1:30 Hr</td>
                                    <td class="text-center">1:30 Hr</td>
                                </tr>
                            </tbody>
                        </v-table>
                    </v-window-item>
                </v-window>
            </v-window-item>
            <v-window-item value="people" class="pa-10">
                <h1 class="font-semibold text-2xl">List of People</h1>
                <div class="flex items-center justify-between">
                    <form class="my-3 sm:mt-3 sm:my-0 md:my-0 flex">
                        <label
                            for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only"
                            >Search</label
                        >
                        <div class="relative mr-5">
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                            >
                                <svg
                                    class="w-4 h-4 text-black"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                                    />
                                </svg>
                            </div>
                            <input
                                type="search"
                                id="default-search"
                                class="block w-full p-[14px] pl-10 text-sm text-gray-900 border border-black rounded-lg bg-gray-50"
                                placeholder="Search Name"
                                required
                            />
                        </div>
                    </form>
                    <div class="total-people">
                        <h1 class="font-semibold">1 People</h1>
                    </div>
                </div>
                <v-table
                    class="mt-2"
                    style="border: 1.5px solid #c4c4c4; border-radius: 6px"
                >
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Photo</th>
                            <th class="text-left">Name</th>
                            <th class="text-center">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-left">
                                <v-avatar
                                    image="storage/icons/member.svg"
                                    size="30"
                                    class="mr-5"
                                    style="border: 1.5px solid black"
                                ></v-avatar>
                            </td>
                            <td class="text-left">Farrel Giovanni</td>
                            <td class="text-center">Admin</td>
                            <td class="text-center">
                                <v-btn icon flat
                                    ><img
                                        src="../../../public/storage/icons/more.svg"
                                        alt=""
                                /></v-btn>
                            </td>
                        </tr>
                    </tbody>
                </v-table>
            </v-window-item>
        </v-window>
    </div>
</template>
<script>
import layout from "@/layout/layout.vue";
export default {
    layout: layout,
    data: () => ({
        tab: null,
        attendance: null,
    }),
};
</script>
<style lang=""></style>
