<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 12:09
 */

namespace laklak\controller;


class AdminController extends Controller
{

    public function index()
    {
        return $this->twig->render('index.html.twig');
    }


    public function adminAPropos()
    {
        return $this->twig->render('adminapropos.html.twig');
    }


    public function listeartistes()
    {
        return $this->twig->render('listeartistes.html.twig');
    }

    public function listEvent()
    {
        return $this->twig->render('listEvent.html.twig');
    }

    public function addArtist()
    {
        // si le form est submit, je récupère mon $_POST
        // je fais mon traitement
        // $artist = new Artist()
        // $artist -> setNom($_POST['nom');

        // $artist -> insert();
        // redirect vers la page qui liste les artist $this->listArtist()

        // sinon le form est pas submit, j'affiche le form
        return $this->twig->render('ajoutartistes.html.twig');
    }

    public function updateArtist($id)
    {
        // si le form est submit
        // $artist = findOne($id);
        // comme pour le addArtist
        // $artist->update();
        //  redirect

        // sinon j'affiche le form
       // return $this->twig->render('ajoutartistes.html.twig', array('artist'=>$artist));
    }


    public function listeartistes()
    {
        return $this->twig->render('listeartistes.html.twig');
    }

    public function listEvent()
    {
        return $this->twig->render('listEvent.html.twig');
    }
    public function deconnexion()
    {
        session_destroy();
        return $this->twig->render('deconnexion.html.twig');
    }

    public function ajoutartistes()
    {
        return $this->twig->render('ajoutartistes.html.twig');
    }



}