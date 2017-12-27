<?php
class Map {
    public static function  getLngLat($address) {
        if(!$address) {
            return '';
        }

        $data = [
            'address' => $address,
            'ak' => config('map.ak'),
            'output' => 'json',
        ];
        $url = config('map.baidu_map_url').config('map.geocoder').'?'.http_build_query($data);
        $result = doCurl($url);
        if($result) {
            return json_decode($result, true);
        }else {
            return [];
        }
    }
    public static function staticimage($center) {
        if(!$center) {
            return '';
        }
        $data = [
            'ak' => config('map.ak'),
            'width' => config('map.width'),
            'height' => config('map.height'),
            'center' => $center,
            'markers' => $center,
        ];
        $url = config('map.baidu_map_url').config('map.staticimage').'?'.http_build_query($data);
        $result = doCurl($url);
        return $result;
    }

}
