<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/histogram-bellcurve.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/sankey.js"></script>
<script src="https://code.highcharts.com/modules/dependency-wheel.js"></script>

<script src="dependency2.js" ></script>

<head>
<style>

    body {
        background-image: url('https://png.pngitem.com/pimgs/s/211-2112632_copo-de-nieve-png-motif-transparent-png.png');
    }
 h3{
   color: #34D4D4D;
    }
#container {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#datatable {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

#datatable caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

#datatable th {
    font-weight: 600;
    padding: 0.5em;
}

#datatable td,
#datatable th,
#datatable caption {
    padding: 0.5em;
}

#datatable thead tr,
#datatable tr:nth-child(even) {
    background: #f8f8f8;
}

#datatable tr:hover {
    background: #f1f7ff;
}



    </style>
</head>

<nav class="navbar navbar-light bg-light" style="background-image: url('https://torange.biz/photofxnew/189/HD/template-background-christmas-189305.jpg');">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://github.com/JavierRojasC/JavierRCam/blob/master/fcnm.png?raw=true" alt="" width="300" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>
<br>
<center>
<h3> DEFUNCIONES FETALES </h3>
</center>

<br>

<div class="container">
  <div class="row">
    <div class="col order-last">
      <div class='container' id='container'></div>
      <div  id='container2'></div>

    </div>
    <div class="col order-first">
    <table id="datatable" >
        <thead>
            <tr>
                <th></th>
                <th>Support</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Muerte fetal de causa no especificada</th>
                <td>0.9459459</td>
            </tr>
            <tr>
                <th>Hipoxia intrauterina, no especificada</th>
                <td>0.8918919</td>
            </tr>
            <tr>
                <th>Hipoxia intrauterina, no especificada, Muerte fetal de causa no especificada</th>
                <td>0.8378378</td>
            </tr>
            <tr>
                <th>Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios</th>
                <td>0.5135135</td>
            </tr>
            <tr>
                <th>Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios, Hipoxia intrauterina, no especificada</th>
                <td>0.5135135</td>
            </tr>
            <th>Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios, Muerte fetal de causa no especificad</th>
                <td>0.5135135</td>
            </tr>
            <th>Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios, Hipoxia intrauterina, no especificada, Muerte fetal de causa no especificada</th>
                <td>0.5135135</td>
            </tr>
            <th>Feto y recién nacido afectados por trastornos hipertensivos de la madre</th>
                <td>0.4594595</td>
            </tr>
            <th>Feto y recién nacido afectados por trastornos hipertensivos de la madre, Hipoxia intrauterina, no especificada</th>
                <td>0.4594595</td>
            </tr>
            <th>Feto y recién nacido afectados por trastornos hipertensivos de la madre, Muerte fetal de causa no especificada</th>
                <td>0.4594595</td>
            </tr>
        </tbody>
    </table>   
    </figure>

</div>
  </div>

  <div  id='container3' style="height: 600px; min-width: 200px; max-width: 900px; margin: 0 auto" ></div>


</div>


<script>
    Highcharts.theme = {
    colors: ['#1698B2', '#36B77E', '#90DFE5', '#2E74EF', '#24CBE5', '#64E572',
             '#FF9655', '#FFF263', '#6AF9C4'],
    chart: {
        backgroundColor: 'transparent'
    },
    title: {
        style: {
            color: '#6D737B',
            font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    subtitle: {
        style: {
            color: '#666666',
            font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    legend: {
        itemStyle: {
            font: '9pt Trebuchet MS, Verdana, sans-serif',
            color: 'black'
        },
        itemHoverStyle:{
            color: 'gray'
        }
    }
};
// Apply the theme
Highcharts.setOptions(Highcharts.theme);


    var data = [  1,  1,  5,  5,  5,  9,  8,  5, 14, 12, 12,  9, 14, 12, 17, 12, 13, 10, 11,  9, 17, 13,  8, 12,  9,  7,  5,  9,  7,  6,  5,  5,  6,  1,  2,  1,  1]
    Highcharts.chart('container', {

title: {
    text: 'Histograma'
},

xAxis: [{
    title: {
        text: 'Data'
    },
    alignTicks: false
}, {
    title: {
        text: ''
    },
    alignTicks: false,
    opposite: true
}],

yAxis: [{
    title: { text: 'Data' }
}, {
    title: { text: ' ' },
    opposite: true
}],

series: [{
    name: 'Tamaño de las transacciones',
    type: 'histogram',

    xAxis: 1,
    yAxis: 1,
    color: '#616E95',
    baseSeries: 1,
    zIndex: -1
}, {
    name: 'Data',
    type: 'scatter',
    data: data,
    color: '#1F2947',
    accessibility: {
        exposeAsGroupOnly: true
    },
    marker: {
        radius: 1.5
    }
}]
});


Highcharts.chart('container2', {
    chart: {
        type: 'bar',
        backgroundColor: 'transparent'

    },
    title: {
        text: ' '
    },
    subtitle: {
        text: ' '
    },
    xAxis: {
        categories: ['Muerte fetal de causa no especificada', 'Hipoxia intrauterina, no especificada', 'Hipoxia intrauterina, no especificada, Muerte fetal de causa no especificada	', 'Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios	',
         'Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios, Hipoxia intrauterina, no especificada	',
         'Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios, Muerte fetal de causa no especificad	',
         'Feto y recién nacido afectados por otras formas de desprendimiento y de hemorragia placentarios, Hipoxia intrauterina, no especificada, Muerte fetal de causa no especificada	',
         'Feto y recién nacido afectados por trastornos hipertensivos de la madre	',
         'Feto y recién nacido afectados por trastornos hipertensivos de la madre, Hipoxia intrauterina, no especificada	',
         'Feto y recién nacido afectados por trastornos hipertensivos de la madre, Muerte fetal de causa no especificada	'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '  ',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Count',
        color: '#616E95',
        data: [35, 33, 31, 19, 19, 19, 19, 17, 17, 17]
    }]
});

console.log(Dependency);

Highcharts.chart('container3', {

title: {
    text: 'Asociaciones'
},

accessibility: {
    point: {
        valueDescriptionFormat: '{index}. From {point.from} to {point.to}: {point.weight}.'
    }
},

series: [{
    keys: ['from', 'to', 'weight'],
    data: Dependency,
    type: 'dependencywheel',

    name: 'Dependency wheel series',
    dataLabels: {
        color: '#333',
        textPath: {
            enabled: true,
            attributes: {
                dy: 5
            }
        },
        distance: 10
    },
    size: '95%'
}],
plotOptions:{
            series:{
                turboThreshold:5000
            }
        }

});



</script>


</body>