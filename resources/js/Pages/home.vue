<template lang="">
    <div class="h-100 w-100 flex justify-center align-center flex-col">
        <img src="storage/icons/shape.svg" width="300" />
        <h5 class="py-5 font-semibold">
            Feels kind of empty here, let's change that
        </h5>
        <div class="w-100 flex flex-wrap gap-8 justify-center pa-5">
            <v-btn
                variant="outlined"
                size="x-large"
                class="text-none text-body-1"
                style="
                    max-width: 50%;
                    background: #2c6bac;
                    color: #ffff;
                    border: 1.5px solid black;
                    border-radius: 10px;
                "
                @click="createDialog = true"
                >Create an absentee</v-btn
            >
            <v-btn
                variant="outlined"
                size="x-large"
                class="text-none text-body-1"
                style="
                    max-width: 50%;
                    background: #2c6bac;
                    color: #ffff;
                    border: 1.5px solid black;
                    border-radius: 10px;
                "
                @click="joinDialog = true"
                >Join an absentee</v-btn
            >
        </div>
    </div>

    <v-dialog v-model="createDialog">
        <div class="w-full flex justify-center">
            <v-card class="px-10 pt-10 pb-5 w-[40%] min-w-[350px]">
                <v-form @submit.prevent="join">
                    <h1 class="font-semibold mb-5 text-lg">
                        Create an absentee list
                    </h1>
                    <label for="name" class="block font-semibold mb-1"
                        >List name (required)</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-4"
                        style="border: 1.5px solid black"
                        type="text"
                        name="name"
                        id="name"
                        v-model="createData.name"
                    />

                    <label for="name" class="block font-semibold mb-1"
                        >Owner name (optional)</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-3"
                        style="border: 1.5px solid black"
                        type="text"
                        name="name"
                        id="name"
                        v-model="createData.ownerName"
                    />
                    <div class="action flex justify-end">
                        <v-btn
                            flat
                            class="text-none"
                            style="font-weight: 600"
                            @click="createDialog = false"
                            >Cancel</v-btn
                        >
                        <v-btn flat class="text-none" style="font-weight: 600"
                            >Join</v-btn
                        >
                    </div>
                </v-form>
            </v-card>
        </div>
    </v-dialog>

    <v-dialog v-model="joinDialog">
        <div class="w-full flex justify-center">
            <v-card class="px-10 pt-10 pb-5 w-[40%] min-w-[350px]">
                <v-form @submit.prevent="join">
                    <h1 class="font-semibold mb-5 text-lg">
                        Join an absentee list
                    </h1>
                    <label for="code" class="block font-semibold mb-1"
                        >List code</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-4"
                        style="border: 1.5px solid black"
                        type="text"
                        name="code"
                        id="code"
                        v-model="joinData.code"
                    />

                    <label for="name" class="block font-semibold mb-1"
                        >Display name (optional)</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-3"
                        style="border: 1.5px solid black"
                        type="text"
                        name="name"
                        id="name"
                        v-model="joinData.displayName"
                    />
                    <div class="action flex justify-end">
                        <v-btn
                            flat
                            class="text-none"
                            style="font-weight: 600"
                            @click="joinDialog = false"
                            >Cancel</v-btn
                        >
                        <v-btn flat class="text-none" style="font-weight: 600"
                            >Join</v-btn
                        >
                    </div>
                </v-form>
            </v-card>
        </div>
    </v-dialog>
</template>
<script>
import layout from "@/layout/layout.vue";
import { reactive, ref } from "vue";
export default {
    layout: layout,
    setup() {
        const createDialog = ref(false);
        const joinDialog = ref(false);

        const joinData = reactive({
            code: "",
            displayName: null,
        });
        const createData = reactive({
            name: "",
            owner: null,
        });

        function join() {
            console.log(joinData);
        }
        function create() {
            console.log(joinData);
        }

        return { joinDialog, createDialog, joinData, createData, join, create };
    },
};
</script>
<style lang=""></style>
