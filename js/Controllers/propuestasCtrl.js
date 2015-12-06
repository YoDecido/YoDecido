angular.module('propuestaApp', []);

angular.module('propuestaApp')
        .controller('mainController', ['$scope', '$http', function ($scope, $http)
            {
                var arrayCandidatos = [];
                var arrayPropuestas = [];
                $http.get('../accesoDatos/cargaPropuestas.php?accion=listarCandidatos')
                        .success(function (data) {
                            console.log(data)
                            $scope.prop = data;
                            angular.forEach($scope.prop, function (value, key) {
                                value.rutaImagen = "../images/candidatosCara/" + (key + 1) + ".png";

                            });

                            arrayCandidatos = [];
                            arrayPropuestas = [];
                            $http.get('../accesoDatos/cargaPropuestas.php?accion=listarCantidadPropuestas&tipo=' + 1)
                                    .success(function (data) {
                                        angular.forEach(data, function (value, key) {
                                            arrayCandidatos[key] = value.nombres;
                                            arrayPropuestas[key] = parseInt(value.cantidad);
                                        });

                                        $(function () {
                                            $('#containerG').highcharts({
                                                chart: {
                                                    polar: true,
                                                    type: 'line'
                                                },
                                                title: {
                                                    text: '',
                                                    x: -80
                                                },
                                                pane: {
                                                    size: '80%'
                                                },
                                                xAxis: {
                                                    categories: arrayCandidatos,
                                                    tickmarkPlacement: 'on',
                                                    lineWidth: 0
                                                },
                                                yAxis: {
                                                    gridLineInterpolation: 'polygon',
                                                    lineWidth: 0,
                                                    min: 0
                                                },
                                                tooltip: {
                                                    shared: true,
                                                    pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
                                                },
                                                legend: {
                                                    align: 'right',
                                                    verticalAlign: 'top',
                                                    y: 70,
                                                    layout: 'vertical'
                                                },
                                                series: [{
                                                        name: 'Cantidad de Propuestas',
                                                        data: arrayPropuestas,
                                                        pointPlacement: 'on'
                                                    }]

                                            });
                                        });
                                    });
                        });

                $scope.cargaP = function (tipo, nombre) {
                    $scope.nombreCategoria = nombre;
                    $http.get('../accesoDatos/cargaPropuestas.php?accion=listarPropuestas&tipo=' + tipo)
                            .success(function (data) {
                                console.log(data)
                                $scope.listaProp = data;

                                arrayCandidatos = [];
                                arrayPropuestas = [];
                                $http.get('../accesoDatos/cargaPropuestas.php?accion=listarCantidadPropuestas&tipo=' + tipo)
                                        .success(function (data) {
                                            angular.forEach(data, function (value, key) {
                                                arrayCandidatos[key] = value.nombres;
                                                arrayPropuestas[key] = parseInt(value.cantidad);
                                            });

                                            $(function () {
                                                $('#containerG').highcharts({
                                                    chart: {
                                                        polar: true,
                                                        type: 'line'
                                                    },
                                                    title: {
                                                        text: '',
                                                        x: -80
                                                    },
                                                    pane: {
                                                        size: '80%'
                                                    },
                                                    xAxis: {
                                                        categories: arrayCandidatos,
                                                        tickmarkPlacement: 'on',
                                                        lineWidth: 0
                                                    },
                                                    yAxis: {
                                                        gridLineInterpolation: 'polygon',
                                                        lineWidth: 0,
                                                        min: 0
                                                    },
                                                    tooltip: {
                                                        shared: true,
                                                        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
                                                    },
                                                    legend: {
                                                        align: 'right',
                                                        verticalAlign: 'top',
                                                        y: 70,
                                                        layout: 'vertical'
                                                    },
                                                    series: [{
                                                            name: 'Cantidad de Propuestas',
                                                            data: arrayPropuestas,
                                                            pointPlacement: 'on'
                                                        }]

                                                });
                                            });
                                        });
                            });
                };

                $scope.cargaP(1, "Educacion");


            }])

        .controller('mainController_2', ['$scope', '$http', function ($scope, $http)
            {
                $http.get('../accesoDatos/cargaPropuestas.php?accion=listarFOTOS')
                        .success(function (data) {
                            console.log(data);
                            $scope.fotos = data;
                        });

            }]);

         