<?php
global $title;
global $seperator;
global $description;
?>



<!-- header/navbar -->
<?php require_once("frontend/pages/components/navbar.php"); ?>
<!-- end of header/navbar -->
<main class="bg-gray-100 py-8 ">

    <div>
        <center>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Lacak seluruh pasar di TradingView</span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                    {
                        "width": "1280",
                        "height": "610",
                        "symbol": "NASDAQ:AAPL",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "1",
                        "locale": "id",
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->

        </center>
    </div>



    <div class="container items-center">







        <div class="">
            <div class="my-8 card card-body  border-0 mb-6 shadow-sm  py-lg-3 px-lg-4 ">
                <div class="mb-5">
                    <h4 class="mb-1">Trade</h4>
                    <p class="mb-0 fs-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
                    </p>
                </div>
                <form action="" method="get" class="row g-3 ">
                    <div class="col-lg-7">
                        <label for="search-symbol" class="form-label">labell</label>
                        <select name="search-symbol" id="search-symbol" class="form-select">
                            <option selected disabled value>Chose..</option>
                            <option selected value="BBCA">BBCA</option>
                            <option value="BBRI">BBRI</option>
                            <option value="BSI">BSI</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="trade-action" class="form-label">Action</label>
                        <select name="trade-action" id="trade-action" class="form-select">
                            <option selected disabled value>Chose..</option>
                            <option selected value="BBCA">BUY</option>
                            <option value="BBRI">SELL</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <label for="trade-qty" class="form-label">Qty</label>
                        <input type="number" id="trade-qty" name="trade-qty" class="form-control" min="1" max="1000">
                    </div>
                    <div class="col-12 mt-4">
                        <button class="btn btn-primary me-2">Go!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- footer -->
<?php require_once("frontend/pages/components/footer.php"); ?>
<!-- end of footer -->