<template>
    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" >
                <span class="icon">
                    <a href="/admin">
                        <img src="">
                    </a>
                </span>
            </a>

            <button class="button navbar-burger is-dark" ref="burger" @click="showMenu">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
        <div class="navbar-menu" ref="menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">Каталог</div>

                    <div class="navbar-dropdown is-boxed">
                        <router-link to="/catalog" class="navbar-item">Товары</router-link>
                        <router-link to="/manufacturers" class="navbar-item">Производители</router-link>
                        <router-link to="/suppliers" class="navbar-item">Поставщики</router-link>
                        <router-link to="/temporary" class="navbar-item">Временные</router-link>
                    </div>
                </div>
                <router-link to="/content" class="navbar-item">Контент</router-link>
                <router-link to="/seo" class="navbar-item">SEO</router-link>
                <router-link to="/cars" class="navbar-item">База автомобилей</router-link>
                <router-link to="/client/orders" class="navbar-item">Работа с клиентами</router-link>
                <router-link to="/promo/models" class="navbar-item">Промо модели</router-link>
                <router-link to="/maintenance" class="navbar-item">Модели ТО</router-link>
            </div>

            <div class="navbar-end">
                <a href="/" class="navbar-item">Магазин</a>
                <a href="/logout" class="label-info">
                    <img src="" style="height: 35px; margin-top: 5px">
                </a>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        methods: {
            showMenu() {
                let active = this.$refs.menu.classList.toggle('is-active');
                this.$refs.burger.classList.toggle('is-active')
            }
        }
    }
</script>
