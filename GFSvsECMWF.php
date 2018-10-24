
<html><head><title>GFS vs ECMWF</title>
<script src="http://www.meteovolos.gr/Javascripts/jquery-2.1.1.min.js"></script>
<script src="http://www.meteovolos.gr/Javascripts/jquery.detect_swipe.js"></script>
<script src="http://www.meteovolos.gr/Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.meteovolos.gr/Javascripts/JsImageLoop.css">
<style type="text/css">
*,body {
font-weight: none;
font-family: arial, sans-serif;
font-size:12pt;
}


a {
font-size:19px;
  text-decoration:underline;
}

a:hover {
  text-decoration: none;
}
</style>
<script>

useroptions = {};
useroptions.content = [];

         useroptions['content'].push(
        {   title: "GFS SLP PRECIP",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/data/gfs/GFS_rain_eu_t",
            extension: ".png",
            minval: 6,
            maxval: 96,
            increment:3,
        });
    useroptions['content'].push(
        {   title: "ECMWF SLP GP500",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/data/gfs/ECMWF_slp_gp500_eastmed_t",
            extension: ".png",
            minval: 0,
            maxval: 240,
            increment:24,
        });
    useroptions['content'].push(
        {   title: "ECMWF T850",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/data/gfs/ECMWF_temp850_eastmed_t",
            extension: ".png",
            minval: 0,
            maxval: 240,
            increment:24,
        });
    useroptions['content'].push(
        {   title: "GFS T850",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/data/gfs/GFS_temp500_eastmed_t",
            extension: ".png",
            minval: 6,
            maxval: 96,
            increment:3,
        });
    useroptions['content'].push(
        {   title: "GFS SLP GP500",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/data/gfs/GFS_slp_gp500_EU_t",
            extension: ".png",
            minval: 0,
            maxval: 96,
            increment:3,
        });


        
</script>

</head>
<body>
<div style="text-align:center; font-size:18px"><a href="http://www.meteo.gr">Meteo Gr homepage</a></div>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>
