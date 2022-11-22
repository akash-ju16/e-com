<template>
<v-app>
    <v-main>
        <v-container>
            <v-row>
            <v-col v-for="item in items" :key="item.id" cols="4">
                <v-card>
                   <v-img
                        :src="`http://127.0.0.1:8000/vue-images/${item.cat_img_name}`"
                        height="250"
                        cover
                        class="bg-grey-lighten-2"
                        ></v-img> 
                    <v-card-title class="text-h6"><a :href="`t-shirt/${item.id}`">{{ item.en_name }}</a></v-card-title>
                </v-card>
            </v-col>
            </v-row>
        </v-container>

        <!-- <h1>{{ greetingMessage }}</h1> -->
       

    </v-main>
</v-app>
        
    
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
