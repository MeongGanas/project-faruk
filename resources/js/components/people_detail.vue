<template lang="">
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
</template>
<script>
export default {};
</script>
<style lang=""></style>
