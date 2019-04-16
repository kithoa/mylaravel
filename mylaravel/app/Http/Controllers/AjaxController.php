<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CauHoi;

class AjaxController extends Controller
{
    public function getCauHoi($idMonHoc)
    {
        $cauhoi = CauHoi::where('idMH',$idMonHoc)->get();
        foreach ($cauhoi as $ch){
            echo    "<tr class='odd gradeX'>
                        <td>" . $ch->id . "</td>
                        <td>" . $ch->NoiDungCH . "</td>
                        <td>" . $ch->ThangDiem . "</td>
                        <td>" . $ch->giangvien->TenGV . "</td>
                        <td align='center'><input type='checkbox' name='ch[]' value='" . $ch->id . "'></td>
                    </tr>";
        }
    }
}
