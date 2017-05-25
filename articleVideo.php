<!-- Sur cette page on retrouve les articles vidéos -->
<!-- Antoto -->
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Article vidéo</title>
        <link href="css/styleVideo.css" rel="stylesheet">
    </head>

    <body>

        <?php include 'header.php'; ?>

        <!-- Bandeau rouge qui affiche le titre et la catégorie de l'article-->
        <div id="articleVideoTitle">
            <div id="articleVideoTitleLeft">
                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1792 352v1088q0 42-39 59-13 5-25 5-27 0-45-19l-403-403v166q0 119-84.5 203.5t-203.5 84.5h-704q-119 0-203.5-84.5t-84.5-203.5v-704q0-119 84.5-203.5t203.5-84.5h704q119 0 203.5 84.5t84.5 203.5v165l403-402q18-19 45-19 12 0 25 5 39 17 39 59z"/></svg>
                <p>Le Coworking</p>
            </div>
            <div id="articleVideoTitleRight">
                <p>Cohésion de groupe</p>
            </div>
        </div>
        <!-- Fin du bandeau rouge -->



        <div id="articleVideoContainerTotal">

            <!-- Partie comprenant la vidéo et les informations du contact dessous la vidéo -->

            <div id="articleVideoContainerLeft">
                <div id="articleVideoContainerLeftTop">
                    <video controls src="../videos/denis.mp4" width="600px"></video>
                </div>

                <!-- Cette partie affiche les infos contact et les raccourcis mail et téléphone -->
                <div id="articleVideoContainerLeftBottom">
                    <div id="articleVideoContainerLeftBottomOne">
                        <svg height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,48C141.1,48,48,141.1,48,256c0,114.9,93.1,208,208,208c114.9,0,208-93.1,208-208C464,141.1,370.9,48,256,48z   M256,446.7c-58.6,0-111.1-26.6-146.1-68.3c17.8-7.7,62.2-23.7,90.3-31.9c2.2-0.7,2.6-0.8,2.6-10.7c0-10.6-1.2-18.1-3.8-23.6  c-3.5-7.5-7.7-20.2-9.2-31.6c-4.2-4.9-9.9-14.5-13.6-32.9c-3.2-16.2-1.7-22.1,0.4-27.6c0.2-0.6,0.5-1.2,0.6-1.8  c0.8-3.7-0.3-23.5-3.1-38.8c-1.9-10.5,0.5-32.8,15-51.3c9.1-11.7,26.6-26,58-28l17.5,0c31.9,2,49.4,16.3,58.5,28  c14.5,18.5,16.9,40.8,14.9,51.3c-2.8,15.3-3.9,35-3.1,38.8c0.1,0.6,0.4,1.2,0.6,1.7c2.1,5.5,3.7,11.4,0.4,27.6  c-3.7,18.4-9.4,28-13.6,32.9c-1.5,11.4-5.7,24-9.2,31.6c-3.3,6.9-6.6,15.1-6.6,23.3c0,9.9,0.4,10,2.7,10.7  c26.7,7.9,72.7,23.8,93,32.1C367.2,420,314.7,446.7,256,446.7z"/></svg>
                        <p>Contacter l'auteur</p>
                    </div>
                    <div id="articleVideoContainerLeftBottomTwo">
                        <svg version="1.1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><defs/><g fill="none" fill-rule="evenodd" id="Icons with numbers" stroke="none" stroke-width="1"><g fill="#000000" id="Group" transform="translate(-336.000000, 0.000000)"><path d="M345.731959,8.48453617 L350.681755,12.7272182 C350.501681,12.8954635 350.259495,13 349.993155,13 L338.006845,13 C337.739189,13 337.496237,12.8970552 337.316068,12.7290845 L342.268041,8.48453617 L344,10.0000001 Z M344,9 L337.318245,3.27278178 C337.498319,3.10453648 337.740505,3 338.006845,3 L349.993155,3 C350.260811,3 350.503763,3.10294483 350.683932,3.27091553 Z M351,12.1856084 L346.167358,8.07885766 L351,3.875422 L351,12.1856084 L351,12.1856084 Z M337,12.1856079 L337,3.87815189 L341.832642,8.07885742 L337,12.1856079 L337,12.1856079 Z M337,12.1856079" id="Shape"/></g></g></svg>
                        <a href="mailto:mail@mail.com">mail@mail.com</a>
                    </div>
                    <div id="articleVideoContainerLeftBottomThree">
                        <svg enable-background="new 0 0 500 500" id="Layer_1" version="1.1" viewBox="0 0 500 500" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M335,443.2H167.7c-8.3,0-15-6.8-15-15V71.8c0-8.3,6.8-15,15-15H335  c8.3,0,15,6.8,15,15v356.4C350,436.5,343.3,443.2,335,443.2z" stroke="#000000" stroke-miterlimit="10"/><rect fill="#FFFFFF" height="294" width="168.7" x="166.9" y="96.3"/><line fill="#FFFFFF" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="6" x1="219" x2="283" y1="82" y2="82"/><circle cx="250.8" cy="416.8" fill="#FFFFFF" r="16.5"/></svg>
                        <a href="tel:0635432086">0600000000</a>
                    </div>
                </div>

                <!-- Fin partie infos contact -->

            </div>

            <!-- Fin partie vidéo + contact -->


            <!-- Partie comprenant pré-requis et descrpition -->

            <!-- Partie droite contenant prérequis, description, informations entreprise -->
            <div id="articleVideoContainerRight">

                <div id="articleVideoContainerRightTop">
                    <p>Prérequis :</p>
                    <ul>
                        <li>Premier prérequis lorem ipsum</li>
                        <li>Deuxième prérequis lorem ipsum</li>
                    </ul>
                </div>

                <div id="articleVideoContainerRightMiddle">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna quam, posuere quis pellentesque vitae, blandit eu mi. Suspendisse lobortis interdum nisl, eu dapibus magna. Mauris placerat aliquet lacinia. Vestibulum interdum imperdiet tristique. Curabitur id odio gravida, commodo mi in, venenatis mauris. Praesent laoreet turpis purus, eu volutpat nunc euismod et.</p>

                    <p>Maecenas mollis, libero id accumsan facilisis, magna quam tempor arcu, quis semper lectus erat sed eros.</p>
                </div>

                <div id="articleVideoContainerRightBottom">

                    <div id="articleVideoContainerRightBottomLeft">
                        <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1472 0q26 0 45 19t19 45v1664q0 26-19 45t-45 19h-1280q-26 0-45-19t-19-45v-1664q0-26 19-45t45-19h1280zm-832 288v64q0 14 9 23t23 9h64q14 0 23-9t9-23v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23zm0 256v64q0 14 9 23t23 9h64q14 0 23-9t9-23v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23zm0 256v64q0 14 9 23t23 9h64q14 0 23-9t9-23v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23zm0 256v64q0 14 9 23t23 9h64q14 0 23-9t9-23v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23zm-128 320v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm512 1280v-192q0-14-9-23t-23-9h-320q-14 0-23 9t-9 23v192q0 14 9 23t23 9h320q14 0 23-9t9-23zm0-512v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm256 1024v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v64q0 14 9 23t23 9h64q14 0 23-9t9-23z"/></svg>
                        <p>Ynov Nantes Campus</p>
                    </div>
                    <div id="articleVideoContainerRightBottomRight">
                        <p>Par Sébastien D. le 22 mai 2017</p>
                    </div>

                </div>
            </div>

            <!-- Fin partie comprenant pré-requis et descrpition -->

        </div>

        <?php include 'header.php'; ?>

    </body>

</html>