<?php
########################
# MR.Config - at 2011
# rev 2. fb.me/mr.config
# migrate 5.3 to php7+
########################
require_once 'lib/curl.php';
// Google Maps Api
if(!defined('gmap_address')) define('gmap_address', "https://maps.googleapis.com/maps/api/geocode/json" );
if(!defined('gmap_key')) define('gmap_key', "AIzaSyBiszx96KFMqnD9OcN-ijDmTGYLqvsvhXA" );
// Geo Plugins AHpOoo9SzNpm6HglASFo9cZ-GgP5E5f5WQ
if(!defined('geoplugin')) define('geoplugin', "http://www.geoplugin.net/json.gp?ip=" );
// Maxmind Api
if(!defined('maxmind')) define('maxmind', "https://blackbox.ipinfo.app/lookup/" );

if (isset($_GET['ip']) && !empty($_GET['ip'])) {
    $dataku     = curl(geoplugin .$_GET['ip']);
    $out        = json_decode($dataku,true);
    $cdetail    = curl(gmap_address ."?key=". gmap_key ."&address=".$out['geoplugin_latitude']."+".$out['geoplugin_longitude']."&result_type=street_address&language=en");
    $lala       = json_decode($cdetail,true);
    echo $lala['results'][0]['formatted_address'];
    unlink('cook.tmp');
}

else if (isset($_GET['api']) && !empty($_GET['api'])) {
    $dataku1    = curl(geoplugin .$_GET['api']);
    $out        = json_decode($dataku1,true);
    
    $dataku2    = curl(maxmind .$_GET['api']);
    $maxmind    = ($dataku2 == 'Y') ? $resp = "Proxy Detected" : "No Proxy Detected";

    $dataku3    = curl(gmap_address ."?key=". gmap_key ."&address=".$out['geoplugin_latitude']."+".$out['geoplugin_longitude']."&result_type=street_address&language=en");
    $lala       = json_decode($dataku3,true);
    $validate   = ($lala !== "" && $maxmind == "No Proxy Detected") ? "<font color=\\\"green\\\">Valid Mindmax</font>" : "<font color=\\\"red\\\">No Valid Mindmax</font>";
    
    header('Content-Type: application/json');
    echo '{
        "ip":"'.$out['geoplugin_request'].'",
        "country_id":"'.$out['geoplugin_countryCode'].'",
        "country":"'.$out['geoplugin_countryName'].'",
        "city_geo":"'.$out['geoplugin_city'].'",
        "region_geo":"'.$out['geoplugin_region'].'",
        "continent":"'.$out['geoplugin_continentName'].'",
        "timezone":"'.str_replace('\\','',$out['geoplugin_timezone']).'",
        "currency":"'.$out['geoplugin_currencyCode'].'/'.$out['geoplugin_currencySymbol'].'",
        "exchange":"'.$out['geoplugin_currencyConverter'].'",
        "lati":"'.$out['geoplugin_latitude'].'",
        "long":"'.$out['geoplugin_longitude'].'",
        "radius":"'.$out['geoplugin_locationAccuracyRadius'].'",
        "country":"'.$out['geoplugin_countryName'].'",
        "address":"'.$lala['results'][0]['formatted_address'].'",
        "proxy":"'.$maxmind.'",
        "valid_mindmax":"'.$validate.'"
    }';

    unlink('cook.tmp');
}

/*
OUTPUT DATA TESTER
{
  "geoplugin_request":"192.210.111.111",
  "geoplugin_status":200,
  "geoplugin_delay":"1ms",
  "geoplugin_credit":"Some of the returned data includes GeoLite data created by MaxMind, available from <a href='http:\/\/www.maxmind.com'>http:\/\/www.maxmind.com<\/a>.",
  "geoplugin_city":"Buffalo",
  "geoplugin_region":"New York",
  "geoplugin_regionCode":"NY",
  "geoplugin_regionName":"New York",
  "geoplugin_areaCode":"",
  "geoplugin_dmaCode":"514",
  "geoplugin_countryCode":"US",
  "geoplugin_countryName":"United States",
  "geoplugin_inEU":0,
  "geoplugin_euVATrate":false,
  "geoplugin_continentCode":"NA",
  "geoplugin_continentName":"North America",
  "geoplugin_latitude":"42.8864",
  "geoplugin_longitude":"-78.8781",
  "geoplugin_locationAccuracyRadius":"1000",
  "geoplugin_timezone":"America\/New_York",
  "geoplugin_currencyCode":"USD",
  "geoplugin_currencySymbol":"$",
  "geoplugin_currencySymbol_UTF8":"$",
  "geoplugin_currencyConverter":1
}*/