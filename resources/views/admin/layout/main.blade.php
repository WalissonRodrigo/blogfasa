<!--Main layout-->
<main>
    <div class="container-fluid">

        @yield('content')
        <!--Section: Main panel-->
        <section class="card card-cascade narrower mb-5">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-5">

                    <!--Panel Header-->
                    <div class="view py-3 gradient-card-header info-color-dark">
                        <h5 class="mb-0">Sales</h5>
                    </div>
                    <!--/Panel Header-->

                    <!--Panel content-->
                    <div class="card-body">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6 mb-4">

                                <!--Date select-->
                                <p class="lead">
                                    <span class="badge info-color-dark p-2">Date range</span>
                                </p>
                                <div class="select-wrapper mdb-select colorful-select dropdown-info"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-f1526127-fc64-4929-8d2e-48d828e85091" value="Choose time period">
                                    <ul id="select-options-f1526127-fc64-4929-8d2e-48d828e85091" class="dropdown-content select-dropdown ">
                                        <li class="disabled "><span class="filtrable">Choose time period</span></li>
                                        <li class=""><span class="filtrable">Today</span></li>
                                        <li class=""><span class="filtrable">Yesterday</span></li>
                                        <li class=""><span class="filtrable">Last 7 days</span></li>
                                        <li class=""><span class="filtrable">Last 30 days</span></li>
                                        <li class=""><span class="filtrable">Last week</span></li>
                                        <li class=""><span class="filtrable">Last month</span></li>
                                    </ul><select class="mdb-select colorful-select dropdown-info initialized">
                                        <option value="" disabled="" selected="">Choose time period</option>
                                        <option value="1">Today</option>
                                        <option value="2">Yesterday</option>
                                        <option value="3">Last 7 days</option>
                                        <option value="3">Last 30 days</option>
                                        <option value="3">Last week</option>
                                        <option value="3">Last month</option>
                                    </select></div>

                                <!--Date pickers-->
                                <p class="lead my-4">
                                    <span class="badge info-color-dark p-2">Custom date</span>
                                </p>
                                <div class="md-form">
                                    <input placeholder="Selected date" type="text" id="from" class="form-control datepicker picker__input" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="from_root">
                                    <div class="picker" id="from_root" aria-hidden="true">
                                        <div class="picker__holder" tabindex="-1">
                                            <div class="picker__frame">
                                                <div class="picker__wrap">
                                                    <div class="picker__box">
                                                        <div class="picker__header">
                                                            <div class="picker__date-display">
                                                                <div class="picker__weekday-display">Saturday</div>
                                                                <div class="picker__month-display">
                                                                    <div>Nov</div>
                                                                </div>
                                                                <div class="picker__day-display">
                                                                    <div>25</div>
                                                                </div>
                                                                <div class="picker__year-display">
                                                                    <div>2017</div>
                                                                </div>
                                                            </div><select class="picker__select--year" disabled="" aria-controls="from_table" title="Select a year"><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option></select>
                                                            <select class="picker__select--month" disabled="" aria-controls="from_table" title="Select a month">
                                                                    <option value="0">January</option>
                                                                    <option value="1">February</option>
                                                                    <option value="2">March</option>
                                                                    <option value="3">April</option>
                                                                    <option value="4">May</option>
                                                                    <option value="5">June</option>
                                                                    <option value="6">July</option>
                                                                    <option value="7">August</option>
                                                                    <option value="8">September</option>
                                                                    <option value="9">October</option>
                                                                    <option value="10" selected="">November</option>
                                                                    <option value="11">December</option>
                                                                    </select>
                                                            <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="from_table" title="Previous month"> </div>
                                                            <div class="picker__nav--next" data-nav="1" role="button" aria-controls="from_table" title="Next month"> </div>
                                                        </div>
                                                        <table class="picker__table" id="from_table" role="grid" aria-controls="from" aria-readonly="true">
                                                            <thead>
                                                                <tr>
                                                                    <th class="picker__weekday" scope="col" title="Sunday">Sun</th>
                                                                    <th class="picker__weekday" scope="col" title="Monday">Mon</th>
                                                                    <th class="picker__weekday" scope="col" title="Tuesday">Tue</th>
                                                                    <th class="picker__weekday" scope="col" title="Wednesday">Wed</th>
                                                                    <th class="picker__weekday" scope="col" title="Thursday">Thu</th>
                                                                    <th class="picker__weekday" scope="col" title="Friday">Fri</th>
                                                                    <th class="picker__weekday" scope="col" title="Saturday">Sat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1509242400000" role="gridcell" aria-label="29 October, 2017">29</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1509328800000" role="gridcell" aria-label="30 October, 2017">30</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1509415200000" role="gridcell" aria-label="31 October, 2017">31</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509501600000" role="gridcell" aria-label="1 November, 2017">1</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509588000000" role="gridcell" aria-label="2 November, 2017">2</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509674400000" role="gridcell" aria-label="3 November, 2017">3</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509760800000" role="gridcell" aria-label="4 November, 2017">4</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509847200000" role="gridcell" aria-label="5 November, 2017">5</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509933600000" role="gridcell" aria-label="6 November, 2017">6</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510020000000" role="gridcell" aria-label="7 November, 2017">7</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510106400000" role="gridcell" aria-label="8 November, 2017">8</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510192800000" role="gridcell" aria-label="9 November, 2017">9</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510279200000" role="gridcell" aria-label="10 November, 2017">10</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510365600000" role="gridcell" aria-label="11 November, 2017">11</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510452000000" role="gridcell" aria-label="12 November, 2017">12</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510538400000" role="gridcell" aria-label="13 November, 2017">13</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510624800000" role="gridcell" aria-label="14 November, 2017">14</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510711200000" role="gridcell" aria-label="15 November, 2017">15</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510797600000" role="gridcell" aria-label="16 November, 2017">16</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510884000000" role="gridcell" aria-label="17 November, 2017">17</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510970400000" role="gridcell" aria-label="18 November, 2017">18</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511056800000" role="gridcell" aria-label="19 November, 2017">19</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511143200000" role="gridcell" aria-label="20 November, 2017">20</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511229600000" role="gridcell" aria-label="21 November, 2017">21</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511316000000" role="gridcell" aria-label="22 November, 2017">22</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511402400000" role="gridcell" aria-label="23 November, 2017">23</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511488800000" role="gridcell" aria-label="24 November, 2017">24</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1511575200000" role="gridcell" aria-label="25 November, 2017" aria-activedescendant="true">25</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511661600000" role="gridcell" aria-label="26 November, 2017">26</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511748000000" role="gridcell" aria-label="27 November, 2017">27</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511834400000" role="gridcell" aria-label="28 November, 2017">28</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511920800000" role="gridcell" aria-label="29 November, 2017">29</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1512007200000" role="gridcell" aria-label="30 November, 2017">30</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512093600000" role="gridcell" aria-label="1 December, 2017">1</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512180000000" role="gridcell" aria-label="2 December, 2017">2</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512266400000" role="gridcell" aria-label="3 December, 2017">3</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512352800000" role="gridcell" aria-label="4 December, 2017">4</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512439200000" role="gridcell" aria-label="5 December, 2017">5</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512525600000" role="gridcell" aria-label="6 December, 2017">6</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512612000000" role="gridcell" aria-label="7 December, 2017">7</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512698400000" role="gridcell" aria-label="8 December, 2017">8</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512784800000" role="gridcell" aria-label="9 December, 2017">9</div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1511575200000" disabled="" aria-controls="from">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled=""
                                                                aria-controls="from">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="from">Close</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="date-picker-example" class="active">From</label>
                                </div>
                                <div class="md-form">
                                    <input placeholder="Selected date" type="text" id="to" class="form-control datepicker picker__input" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="to_root">
                                    <div class="picker" id="to_root" aria-hidden="true">
                                        <div class="picker__holder" tabindex="-1">
                                            <div class="picker__frame">
                                                <div class="picker__wrap">
                                                    <div class="picker__box">
                                                        <div class="picker__header">
                                                            <div class="picker__date-display">
                                                                <div class="picker__weekday-display">Saturday</div>
                                                                <div class="picker__month-display">
                                                                    <div>Nov</div>
                                                                </div>
                                                                <div class="picker__day-display">
                                                                    <div>25</div>
                                                                </div>
                                                                <div class="picker__year-display">
                                                                    <div>2017</div>
                                                                </div>
                                                            </div><select class="picker__select--year" disabled="" aria-controls="to_table" title="Select a year"><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option></select>
                                                            <select class="picker__select--month" disabled="" aria-controls="to_table" title="Select a month">
                                                                    <option value="0">January</option>
                                                                    <option value="1">February</option>
                                                                    <option value="2">March</option>
                                                                    <option value="3">April</option>
                                                                    <option value="4">May</option>
                                                                    <option value="5">June</option>
                                                                    <option value="6">July</option>
                                                                    <option value="7">August</option>
                                                                    <option value="8">September</option>
                                                                    <option value="9">October</option>
                                                                    <option value="10" selected="">November</option>
                                                                    <option value="11">December</option>
                                                                    </select>
                                                            <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="to_table" title="Previous month"> </div>
                                                            <div class="picker__nav--next" data-nav="1" role="button" aria-controls="to_table" title="Next month"> </div>
                                                        </div>
                                                        <table class="picker__table" id="to_table" role="grid" aria-controls="to" aria-readonly="true">
                                                            <thead>
                                                                <tr>
                                                                    <th class="picker__weekday" scope="col" title="Sunday">Sun</th>
                                                                    <th class="picker__weekday" scope="col" title="Monday">Mon</th>
                                                                    <th class="picker__weekday" scope="col" title="Tuesday">Tue</th>
                                                                    <th class="picker__weekday" scope="col" title="Wednesday">Wed</th>
                                                                    <th class="picker__weekday" scope="col" title="Thursday">Thu</th>
                                                                    <th class="picker__weekday" scope="col" title="Friday">Fri</th>
                                                                    <th class="picker__weekday" scope="col" title="Saturday">Sat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1509242400000" role="gridcell" aria-label="29 October, 2017">29</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1509328800000" role="gridcell" aria-label="30 October, 2017">30</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1509415200000" role="gridcell" aria-label="31 October, 2017">31</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509501600000" role="gridcell" aria-label="1 November, 2017">1</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509588000000" role="gridcell" aria-label="2 November, 2017">2</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509674400000" role="gridcell" aria-label="3 November, 2017">3</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509760800000" role="gridcell" aria-label="4 November, 2017">4</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509847200000" role="gridcell" aria-label="5 November, 2017">5</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1509933600000" role="gridcell" aria-label="6 November, 2017">6</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510020000000" role="gridcell" aria-label="7 November, 2017">7</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510106400000" role="gridcell" aria-label="8 November, 2017">8</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510192800000" role="gridcell" aria-label="9 November, 2017">9</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510279200000" role="gridcell" aria-label="10 November, 2017">10</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510365600000" role="gridcell" aria-label="11 November, 2017">11</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510452000000" role="gridcell" aria-label="12 November, 2017">12</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510538400000" role="gridcell" aria-label="13 November, 2017">13</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510624800000" role="gridcell" aria-label="14 November, 2017">14</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510711200000" role="gridcell" aria-label="15 November, 2017">15</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510797600000" role="gridcell" aria-label="16 November, 2017">16</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510884000000" role="gridcell" aria-label="17 November, 2017">17</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1510970400000" role="gridcell" aria-label="18 November, 2017">18</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511056800000" role="gridcell" aria-label="19 November, 2017">19</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511143200000" role="gridcell" aria-label="20 November, 2017">20</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511229600000" role="gridcell" aria-label="21 November, 2017">21</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511316000000" role="gridcell" aria-label="22 November, 2017">22</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511402400000" role="gridcell" aria-label="23 November, 2017">23</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511488800000" role="gridcell" aria-label="24 November, 2017">24</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1511575200000" role="gridcell" aria-label="25 November, 2017" aria-activedescendant="true">25</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511661600000" role="gridcell" aria-label="26 November, 2017">26</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511748000000" role="gridcell" aria-label="27 November, 2017">27</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511834400000" role="gridcell" aria-label="28 November, 2017">28</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1511920800000" role="gridcell" aria-label="29 November, 2017">29</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1512007200000" role="gridcell" aria-label="30 November, 2017">30</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512093600000" role="gridcell" aria-label="1 December, 2017">1</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512180000000" role="gridcell" aria-label="2 December, 2017">2</div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512266400000" role="gridcell" aria-label="3 December, 2017">3</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512352800000" role="gridcell" aria-label="4 December, 2017">4</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512439200000" role="gridcell" aria-label="5 December, 2017">5</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512525600000" role="gridcell" aria-label="6 December, 2017">6</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512612000000" role="gridcell" aria-label="7 December, 2017">7</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512698400000" role="gridcell" aria-label="8 December, 2017">8</div>
                                                                    </td>
                                                                    <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1512784800000" role="gridcell" aria-label="9 December, 2017">9</div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1511575200000" disabled="" aria-controls="to">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled=""
                                                                aria-controls="to">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="to">Close</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="date-picker-example" class="active">To</label>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-4 text-center">

                                <!--Summary-->
                                <p>Total sales:
                                    <strong>2000$</strong>
                                    <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Total sales in the given period">
                                            <i class="fa fa-question"></i>
                                        </button>
                                </p>
                                <p>Average sales:
                                    <strong>100$</strong>
                                    <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average daily sales in the given period">
                                            <i class="fa fa-question"></i>
                                        </button>
                                </p>

                                <!--Change chart-->
                                <span class="min-chart my-4" id="chart-sales" data-percent="76">
                                        <span class="percent">76</span>
                                <canvas height="110" width="110"></canvas></span>
                                <h5>
                                    <span class="badge green p-2">Change
                                            <i class="fa fa-arrow-circle-up ml-1"></i>
                                        </span>
                                    <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Percentage change compared to the same period in the past">
                                            <i class="fa fa-question"></i>
                                        </button>
                                </h5>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </div>
                    <!--Panel content-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-7">

                    <!--Panel Header-->
                    <div class="view py-3 gradient-card-header info-color-dark mb-4"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"
                            src="./Material Design Bootstrap_files/saved_resource.html"></iframe>

                        <canvas id="lineChart" width="578" height="289" style="display: block; width: 578px; height: 289px;"></canvas>

                    </div>
                    <!--/Card image-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Main panel-->

        <!--Section: Table-->
        <section class="mb-5">

            <!--Top Table UI-->
            <div class="card p-2 mb-5">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-12">

                        <!--Name-->
                        <div class="select-wrapper mdb-select colorful-select dropdown-primary mx-2"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-c0b031f1-b77b-484e-939d-592a825670ad" value="Bulk actions">
                            <ul id="select-options-c0b031f1-b77b-484e-939d-592a825670ad" class="dropdown-content select-dropdown ">
                                <li class="disabled "><span class="filtrable">Bulk actions</span></li>
                                <li class=""><span class="filtrable">Delate</span></li>
                                <li class=""><span class="filtrable">Export</span></li>
                                <li class=""><span class="filtrable">Change segment</span></li>
                            </ul><select class="mdb-select colorful-select dropdown-primary mx-2 initialized">
                                <option value="" disabled="" selected="">Bulk actions</option>
                                <option value="1">Delate</option>
                                <option value="2">Export</option>
                                <option value="3">Change segment</option>
                            </select></div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6">

                        <!--Blue select-->
                        <div class="select-wrapper mdb-select colorful-select dropdown-primary mx-2"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-cef4253c-ac69-4962-81e9-e3d0df89ea67" value="Show only">
                            <ul id="select-options-cef4253c-ac69-4962-81e9-e3d0df89ea67" class="dropdown-content select-dropdown ">
                                <li class="disabled "><span class="filtrable">Show only</span></li>
                                <li class=""><span class="filtrable">All
                                     (2000)
                                </span></li>
                                <li class=""><span class="filtrable">Never opened
                                     (200)
                                </span></li>
                                <li class=""><span class="filtrable">Opened but unanswered
                                     (1800)
                                </span></li>
                                <li class=""><span class="filtrable">Answered
                                     (200)
                                </span></li>
                                <li class=""><span class="filtrable">Unsunscribed
                                     (50)
                                </span></li>
                            </ul><select class="mdb-select colorful-select dropdown-primary mx-2 initialized">
                                <option value="" disabled="" selected="">Show only</option>
                                <option value="1">All
                                     (2000)
                                </option>
                                <option value="2">Never opened
                                     (200)
                                </option>
                                <option value="3">Opened but unanswered
                                     (1800)
                                </option>
                                <option value="4">Answered
                                     (200)
                                </option>
                                <option value="5">Unsunscribed
                                     (50)
                                </option>
                            </select></div>
                        <!--/Blue select-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6">

                        <!--Blue select-->
                        <div class="select-wrapper mdb-select colorful-select dropdown-primary mx-2"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-99686a7c-1e2c-428e-ac46-a3d0cccac83b" value="Filter segments">
                            <ul id="select-options-99686a7c-1e2c-428e-ac46-a3d0cccac83b" class="dropdown-content select-dropdown ">
                                <li class="disabled "><span class="filtrable">Filter segments</span></li>
                                <li class=""><span class="filtrable">Contacts in no segments
                                     (100)
                                </span></li>
                                <li class=""><span class="filtrable">Segment 1
                                     (2000)
                                </span></li>
                                <li class=""><span class="filtrable">Segment 2
                                     (1000)
                                </span></li>
                                <li class=""><span class="filtrable">Segment 3
                                     (4000)
                                </span></li>
                            </ul><select class="mdb-select colorful-select dropdown-primary mx-2 initialized">
                                <option value="" disabled="" selected="">Filter segments</option>
                                <option value="1">Contacts in no segments
                                     (100)
                                </option>
                                <option value="1">Segment 1
                                     (2000)
                                </option>
                                <option value="2">Segment 2
                                     (1000)
                                </option>
                                <option value="3">Segment 3
                                     (4000)
                                </option>
                            </select></div>
                        <!--/Blue select-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6">

                        <form class="form-inline mt-2 ml-2">
                            <input class="form-control my-0 py-0" type="text" placeholder="Search" style="max-width: 150px;">
                            <button class="btn btn-sm btn-info ml-2 px-2 waves-effect waves-light">
                                    <i class="fa fa-search"></i>
                                </button>
                        </form>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
            <!--Top Table UI-->

            <!--Card-->
            <div class="card card-cascade narrower">

                <!--Card header-->
                <div class="view py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">

                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-th-large mt-0"></i>
                            </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-columns mt-0"></i>
                            </button>
                    </div>

                    <a href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html" class="white-text mx-3">Table name</a>

                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-pencil mt-0"></i>
                            </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light" data-toggle="modal" data-target="#modalConfirmDelete">
                                <i class="fa fa-remove mt-0"></i>
                            </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-info-circle mt-0"></i>
                            </button>
                    </div>

                </div>
                <!--/Card header-->

                <!--Card content-->
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox" class="label-table"></label>
                                    </th>
                                    <th class="th-lg">First column</th>
                                    <th class="th-lg">Second column</th>
                                    <th class="th-lg">Third column</th>
                                    <th class="th-lg">Fourth column</th>
                                    <th class="th-lg">Fifth column</th>
                                    <th class="th-lg">Sixth column</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1" class="label-table"></label>
                                    </th>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2" class="label-table"></label>
                                    </th>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3" class="label-table"></label>
                                    </th>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <hr class="my-0">

                    <!--Bottom Table UI-->
                    <div class="d-flex justify-content-between">

                        <!--Name-->
                        <div class="select-wrapper mdb-select colorful-select dropdown-primary mt-2 hidden-md-down"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-06121025-b3a9-4052-b7c2-c80e8b3574f6" value="10 rows">
                            <ul id="select-options-06121025-b3a9-4052-b7c2-c80e8b3574f6" class="dropdown-content select-dropdown ">
                                <li class="disabled "><span class="filtrable">Rows number</span></li>
                                <li class=""><span class="filtrable">10 rows</span></li>
                                <li class=""><span class="filtrable">25 rows</span></li>
                                <li class=""><span class="filtrable">50 rows</span></li>
                                <li class=""><span class="filtrable">100 rows</span></li>
                            </ul><select class="mdb-select colorful-select dropdown-primary mt-2 hidden-md-down initialized">
                                <option value="" disabled="">Rows number</option>
                                <option value="1" selected="">10 rows</option>
                                <option value="2">25 rows</option>
                                <option value="3">50 rows</option>
                                <option value="4">100 rows</option>
                            </select></div>

                        <!--Pagination -->
                        <nav class="my-4">
                            <ul class="pagination pagination-circle pg-blue mb-0">

                                <!--First-->
                                <li class="page-item disabled">
                                    <a class="page-link waves-effect waves-effect">First</a>
                                </li>

                                <!--Arrow left-->
                                <li class="page-item disabled">
                                    <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active">
                                    <a class="page-link waves-effect waves-effect">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">5</a>
                                </li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

                                <!--First-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">Last</a>
                                </li>

                            </ul>
                        </nav>
                        <!--/Pagination -->

                    </div>
                    <!--Bottom Table UI-->

                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->

        </section>
        <!--Section: Table-->

        <!--Section: Accordion-->
        <section class="mb-5">

            <!--Accordion wrapper-->
            <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne">

                        <!--Options-->
                        <div class="dropdown pull-left">
                            <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            <div class="dropdown-menu dropdown-info">
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Add new</a>
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Rename folder</a>
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Delete folder</a>
                            </div>
                        </div>

                        <!-- Heading -->
                        <a id="folder-1" data-toggle="collapse" data-parent="#accordionEx" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mt-1 mb-0">
                                <span>Folder 1</span>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>

                    </div>

                    <!-- Card body -->
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo">

                        <!--Options-->
                        <div class="dropdown pull-left">
                            <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            <div class="dropdown-menu dropdown-info">
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Add new</a>
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Rename folder</a>
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Delete folder</a>
                            </div>
                        </div>

                        <!-- Heading -->
                        <a id="folder-2" data-toggle="collapse" data-parent="#accordionEx" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <h5 class="mt-1 mb-0">
                                <span>Folder 2</span>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>

                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree">

                        <!--Options-->
                        <div class="dropdown pull-left">
                            <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            <div class="dropdown-menu dropdown-info">
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Add new</a>
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Rename folder</a>
                                <a class="dropdown-item" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#">Delete folder</a>
                            </div>
                        </div>

                        <!-- Heading -->
                        <a id="folder-3" data-toggle="collapse" data-parent="#accordionEx" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/jquery/tutorials/bootstrap/tutorial-3/10/index.html#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <h5 class="mt-1 mb-0">
                                <span>Folder 3</span>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
            </div>
            <!--/.Accordion wrapper-->

        </section>
        <!--Section: Accordion-->

    </div>
</main>
<!--Main layout-->