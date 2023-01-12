class Solution {

    /**
     * @param String $text
     * @return String
     */
    function entityParser($text) {
        $replace = [
            "/&quot;/" => "\"",
            "/&apos;/" => "'",
            "/&gt;/" => ">",
            "/&lt;/" => "<",
            "/&frasl;/" => "/"
        ];
        foreach($replace as $k => $v){
            $text = preg_replace($k,$v,$text);
        }
        $text = preg_replace("/&amp;/","&",$text);
        return $text;
    }
}