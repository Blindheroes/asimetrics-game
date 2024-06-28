<?php
global $title;
global $seperator;
global $description;
?>



        <!-- header/navbar -->
            <?php require_once("frontend/pages/components/navbar.php"); ?>
        <!-- end of header/navbar -->
        <main class="bg-gray-100 " >
            <div class="container"></div>
           
                <div  class="card card-body  border-0 mb-6 shadow-sm  py-lg-3 px-lg-4 ">
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
           
          
        </main>
      <!-- footer -->
            <?php require_once("frontend/pages/components/footer.php"); ?>
     <!-- end of footer -->
