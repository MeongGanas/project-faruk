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
                <HomeDetail />
            </v-window-item>
            <v-window-item value="attendance" class="pa-10">
                <AttendanceDetail />
            </v-window-item>
            <v-window-item value="people" class="pa-10">
                <PeopleDetail />
            </v-window-item>
        </v-window>
    </div>
</template>
<script>
import layout from "@/layout/layout.vue";

import HomeDetail from "@/components/admin/home_detail.vue";
import AttendanceDetail from "@/components/admin/attendance_detail.vue";
import PeopleDetail from "@/components/people_detail.vue";
export default {
    layout: layout,
    components: { HomeDetail, AttendanceDetail, PeopleDetail },
    data: () => ({
        tab: null,
    }),
};
</script>
<style lang=""></style>
