import "./bootstrap";
import "../css/app.css";
import 'flowbite';

import Simplebar from 'simplebar-vue';
import 'simplebar-vue/dist/simplebar.min.css';

import VueApexCharts from "vue3-apexcharts";


import "@protonemedia/laravel-splade/dist/style.css";

import toggleDark from "./Components/toggleDark.vue";



import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": true,
        'progress_bar': {
            delay: 250,
            color: "#09dc72",
            css: true,
            spinner: true,
        },
        "components" : {
            toggleDark,
            apexchart : VueApexCharts,
            Simplebar,
        }
    })
    .mount(el);
