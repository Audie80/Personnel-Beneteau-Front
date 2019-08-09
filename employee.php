<?php include('header.php'); ?>
    
        <div class="row mb-4">
            <div class="col ml-3">
                <h1>Fiche personnel</h1>
            </div>
            <div class="col d-flex align-items-center pt-2">
                <div class="card text-center shadow-sm border-light" style="width: 40vw;">
                    <div class="card-body">
                        <h2 class="card-title" id="nameInfo"></h2>
                        <p class="card-text" id="birthDateInfo"></p>
                        <a href="crud-employee.php" class="btn btn-info font-weight-bold">Modifier</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-light">
            <div class="card-body">

                <div class="row mb-2">
                    <h2 class="col-sm-6 ml-2">Planning de ses congés</h2>

                    <div class="col-sm-4 row d-flex align-content-center justify-content-end">
                        <!-- Liste déroulante -->
                        <label class="col-sm-4 col-form-label" for="month" class="mr-2">Filtrer par : </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="month" id="month">
                                <option value="">-- Année 2019 --</option>
                                <option value="01">Janvier</option>
                                <option value="02">Février</option>
                                <option value="03">Mars</option>
                                <option value="04">Avril</option>
                                <option value="05">Mai</option>
                                <option value="06">Juin</option>
                                <option value="07">Juillet</option>
                                <option value="08">Août</option>
                                <option value="09">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-2 d-flex align-items-center justify-content-end">
                        <a href="crud-leave.php" class="btn btn-info font-weight-bold" role="button">Ajouter un congé</a>
                    </div>
                </div>

                <!-- Tableau des congés -->
                <table class="table table-bordered table-sm table-responsive">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="31" class="tdDate text-center" id="th_2019-01">Janvier</th>
                            <th colspan="28" class="tdDate text-center" id="th_2019-02">Février</th>
                            <th colspan="31" class="tdDate text-center" id="th_2019-03">Mars</th>
                            <th colspan="30" class="tdDate text-center" id="th_2019-04">Avril</th>
                            <th colspan="31" class="tdDate text-center" id="th_2019-05">Mai</th>
                            <th colspan="30" class="tdDate text-center" id="th_2019-06">Juin</th>
                            <th colspan="31" class="tdDate text-center" id="th_2019-07">Juillet</th>
                            <th colspan="31" class="tdDate text-center" id="th_2019-08">Août</th>
                            <th colspan="30" class="tdDate text-center" id="th_2019-09">Septembre</th>
                            <th colspan="31" class="tdDate text-center" id="th_2019-10">Octobre</th>
                            <th colspan="30" class="tdDate text-center" id="th_2019-11">Novembre</th>
                            <th colspan="31" class="tdDate text-center" id="th_2019-12">Décembre</th>
                        </tr>
                        <tr>
                            <!-- janvier -->
                            <th class="tdDate" id="th_2019-01-01">01</th><th class="tdDate" id="th_2019-01-02">02</th><th class="tdDate" id="th_2019-01-03">03</th><th class="tdDate" id="th_2019-01-04">04</th><th class="tdDate" id="th_2019-01-05">05</th>
                            <th class="tdDate" id="th_2019-01-06">06</th><th class="tdDate" id="th_2019-01-07">07</th><th class="tdDate" id="th_2019-01-08">08</th><th class="tdDate" id="th_2019-01-09">09</th><th class="tdDate" id="th_2019-01-10">10</th>
                            <th class="tdDate" id="th_2019-01-11">11</th><th class="tdDate" id="th_2019-01-12">12</th><th class="tdDate" id="th_2019-01-13">13</th><th class="tdDate" id="th_2019-01-14">14</th><th class="tdDate" id="th_2019-01-15">15</th>
                            <th class="tdDate" id="th_2019-01-16">16</th><th class="tdDate" id="th_2019-01-17">17</th><th class="tdDate" id="th_2019-01-18">18</th><th class="tdDate" id="th_2019-01-19">19</th><th class="tdDate" id="th_2019-01-20">20</th>
                            <th class="tdDate" id="th_2019-01-21">21</th><th class="tdDate" id="th_2019-01-22">22</th><th class="tdDate" id="th_2019-01-23">23</th><th class="tdDate" id="th_2019-01-24">24</th><th class="tdDate" id="th_2019-01-25">25</th>
                            <th class="tdDate" id="th_2019-01-26">26</th><th class="tdDate" id="th_2019-01-27">27</th><th class="tdDate" id="th_2019-01-28">28</th><th class="tdDate" id="th_2019-01-29">29</th><th class="tdDate" id="th_2019-01-30">30</th><th class="tdDate" id="th_2019-01-31">31</th>
                            <!-- février -->
                            <th class="tdDate" id="th_2019-02-01">01</th><th class="tdDate" id="th_2019-02-02">02</th><th class="tdDate" id="th_2019-02-03">03</th><th class="tdDate" id="th_2019-02-04">04</th><th class="tdDate" id="th_2019-02-05">05</th>
                            <th class="tdDate" id="th_2019-02-06">06</th><th class="tdDate" id="th_2019-02-07">07</th><th class="tdDate" id="th_2019-02-08">08</th><th class="tdDate" id="th_2019-02-09">09</th><th class="tdDate" id="th_2019-02-10">10</th>
                            <th class="tdDate" id="th_2019-02-11">11</th><th class="tdDate" id="th_2019-02-12">12</th><th class="tdDate" id="th_2019-02-13">13</th><th class="tdDate" id="th_2019-02-14">14</th><th class="tdDate" id="th_2019-02-15">15</th>
                            <th class="tdDate" id="th_2019-02-16">16</th><th class="tdDate" id="th_2019-02-17">17</th><th class="tdDate" id="th_2019-02-18">18</th><th class="tdDate" id="th_2019-02-19">19</th><th class="tdDate" id="th_2019-02-20">20</th>
                            <th class="tdDate" id="th_2019-02-21">21</th><th class="tdDate" id="th_2019-02-22">22</th><th class="tdDate" id="th_2019-02-23">23</th><th class="tdDate" id="th_2019-02-24">24</th><th class="tdDate" id="th_2019-02-25">25</th>
                            <th class="tdDate" id="th_2019-02-26">26</th><th class="tdDate" id="th_2019-02-27">27</th><th class="tdDate" id="th_2019-02-28">28</th>
                            <!-- mars -->
                            <th class="tdDate" id="th_2019-03-01">01</th><th class="tdDate" id="th_2019-03-02">02</th><th class="tdDate" id="th_2019-03-03">03</th><th class="tdDate" id="th_2019-03-04">04</th><th class="tdDate" id="th_2019-03-05">05</th>
                            <th class="tdDate" id="th_2019-03-06">06</th><th class="tdDate" id="th_2019-03-07">07</th><th class="tdDate" id="th_2019-03-08">08</th><th class="tdDate" id="th_2019-03-09">09</th><th class="tdDate" id="th_2019-03-10">10</th>
                            <th class="tdDate" id="th_2019-03-11">11</th><th class="tdDate" id="th_2019-03-12">12</th><th class="tdDate" id="th_2019-03-13">13</th><th class="tdDate" id="th_2019-03-14">14</th><th class="tdDate" id="th_2019-03-15">15</th>
                            <th class="tdDate" id="th_2019-03-16">16</th><th class="tdDate" id="th_2019-03-17">17</th><th class="tdDate" id="th_2019-03-18">18</th><th class="tdDate" id="th_2019-03-19">19</th><th class="tdDate" id="th_2019-03-20">20</th>
                            <th class="tdDate" id="th_2019-03-21">21</th><th class="tdDate" id="th_2019-03-22">22</th><th class="tdDate" id="th_2019-03-23">23</th><th class="tdDate" id="th_2019-03-24">24</th><th class="tdDate" id="th_2019-03-25">25</th>
                            <th class="tdDate" id="th_2019-03-26">26</th><th class="tdDate" id="th_2019-03-27">27</th><th class="tdDate" id="th_2019-03-28">28</th><th class="tdDate" id="th_2019-03-29">29</th><th class="tdDate" id="th_2019-03-30">30</th><th class="tdDate" id="th_2019-03-31">31</th>
                            <!-- avril -->
                            <th class="tdDate" id="th_2019-04-01">01</th><th class="tdDate" id="th_2019-04-02">02</th><th class="tdDate" id="th_2019-04-03">03</th><th class="tdDate" id="th_2019-04-04">04</th><th class="tdDate" id="th_2019-04-05">05</th>
                            <th class="tdDate" id="th_2019-04-06">06</th><th class="tdDate" id="th_2019-04-07">07</th><th class="tdDate" id="th_2019-04-08">08</th><th class="tdDate" id="th_2019-04-09">09</th><th class="tdDate" id="th_2019-04-10">10</th>
                            <th class="tdDate" id="th_2019-04-11">11</th><th class="tdDate" id="th_2019-04-12">12</th><th class="tdDate" id="th_2019-04-13">13</th><th class="tdDate" id="th_2019-04-14">14</th><th class="tdDate" id="th_2019-04-15">15</th>
                            <th class="tdDate" id="th_2019-04-16">16</th><th class="tdDate" id="th_2019-04-17">17</th><th class="tdDate" id="th_2019-04-18">18</th><th class="tdDate" id="th_2019-04-19">19</th><th class="tdDate" id="th_2019-04-20">20</th>
                            <th class="tdDate" id="th_2019-04-21">21</th><th class="tdDate" id="th_2019-04-22">22</th><th class="tdDate" id="th_2019-04-23">23</th><th class="tdDate" id="th_2019-04-24">24</th><th class="tdDate" id="th_2019-04-25">25</th>
                            <th class="tdDate" id="th_2019-04-26">26</th><th class="tdDate" id="th_2019-04-27">27</th><th class="tdDate" id="th_2019-04-28">28</th><th class="tdDate" id="th_2019-04-29">29</th><th class="tdDate" id="th_2019-04-30">30</th>
                            <!-- mai -->
                            <th class="tdDate" id="th_2019-05-01">01</th><th class="tdDate" id="th_2019-05-02">02</th><th class="tdDate" id="th_2019-05-03">03</th><th class="tdDate" id="th_2019-05-04">04</th><th class="tdDate" id="th_2019-05-05">05</th>
                            <th class="tdDate" id="th_2019-05-06">06</th><th class="tdDate" id="th_2019-05-07">07</th><th class="tdDate" id="th_2019-05-08">08</th><th class="tdDate" id="th_2019-05-09">09</th><th class="tdDate" id="th_2019-05-10">10</th>
                            <th class="tdDate" id="th_2019-05-11">11</th><th class="tdDate" id="th_2019-05-12">12</th><th class="tdDate" id="th_2019-05-13">13</th><th class="tdDate" id="th_2019-05-14">14</th><th class="tdDate" id="th_2019-05-15">15</th>
                            <th class="tdDate" id="th_2019-05-16">16</th><th class="tdDate" id="th_2019-05-17">17</th><th class="tdDate" id="th_2019-05-18">18</th><th class="tdDate" id="th_2019-05-19">19</th><th class="tdDate" id="th_2019-05-20">20</th>
                            <th class="tdDate" id="th_2019-05-21">21</th><th class="tdDate" id="th_2019-05-22">22</th><th class="tdDate" id="th_2019-05-23">23</th><th class="tdDate" id="th_2019-05-24">24</th><th class="tdDate" id="th_2019-05-25">25</th>
                            <th class="tdDate" id="th_2019-05-26">26</th><th class="tdDate" id="th_2019-05-27">27</th><th class="tdDate" id="th_2019-05-28">28</th><th class="tdDate" id="th_2019-05-29">29</th><th class="tdDate" id="th_2019-05-30">30</th><th class="tdDate" id="th_2019-05-31">31</th>
                            <!-- juin -->
                            <th class="tdDate" id="th_2019-06-01">01</th><th class="tdDate" id="th_2019-06-02">02</th><th class="tdDate" id="th_2019-06-03">03</th><th class="tdDate" id="th_2019-06-04">04</th><th class="tdDate" id="th_2019-06-05">05</th>
                            <th class="tdDate" id="th_2019-06-06">06</th><th class="tdDate" id="th_2019-06-07">07</th><th class="tdDate" id="th_2019-06-08">08</th><th class="tdDate" id="th_2019-06-09">09</th><th class="tdDate" id="th_2019-06-10">10</th>
                            <th class="tdDate" id="th_2019-06-11">11</th><th class="tdDate" id="th_2019-06-12">12</th><th class="tdDate" id="th_2019-06-13">13</th><th class="tdDate" id="th_2019-06-14">14</th><th class="tdDate" id="th_2019-06-15">15</th>
                            <th class="tdDate" id="th_2019-06-16">16</th><th class="tdDate" id="th_2019-06-17">17</th><th class="tdDate" id="th_2019-06-18">18</th><th class="tdDate" id="th_2019-06-19">19</th><th class="tdDate" id="th_2019-06-20">20</th>
                            <th class="tdDate" id="th_2019-06-21">21</th><th class="tdDate" id="th_2019-06-22">22</th><th class="tdDate" id="th_2019-06-23">23</th><th class="tdDate" id="th_2019-06-24">24</th><th class="tdDate" id="th_2019-06-25">25</th>
                            <th class="tdDate" id="th_2019-06-26">26</th><th class="tdDate" id="th_2019-06-27">27</th><th class="tdDate" id="th_2019-06-28">28</th><th class="tdDate" id="th_2019-06-29">29</th><th class="tdDate" id="th_2019-06-30">30</th>
                            <!-- juillet -->
                            <th class="tdDate" id="th_2019-07-01">01</th><th class="tdDate" id="th_2019-07-02">02</th><th class="tdDate" id="th_2019-07-03">03</th><th class="tdDate" id="th_2019-07-04">04</th><th class="tdDate" id="th_2019-07-05">05</th>
                            <th class="tdDate" id="th_2019-07-06">06</th><th class="tdDate" id="th_2019-07-07">07</th><th class="tdDate" id="th_2019-07-08">08</th><th class="tdDate" id="th_2019-07-09">09</th><th class="tdDate" id="th_2019-07-10">10</th>
                            <th class="tdDate" id="th_2019-07-11">11</th><th class="tdDate" id="th_2019-07-12">12</th><th class="tdDate" id="th_2019-07-13">13</th><th class="tdDate" id="th_2019-07-14">14</th><th class="tdDate" id="th_2019-07-15">15</th>
                            <th class="tdDate" id="th_2019-07-16">16</th><th class="tdDate" id="th_2019-07-17">17</th><th class="tdDate" id="th_2019-07-18">18</th><th class="tdDate" id="th_2019-07-19">19</th><th class="tdDate" id="th_2019-07-20">20</th>
                            <th class="tdDate" id="th_2019-07-21">21</th><th class="tdDate" id="th_2019-07-22">22</th><th class="tdDate" id="th_2019-07-23">23</th><th class="tdDate" id="th_2019-07-24">24</th><th class="tdDate" id="th_2019-07-25">25</th>
                            <th class="tdDate" id="th_2019-07-26">26</th><th class="tdDate" id="th_2019-07-27">27</th><th class="tdDate" id="th_2019-07-28">28</th><th class="tdDate" id="th_2019-07-29">29</th><th class="tdDate" id="th_2019-07-30">30</th><th class="tdDate" id="th_2019-07-31">31</th>
                            <!-- août -->
                            <th class="tdDate" id="th_2019-08-01">01</th><th class="tdDate" id="th_2019-08-02">02</th><th class="tdDate" id="th_2019-08-03">03</th><th class="tdDate" id="th_2019-08-04">04</th><th class="tdDate" id="th_2019-08-05">05</th>
                            <th class="tdDate" id="th_2019-08-06">06</th><th class="tdDate" id="th_2019-08-07">07</th><th class="tdDate" id="th_2019-08-08">08</th><th class="tdDate" id="th_2019-08-09">09</th><th class="tdDate" id="th_2019-08-10">10</th>
                            <th class="tdDate" id="th_2019-08-11">11</th><th class="tdDate" id="th_2019-08-12">12</th><th class="tdDate" id="th_2019-08-13">13</th><th class="tdDate" id="th_2019-08-14">14</th><th class="tdDate" id="th_2019-08-15">15</th>
                            <th class="tdDate" id="th_2019-08-16">16</th><th class="tdDate" id="th_2019-08-17">17</th><th class="tdDate" id="th_2019-08-18">18</th><th class="tdDate" id="th_2019-08-19">19</th><th class="tdDate" id="th_2019-08-20">20</th>
                            <th class="tdDate" id="th_2019-08-21">21</th><th class="tdDate" id="th_2019-08-22">22</th><th class="tdDate" id="th_2019-08-23">23</th><th class="tdDate" id="th_2019-08-24">24</th><th class="tdDate" id="th_2019-08-25">25</th>
                            <th class="tdDate" id="th_2019-08-26">26</th><th class="tdDate" id="th_2019-08-27">27</th><th class="tdDate" id="th_2019-08-28">28</th><th class="tdDate" id="th_2019-08-29">29</th><th class="tdDate" id="th_2019-08-30">30</th><th class="tdDate" id="th_2019-08-31">31</th>
                            <!-- septembre -->
                            <th class="tdDate" id="th_2019-09-01">01</th><th class="tdDate" id="th_2019-09-02">02</th><th class="tdDate" id="th_2019-09-03">03</th><th class="tdDate" id="th_2019-09-04">04</th><th class="tdDate" id="th_2019-09-05">05</th>
                            <th class="tdDate" id="th_2019-09-06">06</th><th class="tdDate" id="th_2019-09-07">07</th><th class="tdDate" id="th_2019-09-08">08</th><th class="tdDate" id="th_2019-09-09">09</th><th class="tdDate" id="th_2019-09-10">10</th>
                            <th class="tdDate" id="th_2019-09-11">11</th><th class="tdDate" id="th_2019-09-12">12</th><th class="tdDate" id="th_2019-09-13">13</th><th class="tdDate" id="th_2019-09-14">14</th><th class="tdDate" id="th_2019-09-15">15</th>
                            <th class="tdDate" id="th_2019-09-16">16</th><th class="tdDate" id="th_2019-09-17">17</th><th class="tdDate" id="th_2019-09-18">18</th><th class="tdDate" id="th_2019-09-19">19</th><th class="tdDate" id="th_2019-09-20">20</th>
                            <th class="tdDate" id="th_2019-09-21">21</th><th class="tdDate" id="th_2019-09-22">22</th><th class="tdDate" id="th_2019-09-23">23</th><th class="tdDate" id="th_2019-09-24">24</th><th class="tdDate" id="th_2019-09-25">25</th>
                            <th class="tdDate" id="th_2019-09-26">26</th><th class="tdDate" id="th_2019-09-27">27</th><th class="tdDate" id="th_2019-09-28">28</th><th class="tdDate" id="th_2019-09-29">29</th><th class="tdDate" id="th_2019-09-30">30</th>
                            <!-- octobre -->
                            <th class="tdDate" id="th_2019-10-01">01</th><th class="tdDate" id="th_2019-10-02">02</th><th class="tdDate" id="th_2019-10-03">03</th><th class="tdDate" id="th_2019-10-04">04</th><th class="tdDate" id="th_2019-10-05">05</th>
                            <th class="tdDate" id="th_2019-10-06">06</th><th class="tdDate" id="th_2019-10-07">07</th><th class="tdDate" id="th_2019-10-08">08</th><th class="tdDate" id="th_2019-10-09">09</th><th class="tdDate" id="th_2019-10-10">10</th>
                            <th class="tdDate" id="th_2019-10-11">11</th><th class="tdDate" id="th_2019-10-12">12</th><th class="tdDate" id="th_2019-10-13">13</th><th class="tdDate" id="th_2019-10-14">14</th><th class="tdDate" id="th_2019-10-15">15</th>
                            <th class="tdDate" id="th_2019-10-16">16</th><th class="tdDate" id="th_2019-10-17">17</th><th class="tdDate" id="th_2019-10-18">18</th><th class="tdDate" id="th_2019-10-19">19</th><th class="tdDate" id="th_2019-10-20">20</th>
                            <th class="tdDate" id="th_2019-10-21">21</th><th class="tdDate" id="th_2019-10-22">22</th><th class="tdDate" id="th_2019-10-23">23</th><th class="tdDate" id="th_2019-10-24">24</th><th class="tdDate" id="th_2019-10-25">25</th>
                            <th class="tdDate" id="th_2019-10-26">26</th><th class="tdDate" id="th_2019-10-27">27</th><th class="tdDate" id="th_2019-10-28">28</th><th class="tdDate" id="th_2019-10-29">29</th><th class="tdDate" id="th_2019-10-30">30</th><th class="tdDate" id="th_2019-10-31">31</th>
                            <!-- novembre -->
                            <th class="tdDate" id="th_2019-11-01">01</th><th class="tdDate" id="th_2019-11-02">02</th><th class="tdDate" id="th_2019-11-03">03</th><th class="tdDate" id="th_2019-11-04">04</th><th class="tdDate" id="th_2019-11-05">05</th>
                            <th class="tdDate" id="th_2019-11-06">06</th><th class="tdDate" id="th_2019-11-07">07</th><th class="tdDate" id="th_2019-11-08">08</th><th class="tdDate" id="th_2019-11-09">09</th><th class="tdDate" id="th_2019-11-10">10</th>
                            <th class="tdDate" id="th_2019-11-11">11</th><th class="tdDate" id="th_2019-11-12">12</th><th class="tdDate" id="th_2019-11-13">13</th><th class="tdDate" id="th_2019-11-14">14</th><th class="tdDate" id="th_2019-11-15">15</th>
                            <th class="tdDate" id="th_2019-11-16">16</th><th class="tdDate" id="th_2019-11-17">17</th><th class="tdDate" id="th_2019-11-18">18</th><th class="tdDate" id="th_2019-11-19">19</th><th class="tdDate" id="th_2019-11-20">20</th>
                            <th class="tdDate" id="th_2019-11-21">21</th><th class="tdDate" id="th_2019-11-22">22</th><th class="tdDate" id="th_2019-11-23">23</th><th class="tdDate" id="th_2019-11-24">24</th><th class="tdDate" id="th_2019-11-25">25</th>
                            <th class="tdDate" id="th_2019-11-26">26</th><th class="tdDate" id="th_2019-11-27">27</th><th class="tdDate" id="th_2019-11-28">28</th><th class="tdDate" id="th_2019-11-29">29</th><th class="tdDate" id="th_2019-11-30">30</th>
                            <!-- décembre -->
                            <th class="tdDate" id="th_2019-12-01">01</th><th class="tdDate" id="th_2019-12-02">02</th><th class="tdDate" id="th_2019-12-03">03</th><th class="tdDate" id="th_2019-12-04">04</th><th class="tdDate" id="th_2019-12-05">05</th>
                            <th class="tdDate" id="th_2019-12-06">06</th><th class="tdDate" id="th_2019-12-07">07</th><th class="tdDate" id="th_2019-12-08">08</th><th class="tdDate" id="th_2019-12-09">09</th><th class="tdDate" id="th_2019-12-10">10</th>
                            <th class="tdDate" id="th_2019-12-11">11</th><th class="tdDate" id="th_2019-12-12">12</th><th class="tdDate" id="th_2019-12-13">13</th><th class="tdDate" id="th_2019-12-14">14</th><th class="tdDate" id="th_2019-12-15">15</th>
                            <th class="tdDate" id="th_2019-12-16">16</th><th class="tdDate" id="th_2019-12-17">17</th><th class="tdDate" id="th_2019-12-18">18</th><th class="tdDate" id="th_2019-12-19">19</th><th class="tdDate" id="th_2019-12-20">20</th>
                            <th class="tdDate" id="th_2019-12-21">21</th><th class="tdDate" id="th_2019-12-22">22</th><th class="tdDate" id="th_2019-12-23">23</th><th class="tdDate" id="th_2019-12-24">24</th><th class="tdDate" id="th_2019-12-25">25</th>
                            <th class="tdDate" id="th_2019-12-26">26</th><th class="tdDate" id="th_2019-12-27">27</th><th class="tdDate" id="th_2019-12-28">28</th><th class="tdDate" id="th_2019-12-29">29</th><th class="tdDate" id="th_2019-12-30">30</th><th class="tdDate" id="th_2019-12-31">31</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="dateRow"><!-- Ligne rempli par le fichier javascript --></tr>
                    </tbody>
                </table>

                <!-- Popup de modification d'un congé -->
                <div class="form-popup" id="formLeave">
                        <span id="popupCreateButton" style="cursor:pointer">Ajouter</span>
                        <span id="popupEditButton" style="cursor:pointer">Modifier</span>
                        <span id="popupDeleteButton" style="cursor:pointer">Supprimer</span>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include('footer.php'); ?>

<script src="js/employee.js"></script>