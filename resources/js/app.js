import "./bootstrap";
import "../css/app.css";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import Editor from "./components/Editor.vue";

const editor = createApp().component("editor", Editor);

editor.mount("#editor");
