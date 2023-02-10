<template>
    <v-app :dark="isDark">
        <v-main>
            <router-view :key="$route.fullPath"/>
        </v-main>
    </v-app>
</template>

<script>
export default {
    data(){
        return {
        }
    },
    computed: {
        isDark() {
            return false;
        },
    },
}
</script>

<style >
@import url('https://fonts.googleapis.com/css?family=Ropa+Sans');
* {
    font-family: 'Ropa Sans', Courier, monospace;
}
</style>
