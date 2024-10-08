<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Exception;
use App\dao\ServiceEquipe;

class EquipeController
{
    public function listerEquipe() {
        $unEquipeService = new ServiceEquipe();
        try {
            $mesEquipe = $unEquipeService ->getListeEquipe();
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        return view('vues/formEquipeLister', compact('mesEquipe'));
    }
    public function postAjouterEquipe(Request $request)
    {
        try {
            $id = $request->input('id');
            $CodeEq = $request->input('CodeEq');
            $DesiEq = $request->input('DesiEq');
            $message = "";

            $serviceEquipe = new ServiceEquipe();
            $serviceEquipe->ajoutEquipe($id, $CodeEq, $DesiEq, $message);

            return view('home');
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }

    public function modifier($id)
    {
        $serviceEquipe = new ServiceEquipe();
        try {
            $uneEquipe = $serviceEquipe->getEquipe($id);
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        return view('vues/formEquipeModifier', compact('uneEquipe'));
    }
    public function postmodifier(Request $request, $id)
    {
        try {
            $id = $request->input('id');
            $CodeEq = $request->input('CodeEq');
            $DesiEq = $request->input('DesiEq');
            $message = $request->input('le-message');

            $serviceEquipe = new ServiceEquipe();
            $serviceEquipe->modificationEquipe($id, $CodeEq, $DesiEq, $message);

            return view('home');
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }

}
