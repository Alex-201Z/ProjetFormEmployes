<?php

namespace App\dao;

use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;
class ServiceEquipe
{
    public function getListeEquipe()
    {
        try {
            $mesEquipe = DB::table('equipe')
                ->select()
                ->get();
            return $mesEquipe;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }}

        public function modificationEquipe($id, $CodeEq, $DesiEq, $message)
        {
            try {
                DB::table('equipe')
                    ->where('id', $id)
                    ->update([
                        'id' => $id,
                        'CodeEq' => $CodeEq,
                        'DesiEq' => $DesiEq,
                        'message' => $message
                    ]);
            } catch (\Illuminate\Database\QueryException $e) {
                throw new MonException($e->getMessage(), 5);
            }
        }}

