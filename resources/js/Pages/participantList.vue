<template lang="">
    <div class="w-full">
        <v-tabs
            v-model="tab"
            class="px-5"
            style="border-bottom: 1px solid #d9d9d9; height: 49px"
        >
            <v-tab value="home" class="text-none" style="font-weight: 600"
                >Home</v-tab
            >
            <v-tab value="people" class="text-none" style="font-weight: 600"
                >People</v-tab
            >
        </v-tabs>
        <v-window v-model="tab">
            <v-window-item value="home" class="pa-5">
                <HomeDetail />
            </v-window-item>
            <v-window-item value="people" class="pa-10">
                <PeopleDetail />
            </v-window-item>
        </v-window>
    </div>
</template>
<script>
import layout from "@/layout/layout.vue";

import HomeDetail from "@/components/participants/home_detail.vue";
import PeopleDetail from "@/components/people_detail.vue";
export default {
    layout: layout,
    components: { HomeDetail, PeopleDetail },
    data: () => ({
        tab: null,
    }),
};
</script>
<style lang=""></style>
