class Solution {

    /**
     * @param String[] $words
     * @param String $order
     * @return Boolean
     */
    function isAlienSorted($words, $order) {
        $alpha  = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $alien_lang = str_split($order);
        $sort_dict = array_combine($alpha,$alien_lang);
        foreach($words as $word){
            $len = strlen($word);
            $w = str_split($word);
            $loop = 0;
            $translation = [];
            while($len > $loop){
                $translation[$loop] = array_keys($sort_dict,$w[$loop]);
                $english_word .= $translation[$loop][0];
                $loop++;
            }
            $new_sort[] = $english_word;
            unset($translation);
            unset($english_word);
        }
        $original = $new_sort;
        sort($new_sort);
        return $original === $new_sort ?: false;
    }
}