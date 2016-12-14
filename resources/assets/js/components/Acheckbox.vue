<template>

    <input type="checkbox" id="checkbox" v-model="checked">
    <label for="checkbox">{{ checked }}</label>

    <!--<input type="checkbox" @click="checkboxToggle">-->
    <!--<input type="checkbox">-->
</template>

<script>
    export default {
        mounted() {
            console.log('acheckbox vue component ready.')
        }
    }
</script>



