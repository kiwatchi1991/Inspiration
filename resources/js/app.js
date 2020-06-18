/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import jquery from "jquery";
window.$ = jquery;

import RegisterForm from "./components/auth/RegisterForm";
import LoginForm from "./components/auth/LoginForm";
import PasswordEmail from "./components/auth/PasswordEmail";
import PasswordReset from "./components/auth/PasswordReset";
import ChangeEmail from "./components/auth/ChangeEmail";
import ChangePassword from "./components/auth/ChangePassword";
import FlashMessage from "./components/FlashMessage";

require('./components/footerFixed');
require('./components/drawerMenu');

window.Vue = require('vue');



//vueコンポーネントを使用する
const app = new Vue({
    el: "#app",
    components: {
        LoginForm,
        PasswordEmail,
        PasswordReset,
        ChangeEmail,
        ChangePassword,
        RegisterForm,
        FlashMessage
    }
});