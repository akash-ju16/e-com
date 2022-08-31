<template>
<div class="col-md-6">
    <div class="form-group">
    <label>Category</label>
        <select class='form-control select2' name="category_select" id="category_select" style="width: 100%;" v-model='category' @change='getSubcategories()'>
            <option value="">Select</option>
            <option v-for='data in categories' :key="data.id" :value='data.id'>{{ data.en_name }}</option>
        </select>
        <!-- <span class="text-danger">@error('category_select') {{$message}} @enderror</span> -->
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
    <label>Sub Category</label>
     <select class='form-control select2' name="sub_category_select" id="sub_category_select" style="width: 100%;" v-model='subcategory'>
        <option value="">Select</option>
        <option v-for='data in subcategories' :key="data.id" :value='data.id'>{{ data.en_name }}</option>
    </select>
    <!-- <span class="text-danger">@error('sub_category_select') {{$message}} @enderror</span> -->
    </div>
</div>
</template>

<script>
 export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                category: 0,
                categories: [],
                subcategory: 0,
                subcategories: []
            }
        },
        methods:{

            getCategories: function(){
              axios.get('/api/category')
              .then(function (response) {
                 this.categories = response.data;
              }.bind(this));
            },

            getSubcategories: function() {
                axios.get('/api/subcategory/' + this.category)
                .then(function(response){
                    this.subcategories = response.data;
                }.bind(this));
            }
        },

        created(){
            this.getCategories()
        }
    }
</script>

<style>

</style>