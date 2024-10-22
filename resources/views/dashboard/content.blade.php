@extends('dashboard.leaderboard')
@section('main')
<div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{route('leader')}}" class="nav_logo">
                    <img src="img/logotelkomsel.png" alt="" width="25">
                    <span class="nav_logo-name">Telkomsel</span>
                </a>
                <div class="nav_list">
                    <a href="{{route('leader')}}" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bi bi-people nav_icon"></i>
                        <span class="nav_name">Users</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>
            </div>
            <a href="{{route('login')}}" class="nav_link">
                <img src="assets/images/faces/2.jpg" width="26" class="rounded-circle" alt="User Avatar">
                <span class="nav_name">Login</span>
            </a>
        </nav>
    </div>
<div class="content">
        <div class="page-header">
            <div class="row text-center">
                <div class="col-12 mt-4">
                    <h3 style="font-weight: 700; color:#25396f;">Walk & Run Challenge Q4 2024 T-Flyers Jateng DIY</h3>
                    <p class="text-muted">Start At: 01 Oktober 2024 | 00:00 - End At: 31 Desember 2024 | 23:59</p>
                    <div class="clock-container mt-5">
                        <div class="clock"></div>
                    </div>
                    <marquee width="400" scrollamount="1000" scrolldelay="11000" class="justify-content-center">
                        <h5 style="color:#1B1A55;" class="justify-content-center"><i>Update Data Every 09:00 Pagi
                                dan 21:00 Malam</i></h5>
                    </marquee>
                </div>
            </div>
        </div>


        {{-- Kategori Personal --}}
        <section class="row">
            <div class="col-12 col-lg-8 mb-3">
                <!-- Personal Category Section -->
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-bottom p-3">
                                <h4 class="fw-bold" style="color:#25396f;">Personal Category</h4>
                            </div>
                            <div class="card-header bg-white mb-3 text-center">
                                <!-- Personal Stats -->
                                <div class="row text-center justify-content-center mb-4">
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Fastest</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Kilometer</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Durable</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Active</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Kalori</span>
                                    </div>
                                </div>
                                <!-- Medals Images -->
                                <div class="row text-center justify-content-center mb-4">
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                </div>

                                <hr style="border-top: 2px solid #333; width: 80%; margin: 20px auto;">

                                <h2 align="center" style="color:#1fc5c5; font-size: 18px; font-weight: bold;">
                                    Winners from each category
                                </h2>
                            </div>

                            <div class="card-body">
                                <div class="container">
                                    <div class="row text-center justify-content-center">
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background:#435ebe; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 1</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #198754; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 2</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #dc3545; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 3</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #8E24AA; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 4</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #6c757d; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Quotes Section -->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Quotes</h4>
                    </div>
                    <div class="card-content pb-4">
                        <blockquote class="blockquote text-center fw-bold mt-5">
                            <p class="mb-0">"{{ $quote->quotes}}"</p>
                        </blockquote>
                    </div>
                </div>

                <!-- Visitor Section -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Visitor</h4>
                    </div>
                    <div class="card-content pb-4">
                        <blockquote class="blockquote text-center fw-bold mt-5">
                            <h5><img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Today: 8
                                Visitors</h5>
                            <h5> <img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Yesterday : 18 Visitors</h5>
                            <h5><img src="https://img.icons8.com/color/30/null/group.png"> Total Visitor : 1122 Visitors
                            </h5>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Quotes</h4>
                    </div>
                    <div class="card-content pb-4">
                        <blockquote class="blockquote text-center fw-bold mt-5">
                            <p class="mb-0">"{{ $quote->quotes}}"</p>
                        </blockquote>
                    </div>
                </div>

                <!-- Visitor Section -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Visitor</h4>
                    </div>
                    <div class="card-content pb-4">
                        <blockquote class="blockquote text-center fw-bold mt-5">
                            <h5><img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Today: 8
                                Visitors</h5>
                            <h5> <img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Yesterday : 18 Visitors</h5>
                            <h5><img src="https://img.icons8.com/color/30/null/group.png"> Total Visitor : 1122 Visitors
                            </h5>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8 mt-3">
                <div class="card p-3">

                    <table id="example" class="table table-striped bg-light" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009-01-12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012-03-29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008-11-28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012-12-02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012-08-06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010-10-14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009-09-15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008-12-13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008-12-19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013-03-03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008-10-16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012-12-18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010-03-17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012-11-27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010-06-09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009-04-10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012-10-13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012-09-26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011-09-03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009-06-25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011-12-12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sydney</td>
                                <td>23</td>
                                <td>2010-09-20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009-10-09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010-12-22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010-11-14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011-06-07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010-03-11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011-08-14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sydney</td>
                                <td>37</td>
                                <td>2011-06-02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009-10-22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011-05-07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008-10-26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011-03-09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009-12-09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008-12-16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010-02-12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009-02-14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008-12-11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008-09-26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011-02-03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011-05-03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009-08-19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013-08-11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009-07-07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012-04-09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010-01-04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012-06-01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013-02-01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011-12-06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011-03-21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009-02-27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010-07-14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008-11-13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011-06-27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011-01-25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>


    </div>
@endsection