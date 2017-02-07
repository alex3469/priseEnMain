<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



/**
 * Ce controller s'occupe de retourner les vues de l'application
 *
 * @author alexandre-brunet
 */
class ViewController extends Controller {
    /**
     * La route correspond à l'URI passée dans la requete HTTP
     * @Route("/yellow", name="yellow")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getYellow(Request $r){
        //
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/yellow.html.twig");
        } else {
                    $response=new Response("yellow");
        return $response;
        }

    }
    /**
     * @Route("/red", name="red")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getRed(Request $r){
       if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/red.html.twig");
        } else {
                    $response=new Response("Red");
        return $response;
        }

    }
    /**
     * la methode getBlue prend en parametre $r qui est de type Request
     * @Route("/blue", name="blue")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getBlue(Request $r){
        //getMethod retourne le type de la methode
        //Si $r est de type GET
        if($r->getMethod() == "GET"){
            //Alors on retourne une page web
            return $this->render("default/couleurs/blue.html.twig");
        } else {
                    $response=new Response("Blue");
        return $response;
        }

    }
    /**
     * @Route("/green", name="green")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getGreen(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/green.html.twig");
        } else {
                    $response=new Response("green");
        return $response;
        }

    }
}
