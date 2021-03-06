<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>

<?php

  include "includes/sideBar_logIn.php";

?>

<main role="main" class="bg-lighterblue">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center ubi">
            <div class="col-12 col-md-12">
                <!-- no connected UBI STATUS -->
                <div class="ubi_not_connect">
                    <div class="bg-white box-shadow border-radius p-4 mb-4">
                        <h3 class="text-blue pb-3">My UBI status <span class="float-right">
                                <p class="pb-0 mb-0 alert-danger border-radius p-2" style="font-size: 12px;">Not
                                    Connected</p>
                            </span></h3>
                        <p class="text-blue">Connect with your Metamask wallet to apply for the UBI program from
                            Jax.Network.</p>
                        <a id="btn_connect" href="#" class="btn btn-info btn-lg mb-4" onclick="connect_wallet()">Connect
                            a wallet</a>
                        <p><a href="#" class="text-blue" style="text-decoration: underline">Read more about Jax.Network
                                UBI.</a></p>
                    </div>
                    <!-- no connected UBI STATUS -->
                    <!-- not registered SIGUP -->
                    <div class="bg-white box-shadow border-radius p-4 mb-4">
                        <h3 class="text-blue pb-3">My UBI status <span class="float-right">
                                <p class="pb-0 mb-0 alert-dark border-radius p-2" style="font-size: 12px;">Not
                                    Registered</p>
                            </span></h3>
                        <p class="text-blue">By signing up, you agree with our <a href="#" class="text-blue"
                                style="text-decoration: underline">Terms and Conditions</a> and <a href="#"
                                class="text-blue" style="text-decoration: underline">Privacy Policy</a>.</p>
                        <a href="#" class="btn btn-info btn-lg mb-4">Sign Up</a>
                    </div>
                    <p><a href="#" class="text-blue" style="text-decoration: underline">Read more about Jax.Network
                            UBI.</a></p>
                </div>
                <!-- not registered SIGUP -->
                <!-- not registered  KYC verify-->
                <div class="bg-white box-shadow border-radius p-4 mb-4">
                    <h3 class="text-blue pb-3">My UBI status <span class="float-right">
                            <p class="pb-0 mb-0 alert-warning border-radius p-2" style="font-size: 12px;">Not Registered
                            </p>
                        </span></h3>
                    <p class="text-blue">KYC Verification is required to continue your registration.</p>
                    <a href="#" class="btn btn-info btn-lg mb-4">Verify</a>
                </div>
                <p><a href="#" class="text-blue" style="text-decoration: underline">Read more about Jax.Network UBI.</a>
                </p>
                 <!-- not registered KYC verify -->
                <!-- ALL CONNECTED -->
                <div class="bg-white box-shadow border-radius p-4 mb-4">
                    <h3 class="text-blue pb-3">My UBI status <span class="float-right">
                            <p class="pb-0 mb-0 alert-success border-radius p-2" style="font-size: 12px;">Approved</p>
                        </span></h3>
                    <p class="text-blue">You???re successfully approved for the JAX UBI program!</p>
                    <p>Check your UBI payments below.</p>
                </div>
                <div class="bg-white box-shadow border-radius p-4 mb-4 voting">
                    <div class="flex-fill d-flex">
                        <div class="col-6 justify-content-start align-items-center">
                            <p class="text-info font80 mb-0 d-block">Accumulated UBI</p>
                            <h3 class="d-block mb-0 pb-0 text-blue">502,236.25 <small>WJXN</small></h3>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center"><a href="#"
                                class="btn btn-info btn-lg font80">Collect</a></div>
                    </div>
                </div>
                <div class="bg-white box-shadow border-radius p-4 mb-4 voting">

                    <h3 class="text-blue">My UBI</h3>

                    <!-- table start-->
                    <div class="restable myyield " id="results">
                        <div class="theader">
                            <div class="table_header pt-md-3 pb-md-3 pt-1 pb-1 pl-3">Date</div>
                            <div class="table_header pt-md-3 pb-md-3 pt-1 pb-1 pl-2">UBI Payment</div>
                        </div>
                        <div class="table_row">
                            <div class="table_small">
                                <div class="table_cell">Date</div>
                                <div class="table_cell">19.08.2019 at 19:43</div>
                            </div>

                            <div class="table_small">
                                <div class="table_cell">VRP Staking <span>Restake</span></div>
                                <div class="table_cell"><span class="text-success">+ 63</span> WJXN</div>
                            </div>
                        </div>
                        <div class="table_row">
                            <div class="table_small">
                                <div class="table_cell">Date</div>
                                <div class="table_cell">19.08.2019 at 19:43</div>
                            </div>

                            <div class="table_small">
                                <div class="table_cell">VRP Staking <span>Restake</span></div>
                                <div class="table_cell"><span class="text-success">+ 63</span> WJXN</div>
                            </div>
                        </div>

                        <!-- table end-->
                    </div>
                </div>
                <!-- ALL CONNECTED -->

                <!-- Declined UBI STATUS -->
                <div class="bg-white box-shadow border-radius p-4 mb-4">
                    <h3 class="text-blue pb-3">My UBI status <span class="float-right">
                            <p class="pb-0 mb-0 alert-danger border-radius p-2" style="font-size: 12px;">Declined</p>
                        </span></h3>
                    <p class="text-blue">Your request to join UBI program was declined. </p>
                    <a href="#" class="btn btn-info btn-lg mb-4">Try again</a>
                    </div>
                    <p><a href="#" class="text-blue" style="text-decoration: underline">Read more about Jax.Network UBI.</a></p>
                </div>
                <!-- Declined UBI STATUS -->

        </div>
        </div>
    </div>
</main>
<?php

  include "includes/footer.php";

?>

<?php

  include "includes/footerJs.php";

?>
</body>

</html>