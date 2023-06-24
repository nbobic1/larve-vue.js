<script setup>
import { ref } from "vue";
const count = ref(0);
</script>

<template>
    <ul class="flex-row flex w-full">
        <li class="flex-1 text-center">
            <button
                className="w-11/12 text-center bg-sky-500  hover:bg-sky-700"
                @click="count++"
            >
                Count i1s: {{ count }}
            </button>
        </li>
        <li class="flex-1 text-center">
            <button
                className="w-11/12 text-center bg-sky-500  hover:bg-sky-700"
                @click="count++"
            >
                Count i1s: {{ count }}
            </button>
        </li>
        <li class="flex-1 text-center">
            <button
                className="w-11/12 text-center bg-sky-500  hover:bg-sky-700"
                @click="count++"
            >
                Count i1s: {{ count }}
            </button>
        </li>
    </ul>
    <h1 class="text-3xl font-bold underline">Hello world!</h1>
</template>

<style scoped>
.moj {
    color: red;
}
</style>
