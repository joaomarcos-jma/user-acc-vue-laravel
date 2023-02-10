<template>
    <v-container>
                <v-btn color="primary">
                    Primary
                </v-btn>
                <v-btn color="secondary">
                    Secondary
                </v-btn>
                <v-btn color="error">
                    Error
                </v-btn>
    </v-container>
</template>

<script>
    export default {
        name: "example",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
