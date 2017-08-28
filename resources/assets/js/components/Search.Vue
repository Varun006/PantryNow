<template>
    <!--<div id="top-search-input">-->
        <!--<form>-->
            <!--<div class="input-group">-->
                <!--<span class="input-group-addon"><i class="icon-line-search"></i></span>-->
                <!--<input type="text" class="form-control" placeholder="Search..">-->
            <!--</div>-->
        <!--</form>-->
    <!--</div>&lt;!&ndash; #top-search end &ndash;&gt;-->
    <div id="top-search-input">
        <form action="search.html" method="get">
            <div class="input-group">
                <input type="text" class="form-control" id="products" value="" placeholder="Search..">
            </div>
        </form>
    </div><!-- #top-search end -->
</template>

<script>
    import autocomplete from 'autocomplete.js'
    import algolia from 'algoliasearch'

    export default {
        mounted() {
            const index = new algolia('DAJACY3VJ1', 'b28ef9641dfc7dcf6d45239799469bf1').initIndex('products');

            autocomplete('#products', {
                hint: true
            }, {
                source: autocomplete.sources.hits(index, {hitsPerPage: 10}),
                displayKey: 'name',
                templates: {
                    suggestion (suggestion) {
                        return '<span>' + suggestion._highlightResult.name.value + '</span>';
                    },
                    empty: '<div class="aa-empty">No people found</div>'
                }
            }).on('autocomplete:selected', (e, selection) => {
                window.location = '/products/' + selection.slug;
            });
        }
    }
</script>