<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue';

const currencies = ref([]);

const fetchCurrencies = () => {
    axios
        .get('http://localhost:8000/api/currencies')
        .then(response => currencies.value = response.data);
};

onMounted(() => {
    fetchCurrencies();
});
</script>

<template>
    <div class="max-w-sm mx-auto my-12">
        <div class="p-5 bg-white border rounded-md space-y-5">
            <div>
                <label class="block mb-1 text-sm text-gray-700">Name</label>
                <input class="w-full px-3 py-2 text-sm border rounded-md" type="text" />
            </div>
            <div>
                <label class="block mb-1 text-sm text-gray-700">E-mail</label>
                <input class="w-full px-3 py-2 text-sm border rounded-md" type="email" />
            </div>
            <div>
                <label class="block mb-1 text-sm text-gray-700">Password</label>
                <input class="w-full px-3 py-2 text-sm border rounded-md" type="password" />
            </div>
            <div>
                <label class="block mb-1 text-sm text-gray-700">Verify password</label>
                <input class="w-full px-3 py-2 text-sm border rounded-md" type="password" />
            </div>
            <div>
                <label class="block mb-1 text-sm text-gray-700">Currency</label>
                <select class="w-full px-3 py-2 text-sm border rounded-md appearance-none">
                    <option v-for="currency in currencies">
                        <span v-html="currency.name + ' (' + currency.symbol + ')'"></span>
                    </option>
                </select>
            </div>
            <button class="w-full py-2.5 hover:bg-blue-600 transition text-sm bg-blue-500 text-white rounded-md">Register</button>
        </div>
        <div class="mt-4 text-center">
            <router-link class="text-sm" :to="{ name: 'login' }">Already using Budget? Log in.</router-link>
        </div>
    </div>
</template>
