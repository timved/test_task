<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 19.08.2019
 * Time: 18:09
 */


class Preview
{

    protected $length = 5;

    protected $stopWord = [
        'автомобиль'
    ];

    protected $settings;


    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
        $this->length = $this->settings->getLength();
        $this->stopWord = $this->settings->getStopWords();

    }



    public function getPreview(array $text)
    {

        foreach ($text as  $value) {
            $words = explode(" ", $value); // переводим строку в массив
            $preview = array_slice($words, 0, $this->length); // обрезаем массив по кол-ву слов
            foreach ($preview as $item) {
               $array[] = preg_replace('/([?!:^~|@№$–=+*&%.,;\[\]<>()_—«»#\/]+)/u', '', mb_strtolower($item));
            }



            foreach ($this->stopWord as $word) {
              $result[] = array_search(mb_strtolower($word), $array); // ищем стоп слово
            }

            foreach ($result as $key2 => $item){
                if (is_bool($item)){
                    unset($result[$key2]);
                }
            }

            if (!empty($result)){
                $min = min($result);
                $result =  array_splice($preview, 0,$min); // обезаем до стоп слова
                $result = implode(" ", $result);
            }else{
                $result = implode(" ", $preview);
            }

            return $result;

        }

    }




}