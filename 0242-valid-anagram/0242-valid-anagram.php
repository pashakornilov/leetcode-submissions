class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
    if (mb_strlen($s, 'UTF-8') !== mb_strlen($t, 'UTF-8')) return false;
    
    $arr_s = str_split($s);
    $arr_t = str_split($t);

    $count_s = array_count_values($arr_s);
    $count_t = array_count_values($arr_t);

    return $count_s == $count_t;   
    }
}