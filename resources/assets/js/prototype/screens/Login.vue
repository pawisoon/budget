<script setup>
import axios from 'axios';
import { getCurrentInstance, ref } from 'vue';

const router = getCurrentInstance().proxy.$router;

const email = ref('');
const password = ref('');

const logIn = () => {
    axios
        .post('/api/log-in', { email: email.value, password: password.value })
        .then(response => {
            const json = response.data;

            if (json.token) {
                router.push('dashboard');
            }

            if (json.error) {
                alert('Unable to log in');
            }
        })
        .catch(() => {
            alert('Unable to log in');
        });
};
</script>

<template>
    <div class="max-w-sm mx-auto my-12">
        <div class="p-5 bg-white border rounded-md space-y-5">
            <div>
                <label class="block mb-1 text-sm text-gray-700">E-mail</label>
                <input class="w-full px-3 py-2 text-sm border rounded-md" type="email" v-model="email" />
            </div>
            <div>
                <label class="block mb-1 text-sm text-gray-700">Password</label>
                <input class="w-full px-3 py-2 text-sm border rounded-md" type="password" v-model="password" @keyup.enter="logIn" />
            </div>
            <button class="w-full py-2.5 hover:bg-blue-600 transition text-sm bg-blue-500 text-white rounded-md" @click="logIn">Log in</button>
        </div>
        <div class="mt-4 text-center">
            <router-link class="text-sm" :to="{ name: 'register' }">First time here? Register.</router-link>
        </div>
    </div>
</template>
