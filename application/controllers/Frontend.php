<?php
/*
* Controleur Frontend
*/
class Frontend extends CI_Controller {

    public function index(){

        // retourne les images pour le slider
        $data['sliders'] = $this->movie_model->getMoviesForSlider();

        //retourne les 4 meilleurs acteurs
        $data['actors'] = $this->acteur_model->bestActors();

        // Affiche les 4 commentaires actifs les mieux notés
        $data['coms'] = $this->comment_model->combestnotes();

        // Affiche 12 séances filtrées par 4 catégories définies
        $data['seances'] = $this->seance_model->frontSeances();

        // Affiche la Vidéo du film déjà sortis cette année là et le mieux noté par la presse
        $data['video'] = $this->movie_model->getvideo();

        // retourne le nombre total de films
        $data['nbfilms'] = $this->movie_model->nbFilms();

        // retourne le nombre de films diffusés depuis moins de 3 mois
        $data['nbfilmsdiff'] = $this->movie_model->nbFilmsDiff();

        // retourne le nombre de films ayant des commentaires actifs
        $data['nbfilmscomac'] = $this->movie_model->nbFilmsComAc();

        // retourne le nombre de films mis en favoris
        $data['nbfilmsfav'] = $this->movie_model->nbFilmsFav();

        //retourne les 4 catégories ayant le plus de films
        $data['cats'] = $this->categorie_model->categoriesFront();

        //retourne les 2 films ayant le plus de commentaires, et mis en avant
        $data['filmscom'] = $this->movie_model->filmsComFront();

        // retourne le nombre de films déjà sortis
        $data['filmsout'] = $this->movie_model->filmsOut();

        // retourne le nombre d'administrateurs actifs
        $data['admins'] = $this->user_model->adminActifs();

        // retourne la somme de la durée de tous les films
        $data['filmsduree'] = $this->movie_model->filmsDuree();

        // retourne le nombre de favoris
        $data['nbfav'] = $this->user_model->nbFav();

        // retourne les 3 meilleurs réalisateurs
        $data['realisateurs'] = $this->realisateur_model->bestRealisateursFront();

        //retourne les 3 derniers tweets d'Allocine
        $tweets = $this->twitter->getTweets('allocine', 3);
        $data['tweets'] = $tweets;

        // retourne les 3 derniers films mis en vente
        $data['filmsshop'] = $this->movie_model->filmsShop();

        $this->load->view('Frontend/index', $data);
    }




}