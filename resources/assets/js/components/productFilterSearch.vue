<template>
    <label>
        <input id="product-filter-search" class="form-control">
    </label>
</template>

<script>
    import autocomplete from 'autocomplete.js'
    import algolia from 'algoliasearch'

    export default {
        mounted() {
            const index = new algolia('DAJACY3VJ1', 'b28ef9641dfc7dcf6d45239799469bf1').initIndex('products');

            autocomplete('#product-filter-search', {
                hint: true
            }, {
                source: autocomplete.sources.hits(index, {hitsPerPage: 8}),
                displayKey: 'name',
                templates: {
                    suggestion (suggestion) {
                        return '<span>' + suggestion._highlightResult.name.value + '</span>';
                    },
                    empty: '<div class="aa-empty">No products found</div>'
                }
            }).on('autocomplete:selected', (e, selection) => {
                window.location = '/products/' + selection.slug;
            });
        }
    }
</script>