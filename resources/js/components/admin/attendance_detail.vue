<template lang="">
    <h1 class="text-3xl font-semibold mb-8">Attendance Log</h1>
    <v-tabs
        v-model="attendance"
        class="mb-5"
        style="border-bottom: 1px solid #d9d9d9; height: 49px"
    >
        <div class="w-full flex justify-between items-center">
            <div>
                <v-tab value="daily" class="text-none" style="font-weight: 600"
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
            <div class="flex justify-between items-center flex-wrap">
                <div class="md:flex items-center flex-wrap">
                    <div
                        class="rounded-md flex w-fit"
                        style="border: 1.5px solid black"
                    >
                        <v-btn flat icon="mdi:mdi-arrow-left"></v-btn>
                        <div
                            class="h-full border-x-[1.5px] border-black py-3 px-2 font-semibold"
                        >
                            08/10/2023
                        </div>
                        <v-btn flat icon="mdi:mdi-arrow-right"></v-btn>
                    </div>

                    <form class="my-3 sm:mt-3 sm:my-0 md:my-0 md:mx-5 flex">
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
                        style="background: #2c6bac; border: 1.5px solid black"
                    >
                        Export to Excel
                    </button>
                </div>
            </div>
            <v-table
                class="mt-2"
                style="border: 1.5px solid #c4c4c4; border-radius: 6px"
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
</template>
<script>
export default {
    data: () => ({
        attendance: null,
    }),
};
</script>
<style lang=""></style>
