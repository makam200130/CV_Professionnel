
 <div class="titleProfessionalExp " id="titleProfessionalExp ">
                <div class="titleBar ">
                    <div class="imageText ">
                        <img src="../image/real_estate_80px.png " alt=" " class="geantIcon ">
                        <div>
                            <div class="simpleText" >Expérience Professionnelle </div>
                            <div class="smallWhiteText "> <i><?php echo " ".$expYearOld." ans d'" ?>expertise en entreprise</i></div>
                        </div>
                    </div>
                    <div class="simpleText"> </div>
                    <img src="../image/menu_2_24px.png " alt=" " class="treeDots ">

                </div>
            </div>
            <div class="contentScroll ">
                <div class="scrollOne ">
                <?php
                foreach ($allExperiences as $prof) {
                        $prof->getExperience();
                    } 
                ?>
                </div>
            </div>