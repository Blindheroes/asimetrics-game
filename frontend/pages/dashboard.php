<?php
// require_once "../../system/config.php";
global $conn;
global $title;
global $seperator;
global $description;

$user_id = $_SESSION['loggedin'];



// function getUserName($conn, $user_id) {
//     $query = "SELECT username FROM users WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     return mysqli_fetch_assoc($result)['username'];
// }

// function getUserJob($conn, $user_id) {
//     $query = "SELECT job_id FROM user_jobs WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     $job_id = mysqli_fetch_assoc($result)['job_id'];
//     $query = "SELECT job_title FROM jobs WHERE job_id = $job_id";
//     $result = mysqli_query($conn, $query);
//     return mysqli_fetch_assoc($result)['job_title'];
// } 

// function getUserCash($conn, $user_id) {
//     $query = "SELECT cash FROM user_balance WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     return mysqli_fetch_assoc($result)['cash'];
// }



// function updatePortofolio($conn, $user_id) {
//     $query = "SELECT total_value FROM portfolio WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     $total_value = 0;
//     foreach ($result as $row) {
//         $total_value =$total_value + $row['total_value'];
//     }
//     $query = "UPDATE user_balance SET total_portfolio = $total_value WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     return $result;
// }

// function getUserPortofolio($conn, $user_id) {
//     if (updatePortofolio($conn, $user_id)){
//         $query = "SELECT total_portfolio FROM user_balance WHERE user_id = $user_id";
//         $result = mysqli_query($conn, $query);
//         return mysqli_fetch_assoc($result)['total_portfolio'];
//     } else {
//         echo "Failed To Updat Portofolio Value";
//     }
// }


// function myStocIdkList($conn, $user_id) {
//     $query = "SELECT stock_id FROM portfolio WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     $stock_ids = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $stock_ids[] = $row['stock_id'];
//     }
//     return $stock_ids;
// }

// function getStockCompanyName($conn, $stock_id) {
//     $query = "SELECT company_name FROM stocks WHERE stock_id = $stock_id";
//     $result = mysqli_query($conn, $query);
//     return mysqli_fetch_assoc($result)['company_name'];
// }

// function getStocksymbol($conn, $stock_id) {
//     $query = "SELECT symbol FROM stocks WHERE stock_id = $stock_id";
//     $result = mysqli_query($conn, $query);
//     return mysqli_fetch_assoc($result)['symbol'];
// }

// function getStockPrice($conn, $stock_id) {
//     $query = "SELECT current_price FROM stocks WHERE stock_id = $stock_id";
//     $result = mysqli_query($conn, $query);
//     return mysqli_fetch_assoc($result)['current_price'];
// }

// function getStockQty($conn, $user_id, $stock_id) {
//     $query = "SELECT quantity FROM portfolio WHERE user_id = $user_id AND stock_id = $stock_id";
//     $result = mysqli_query($conn, $query);
//     return mysqli_fetch_assoc($result)['quantity'];
// }

// function getAndUpdateMyStockValue($conn, $user_id, $stock_id) {
//     $price = getStockPrice($conn, $stock_id);
//     $qty = getStockQty($conn, $user_id, $stock_id);
//     $rquery = "SELECT total_value FROM portfolio WHERE user_id = $user_id AND stock_id = $stock_id";
//     $result = mysqli_query($conn, $rquery);
//     $total_value = $qty * $price;
//     $query = "UPDATE portfolio SET total_value = $total_value WHERE user_id = $user_id AND stock_id = $stock_id";
//     $result = mysqli_query($conn, $query);
//     return $total_value;
// }
// function updateAllStocksTotalValue($conn) {
//     $query = "SELECT user_id FROM users";
//     $result = mysqli_query($conn, $query);
//     foreach ($result as $row) {
//         $user_id = $row['user_id'];
//         $query = "SELECT stock_id FROM portfolio WHERE user_id = $user_id";
//         $result = mysqli_query($conn, $query);
//         foreach ($result as $row) {
//             $stock_id = $row['stock_id'];
//             $price = getStockPrice($conn, $stock_id);
//             $query = "SELECT quantity FROM portfolio WHERE stock_id = $stock_id";
//             $result = mysqli_query($conn, $query);
//             $total_value = 0;
//             foreach ($result as $row) {
//                 $total_value += $row['quantity'] * $price;
//             }
//             $query = "UPDATE portfolio SET total_value = $total_value WHERE stock_id = $stock_id";
//             $result = mysqli_query($conn, $query);
//         }
//     }
//     echo "<script type='text/javascript'>console.log('All Stocks Total Value Updated')</script>";
//     return true;
// }
// function allUserHaveJob($conn) {
//     $avalibleJobs = [];
//     $query = "SELECT job_id FROM jobs";
//     $result = mysqli_query($conn, $query);
//     foreach ($result as $row) {
//         $avalibleJobs[] = $row['job_id'];
//     }
//     $query = "SELECT user_id FROM users";
//     $result = mysqli_query($conn, $query);
//     foreach ($result as $row) {
//         $user_id = $row['user_id'];
//         $randomJob = array_rand($avalibleJobs);
//         $query = "SELECT job_id FROM user_jobs WHERE user_id = $user_id";
//         $result = mysqli_query($conn, $query);
//         if (mysqli_num_rows($result) == 0) {
//             $query = "INSERT INTO user_jobs (user_id, job_id) VALUES ($user_id, $randomJob)";
//             $result = mysqli_query($conn, $query);

//         }
//     }
//     echo "<script type='text/javascript'>console.log('All User Have Job')</script>";
//     return true;
// }
// function updateForNewUser($conn, $user_id) {
//     // get the job for the user
//     allUserHaveJob($conn);
//     // get the balance for the user
//     $query = "SELECT user_id FROM user_balance WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     if (mysqli_num_rows($result) == 0) {
//         $query = "INSERT INTO user_balance (user_id, cash, total_portfolio) VALUES ($user_id, 0, 0)";
//         $result = mysqli_query($conn, $query);
//     }
//     // get the portofolio for the user
//     $query = "SELECT user_id FROM portfolio WHERE user_id = $user_id";
//     $result = mysqli_query($conn, $query);
//     if (mysqli_num_rows($result) == 0) {
//         $query = "SELECT stock_id FROM stocks";
//         $result = mysqli_query($conn, $query);
//         foreach ($result as $row) {
//             $stock_id = $row['stock_id'];
//             $query = "INSERT INTO portfolio (user_id, stock_id, quantity, total_value) VALUES ($user_id, $stock_id, 0, 0)";
//             $result = mysqli_query($conn, $query);
//         }
//     }
//     echo "<script type='text/javascript'>console.log('New User Updated')</script>";
//     return true;
// }
// updateForNewUser($conn, $user_id);
// updateAllStocksTotalValue($conn);
// $userName= getUserName($conn, $user_id);
// $userJob= getUserJob($conn, $user_id);
// $userCash= getUserCash($conn, $user_id);
// $userPortofolio= getUserPortofolio($conn, $user_id);
// $myStocIdkList= myStocIdkList($conn, $user_id);


function deleteAllUserData($conn, $user_id) {
    $query = "DELETE FROM user_balance WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $query = "DELETE FROM user_jobs WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $query = "DELETE FROM portfolio WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    echo "<script type='text/javascript'>console.log('All User Data Deleted')</script>";
    return true;
}
// deleteAllUserData($conn, $user_id);

// get user name
function getUserName($conn, $user_id) {
    $query = "SELECT username FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['username'];
}
// get user job
function getUserJob($conn, $user_id) {
    $query = "SELECT job_id FROM user_jobs WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $job_id = mysqli_fetch_assoc($result)['job_id'];
    $query = "SELECT job_title FROM jobs WHERE job_id = $job_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['job_title'];
}
// get user income (salary)
function getUserIncome($conn, $user_id) {

    $query = "SELECT job_id FROM user_jobs WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $job_id = mysqli_fetch_assoc($result)['job_id'];
    $query = "SELECT salary FROM jobs WHERE job_id = $job_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['salary'];
}
// get user cash
function getUserCash($conn, $user_id) {
    $query = "SELECT cash FROM user_balance WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['cash'];
}
// get user portofolio
function getUserPortofolio($conn, $user_id) {
    $query = "SELECT total_portfolio FROM user_balance WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['total_portfolio'];
}
// get stok symbol
function getStockSymbol($conn, $stock_id) {
    $query = "SELECT symbol FROM stocks WHERE stock_id = $stock_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['symbol'];
}
// get stock company name
function getStockCompanyName($conn, $stock_id) {
    $query = "SELECT company_name FROM stocks WHERE stock_id = $stock_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['company_name'];
}
// get stock current price
function getStockPrice($conn, $stock_id) {
    $query = "SELECT current_price FROM stocks WHERE stock_id = $stock_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['current_price'];
}
// get stock qty (lot)
function getStockQty($conn, $user_id, $stock_id) {
    $query = "SELECT quantity FROM portfolio WHERE user_id = $user_id AND stock_id = $stock_id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result)['quantity'];
}
// get stock total value
function getStockTotalValue($conn, $user_id, $stock_id) {
    $price = getStockPrice($conn, $stock_id);
    $qty = getStockQty($conn, $user_id, $stock_id);
    return $qty * $price;
}
// get all stock id list
function getMyStockIdList($conn, $user_id) {
    $query = "SELECT stock_id FROM portfolio WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $stock_ids = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $stock_ids[] = $row['stock_id'];
    }
    return $stock_ids;
}

// get all variable
$userName = getUserName($conn, $user_id);
$userJob = getUserJob($conn, $user_id);
$userIncome = getUserIncome($conn, $user_id);
$userCash = getUserCash($conn, $user_id);
$userPortofolio = getUserPortofolio($conn, $user_id);
$myStocIdkList = getMyStockIdList($conn, $user_id);
$income = getUserIncome($conn, $user_id);

?>



        <!-- header/navbar -->
            <?php require_once("frontend/pages/components/navbar.php"); ?>
        <!-- end of header/navbar -->
        <main class=" bg-gray-100 ">
<div class="pattern-square " ></div>

<div class="container ">
        <div class="mb-1 mt-2 card card-body  border-0  shadow-sm  py-lg-3 px-lg-4"><h1 class="mb-0 h-3">Dashboard</h1></div>
        <div class="row">
            <div class="col-lg-3 col-md-4 card card-body  border-0 mb-4 shadow-sm  py-lg-3 px-lg-4">
            <div class="align-items-center justify-content-center ">
                        <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-xl rounded-circle">
                        <div class="ms-3">
                           <h5 class="mb-0"><?= $userName; ?></h5>
                           <p>as <?= $userJob ?></p>
                        </div>
                     </div>
            <div class="d-md-block">
                <div class="card border-0 mb-4 mb-lg-3 bg-gray-100">
                    <div class="card-body py-lg-3 px-lg-4">
                        <div class="mb-2">
                            <h6>Monthly Income</h6>
                            <h4><?= $income ?></h4>
                        </div>
                        <div class="mb-2">
                            <h6>Monthly Expand </h6>
                            <h4>Rp150.000</h4>
                        </div>
                    </div>
                </div>    
                <div class="card border-0 mb-4 mb-lg-0 bg-gray-100">
                <ul class="nav flex-column nav-account ">
                    <li class="nav-item"><a href="#" class="nav-link">Menu 1</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Menu 1</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Menu 1</a></li>
                </ul>
                </div>
            </div>    
        </div>
            <div class="col-lg-9 col-md-8">
                
                <div class="card card-body  border-0 mb-4 shadow-sm">
                    <div class="card-body p-lg-5">
                    <div class="mb-6 d-lg-flex align-items-center justify-content-between">
                        <h4 class="mb-0">keuangan</h4>
                    </div>
                    <div class="row gx-4">
                            <div class="row gx-4">
                                <div class="col-lg-6">
                                    <div class="card border-0 mb-4 mb-lg-0 bg-gray-100">
                                        <div class="card-body py-lg-3 px-lg-4">
                                            <div class="mb-5">
                                                <h6>Cash</h6>
                                                <h4>Rp<?= $userCash ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card border-0 mb-4 mb-lg-0 bg-gray-100">
                                        <div class="card-body py-lg-3 px-lg-4">
                                            <div class="mb-5">
                                                <h6>portofolio</h6>
                                                <h4>Rp<?= $userPortofolio ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-12 mt-4 d-flex justify-content-end">
                        <!-- <button class="btn btn-light" type="button">Refresh</button> -->
                    </div>
                </div>
            </div>
            <div class="card card-body  border-0 mb-4 shadow-sm">
                <div class="card-body p-lg-5">
                    <div class="mb-6 d-lg-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Saham ku</h4>
                    </div>
                    <div class="card border-0 mb-4 mb-lg-0 bg-gray-100 py-3 px-3">
                    <ul class="list-group list-group-flush mb-0 ">
                        <?php foreach($myStocIdkList as $stock_id) { ?>
                        <li class="list-group-item px-0 py-3 ">
                            <div class=" text-dark fw-semibold fs-6 ">
                                <span><?= getStockCompanyName($conn, $stock_id) ?></span>
                                <div class="d-flex justify-content-between text-dark fw-semibold fs-6 ">
                                    <span><?= getStocksymbol($conn, $stock_id) ?></span>
                                    <span><?= getStockQty($conn,$user_id,$stock_id ) ?></span>
                                    <a href="#"><?= getStockTotalValue($conn, $user_id,$stock_id);?></a>

                                </div>
                            </div>
                        </li>
                        <?php } ?>
                        
                        
                    </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        </main>
      <!-- footer -->
            <?php require_once("frontend/pages/components/footer.php"); ?>
     <!-- end of footer -->
    
