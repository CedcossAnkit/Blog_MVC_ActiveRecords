<?php

use Phalcon\Mvc\Controller;

class WeatherController extends Controller
{
    public function indexAction()
    {
    }

    public function testAction()
    {
        // die("hello");
    }
    public function homeAction()
    {
        if ($this->request->getPost()) {
            $location = $this->request->getPost("location");
            $url = "https://api.weatherapi.com/v1/search.json?key=90ed7f3860524a5d8c172601220604&q=$location";

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);

            $ar = json_decode($response);
            // print_r($ar);
            // die;
            $this->view->data = $ar;
        }
    }

    public function singlepageAction()
    {
        $location = $this->request->get("place");
        $loc = urldecode($location);
        // die($loc);

        $url = "https://api.weatherapi.com/v1/current.json?key=90ed7f3860524a5d8c172601220604&q=$loc";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $ar = json_decode($response);
        // print_r($ar);
        // die;

        $this->view->data = $ar;
    }

    public function forcastAction()
    {
        $location = $this->request->get("place");
        $loc = urldecode($location);
        // die($loc);

        $url = "https://api.weatherapi.com/v1/forecast.json?key=90ed7f3860524a5d8c172601220604&q=$loc";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $ar = json_decode($response);
        // echo "<pre>";
        // print_r($ar);
        // die;

        $this->view->data = $ar;
    }

    public function timezoneAction()
    {
        $location = $this->request->get("place");
        $loc = urldecode($location);
        // die($loc);

        $url = "https://api.weatherapi.com/v1/timezone.json?key=90ed7f3860524a5d8c172601220604&q=$loc";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $ar = json_decode($response);
        // echo "<pre>";
        // print_r($ar);
        // die;

        $this->view->data = $ar;
    }

    public function airqualityAction()
    {
        $location = $this->request->get("place");
        $loc = urldecode($location);
        // die($loc);

        $url = "https://api.weatherapi.com/v1/current.json?key=90ed7f3860524a5d8c172601220604&q=$loc&aqi=yes";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $ar = json_decode($response);
        // echo "<pre>";
        // print_r($ar);
        // die;

        $this->view->data = $ar;
    }

    public function astroAction()
    {
        $location = $this->request->get("place");
        $loc = urldecode($location);
        // die($loc);

        $url = "https://api.weatherapi.com/v1/forecast.json?key=90ed7f3860524a5d8c172601220604&q=$loc&aqi=yes";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $ar = json_decode($response);
        // echo "<pre>";
        // print_r($ar);
        // die;

        $this->view->data = $ar;
    }

    public function WeatherAlertsAction()
    {
        $location = $this->request->get("place");
        $loc = urldecode($location);
        // die($loc);

        $url = "https://api.weatherapi.com/v1/forecast.json?key=90ed7f3860524a5d8c172601220604&q=$loc&alerts=yes";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $ar = json_decode($response);
        // echo "<pre>";
        // print_r($ar);
        // die;

        $this->view->data = $ar;
    }

    public function sportsAction()
    {
        $location = $this->request->get("place");
        $loc = urldecode($location);
        // die($loc);

        $url = "https://api.weatherapi.com/v1/sports.json?key=90ed7f3860524a5d8c172601220604&q=$loc";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $ar = json_decode($response);
        // echo "<pre>";
        // print_r($ar);
        // die;

        $this->view->data = $ar;
    }

    public function historyAction()
    {
    }
}
