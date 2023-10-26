<template lang="">
    <div class="h-100 w-100 flex justify-center align-center flex-col">
        <img src="storage/icons/shape.svg" width="400" />
        <h5 class="py-5 font-semibold">
            Feels kind of empty here, let's change that
        </h5>
        <div class="w-100 flex gap-5 justify-center pa-5">
            <v-btn
                variant="outlined"
                size="x-large"
                class="text-none text-subtitle-1"
                style="
                    max-width: 50%;
                    background: #2c6bac;
                    color: #ffff;
                    border: 1.5px solid black;
                    border-radius: 10px;
                "
                >Create an absentee</v-btn
            >
            <v-btn
                variant="outlined"
                size="x-large"
                class="text-none text-subtitle-1"
                style="
                    max-width: 50%;
                    background: #2c6bac;
                    color: #ffff;
                    border: 1.5px solid black;
                    border-radius: 10px;
                "
                >Join an absentee</v-btn
            >
        </div>
    </div>
</template>
<script>
import layout from "@/layout/layout.vue";
export default {
    layout: layout,
};
</script>
<style lang=""></style>
