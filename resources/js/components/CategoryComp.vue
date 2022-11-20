<template>
    <h1>{{ greetingMessage }}</h1>
    <u v-for="item in items" :key="item.id">
        <li>{{ item.id }}. {{ item.en_name }}</li>
    </u>
</template>

<script>
export default {
    props: {
        greetingMessage : String,
    },
    data() {
        return {
            items: []
        }
    },
    methods: {
        getCategory() {
            axios.get('/api/category')
                .then((response) => {
                    this.items = response.data.data
                })
        }
    },
    mounted() {
        this.getCategory()
    }

}
</script>
