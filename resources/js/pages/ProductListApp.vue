<template>

 <v-app class="grey lighten-4">
    <v-content class="mx-4 mb-4">
        <h1>hello</h1>
        <v-btn color="primary">Primary</v-btn>
    </v-content>
  </v-app>


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
