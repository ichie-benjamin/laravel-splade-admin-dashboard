import "./bootstrap";
import "../css/app.css";
import 'flowbite';

import "@protonemedia/laravel-splade/dist/jodit.css";

import VueApexCharts from "vue3-apexcharts";


import "@protonemedia/laravel-splade/dist/style.css";

import toggleDark from "./Components/toggleDark.vue";
import SideBar from "./Components/SideBar.vue";



import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import chart01 from "./Inc/chart-01.js";
import chart03 from "./Inc/chart-03.js";
import chart02 from "./Inc/chart-02.js";
import chart04 from "./Inc/chart-04.js";
// import map01 from "./Inc/map-01.js";

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
            SideBar,
            apexchart : VueApexCharts,
        }
    })
    .mount(el);


// Document Loaded
document.addEventListener("DOMContentLoaded", () => {
    chart01();
    chart02();
    chart03();
    chart04();
    // map01();
});
