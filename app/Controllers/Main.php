<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Article;
use App\Models\League;
use App\Models\LeagueSeason;
use App\Models\Season;

class Main extends BaseController
{
    var $article;
    var $season;
    var $leagueSeason;
    var $league;

    public function __construct() {
        $this->article = new Article();
        $this->season = new Season();
        $this->leagueSeason = new LeagueSeason();
        $this->league = new League();
    }

    public function index()
    {
        $data["article"] = $this->article->where("published", 1)->where("top", 1)->orderBy("date", "desc")->findAll(5);
        echo view("index", $data);
    }

    public function sezony() {
        $data["season"] = $this->season->orderBy("start", "asc")->findAll();
        echo view("sezony", $data);
    }

    public function admin() {
        echo view("admin");
    }

    public function article($link) {
        $clanek["article"] = $this->article->find($link);
        echo view("article", $clanek);
    }

    public function desetileti($prvniRok) {
        $data["season"] = $this->season->where("start >=", $prvniRok)->where("start <", $prvniRok+10)->orderBy("start", "asc")->findAll();
        echo view("sezonyJednotlive", $data);
    }

    public function jednotlivaSezona($id) {
        $data["leagueSeason"] = $this->leagueSeason->where("id_season", $id)->join("league", "league_season.id_league = league.id", "inner")->findAll(); //opravit ten join :CC
        echo view("jednotlivaSezona", $data);
    }
}
