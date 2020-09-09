<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConversionController extends AbstractController
{

    /**
     * @Route("/celcius/{celcius}/{via}", name="celcius")
     */
    public function celcius($celcius = 0, $via = "c")
    {
        $f = 0;
        switch ($via){
            case "f":
                $f = $celcius * 9/5 + 32;
                break;
            case "c":
                $f = ($celcius - 32)*5/9;
                break;
        }
        return new Response($f);
    }

    /**
     * @Route("/metre/{metre}/{unite}/{via}", name="metre")
     */
    public function metre($metre = 0, $unite = "m", $via = "p")
    {
        $p = 0;
        switch ($unite){
            case "mm":
                $metre = $metre / 1000;
                break;
            case "km":
                $metre = $metre * 1000;
                break;
        }
        switch ($via){
            case "p":
                $p = 3.2809 * $metre;
                break;
            case "m":
                $p = 3.2809 / $metre;
                break;
        }
        return new Response($p);
    }

    /**
     * @Route("/kilo/{kilo}/{via}", name="kilo")
     */
    public function kilo($kilo = 0, $via = "l")
    {
        $l = 0;
        switch ($via){
            case "l":
                $l = $kilo * 2.2046;
                break;
            case "k":
                $l = $kilo / 2.2046;
                break;
        }
        return new Response($l);
    }

    /**
     * @Route("/euro/{euro}/{via}", name="kilo")
     */
    public function euro($euro = 0, $via = "e")
    {
        $e = 0;
        switch ($via){
            case "d":
                $e = $euro * 1.18;
                break;
            case "e":
                $e = $euro * 0.85;
                break;
        }
        return new Response($e);
    }
}
