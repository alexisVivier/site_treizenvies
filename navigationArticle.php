<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="icon" type="image/png" href="img/logo.PNG" /> </head>
    <link href="../css/navigationArticle.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<body>
    
    <?php include 'header.php'; ?>
    
    <div id="div_search_bar">
        <form action="https://www.youtube.com/" class="hide-submit" method="GET">
            <input id="search_bar" type="search" placeholder="Rechercher un article"/>
            <label>
                <input type="submit" />
                <svg  viewBox="0 0 1792 1792"  xmlns="http://www.w3.org/2000/svg"><path fill="white" stroke="white" d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
            </label>
        </form>
    </div>
    <div id="nav_page_container">
    
        
        <div id="nav_filtre_div">
            <div id="nav_div_title_cat">
                <svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M384 1408q0 80-56 136t-136 56-136-56-56-136 56-136 136-56 136 56 56 136zm0-512q0 80-56 136t-136 56-136-56-56-136 56-136 136-56 136 56 56 136zm1408 416v192q0 13-9.5 22.5t-22.5 9.5h-1216q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1216q13 0 22.5 9.5t9.5 22.5zm-1408-928q0 80-56 136t-136 56-136-56-56-136 56-136 136-56 136 56 56 136zm1408 416v192q0 13-9.5 22.5t-22.5 9.5h-1216q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1216q13 0 22.5 9.5t9.5 22.5zm0-512v192q0 13-9.5 22.5t-22.5 9.5h-1216q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1216q13 0 22.5 9.5t9.5 22.5z"/></svg>
                <p>Rechercher par catégorie</p>
            </div>
            
                <div class="choix_categorie">
                        <div class="nav_radio_button">
                            <input id="bien_etre" type="radio" name="cat" value="bien_etre">
                            <label for="bien_etre">Bien-être physique / psychologique</label>
                        </div>
                        <div class="nav_radio_button" data-rel="cohesion">
                            <input id="cohesion" type="radio" name="cat" value="cohesion">
                            <label for="cohesion">Cohésion de groupe</label>
                        </div>
                        <div class="nav_radio_button" data-rel="travail">
                            <input id="travail" type="radio" name="cat" value="travail">
                            <label for="travail">Travail</label>
                        </div>
                        <div class="nav_radio_button">
                            <input id="prof_pers" type="radio" name="cat" value="prof_pers">
                            <label for="prof_pers">Equilibre professionnel / personnel</label>
                        </div>
                        <div class="nav_radio_button">
                            <input id="recomp" type="radio" name="cat" value="recomp">
                            <label for="recomp">Reconnaissances financières / récompenses</label>
                        </div>
                        <div class="nav_radio_button">
                            <input id="organis" type="radio" name="cat" value="organis">
                            <label for="organis">Organisation du lieu de travail</label>
                        </div>
                        <div class="nav_radio_button">
                            <input id="vis_comm" type="radio" name="cat" value="vis_comm">
                            <label for="vis_comm">Vision commune</label>
                        </div>
                </div>
            <div id="nav_div_title_dep">
                <svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1152 640q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm256 0q0 109-33 179l-364 774q-16 33-47.5 52t-67.5 19-67.5-19-46.5-52l-365-774q-33-70-33-179 0-212 150-362t362-150 362 150 150 362z"/></svg>
                <p>Rechercher par département</p>
            </div>
            <div id="nav_dep_div">
            <select name="Département" id="nav_dep_select">
                <option value="01">(01) Ain </option>
                <option value="02">(02) Aisne </option>
                <option value="03">(03) Allier </option>
                <option value="04">(04) Alpes de Haute Provence </option>
                <option value="05">(05) Hautes Alpes </option>
                <option value="06">(06) Alpes Maritimes </option>
                <option value="07">(07) Ardèche </option>
                <option value="08">(08) Ardennes </option>
                <option value="09">(09) Ariège </option>
                <option value="10">(10) Aube </option>
                <option value="11">(11) Aude </option>
                <option value="12">(12) Aveyron </option>
                <option value="13">(13) Bouches du Rhône </option>
                <option value="14">(14) Calvados </option>
                <option value="15">(15) Cantal </option>
                <option value="16">(16) Charente </option>
                <option value="17">(17) Charente Maritime </option>
                <option value="18">(18) Cher </option>
                <option value="19">(19) Corrèze </option>
                <option value="2A">(2A) Corse du Sud </option>
                <option value="2B">(2B) Haute-Corse </option>
                <option value="21">(21) Côte d'Or </option>
                <option value="22">(22) Côtes d'Armor </option>
                <option value="23">(23) Creuse </option>
                <option value="24">(24) Dordogne </option>
                <option value="25">(25) Doubs </option
                ><option value="26">(26) Drôme </option>
                <option value="27">(27) Eure </option>
                <option value="28">(28) Eure et Loir </option>
                <option value="29">(29) Finistère </option>
                <option value="30">(30) Gard </option>
                <option value="31">(31) Haute Garonne </option>
                <option value="32">(32) Gers </option>
                <option value="33">(33) Gironde </option>
                <option value="34">(34) Hérault </option>
                <option value="35">(35) Ille et Vilaine </option>
                <option value="36">(36) Indre </option>
                <option value="37">(37) Indre et Loire </option>
                <option value="38">(38) Isère </option>
                <option value="39">(39) Jura </option>
                <option value="40">(40) Landes </option>
                <option value="41">(41) Loir et Cher </option>
                <option value="42">(42) Loire </option>
                <option value="43">(43) Haute Loire </option>
                <option value="44">(44) Loire Atlantique </option>
                <option value="45">(45) Loiret </option>
                <option value="46">(46) Lot </option>
                <option value="47">(47) Lot et Garonne </option>
                <option value="48">(48) Lozère </option>
                <option value="49">(49) Maine et Loire </option>
                <option value="50">(50) Manche </option>
                <option value="51">(51) Marne </option>
                <option value="52">(52) Haute Marne </option>
                <option value="53">(53) Mayenne </option>
                <option value="54">(54) Meurthe et Moselle </option>
                <option value="55">(55) Meuse </option>
                <option value="56">(56) Morbihan </option>
                <option value="57">(57) Moselle </option>
                <option value="58">(58) Nièvre </option>
                <option value="59">(59) Nord </option>
                <option value="60">(60) Oise </option>
                <option value="61">(61) Orne </option>
                <option value="62">(62) Pas de Calais </option>
                <option value="63">(63) Puy de Dôme </option>
                <option value="64">(64) Pyrénées Atlantiques </option>
                <option value="65">(65) Hautes Pyrénées </option>
                <option value="66">(66) Pyrénées Orientales </option>
                <option value="67">(67) Bas Rhin </option>
                <option value="68">(68) Haut Rhin </option>
                <option value="69">(69) Rhône </option>
                <option value="70">(70) Haute Saône </option>
                <option value="71">(71) Saône et Loire </option>
                <option value="72">(72) Sarthe </option>
                <option value="73">(73) Savoie </option>
                <option value="74">(74) Haute Savoie </option>
                <option value="75">(75) Paris </option>
                <option value="76">(76) Seine Maritime </option>
                <option value="77">(77) Seine et Marne </option>
                <option value="78">(78) Yvelines </option>
                <option value="79">(79) Deux Sèvres </option>
                <option value="80">(80) Somme </option>
                <option value="81">(81) Tarn </option>
                <option value="82">(82) Tarn et Garonne </option>
                <option value="83">(83) Var </option>
                <option value="84">(84) Vaucluse </option>
                <option value="85">(85) Vendée </option>
                <option value="86">(86) Vienne </option>
                <option value="87">(87) Haute Vienne </option>
                <option value="88">(88) Vosges </option>
                <option value="89">(89) Yonne </option>
                <option value="90">(90) Territoire de Belfort </option>
                <option value="91">(91) Essonne </option>
                <option value="92">(92) Hauts de Seine </option>
                <option value="93">(93) Seine Saint Denis </option>
                <option value="94">(94) Val de Marne </option>
                <option value="95">(95) Val d'Oise </option>
            </select>
            </div>
                <div id="nav_div_filter_hide">
                <div class="nav_radio_button" data-rel="all">
                <div id="nav_div_delete_filter">
                    <svg enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M12,2C6.5,2,2,6.5,2,12c0,5.5,4.5,10,10,10s10-4.5,10-10C22,6.5,17.5,2,12,2z M16.9,15.5l-1.4,1.4L12,13.4l-3.5,3.5   l-1.4-1.4l3.5-3.5L7.1,8.5l1.4-1.4l3.5,3.5l3.5-3.5l1.4,1.4L13.4,12L16.9,15.5z"/></g></svg>
                    <p>Effacer les filtres</p>
                </div>
                </div>
                </div>
        </div>
        
        <div id="nav_article_container">
            
            <div id="nav_div_recent">
                <svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M192 1664h288v-288h-288v288zm352 0h320v-288h-320v288zm-352-352h288v-320h-288v320zm352 0h320v-320h-320v320zm-352-384h288v-288h-288v288zm736 736h320v-288h-320v288zm-384-736h320v-288h-320v288zm768 736h288v-288h-288v288zm-384-352h320v-320h-320v320zm-352-864v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm736 864h288v-320h-288v320zm-384-384h320v-288h-320v288zm384 0h288v-288h-288v288zm32-480v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38h-1408q-52 0-90-38t-38-90v-1280q0-52 38-90t90-38h128v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"/></svg>
                <p>Les plus récents</p>
            </div>
    
            
            
            <div id="gallery_article">
            <article class="all travail animation">
            <div class="nav_div_article">
                <div class="div_article_left_part">
                    <svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1596 476q14 14 28 36h-472v-472q22 14 36 28zm-476 164h544v1056q0 40-28 68t-68 28h-1344q-40 0-68-28t-28-68v-1600q0-40 28-68t68-28h800v544q0 40 28 68t68 28zm160 736v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23z"/></svg>
                </div>
                
                <div class="div_article_right_part">
                    <div class="div_article_title_autor">
                        <p class="title_article">Le Management d'équipe</p>
                        <p class="autor_article">par     Maxime P.     le  22 Mai 2017</p>
                    </div>
                    <div class="div_article_categorie">
                        <p>Travail</p>
                    </div>
                    <div class="div_article_text_plus">
                        <p class="text_article">
                            Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem...
                        </p>
                        <div class="div_button_article">
                            <a href="#" class="button_article_plus">Lire plus<svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M845 1395l454-454q19-19 19-45t-19-45l-454-454q-19-19-45-19t-45 19l-102 102q-19 19-19 45t19 45l307 307-307 307q-19 19-19 45t19 45l102 102q19 19 45 19t45-19zm819-499q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
                </article>
            <article class="all cohesion animation">
            <div class="nav_div_article">
                <div class="div_video_left_part">
                    <svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1792 352v1088q0 42-39 59-13 5-25 5-27 0-45-19l-403-403v166q0 119-84.5 203.5t-203.5 84.5h-704q-119 0-203.5-84.5t-84.5-203.5v-704q0-119 84.5-203.5t203.5-84.5h704q119 0 203.5 84.5t84.5 203.5v165l403-402q18-19 45-19 12 0 25 5 39 17 39 59z"/></svg>
                </div>
                
                <div class="div_article_right_part">
                    <div class="div_article_title_autor">
                        <p class="title_article">Le Coworking</p>
                        <p class="autor_article">par     Sebastien D.     le  22 Mai 2017</p>
                    </div>
                    <div class="div_article_categorie">
                        <p>Cohésion de groupe</p>
                    </div>
                    <div class="div_article_text_plus">
                        <p class="text_article">
                            Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum...
                        </p>
                        <div class="div_button_article">
                            <a href="#" class="button_video_plus">Voir plus<svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M845 1395l454-454q19-19 19-45t-19-45l-454-454q-19-19-45-19t-45 19l-102 102q-19 19-19 45t19 45l307 307-307 307q-19 19-19 45t19 45l102 102q19 19 45 19t45-19zm819-499q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
                </article>
            </div>
            
        </div>
    </div>
    
            <script type="text/javascript">
    
                  $(function() {
                      var selectedClass = "";
                      $(".nav_radio_button").click(function(){
                          selectedClass = $(this).attr("data-rel");
                    $("#gallery_article").fadeTo(100, 0.1);
                          $("#gallery_article article").not("."+selectedClass).fadeOut().removeClass('animation');
                          setTimeout(function() {
                              $("."+selectedClass).fadeIn().addClass('animation');
                              $("#gallery_article").fadeTo(300, 2);
                          }, 300);
                      });
                  });
                 $('#nav_div_delete_filter').hide();
                 $('.nav_radio_button').click(function(e){    
                        $('#nav_div_delete_filter').fadeIn('slow');
                    });
                $('#nav_div_delete_filter').click(function(e){
                    $("input:radio").prop('checked', false);
                    $('#nav_div_filter_hide').fadeOut('slow');
                });
            </script>

 
    
    <?php include 'header.php'; ?>
    
    
    
</body>

</html>