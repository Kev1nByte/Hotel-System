<div class="plans-section py-5" id="rooms">

    <div class="container py-md-3">

        <div class="w3-head-all mb-3">

            <h3>HABITACIONES</h3>

        </div>

        <div class="priceing-table-main">

            <div class="row">

                <?php

                    $hsimple = new HSimpleControlador();
                    $hsimple -> VerHSimpleControlador();

                ?>

                <?php

                    $hdoble = new HDobleControlador();
                    $hdoble-> VerHDobleControlador();

                ?>

                <?php

                    $hTriple = new HTripleControlador();
                    $hTriple -> VerHTripleControlador();

                ?>

                <?php

                    $hSuit = new HSuitControlador();
                    $hSuit-> VerHSuitControlador();

                ?>

            </div>

                <div class="clearfix"> </div>
            
        </div>

    </div>

</div>