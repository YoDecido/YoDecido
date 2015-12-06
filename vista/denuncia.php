<!DOCTYPE html>
<html lang="en" ng-app="yodecido">
    <head>
        <meta charset="UTF-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="initial-scale=1.0, width=device-width" name="viewport">
        <link rel="shortcut icon" href="../css/images/ico.png">
        <title>Yo Decido!</title>

        <!-- css -->
        <link href="../css/base.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/component.css" />

        <!-- css for this project -->
        <link href="../css/project.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.2/angular.min.js"></script>

        <!-- favicon -->
        <!-- ... -->

        <style>
            #info {
                font-size: 18px;
                background: #ffffff;
                width: 350px;
                border-radius: 6px;
                text-align: center;
                color: #666666;
                border: solid 1px #666666;
                margin: auto;
                padding: 3px;
            }

            #googleMap {
                margin: 10px auto;
                width:150%;
                height:670px;
                border: 2px solid #666666; 
                border-radius: 6px;
            }

            #enviar {
                background: #fff;
                font-size: 22px;
                text-align: left;
                color: #000;
                padding:3px 10px 3px 10px;
                border-radius: 6px;
                margin-top: 15px;
                margin-bottom: 15px;
            }
            #respuesta {
                margin: auto 60px;
            }
            /*            #googleMap {
                            margin: 10px auto;
                            width:150%;
                            height:600px;
                            border: 2px solid #666666; 
                            border-radius: 6px;
                        }*/
            #map {
                margin: 10px auto;
                width:90%;
                height:280px;
                border: 2px solid #666666; 
                border-radius: 6px;
            }
            .titular {
                background: #ffffff;
                font-size: 32px;
                color: #000;
                margin: 40px auto;
                text-align: center;
                width: 50%;
                padding:3px 10px 3px 10px;
                border-radius: 6px;
                border: solid 1px #999999;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script>


    </head>
    <body class="avoid-fout page-brand" ng-controller="main">
        <div class="avoid-fout-indicator avoid-fout-indicator-fixed">
            <div class="progress-circular progress-circular-center">
                <div class="progress-circular-wrapper">
                    <div class="progress-circular-inner">
                        <div class="progress-circular-left">
                            <div class="progress-circular-spinner"></div>
                        </div>
                        <div class="progress-circular-gap"></div>
                        <div class="progress-circular-right">
                            <div class="progress-circular-spinner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header class="header header-transparent header-waterfall affix-top">
            <ul class="nav nav-list pull-left">
                <li>
                    <a data-toggle="menu" href="#menu">
                        <span class="icon icon-lg">menu</span>
                    </a>
                </li>
            </ul>
            <a class="header-logo margin-left-no" href="index.html">Yo Decido!</a>
            <div class="header-affix pull-left affix-top" data-offset-top="108" data-spy="affix">
                <span class="header-text margin-left-no">
                    <i class="icon margin-right">chevron_right</i>Denuncias
                </span>
            </div>
            <ul class="nav nav-list pull-right">
                <li>
                    <a data-toggle="menu" href="#profile">
                        <span class="access-hide">John Smith</span>
                        <span class="avatar"><img alt="alt text for John Smith avatar" src="../images/users/avatar-001.jpg"></span>
                    </a>
                </li>
            </ul>
        </header>

        <nav aria-hidden="true" class="menu menu-right" id="profile" tabindex="-1">
            <div class="menu-scroll">
                <div class="menu-top">
                    <div class="menu-top-img">
                        <img alt="John Smith" src="../images/samples/landscape.jpg">
                    </div>
                    <div class="menu-top-info">
                        <a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="../images/users/avatar-001.jpg"></span>Yo Decido</a>
                    </div>
                    <div class="menu-top-info-sub">
                        <small>Si te piden tu Voto, Exige Transparencia</small>
                    </div>
                </div>
                <div class="menu-content">
                    <ul class="nav">
                        <li>
                            <a class="waves-attach" href="javascript:void(0)"><span class="icon icon-lg">denuncia</span>Denuncia</a>
                        </li>
                        <li>
                            <a class="waves-attach" href="javascript:void(0)"><span class="icon icon-lg">add_to_photos</span>Planes de Gobierno</a>
                        </li>
                        <li>
                            <a class="waves-attach" href="page-login.html"><span class="icon icon-lg">exit_to_app</span>Yo Informo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
       	<div class="content">
            <div class="content-heading" style="    padding-bottom: 0;">
            </div>
            <div class="container">
                <div class="col-lg-12 col-sm-12">
                    <div class="card card-brand">
                        <aside class="card-side pull-right">
                            <span class="card-heading icon">info_outline</span>
                        </aside>
                        <div class="card-main">
                            <div class="card-inner">
                                <p class="card-heading">Realiza tu Denuncias</p>
                                <p>
                                    Aqui podras realizar tus denuncias, y visualizar aquellas que ya han sido registradas.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <?php
                echo '   <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card" style="box-shadow: -1px 1px 22px 2px rgba(0,0,0,0.75); ">
                                <div class="card-main">
                                    <div class="card-img">
                                            <img alt="alt text" src="../images/samples/exijo.jpg">
                                            <p class="card-img-heading"> #YoDecido</p>
                                    </div>
                                    <div class="card-inner">
                                            <div class="form-group form-group-label">
                                                    <div class="row">
                                                            <div class="col-lg-8 col-sm-12">
                                                                    <label class="floating-label" for="float-select">Tipo de Falta</label>
                                                                    <select class="form-control" id="tipodenuncia">
                                                                        <option value="">&nbsp;</option>
                                                                        <option value="1">Encuestas</option>
                                                                        <option value="2">Reuniones Politicas</option>
                                                                        <option value="3">Propaganda</option>
                                                                        <option value="4">Detencion</option>
                                                                        <option value="5">Impedir el Voto</option>
                                                                        <option value="6">Maniestaciones</option>
                                                                        <option value="7">Espectaculos</option>
                                                                        <option value="8">Bebidas Alcoholicas</option>
                                                                        <option value="9">Material Electoral</option>
                                                                        <option value="10">Otros</option>
                                                                    </select>
                                                            </div>
                                                    </div>
                                            </div>

                                            <div class="form-group form-group-label">
                                                    <div class="row">
                                                            <div class="col-lg-8 col-sm-12">
                                                                    <label class="floating-label" for="float-select">Partido Politico</label>
                                                                    <select class="form-control" id="partidoPolitico">
                                                                        <option value="">&nbsp;</option>
                                                                        <option value="1">Peru Posible</option>
                                                                        <option value="2">Alianza por el Progreso</option>
                                                                        <option value="3">Fuerza Popular</option>
                                                                        <option value="4">Apra</option>
                                                                        <option value="5">Peruanos por el Kambio</option>
                                                                    </select>
                                                            </div>
                                                    </div>
                                            </div>                                            

                                            <div class="form-group">
                                                    <div class="row">
                                                            <div class="col-lg-6 col-md-12 col-sm-10">
                                                                    
                                                                    <textarea class="form-control " id="descripcion" rows="2" placeholder="Descripcion de tu Denuncia"></textarea>
                                                            </div>
                                                    </div>
                                            </div>
                                            <div class="box">
                                                    <input type="file" ng-model="fileimagen" uploader-model="fileimagen" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                                    <label for="file-1"><i class="fa fa-cloud-upload"></i><span> Subir Foto&hellip;</span></label> 
                                        </div>

                                    </div>
                                    <div class="card-action">
                                            <div class="card-action-btn pull-right">
                                                    <a class="btn btn-flat waves-attach" type="submit" id="enviar" ng-click="RegistrarDenuncia();"><span class="icon text-blue">check</span>&nbsp;<span class="text-blue">Reportar</span></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="col-sm-6">';
                $lat = "-6.771618";
                $lng = "-79.838680";
                $pos = "-6.771618, -79.838680";

                echo " 
                    <div class='col-sm-12' id='googleMap' style='width: 430px; height: 630px;'></div>
                    <div id='respuesta'></div>";
                ?>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


                <script>

                $(document).ready(function () {
                    lat = "<?php echo $lat; ?>";
                    lng = "<?php echo $lng; ?>";

                    var map;
                    function initialize() {

                        var myLatlng = new google.maps.LatLng(lat, lng);
                        var mapOptions = {
                            zoom: 12,
                            center: myLatlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }

                        map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            draggable: true,
                            animation: google.maps.Animation.DROP,
                            web: "Localización geográfica!",
                            icon: "marker.png"
                        })

                        google.maps.event.addListener(marker, 'dragend', function (event) {
                            var myLatLng = event.latLng;
                            lat = myLatLng.lat();
                            lng = myLatLng.lng();

                        });
                        marker.setMap(map);
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);

                })

                angular.module('yodecido', []);

                angular.module('yodecido')

                        .directive('uploaderModel', ["$parse", function ($parse) {
                                return {
                                    restrict: 'A',
                                    link: function (scope, iElement, iAttrs) {
                                        iElement.on("change", function (e) {
                                            $parse(iAttrs.uploaderModel).assign(scope, iElement[0].files[0]);
                                        });
                                    }
                                };
                            }])

                        .service('upload', ["$http", "$q", function ($http, $q) {

                                this.uploadFile = function (file) {
                                    var deferred = $q.defer();
                                    var formData = new FormData();

                                    formData.append("name", name);
                                    formData.append("file", file);

                                    return $http.post("../accesoDatos/server.php", formData, {
                                        headers: {
                                            "Content-type": undefined
                                        },
                                        transformRequest: formData
                                    })
                                            .success(function (res) {
                                                deferred.resolve(res);
                                            })
                                            .error(function (msg, code) {
                                                deferred.reject(msg)
                                            })
                                    return deferred.promise;
                                }

                            }])


                        .controller('main', ['$scope', '$http', 'upload', function ($scope, $http, upload) {

                                $scope.RegistrarDenuncia = function () {
                                    var td = document.getElementById('tipodenuncia').value;
                                    var parti = document.getElementById('partidoPolitico').value;
                                    var des = document.getElementById('descripcion').value;

                                    var file = $scope.fileimagen;


                                    if (td != null && des != null && $scope.fileimagen != null) {
                                        upload.uploadFile(file).then(function (res) {
                                            console.log(res);

                                            $http.get("../accesoDatos/registroDenuncia.php?idtipo=" + td + "&des=" + des + "&foto=" + $scope.fileimagen.name + "&lati=" + lat + "&long=" + lng + "&partido=" + parti)
                                                    .success(function (data) {
                                                        console.log(data)
                                                        alert('registrado correctamente');
                                                    });
                                        })
                                    } else {
                                        alert("DEBE CUMPLIR CON TODOS LOS REQUISITOS");
                                    }
                                }

                            }]);






                </script>
            </div>	  


        </div>
    </div>

    <div class="fbtn-container">
        <div class="fbtn-inner">
            <a class="fbtn fbtn-brand-accent fbtn-lg" data-toggle="dropdown"><span class="fbtn-text">Links</span><span class="fbtn-ori icon">add</span><span class="fbtn-sub icon">close</span></a>
            <div class="fbtn-dropdown">
                <a class="fbtn" href="https://github.com/Daemonite/material" target="_blank"><span class="fbtn-text">Fork me on GitHub</span><span class="fa fa-github"></span></a>
                <a class="fbtn fbtn-blue" href="https://twitter.com/daemonites" target="_blank"><span class="fbtn-text">Follow Daemon on Twitter</span><span class="fa fa-twitter"></span></a>
                <a class="fbtn fbtn-alt" href="http://www.daemon.com.au/" target="_blank"><span class="fbtn-text">Visit Daemon Website</span><span class="icon">link</span></a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="footer">
        <div class="container">
            <p>#YoDecidoDAL</p>
        </div>
    </footer>
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/base.min.js"></script>
    <script src="../js/custom-file-input.js"></script>

    <!-- js for this project -->
    <script src="../js/project.min.js"></script>

</body>
</html>