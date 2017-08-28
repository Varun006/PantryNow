<template>
    <div class="sidebar nobottommargin">
        <div class="sidebar-widgets-wrap">
            <!--<div class="widget widget-filter-links clearfix">-->
                <!--<page-product-search></page-product-search>-->
            <!--</div>-->
            <div class="widget widget-filter-links clearfix">
                <h4><span>{{ category.name }}</span></h4>
                <ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
                    <li class="widget-filter-reset active-filter">
                        <a href="#" data-filter="*" @click.prevent="clearFilter()">
                            Clear
                        </a>
                    </li>
                    <li v-for="sub in subCategory">
                        <a href="#" @click.prevent="filterByCategory(sub['id'].id);">{{ sub['id'].name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['category', 'sub-category'],

        mounted() {
            this.getAllProducts(this.category);

            VueEvents.$on('get-all-products', () => {
                this.getAllProducts(this.category);
            });
        },

        data() {
            return {
                products: [],
                count: 0
            }
        },

        methods: {
            filterByCategory(id) {
                axios.post('/filter', {id: id})
                    .then((response) => {
                        VueEvents.$emit('sub-category-filter-applied', response.data.products);
                    })
            },

            clearFilter() {
                VueEvents.$emit('get-all-products');
            },

            getAllProducts(category) {
                axios.post('/getAllProducts', {categorySlug: category.slug})
                    .then((response) => {
                        VueEvents.$emit('category-filter-applied', response);
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.log(error.response.data);
                            console.log(error.response.status);
                            console.log(error.response.headers);
                        }
                    })
            },
        }
    }
</script>
