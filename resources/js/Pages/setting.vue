<template lang="">
    <div class="w-100 h-100 flex justify-center items-center">
        <v-card>
            <v-card-title>Profile</v-card-title>
            <v-card-text>
                <div>
                    <v-avatar
                        image="storage/icons/member.svg"
                        size="60"
                    ></v-avatar>
                </div>
            </v-card-text>
        </v-card>
    </div>
</template>
<script>
import layout from "@/layout/layout.vue";
export default {
    layout: layout,
};
</script>
<style lang=""></style>
