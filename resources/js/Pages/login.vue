<template lang="">
    <v-app>
        <v-main>
            <v-row class="ma-0 w-100">
                <v-col style="padding: 0px">
                    <div class="min-w-[350px] flex justify-center items-center">
                        <h1 class="absolute text-white text-6xl">Welcome!</h1>
                        <img
                            src="../../../public/storage/background.png"
                            alt=""
                            class="h-screen w-full"
                        />
                    </div>
                </v-col>
                <v-col style="padding: 0px">
                    <v-card
                        flat
                        class="h-screen d-flex justify-center min-w-[350px]"
                    >
                        <div class="py-10 min-w-[350px] max-w-[400px]">
                            <v-card-text>
                                <div class="text-center">
                                    <h1
                                        class="text-4xl font-semibold text-[#2C6BAC]"
                                    >
                                        Present
                                    </h1>
                                    <h3 class="text-2xl mt-3 font-semibold">
                                        Let's get you started
                                    </h3>
                                </div>
                            </v-card-text>
                            <v-card-text>
                                <div class="text-center">
                                    <v-btn
                                        variant="outlined"
                                        class="text-none"
                                        style="
                                            width: 100%;
                                            background: #2c6bac;
                                            color: #ffff;
                                            border: 1.5px solid black;
                                            border-radius: 10px;
                                            font-weight: 600;
                                        "
                                        size="x-large"
                                        @click="login_dialog = true"
                                        >Login</v-btn
                                    >
                                    <v-btn
                                        variant="outlined"
                                        class="text-none mt-4"
                                        size="x-large"
                                        style="
                                            width: 100%;
                                            border: 1.5px solid black;
                                            border-radius: 10px;
                                            font-weight: 600;
                                        "
                                        @click="register_dialog = true"
                                        >Register</v-btn
                                    >
                                </div>
                            </v-card-text>
                            <v-card-text>
                                <div
                                    class="flex items-center justify-center text-center"
                                >
                                    <span
                                        class="bg-black w-full h-[1px]"
                                    ></span>
                                    <h6 class="font-semibold min-w-fit mx-4">
                                        or login with
                                    </h6>
                                    <span
                                        class="bg-black w-full h-[1px]"
                                    ></span>
                                </div>
                            </v-card-text>
                            <v-card-text>
                                <div class="text-center">
                                    <v-btn
                                        variant="outlined"
                                        size="x-large"
                                        style="
                                            width: 100%;
                                            border: 1.5px solid black;
                                            border-radius: 10px;
                                            font-weight: 600;
                                        "
                                    >
                                        <v-icon left>
                                            <img
                                                src="storage/icons/google.svg"
                                                alt="Google Icon"
                                            />
                                        </v-icon>
                                        Google</v-btn
                                    >
                                </div>
                            </v-card-text>
                        </div>
                    </v-card>
                </v-col>
            </v-row>
        </v-main>
    </v-app>

    <v-dialog v-model="login_dialog">
        <v-sheet class="w-100 h-screen p-4">
            <v-btn
                flat
                prepend-icon="mdi:mdi-window-close"
                class="w-10 absolute"
                size="medium"
                style="margin-left: -8px"
                @click="login_dialog = false"
            ></v-btn>
            <v-form
                @submit.prevent="login"
                class="d-flex justify-center align-center h-[90%]"
            >
                <v-card flat class="px-6 py-8" width="344">
                    <v-card-title primary-title class="text-center">
                        <div>
                            <h1 class="text-2xl mb-5 font-semibold">Login</h1>
                        </div>
                    </v-card-title>

                    <label for="email" class="block font-semibold mb-1"
                        >Email</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-4"
                        style="border: 1.5px solid black"
                        type="email"
                        name="email"
                        id="email"
                        v-model="loginData.email"
                    />

                    <label for="password" class="block font-semibold mb-1"
                        >Password</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-1"
                        style="border: 1.5px solid black"
                        type="password"
                        name="password"
                        id="password"
                        v-model="loginData.password"
                    />

                    <p class="mb-5 text-[12px] flex justify-end font-semibold">
                        Forgot your password?
                        <button
                            class="text-blue-600 underline ml-1"
                            @click="openDaftar"
                        >
                            click here
                        </button>
                    </p>
                    <v-btn
                        variant="outlined"
                        class="text-none"
                        style="
                            width: 100%;
                            background: #2c6bac;
                            color: #ffff;
                            border: 1.5px solid black;
                            border-radius: 10px;
                            font-weight: 600;
                        "
                        size="x-large"
                        type="submit"
                        >Login
                    </v-btn>
                </v-card>
            </v-form>
        </v-sheet>
    </v-dialog>

    <v-dialog v-model="register_dialog">
        <v-sheet class="w-100 h-screen p-4">
            <v-btn
                flat
                prepend-icon="mdi:mdi-window-close"
                class="w-10 absolute"
                size="small"
                style="margin-left: -8px"
                @click="register_dialog = false"
            ></v-btn>
            <v-form
                @submit.prevent="register"
                class="d-flex justify-center align-center h-[90%]"
            >
                <v-card flat class="px-6 py-8" width="344">
                    <v-card-title primary-title class="text-center">
                        <div>
                            <h1 class="text-2xl mb-5 font-semibold">
                                Register
                            </h1>
                        </div>
                    </v-card-title>

                    <label for="username" class="block font-semibold mb-1"
                        >Username</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-4"
                        style="border: 1.5px solid black"
                        type="text"
                        name="username"
                        id="username"
                        v-model="registerData.name"
                    />

                    <label for="email" class="block font-semibold mb-1"
                        >Email</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg mb-4"
                        style="border: 1.5px solid black"
                        type="email"
                        name="email"
                        id="email"
                        v-model="registerData.email"
                    />

                    <label for="password" class="block font-semibold mb-1"
                        >Password</label
                    >
                    <input
                        class="w-full px-4 py-3 rounded-lg"
                        style="border: 1.5px solid black"
                        type="password"
                        name="password"
                        id="password"
                        v-model="registerData.password"
                    />
                    <v-btn
                        variant="outlined"
                        class="text-none mt-7"
                        style="
                            width: 100%;
                            background: #2c6bac;
                            color: #ffff;
                            border: 1.5px solid black;
                            border-radius: 10px;
                            font-weight: 600;
                        "
                        size="x-large"
                        type="submit"
                        >Register</v-btn
                    >
                </v-card>
            </v-form>
        </v-sheet>
    </v-dialog>

    <v-dialog v-model="messageDialog">
        <v-sheet
            elevation="12"
            max-width="600"
            rounded="lg"
            width="100%"
            class="pa-4 text-center mx-auto"
        >
            <v-icon
                class="mb-5"
                color="error"
                icon="error"
                size="112"
                v-if="isError"
            ></v-icon>
            <v-icon
                class="mb-5"
                color="#2c6bac"
                icon="check"
                size="112"
                v-else
            ></v-icon>

            <h2
                class="text-h5 mb-6"
                v-if="isError && typeof message === 'object'"
                v-for="error in message"
            >
                {{ error[0] }}
            </h2>
            <h2 class="text-h5 mb-6" v-else>{{ message }}</h2>

            <div class="text-end">
                <v-btn
                    class="text-none"
                    color="error"
                    rounded
                    variant="flat"
                    width="90"
                    @click="closeDialog"
                    v-if="isError"
                >
                    Close
                </v-btn>
                <v-btn
                    class="text-none"
                    color="#2c6bac"
                    rounded
                    variant="flat"
                    width="90"
                    @click="closeDialog"
                    v-else
                >
                    Close
                </v-btn>
            </div>
        </v-sheet>
    </v-dialog>
</template>
<script>
import { router } from "@inertiajs/vue3";
import axios from "axios";
import { reactive, ref } from "vue";

export default {
    setup() {
        const login_dialog = ref(false);
        const register_dialog = ref(false);
        const messageDialog = ref(false);

        const loginData = reactive({
            email: "",
            password: "",
        });

        const registerData = reactive({
            name: "",
            email: "",
            password: "",
        });

        const message = ref();
        const isError = ref(false);

        function login() {
            const loginForm = new FormData();
            loginForm.append("email", loginData.email);
            loginForm.append("password", loginData.password);

            axios
                .post("/login", loginForm)
                .then((res) => {
                    isError.value = false;
                    message.value = res.data.message;
                    messageDialog.value = true;
                    setTimeout(() => {
                        router.visit("/home");
                    }, 1000);
                })
                .catch((err) => {
                    isError.value = true;
                    message.value = err.response.data.message;
                    messageDialog.value = true;
                });
        }

        function register() {
            const registerForm = new FormData();
            registerForm.append("name", registerData.name);
            registerForm.append("email", registerData.email);
            registerForm.append("password", registerData.password);

            axios
                .post("/register", registerForm)
                .then((res) => {
                    isError.value = false;
                    message.value = res.data.message;
                    messageDialog.value = true;
                })
                .catch((err) => {
                    isError.value = true;
                    message.value = err.response.data.errors;
                    messageDialog.value = true;
                });
        }

        function closeDialog() {
            messageDialog.value = false;
        }

        return {
            loginData,
            registerData,
            message,
            isError,
            login_dialog,
            register_dialog,
            messageDialog,
            login,
            register,
            closeDialog,
        };
    },
};
</script>
<style></style>
