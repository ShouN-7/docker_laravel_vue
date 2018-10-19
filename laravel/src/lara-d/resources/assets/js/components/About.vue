<template>
    <div>
        <input v-model="content" type="text" name="content" placeholder="コンテンツ">
        <p>{{content}}</p>
        <p>{{count}}</p>

        <button class="uk-button uk-button-primary" v-on:click="increment()">増やす</button>
        <p><router-link to="/">戻る</router-link></p>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                content: '',
                count: 0,
                }
            },
        methods: {
            increment() {
                this.count += 1;
            }
        },
    }
</script>
