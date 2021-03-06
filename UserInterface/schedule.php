<?php
$path ='./';
$page = 'Schedule';
include $path.'assets/inc/header.php'
?>

        <section id="main-content" class="main-content">
            <div class="main-content-intro">
            </div>
            <div class="main-content-theme">
                <h3>Schedule</h3>

                <div class="tab">
                    <button class="tablinks" onclick="openDay(event, 'Monday')">Monday</button>
                    <button class="tablinks" onclick="openDay(event, 'Tuesday')">Tuesday</button>
                    <button class="tablinks" onclick="openDay(event, 'Wednesday')">Wednesday</button>
                    <button class="tablinks" onclick="openDay(event, 'Thursday')">Thursday</button>
                    <button class="tablinks" onclick="openDay(event, 'Friday')">Friday</button>
                    <button class="tablinks" onclick="openDay(event, 'Saturday')">Saturday</button>
                    <button class="tablinks" onclick="openDay(event, 'Sunday')">Sunday</button>
                </div>
                <div class="schedule-header">

                </div>
                <div id="Monday" class="tabcontent">
                    <h3>Monday</h3>
                    <p>No Events Today!</p>
                </div>
                <div id="Tuesday" class="tabcontent">
                    <h3>Tuesday</h3>
                    <p>No Events Today!</p>
                </div>
                <div id="Wednesday" class="tabcontent">
                    <h3>Wednesday</h3>
                    <p>No Events Today!</p>
                </div>
                <div id="Thursday" class="tabcontent">
                    <h3>Thursday</h3>
                    <p>No Events Today!</p>
                </div>
                <div id="Friday" class="tabcontent">
                    <h3>Friday</h3>

                    <button class="accordion">3:30 - 4:00 PM: Welcome Session</button>
                    <div class="panel">
                        <p>
                            The Organizing Committee of the UPSTAT 2021 conference welcomes each and all of you attending from all round the world. We thank you for joining us for this year???s conference as together we focus on the fascinating yet incredibly challenging theme ???Statistics
                            Serving Social Justice???. Read more about the 2021 theme. We thank our Mother Organization, the American Statistical Association (ASA) for supporting the concerted efforts of this most august organizing committee. In the interest
                            of guaranteed a smooth and pleasant and positively memorable conference for all, I call upon all in attendance to seriously uphold the honorable etiquette of all ASA meetings found at https://www.amstat.org/ASA/Meetings/Meeting-Conduct-Policy.aspx
                            Please be sure to read and familiarize yourself with it.

                            <a href="https://us02web.zoom.us/j/8565804058">https://us02web.zoom.us/j/8565804058</a>
                        </p>
                    </div>

                    <button class="accordion">4:00 - 5:00 PM: Keynote Speakers</button>
                    <div class="panel">
                        <p>
                            Leveraging Criminal Justice Data to Shed Light on Racial and Other Disparities in the System Gipsy Escobar, PhD, Director of Product Strategy (read bio) Sema Taheri, PhD, Director of Research Operation (read bio) Abstract: Common ground is in short supply.
                            The same goes for accountability and transparency. As a result, public trust in the criminal justice system is at an all time low. In this climate, lasting reform is extremely difficult to achieve. Measures for Justice (MFJ)
                            is a non-partisan, non-profit organization with a mission to arm communities and practitioners with their own data to create sustainable solutions to systemic problems in criminal justice. When the public, police, prosecutors,
                            and courts share and trust the same data, those data become the common ground for dialog and reform. Dr. Escobar and Dr. Taheri will discuss an initiative to partner with prosecutor offices across the country to develop a public
                            dashboard where everyone in the community can: (1) track progress toward a shared criminal justice goal; (2) track monthly data on how cases flow through the system; and (3) break down all data by demographics like race and
                            ethnicity, sex, age, indigent status, homelessness, among other things. They will discuss the tools used to turn prosecutor case management data into actionable, measurable information; the challenges of working with criminal
                            justice data; a model for the community and the prosecutor to work together to co-create a joint space for making criminal justice data transparent and shared goals public; and plans to integrate data from other areas of criminal
                            justice, including policing.


                            <a href="https://us02web.zoom.us/j/8565804058">https://us02web.zoom.us/j/8565804058</a>
                        </p>
                    </div>

                    <button class="accordion">5:00 - 6:00 PM: Roundtable Discussion</button>
                    <div class="panel">
                        <p>An expert roundtable on the promises and problems of data science in the service of social justice Moderators:
                            <ul>
                                <li>
                                    Dr John McCluskey, Professor, Department of Criminal Justice, Rochester Institute of Technology
                                </li>
                                <li>
                                    Dr John Handley, University of Rochester
                                </li>
                            </ul>

                            Panelists:
                            <ul>
                                <li>
                                    David Banks, Duke University
                                </li>
                                <li>
                                    Veronica Ciocanel, Duke University
                                </li>
                                <li>
                                    William Cipolli, Colgate University
                                </li>
                                <li>
                                    Gipsy Escobar, Measures For Justice
                                </li>
                                <li>
                                    Arindam Gosh, Office of Criminal Justice Policy (Bexar County Texas)
                                </li>
                                <li>
                                    Nicholas Robertson, Rochester Institute of Technology
                                </li>
                                <li>
                                    Sema Taheri, Measures For Justice
                                </li>
                            </ul>

                            <a href="https://us02web.zoom.us/j/8565804058">https://us02web.zoom.us/j/8565804058 </a>
                        </p>
                    </div>

                </div>

                <div id="Saturday" class="tabcontent">
                    <h3>Saturday</h3>

                    <button class="accordion">39:00 - 10:00 AM: Tutorial 1</button>
                    <div class="panel">
                        <p>
                            Introduction to Python and Pandas for Data Analysis Presenter: Vi Ly This tutorial will be a quick introduction to data analysis with Python and pandas package, using some toy datasets. Attendees of the Python Tutorial will have the option of running
                            the code alongside the presentation. In order to do so, attendees are recommended to download Python & Pandas through Anaconda (it should be free - install the corresponding version for your operating system and use default
                            settings): https://www.anaconda.com/products/individual The code for the tutorial can be downloaded here: https://github.com/viquangly/Training-Materials. During the day of the tutorial, please have the Python Tutorial.ipynb
                            & mpg dataset.csv on your desktop for easy access.

                            <a href="https://us02web.zoom.us/j/8565804058">https://us02web.zoom.us/j/8565804058 </a>
                        </p>
                    </div>

                    <button class="accordion">10:00 - 11:00 AM: Tutorial 2</button>
                    <div class="panel">
                        <p>
                            20 different ways to look at a flower: an introduction to R programming language Presenter: Gregory Babbitt This tutorial will demonstrate 20 different R programming scripts that examine Fisher???s iris dataset in 20 different ways. Methods will range from
                            simple descriptive statistics and hypothesis tests, all the way to machine learning implemented on big data representing a half million flowers. The basics of R programming covered in this tutorial will include package management,
                            data input/output, subset/reshaping data, scientific graphics with ggplot2, and a variety of machine learning packages. Please bring a laptop. All 20+ R scripts are available at this website
                            <a href="https://gbabbitt.github.io/RocASAsamples/">https://gbabbitt.github.io/RocASAsamples/</a>

                            <a href="https://us02web.zoom.us/j/8565804058">https://us02web.zoom.us/j/8565804058 </a>
                        </p>
                    </div>

                    <button class="accordion">11:00 - 12:00 PM: Tutorial 3</button>
                    <div class="panel">
                        <p>
                            Using Jigsaw puzzles to teach feature selection, teamwork, and diversity Presenter: Thomas Kinsman Custom designed jigsaw puzzles were created to teach feature selection to students of Data Science and Computer Vision courses. A team-oriented workshop
                            was developed and presented to students. The jigsaw puzzles cannot be easily solved without using a diverse set of features, hence the importance of having a diverse set. However, the workshop was carefully rigged to prevent
                            any one team member from seeing all of the features, forcing participants to collaborate. Some jigsaw puzzles were printed all one color, making them difficult to solve, and emphasized the need for diverse features and viewpoints
                            to help solve the problem. In the final stage of the workshop, the students were taught a shared solution strategy which drastically improved their solution speed. The workshop curriculum points out analogies to people from
                            diverse backgrounds, who are deaf, and who are colorblind. Participants overwhelmingly reported that this experience helped them understand the importance of a diversity of viewpoints, the importance of combining features,
                            and the importance of teamwork in Data Science and Computer Vision. The students enjoyed this workshop, and learned about feature selection. This workshop reports on the puzzle design, the surprising revelation of how the workshop
                            curriculum was rigged, and the results of the original, multi-year study.
                            <a href="https://us02web.zoom.us/j/8565804058">https://us02web.zoom.us/j/8565804058 </a>
                        </p>
                    </div>

                    <button class="accordion">12:00 - 2:00 PM: Poster Sessions</button>
                    <div class="panel">
                        <p>
                            <a href="https://us02web.zoom.us/j/8565804058">https://us02web.zoom.us/j/8565804058 </a>
                        </p>
                    </div>

                    <button class="accordion">2:00 PM - 2:45 PM Parallel Sessions 1</button>
                    <div class="panel">

                        <button class="sub-accordion"> Social Justice in Housing (Social Justice Track)</button>
                        <div class="sub-panel">
                            <p>
                                Session Organizer/Chair: Trijya Singh
                                <ul>
                                    <li>
                                        Talk 1<br/> Evaluating the Distribution of Hiring and Housing Discrimination Against Black Americans. - Dr. William Cipolli, Colgate University
                                    </li>
                                    <li>
                                        Talk 2<br/> The Impact of Crowded Housing on COVID-19 Transmission Dynamics in New York City - Sara Venkatraman*, Cornell University
                                    </li>
                                    <li>
                                        Talk 3<br/> Ban the Box Policies in Housing and Their Influence on Racial Discrimination - Cheyanne Simpson**, University of St. Thomas (St. Paul)
                                    </li>
                                </ul>
                                <a href="https://us02web.zoom.us/j/9365155985">https://us02web.zoom.us/j/9365155985</a>
                            </p>
                        </div>

                        <button class="sub-accordion"> Analyses of COVID-19 (Applied Work Track)</button>
                        <div class="sub-panel">
                            <p>
                                Session Organizer/Chair: Tony Wong
                                <ul>
                                    <li>
                                        Talk 1 <br/> Betacoronavirus binding dynamics relevant to the functional evolution of the highly transmissible SARS-CoV-2 variant N501Y - Dr. Gregory Alan Babbitt, RIT
                                    </li>
                                    <li>
                                        Talk 2<br/> The "lab bus:" assessing the effectiveness of a mobile community COVID-19 testing facility in reaching underserved areas - Christopher W. Ryan, SUNY Upstate Medical University & Broome County Health
                                        Department
                                    </li>
                                    <li>
                                        Talk 3<br/> Summary of a Year of Work in Covid-19 Statistical Modeling - Dr. Jorge L. Romeu, State University of New York
                                    </li>
                                </ul>
                                <a href="https://us02web.zoom.us/j/9210831432">https://us02web.zoom.us/j/9210831432</a>
                            </p>
                        </div>

                        <button class="sub-accordion"> Bayesian Modeling (Methodological Work Track)</button>
                        <div class="sub-panel">
                            <p>
                                Session Organizer/Chair: Ernest Fokoue
                                <ul>
                                    <li>
                                        Talk 1 <br/> Order-restricted Bayesian Inference and Optimal Designs for the Simple Step-stress Accelerated Life Tests under Progressive Type-I Censoring based on Three-parameter Gamma Prior - Crystal Wiedner*,
                                        University of Texas at San Antonio
                                    </li>
                                    <li>
                                        Talk 2<br/> Bayesian bridge quantile regression for high-dimensional data - Shen Zhang*, University of Texas at San Antonio
                                    </li>
                                    <li>
                                        Talk 3<br/> Bayesian Bradley-Terry Modeling with Multiple Game Outcomes with Applications to European and College Hockey - Jacob Klein*, RIT
                                    </li>
                                </ul>
                                <a href="https://us02web.zoom.us/j/3633738481">https://us02web.zoom.us/j/3633738481</a>
                            </p>
                        </div>

                        <button class="sub-accordion">Applications (General Track)</button>
                        <div class="sub-panel">
                            <p>
                                Session Organizer/Chair: Katherine Grzesik
                                <ul>
                                    <li>
                                        Talk 1 <br/> Multivariate Semiparametric Monitoring Techniques for Mixed-Type Data and Applications to a Patient-Centered Study - Elisavet M. Sofikitou, University at Buffalo
                                    </li>
                                    <li>
                                        Talk 2<br/> Predicting Tax fraud using Supervised Machine Learning approach: Case Study Rwanda - Belle Fille MURORUNKWERE*, African Center of Excellence in Data Science
                                    </li>
                                    <li>
                                        Talk 3<br/> Understand protein structure with statistics - Khoa Hoang**, University of Rochester
                                    </li>
                                </ul>
                                <a href="https://us02web.zoom.us/j/6086982550">https://us02web.zoom.us/j/6086982550</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="Sunday" class="tabcontent">
                    <h3>Sunday</h3>
                    <p>No Events Today!</p>
                </div>
            </div>
    </div>
    </section>
    <!-- <footer class="main-footer">
        <p>
            @2021 UPSTAT created by Team SpideRIT
        </p>
    </footer> -->
    </div>

    <script src="./assets/javascript/script.js"></script>
</body>

</html>
