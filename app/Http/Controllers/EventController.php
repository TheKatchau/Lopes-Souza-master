<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    public function index()
    {
        $destaques = DB::select('select * from imovels where destaque = ?', [1]);
        return view('site.user.guestdash',['destaque'=>$destaques]);
    }

    public function filt()
    {
        //Declaração
        $select=request('select');
        $select1=request('select1');
        $casa = DB::select('select * from imovels where tipo = ?', ['Casa']);
        $apartamento = DB::select('select * from imovels where tipo = ?', ['Apartamento']);
        $terreno = DB::select('select * from imovels where tipo = ?', ['Terreno']);
        $galpao = DB::select('select * from imovels where tipo = ?', ['Galpão']);
        $aluguel=DB::select('select * from imovels where venda = ?', ['Aluguel']);
        $venda=DB::select('select * from imovels where venda = ?', ['Venda']);
        $imovel = Imovel::all();
        $search = request('search');
        //Busca
        if($search){
            $imovel=Imovel::orwhere('rua' ,'LIKE','%'.$search.'%')
            ->orwhere('bairro' ,'LIKE','%'.$search.'%')
            ->orwhere('venda' ,'LIKE','%'.$search.'%')
            ->orwhere('tipo' ,'LIKE','%'.$search.'%')
            ->orwhere('cidade' ,'LIKE','%'.$search.'%')->get();
        }
        //FimBusca

        if($select1==1){
            $imovel=DB::select('select * from imovels where venda = ?',['Aluguel']);
        }

        //Venda
        if($select1==2){
            $imovel=DB::select('select * from imovels where venda = ?',['Venda']);
        }

        //Casa
        if($select==1){
            $imovel=$casa;

            //Aluguel
            if($select1==1){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Casa','Aluguel']);
            }

            //Venda
            if($select1==2){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Casa','Venda']);
            }
        }

        //Terreno
        if($select==2){
            $imovel=$terreno;

            //Aluguel
            if($select1==1){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Terreno','Aluguel']);
            }

            //Venda
            if($select1==2){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Terreno','Venda']);
            }
        }

        //Apartamento
        if($select==3){
            $imovel=$apartamento;

            //Aluguel
            if($select1==1){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Apartamento','Aluguel']);
            }
            
            //Venda
            if($select1==2){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Apartamento','Venda']);
            }
        }

        //Galpão
        if($select==4){
            $imovel=$galpao;

            //Aluguel
            if($select1==1){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Galpão','Aluguel']);
            }

            //Venda
            if($select1==2){
                $imovel=DB::select('select * from imovels where tipo = ? and venda = ?',['Galpão','Venda']);
            }
        }

            
        //return compact('imovel');
        return view('site.user.vitrine', compact('select','select1','imovel','apartamento','casa','terreno','galpao','aluguel','venda'));
    }

    public function quem()
    {
        return view('site.user.quemsomos');
    }

    public function show($id)
    {
        $imovel= Imovel::findOrFail($id);
        return view('site.user.detalhes',['imovel'=>$imovel]);
    }

}