<?php

//Записи погоды. дата, комент, температура
class WeatherEntry{

    private $date;
    private $comment = "";
    private $temp = 0;
    private $isRainy = false;

    public function __construct($date, string $comment, int $temp)
    {
        $this->$date = $date;
        $this->$comment = $comment;
        $this->$temp = $temp;
    }

//Метод с именем isCold() нужен, чтобы узнать было ли холодно 
//в тот день, основываясь на показаниях температуры в градусах.
    public function isCold(){
        return $this->temp < 0;
    }
//Метод setRainStatus() устанавливает логическое значение, 
//которое показывает статус осадков в день наблюдения.
    public function setRainStatus($rain_status){
        $this->isRainy = $rain_status;
    }
//Метод getDayDescription() формирует текстовое описание
// погоды на заданную дату.
    public function getDayDescription(){

        $dt = strtotime($this->date);
        $delta = time() - $dt;
        $days = ceil($delta / 86400);

        $res = "Это было $days дней назад. В тот день было ";

        if($this->isCold()){
            $res .= "холодно. ";
        }
        else{
            $res .= "тепло. ";
        }
        if($this->isRainy){
            $res .= "дождливо. ";
        }
        else{
            $res .= "ясное небо. ";
        }

        return $res;

    }
}

?>