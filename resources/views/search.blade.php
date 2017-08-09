<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.0.2/dist/instantsearch.min.css">
<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.0.2/dist/instantsearch.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.0.2/dist/instantsearch-theme-algolia.min.css">


<div id="search-box">
    <!-- SearchBox widget will appear here -->
</div>


<div id="hits">
    <!-- Hits widget will appear here -->
</div>

<script>
    const search = instantsearch({
        appId: 'latency',
        apiKey: '3d9875e51fbd20c7754e65422f7ce5e1',
        indexName: 'bestbuy',
        urlSync: true
    });

    search.addWidget(
        instantsearch.widgets.searchBox({
            container: '#search-box',
            placeholder: 'Search for products'
        })
    );

    // initialize hits widget
    search.addWidget(
        instantsearch.widgets.hits({
            container: '#hits'
        })
    );

    search.start();
</script>