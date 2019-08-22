<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 19.08.2019
 * Time: 18:09
 */

declare(strict_types=1);

class Preview
{

    /**
     * @var PreviewSetting $settings
     */
    private $settings;


    public function __construct(PreviewSetting $settings)
    {
        $this->settings = $settings;
    }


    public function getPreview(array $text): array
    {
        $resultPreview = [];

        foreach ($text as $value) {

            $preview = $this->cutTextByLength($value);

            $array = [];
            foreach ($preview as $item) {
                $array[] = preg_replace('/([?!:^~|@№$–=+*&%.,;\[\]<>()_—«»#\/]+)/u', '', mb_strtolower($item)); // убираем лишние символы
            }

            $result = $this->cutTextByStopWord($array, $preview);

            $resultPreview[] = $result;

        }

        return $resultPreview;

    }

    private function cutTextByStopWord(array $array, array $preview): string
    {
        $result = [];
        if (!empty($this->settings->getStopWords())) {
            foreach ($this->settings->getStopWords() as $word) {
                $result[] = array_search(mb_strtolower($word), $array); // ищем стоп слово
            }

            foreach ($result as $key2 => $item) {
                if (is_bool($item)) {
                    unset($result[$key2]);
                }
            }
        }

        if (!empty($result)) {
            $min = min($result);
            $result = array_splice($preview, 0, $min + 1); // обезаем до стоп слова
            $result = implode(" ", $result);
        } else {
            $result = implode(" ", $preview);
        }

        return $result;
    }

    private function cutTextByLength(string $text): array
    {
        $words = explode(" ", $text); // переводим строку в массив

        if (!empty($this->settings->getLength())) {
            $preview = array_slice($words, 0, $this->settings->getLength()); // обрезаем массив по кол-ву слов
        } else {
            $preview = $words;
        }

        return $preview;
    }


}