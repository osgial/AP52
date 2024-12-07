<?php
    $meteorologicalData = [
        [
            'station' => 'Catarroja',
            'temperature' => 15,
            'humidity' => 85,
            'atmosphericPressure' => 1024
        ],
        [
            'station' => 'Alzira',
            'temperature' => 35,
            'humidity' => 75,
            'atmosphericPressure' => 1000
        ],
        [
            'station' => 'Almussafes',
            'temperature' => 17,
            'humidity' => 95,
            'atmosphericPressure' => 950
        ],
        [
            'station' => 'Carlet',
            'temperature' => 31,
            'humidity' => 55,
            'atmosphericPressure' => 850
        ]
    ];

    function fixPressure (array &$data, int $brokenStation) {
        foreach ($data as $key => $value) {
            if ($brokenStation === $key) {
                if ($value["temperature"] < 30) {
                    $data[$key]["atmosphericPressure"] -= $value["atmosphericPressure"] * 0.15;
                } else {
                    $data[$key]["atmosphericPressure"] -= $value["atmosphericPressure"] * 0.25;
                }
            }
        }
    }

    fixPressure($meteorologicalData, 1);

    function show (array $information) {
        var_dump ($information);
    }

    show($meteorologicalData);

    function avarageTemperature($stations) {
        $count = count($stations);
        for ($i=0; $i < $count ; $i++) { 
            $numbers[] = $stations[$i]["temperature"];
        }
        $sum = array_sum($numbers);
        $avarage = $sum / $count;
        echo "La media aritmetica de las temperaturas es de $avarage";
    }

    avarageTemperature($meteorologicalData);
?>