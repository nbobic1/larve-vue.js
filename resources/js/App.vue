<script setup>
import { ref } from "vue";
const count = ref(0);
window.addEventListener("load", (event) => {
    nekit();
});
function nekit() {
    console.log("nealjfag", document.getElementById("input").value);
    const xhttp = new XMLHttpRequest();

    xhttp.addEventListener("readystatechange", function () {
        if (this.readyState === 4) {
            var xhr = new XMLHttpRequest();
            xhr.withCredentials = true;

            xhr.addEventListener("readystatechange", function () {
                if (this.readyState === 4) {
                    console.log(this.responseText);
                    var k = JSON.parse(this.responseText);

                    var div = document.getElementById("root");
                    for (var i = 0; i < k.length; i++) {
                        var tem = document.createElement("div");

                        tem.className =
                            "w-20 h-20 absolute left-20 bg-orange-800 align-middle justify-center text-center";
                        tem.style = "top: 90%; left: " + (100 + i * 100) + "px";

                        tem.innerHTML =
                            '<p class="mt-7">' + k[i].parametar + "</p>";
                        div.appendChild(tem);
                    }
                }
            });

            xhr.open("GET", "http://localhost:8000/api/flights");

            xhr.send(data);
        }
    });

    xhttp.open("POST", "/api/flights", true);
    var data = new FormData();
    data.append("value", document.getElementById("input").value);
    xhttp.send(data);
}
</script>

<template>
    <div
        id="root"
        style="
            background: url('imag2.jpg');
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        "
    >
        <ul class="flex-row flex" style="width: 50%">
            <li class="flex-1 text-center">
                <button
                    className="w-11/12 text-center bg-sky-500  hover:bg-sky-700"
                    @click="count++"
                >
                    Count i1s: {{ count }}
                </button>
            </li>
            <li
                class="flex-1 text-center hover:animate-spin hover:delay-700 hover:duration-75"
            >
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
        <div
            class="w-20 h-20 absolute top-50 left-20 bg-red-500 justify-center text-center align-middle"
        >
            <input
                type="text"
                id="input"
                class="relative z-10 w-16 mt-5 text-center"
            />
            <button @click="nekit()">Save</button>
        </div>
        <div
            class="w-20 h-20 absolute top-50 left-20 bg-red-500 justify-center text-center align-middle"
        >
            <input
                type="text"
                id="input"
                class="relative z-10 w-16 mt-5 text-center"
            />
            <button @click="nekit()">Save</button>
        </div>
        <div
            class="w-20 h-20 absolute top-50 left-20 bg-red-500 justify-center text-center align-middle"
        >
            <input
                type="text"
                id="input"
                class="relative z-10 w-16 mt-5 text-center"
            />
            <button @click="nekit()">Save</button>
        </div>
        <div
            class="w-20 h-20 absolute top-80 left-200px bg-red-500 justify-center text-center align-middle"
        >
            <input
                type="text"
                id="input"
                class="relative z-10 w-16 mt-5 text-center"
            />
            <button @click="nekit()">Save</button>
        </div>
        <div
            class="w-20 h-20 absolute top-50 left-80 bg-red-500 justify-center text-center align-middle"
        >
            <input
                type="text"
                id="input"
                class="relative z-10 w-16 mt-5 text-center"
            />
            <button @click="nekit()">Save</button>
        </div>
    </div>
</template>

<style scoped>
.moj {
    color: red;
}
</style>
