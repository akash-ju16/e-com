<template>
  <v-app id="inspire">
    <v-app-bar app color="white" flat>
      <v-container class="py-0 fill-height">
        <v-avatar class="mr-10" color="grey darken-1" size="32"></v-avatar>
        <v-btn v-for="link in links" :key="link" text>
          <router-link to="/zzz">{{ link }}</router-link>
        </v-btn>
        <v-spacer></v-spacer>
        <v-responsive max-width="260">
          <v-text-field dense flat hide-details rounded solo-inverted></v-text-field>
        </v-responsive>
      </v-container>
    </v-app-bar>

    <v-main class="grey lighten-3">
      <v-container>
        <v-row>
          <v-col cols="2">
            <v-sheet rounded="lg">
              <v-list color="transparent">
                <v-list-item v-for="n in 5" :key="n" link>
                  <v-list-item-content>
                    <v-list-item-title>
                      List Item {{ n }}
                    </v-list-item-title>
                  </v-list-item-content>
                </v-list-item>

                <v-divider class="my-2"></v-divider>

                <v-list-item link color="grey lighten-4">
                  <v-list-item-content>
                    <v-list-item-title>
                      Refresh
                    </v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
              </v-list>
            </v-sheet>
          </v-col>

          <v-col>
            <v-sheet min-height="70vh" rounded="lg">
                <span v-if="this.$route.params.id"><ProductDetailsApp> </ProductDetailsApp></span>
                <span v-else><ProductListApp> </ProductListApp></span>
            </v-sheet>
          
          </v-col>
        </v-row>
      </v-container>
    </v-main>
    <router-view /> <!--For router link-->
  </v-app>
</template>

<script>
import ProductListApp from '../pages/ProductListApp.vue'
import ProductDetailsApp from '../pages/ProductDetailsApp.vue'
  export default {
    components: {ProductListApp, ProductDetailsApp},
    data: () => ({
      links: [
        'Dashboard',
        'MENS',
        'WOMENS',
        'KIDS',
        'GIFT CARDS'
      ],
      awesome: this.$route.params.id,
    }),
  }
</script>