<?php 
/*
Template Name: Frontpage Layout
Template Post Type: post, page, event
*/


get_header();
?>

<body>
    <!-- Page Specific Content -->
    <main>
        <!-- Frontpage Hero Section -->
        <div id="hero-frontpage">
            <!-- Frontpage Navigation -->
            <nav id="main-navigation" class="animated fadeIn delay-1s">
                <div class="container">
                    <ul>
                        <li><a href="#main-navigation" title="Her kan du læse mere om vores uddannelsesmuligheder med speciale i autisme" class="education-menu">Job og uddannelse</a></li>
                        <li><a href="#main-navigation" title="Her kan du læse mere om at skabe et netværk med andre med autisme" class="network-menu">Netværksafdelingen</a></li>
                        <li><a href="#main-navigation" title="Vi står til rådighed med behandling og kurser, du kan læse mere om her" class="counsel-menu">Rådgivning, behandling og kurser</a></li>
                        <li><a href="#main-navigation" title="Læs mere om hvordan vi forsker ydeligere for at skabe et bedre liv for folk med autisme" class="research-menu">Forskning og Udvikling</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="hero-row animated slideInUp delay-1s">
            <div class="navigation-wrapper">
                <div class="container">
                    <nav class="expanded-navigation">
                        <span class="close-menu">
                                <i class="fas fa-times"></i>
                            </span>
                        <ul id="education-navigation">
                            <li class="column-height has-sub-menu"><a href="/stu">Ungdomsuddannelse STU</a>
                                <ul class="sub-menu">
                                    <li><a href="/stu/visitation-maalgruppe">Visitation og målgruppe</a></li>
                                    <li><a href="/stu/besoeg-os">Kom og besøg os</a></li>
                                    <li><a href="/stu/fag-undervisning">Fag og undervisning</a></li>
                                    <li><a href="/stu/statusmoeder">Statusmøder</a></li>
                                    <li><a href="/stu/afslutning-stu">Afslutning af STU</a></li>
                                    <li><a href="/stu/sygdom-ferie-stu">Sygdom og ferie på STU'en</a></li>
                                </ul>
                            </li>
                            <li><a href="/arbejdsevneafklaring">Arbejdsevnearklaring</a></li>
                            <li><a href="/eksternt-erhervsforloeb">Eksternt erhvervsforløb</a></li>
                            <li><a href="/erhervs-uddanelsesmentor">Erhvervs- og uddannelsesmentor</a></li>
                            <li><a href="/special-paagogisk-mentor">Særlig special pædagogisk mentor og coach</a></li>
                            <li><a href="/beskyttet-beskraatigelse">Beskyttet beskræftigelse §103/104</a></li>
                            <li><a href="/dag-tilbud">Dag aktivitetstilbud §104</a></li>
                            <li><a href="/saarbare-kvinder">Særligt tilbud til sårbare kvinder</a></li>
                        </ul>
                        <ul id="network-navigation">
                            <li><a href="/netvaerksgrupper">Netværksgrupper</a></li>
                            <li><a href="/specialpaagogisk-stoette">Specialpædagogisk støtte og vejledning</a></li>
                            <li><a href="/siger-folk-netvaerksafdeling">Det siger folk om netværksafdeling</a></li>
                        </ul>
                        <ul id="counsel-navigation">
                            <li class="has-sub-menu"><a href="/raadgivning">Rådgivning</a>
                                <ul class="sub-menu">
                                    <li><a href="/raadgivning/foraeldreraadgivning">Forældrerådgivning</a></li>
                                    <li><a href="/raadgivning/raadgivning-supervision">Rådgivning og supervision til fagfolk</a></li>
                                    <li><a href="/raadgivning/psykoedukation">Psykoedukation, støtte- og psykologsamtaler</a></li>
                                    <li><a href="/raadgivning/seksualvejledning">Seksualvejledning</a></li>
                                    <li><a href="/raadgivning/telefonraadgivning">Telefonrådgivning</a></li>
                                </ul>
                            </li>
                            <li class="has-sub-menu"><a href="/kursus">Kursus og undervisning</a>
                                <ul class="sub-menu">
                                    <li><a href="/kursus/kursus-undervisning/kursus-katalog">Kursuskatalog</a></li>
                                </ul>
                            </li>
                            <li><a href="/behandling-angst">Behandling af angst og/eller OCD for personer med ASF</a></li>
                            <li><a href="/undervisning-organisationer">Undervisning for organisationer</a></li>
                            <li class="has-sub-menu"><a href="/udredning">Udredning</a>
                                <ul class="sub-menu">
                                    <li><a href="/udredning/psykologisk-funktionsudredning">Psykologisk funktionsudredning</a></li>
                                    <li><a href="/udredning/diagnotisk-udredning">Diagnostisk udredning of afklaring</a></li>
                                    <li><a href="/udredning/udredning-sprog-kommunikation">Udredning af sprog og kommunikation</a></li>
                                    <li><a href="/udredning/neuropsykologisk-udredning">Neuropsykologisk udredning</a></li>
                                    <li><a href="/udredning/paa-vej-til-undersoegelse">På vej til undersøgelse</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="research-navigation">
                            <li><a href="/overordnet-formaal">Overordnet formål med FUA</a></li>
                            <li><a href="/specifikke-maalomraader">Specifikke målområder</a></li>
                            <li><a href="/igangvaarende-projekter">Igangværende projekter</a></li>
                            <li><a href="/afsluttende-projekter">Afsluttede projekter</a></li>
                            <li><a href="/nyt-fra-fagfolk">Nyt fra andre fagfolk</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="education">
                <div class="container shaded">
                    <header class="row heading">
                        <h1>Rådgivning og hjælp til autisme</h1>
                    </header>
                    <div class="row two-column">
                        <article class="counsel">
                            <h2>Når diagnosen er ny</h2>
                            <div class="content">
                                <p>At få stillet diagnosen Autismespektrumforstyrrelser ASF, kan være uoverskueligt for både den berørte borger, såvel som for de pårørende. Autismespektrumforstyrrelse er et livslangt handicap, og indsatsen bør derfor ses
                                    i et langsigtet perspektiv- det gør Center for Autisme.</p>
                                <p>"Når diagnosen er ny" giver en kort præsentation af autismespektrumforstyrrelse som diagnose, samt rådgivning til det videre forløb. </p>
                            </div>
                            <a class="btn" href="counsel-page.html">Læs mere her</a>
                        </article>
                        <article class="education">
                            <h2>Ungdomsuddannelsen STU</h2>
                            <div class="content">
                                <p>Særligt Tilrettelagt Ungdomsuddannelse er muligheder for dig. Center for Autismes STU, er en ungdomsuddannelse for autister og normaltbegavede unge med ASF, i alderen 16-25 år.
                                </p>
                                <p>CFA bygger bro mellem skole og voksentilværelse, og forbereder den unge på, at begynde videre uddannelse, arbejde eller anden beskæftigelse. <br>
                                </p>
                                <p>Er du interesseret i en plads på vores STU, så book venligst en tid på nedenstående mail eller telefonnummer.
                                </p>
                                <p>Kontakt os på telefon <a href="callto:30708185">30 70 81 85</a> eller mail til <a href="mailto:lac@centerforautisme.dk">lac@centerforautisme.dk</a></p>
                            </div>
                            <a class="btn" href="education-page.html">Læs mere her</a>
                        </article>
                    </div>
                </div>
            </div>

            <section class="call-to-action">
                <div class="container">
                    <article>
                        <h3>Samværs- og aktivitetstilbud (§104) for unge</h3>
                        <p>Tilbuddet tilbyder aktiviteter, der ud over at give deltagerne indhold i deres dagligdag også giver dem mulighed for personlig udvikling og socialt samvær. Med ligesindede, i tydelige og strukturerede rammer.</p>
                    </article>
                    <a href="education-page.html" class="btn">Læs mere her</a>
                </div>
            </section>

            <div class="row colored counsel">
                <div class="container">
                    <div class="row counsel-primary">
                        <article>
                            <h2>Rådgivning</h2>
                            <p>Center for Autisme tilbyder rådgivning indenfor autisme spektrum forstyrrelser ASF. I form af rådgivning, samtaler, vejledning og supervision både til forældre og pårørende og til børn og unge. CFA tilbyder også vejledning
                                og supervision til professionelle, som arbejder med ASF. </p>
                            <p>
                                Kontakt os på <a href="callto:78100436">78 10 04 36</a> eller <a href="lkp@centerforautisme.dk">lkp@centerforautisme.dk </a></p>
                            <a class="btn" href="counsel-page.html">Læs mere her</a>
                        </article>
                        <figure>
                            <img src="/center-for-autisme/wp-content/themes/cfa/assets/images/counsel-image.jpg" alt="Billede af vores rådgivning i Center for Autisme" title="Billede af vores rådgivning i Center for Autisme" />
                        </figure>
                        <span class="ribbon-shadow animation"><span class="ribbon"></span>
                    </div>
                    <div class="row services">
                        <h2>Center for Autisme kurser</h2>
                        <section>
                            <article>
                                <p>CFA afholder kurser inden for autisme. Vores oplægsholdere har stor erfaring og viden inden for autismeområdet. Vi formidler vores viden om autisme gennem inspirerende eksempler fra hverdagen, som medvirker til at skabe
                                    forståelse for, hvad det betyder at have en autismespektrumforstyrrelse ASF.</p>
                                <p>
                                    Vi udbyder også skræddersyet undervisning, til lige netop din organisation.
                                </p>
                                <a class="btn" href="counsel-page.html">Læs mere</a>
                            </article>
                            <article>
                                <ol>
                                    <li><a href="counsel-page.html">Møde vedr. gruppeforløb for forældre til døtre med ASF i alderen 11-14 år</a></li>
                                    <li><a href="counsel-page.html">Grundkursus om ASF - for fagpersoner</a></li>
                                    <li><a href="counsel-page.html">Angst og isolation, herunder skolevægring, hos børn, unge og voksne med ASF - for fagpersoner</a></li>
                                    <li><a href="counsel-page.html">Kursus om piger med en ASF diagnose - for forældre og fagpersoner</a></li>

                                </ol>
                                <a class="btn" href="counsel-page.html">Se flere kurser</a>
                            </article>
                        </section>
                    </div>
                </div>
            </div>


            <div class="row research">
                <div class="container">
                    <h2>Forskning og Udvikling</h2>
                    <section>
                        <article>
                            <h3>Formål og målområder med FUA</h3>
                            <a href="research-page.html" class="blog-image"><img src="/center-for-autisme/wp-content/themes/cfa/assets/images/blog-image-1.jpg" alt="Billedet fra vores blog omkring formålet med forskning" title="Billedet fra vores blog omkring formålet med forskning" /></a>
                            <span>16. maj 2019</span>
                            <p>At holde sig opdateret på den nyeste viden inden for autismeområdet og formidle det til personalet på Center for Autisme.
                            </p>
                            <p>At skabe rammerne for, at forsknings- og udviklingsprojekter kan realiseres på Center for Autisme, samt i samarbejde med eksterne partnere fra ind og udland.</p>
                            <p>At lede Center for Autismes interne faglige udvalg, og yde rådgivning til centerleder og de enkelte afdelingsledere, i forhold til at udvikle et højt fagligt niveau. Samt kvalitetssikring af Center for Autismes ydelser og aktiviteter.</p>
                            <a class="btn" href="research-page.html">Læs mere her</a>
                        </article>
                        <article>
                            <h3>Musikterapi og autisme
                            </h3>
                            <a href="research-page.html" class="blog-image"><img src="/center-for-autisme/wp-content/themes/cfa/assets/images/musik.png" alt="Billedet fra vores blog omkring musikterapi og autisme" title="Billedet fra vores blog omkring musikterapi og autisme" /></a>
                            <span>16. maj 2019</span>
                            <p>v. Ulla Holck, ph.d., lektor med speciale i autisme samt leder af Center for Dokumentation og Forskning i Musikterapi, Aalborg Universitet.</p>

                            <p><em>“Mange børn, unge og voksne med autisme, deres pårørende samt fagpersoner har erfaret, at musikterapi kan gøre en forskel i forhold til sociale færdigheder, verbal og nonverbal kommunikation og følelsesmæssigt samspil. Musikterapi er således en evidensbaseret behandlingsform, vist gennem Cochrane Reviews og RCT undersøgelser – også ift. autisme.”</em></p>

                            <a class="btn" href="research-page.html">Læs mere her</a>
                        </article>
                        <article>
                            <h3>Igangværende projekter
                            </h3>
                            <a href="research-page.html" class="blog-image"><img src="/center-for-autisme/wp-content/themes/cfa/assets/images/forskning.png" alt="Billedet fra vores blog omkring vores igangværende projekter" title="Billedet fra vores blog omkring vores igangværende projekter" /></a>
                            <span>16. maj 2019</span>
                            <p>Afprøvning af Adapted Autism Diagnostic Observation Schedule A-ADOS, i en dansk klinisk kontekst.</p>

                            <p> A-ADOS er et nyt standardiseret diagnostisk redskab til brug for unge og voksne med svær grad af udviklingshæmning eller mental retardering. Det er endnu ikke publiceret, men under udvikling af Western Psychological Services
                                (WPS), i USA. Testen er indtil videre kun blevet tilgængelig for forskning. Center for Autisme har fået tilladelse til at erhverve testen, og afprøve den i en dansk klinisk sammenhæng, dvs. i forbindelse med vores egne
                                udredninger af unge og voksne med svær mental retardering.
                            </p>
                            <a class="btn" href="research-page.html">Læs mere om projektet her</a>
                        </article>
                    </section>
                </div>
            </div>
        </div>
<?php
get_footer();