<template lang="">
    <div class="w-100 h-100 flex justify-center items-center">
        <v-card class="w-[60%] min-w-[350px] pa-3">
            <v-card-title class="mb-5"
                ><h1 class="font-semibold text-[#404040]">
                    Profile
                </h1></v-card-title
            >
            <v-card-text>
                <div class="flex items-center">
                    <v-avatar
                        image="storage/icons/member.svg"
                        size="60"
                        class="mr-5"
                        style="border: 1.5px solid black"
                    ></v-avatar>
                    <div>
                        <h1 class="font-semibold">Farrel Giovanni Jaohari</h1>
                        <v-btn
                            flat
                            class="text-none px-0"
                            style="
                                color: #2c6bac;
                                font-weight: 600;
                                text-decoration: underline;
                            "
                            >Change profile picture</v-btn
                        >
                    </div>
                </div>
            </v-card-text>
            <v-card-text>
                <div class="name mb-5">
                    <div class="flex items-center justify-between">
                        <h1 class="font-semibold text-[#404040]">Nama</h1>
                        <v-btn
                            flat
                            class="text-none px-0"
                            style="
                                color: #2c6bac;
                                font-weight: 600;
                                text-decoration: underline;
                            "
                            >Change name</v-btn
                        >
                    </div>
                    <h1 class="font-semibold">Farrel Giovanni Jaohari</h1>
                </div>
                <div class="email mb-5">
                    <div class="flex items-center justify-between">
                        <h1 class="font-semibold text-[#404040]">Email</h1>
                        <v-btn
                            flat
                            class="text-none px-0"
                            style="
                                color: #2c6bac;
                                font-weight: 600;
                                text-decoration: underline;
                            "
                            >Change email</v-btn
                        >
                    </div>
                    <h1 class="font-semibold">farreluken@gmail.com</h1>
                </div>
                <div class="password">
                    <div class="flex items-center justify-between">
                        <h1 class="font-semibold text-[#404040]">Password</h1>
                        <v-btn
                            flat
                            class="text-none px-0"
                            style="
                                color: #2c6bac;
                                font-weight: 600;
                                text-decoration: underline;
                            "
                            >Change password</v-btn
                        >
                    </div>
                </div>
            </v-card-text>
            <v-card-text>
                <div class="w-100 flex justify-end">
                    <div class="flex gap-3">
                        <v-btn
                            flat
                            class="text-none"
                            style="border: 1.5px solid black; font-weight: 600"
                            >Cancel</v-btn
                        >
                        <v-btn
                            flat
                            class="text-none px-6"
                            style="
                                background: #2c6bac;
                                border: 1.5px solid black;
                                color: white;
                                font-weight: 600;
                            "
                            >Save</v-btn
                        >
                    </div>
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
