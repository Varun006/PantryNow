<template>
    <div id="shop" class="shop product-3 grid-container clearfix" v-if="categoryFilterApplied">
        <paginate name="categoryFilteredProducts" :list="categoryFilteredProducts" tag="div" ref="paginator">
            <div class="product clearfix" v-for="item in paginated('categoryFilteredProducts')">
                <div class="product-image">
                    <a :href="/products/ + item.slug">
                        <img :src="item.photo_url" :alt="item.name" class="imagescale"></a>
                </div>
                <div class="product-desc center">
                    <div class="product-title">
                        <h3>
                            <a :href="/products/ + item.slug" v-text="item.name"></a>
                        </h3>
                    </div>
                    <div class="product-price">
                        <del v-text="item.strikeThroughPrice"></del>
                        <ins v-text="item.price + ' INR'"></ins>
                    </div>
                </div>
            </div>
        </paginate>

        <paginate-links for="categoryFilteredProducts" class="divcenter" :show-step-links="true" :classes="{
    'ul': 'pagination',
    '.next > a': 'next-link',
    '.prev > a': ['prev-link', 'another-class'] // multiple classes
  }">
        </paginate-links>

        <span v-if="$refs.paginator">
            Viewing {{$refs.paginator.pageItemsCount}} results
        </span>

    </div>

    <div v-else id="shop" class="shop product-3 grid-container clearfix">
        <paginate name="subCategoryFilteredProducts" :list="subCategoryFilteredProducts" tag="div" ref="paginator">
            <div class="product clearfix" v-for="item in paginated('subCategoryFilteredProducts')">
                <div class="product-image">
                    <a :href="/products/ + item.slug">
                        <img :src="item.photo_url" :alt="item.name"></a>
                </div>
                <div class="product-desc center">
                    <div class="product-title">
                        <h3>
                            <a :href="/products/ + item.slug" v-text="item.name"></a>
                        </h3>
                    </div>
                    <div class="product-price">
                        <del v-text="item.strikeThroughPrice"></del>
                        <ins v-text="item.price + ' INR'"></ins>
                    </div>
                </div>
            </div>
        </paginate>

        <paginate-links
                for="subCategoryFilteredProducts"
                :show-step-links="true"
                :classes="{'ul': 'pagination'}"
        >
        </paginate-links>

        <span v-if="$refs.paginator">
            Viewing {{$refs.paginator.pageItemsCount}} results
        </span>

    </div>
</template>


<script>
    import VuePaginate from 'vue-paginate'

    export default {
        props: ['products-category'],

        data() {
            return {
                search: '',
                subCategoryFilterApplied: false,
                categoryFilterApplied: true,
                categoryFilteredProducts: [],
                subCategoryFilteredProducts: [],
                paginate: ['categoryFilteredProducts','subCategoryFilteredProducts']
            }
        },

        mounted() {
            VueEvents.$on('category-filter-applied', (response) => {
                this.allProducts(response);
            });

//            VueEvents.$on('search-filter-applied', (response) => {
//                this.categoryFilterApplied = true;
//                this.allProducts(response);
//            });

            VueEvents.$on('sub-category-filter-applied', (response) => {
                this.subCategoryProducts(response);
            });
        },

        methods: {
            allProducts(response) {
                this.categoryFilteredProducts = response.data.products;
            },

            subCategoryProducts(response) {
                this.categoryFilterApplied = false;
                this.categoryFilteredProducts = [];
                this.subCategoryFilteredProducts = [];
                this.subCategoryFilterApplied = true;
                this.subCategoryFilteredProducts = response;
            },

        },
    }
</script>

<style>
    .paginate-links > li > a, .paginate-links > li > span {
        border-radius: 50% !important;
        margin: 0 5px;
        cursor: pointer;
    }
</style>