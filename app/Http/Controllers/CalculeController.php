<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculeController extends Controller
{
    public static function calcule(){
        $annees = $_POST['annees'];
        $CA = [];
        $CS = [];
        for($i=1;$i<=$annees;$i++)
        {
            $CA[$i] = $_POST['CA'.$i];
            $CS[$i] = $_POST['CS'.$i];
        }
        $IS = $_POST['IS'];
        $TA = $_POST['TA'];
        $inv = $_POST['Inv'];

        $taux = [5=>[1=>0.9524,0.9070,0.8638,0.8227,0.7835],
            6=>[1=>0.9434,0.8900,0.8396,0.8396,0.7921],
            7=>[1=>0.9346,0.8734,0.8163,0.7628],
            8=>[1=>0.9259,0.8573,0.7938,0.7350],
            9=>[1=>0.9174,0.8417,0.7722,0.7084]];
        $dot = $inv/$annees;
        $IS = $IS/100;
        //calcule annee i
        $FNTActu=[];
        $FNTStore=[];
        for($i=1;$i<=$annees;$i++){
            $resAvImp = $CA[$i] - ($CS[$i] + $dot);
            $impot = $resAvImp * $IS;
            $aprImpot = $resAvImp - $impot;
            $FNT = $dot + $aprImpot;
            $FNTActu[] = $FNT * $taux[$TA][$i];
            $FNTStore[] = $FNT;
        }
        $VAN = array_sum($FNTActu) - $inv;
        if($VAN>0){
            $rentable = true;
        }
        else{
            $rentable = false;
        }
        return view('resultat',['rentable'=>$rentable,'FNT'=>$FNTStore,'FNTActu'=>$FNTActu,'VAN'=>$VAN]);


    }
    public static function displayForm(){
        $annees = $_POST['annee'];
        return view('welcome',['annees'=>$annees]);
    }
}
