<?php require_once("../header.php"); ?>
<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <!--繰り返しここから-->
                    <?php
                    $link = mysqli_connect("localhost", "sotsuken", "sotsukenpass", "sotsuken");
                    if ($link == null) {
                        die("接続に失敗しました");
                    }
                    mysqli_set_charset($link, "utf8");
                    $result = mysqli_query($link, "SELECT * FROM event");
                    ?>
                    <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../koba.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $row['name'] ?></h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="touroku.php?eventId=1">開く</a></div>
                            </div>
                        </div>
                    </div>
                    <?php }
                        mysqli_free_result($result);
                          mysqli_close($link); ?>
                    <!-- 繰り返しここまで -->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="../koba.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">花見</h5>
                                    <!-- Product reviews-->
                                    <!-- Product price-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="touroku.php?eventId=1">開く</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="../koba.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">運動会</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="touroku.php?num=1">開く</a></div>
                            </div>
                        </div>
                    </div>
                            </div>
                            <!-- Product actions-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once("../footer.php"); ?>