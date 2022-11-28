<template>

<v-app>
    <v-main>
        <v-container>
            <v-row>
            <v-col cols="4">
                <v-card>
                   <v-img
                        :src="`http://127.0.0.1:8000/vue-images/${items.cat_img_name}`"
                        height="250"
                        cover
                        class="bg-grey-lighten-2"
                        ></v-img> 
                    <v-card-title class="text-h6">{{ items.en_name }}</v-card-title>
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
    data() {
        return {
            items: {
                id: '',
                en_name: '',
                cat_img_name: ''
            },
            //pid: this.$route.params.id,
        }
    },
    async created() {
        const rs = await axios.get('/api/category/'+this.$route.params.id);
        // console.log(rs.data[0]);
        this.items = rs.data[0];
        // this.getCategory()
        // console.log(items);
    }

}
</script>
