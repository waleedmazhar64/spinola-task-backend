<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getResults(Request $request){
        
        $number_of_balls = $request->get('number_of_balls');
        $balls_drawn = (int) $request->get('balls_drawn');

        $result = [];
        for($i = $balls_drawn; $i > 0; $i--){
            array_push($result, array('number_matched' => $i, 'odds' => $this->formulaCalcuation($number_of_balls, $balls_drawn, $i)));
        }
        
        $response = [
            'success' => true,
            'data'    => (array) $result
        ];

        return response()->json($response, 200);
    }

    public function formulaCalcuation($number_of_balls, $balls_drawn, $number_matched){
        return $this->getCNR($number_of_balls, $balls_drawn)/($this->getCNR($balls_drawn, $number_matched) * $this->getCNR($number_of_balls - $balls_drawn, $balls_drawn - $number_matched));
    }

    public function getCNR($first_number, $second_number){
       return factorial($first_number) / (factorial($second_number) * factorial($first_number - $second_number));
    }

}
